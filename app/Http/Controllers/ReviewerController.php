<?php

namespace App\Http\Controllers;

use App\MemberReviewer;
use App\Reviewer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ReviewerController extends Controller
{

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $admin = Reviewer::where('email', '=', $email)->first();



        $passwordveri= password_verify($password, $admin->password);

        if ($passwordveri) {

            Session::put('admin', $admin);

            return redirect('/dashboard');
        }

        session()->flash("error", "Incorrect !!");
        return redirect("/secretdoor");

    }

    public function logout()
    {

        session()->flush('admin');
        return redirect('/secretdoor');

    }

    public function store(Request $request)
    {

        $request->password = bcrypt($request->password);
        $r = new Reviewer();
        $r->username=$request->username;
        $r->password =$request->password;
        $r->email=$request->email;
        $r->first_name=$request->first_name;
        $r->last_name=$request->last_name;
        $r->date_of_birth=$request->date_of_birth;
        $r->city=$request->city;
        $r->region=$request->region;
        $r->contact=$request->contact;
        $r->gender=$request->gender;
        $r->rating = 0;
        $r->about=$request->about;
        $r->rank_id=1;
        $r->profile_url = $request->username;



        if($request->hasFile('avatar')){

            $id = str_random(15);

            $file_name = $id . '.' . $request->file('avatar')->getClientOriginalExtension();
            Storage::disk('images')->put(
                $file_name,
                File::get($request->file('avatar'))
            );

            $r->avatar = $file_name;

        }
        else{

            $r->avatar = 'images/avatar.png';

        }

        $r->save();

        return redirect('/');
    }

    public function get_followers()
    {
        $m = MemberReviewer::where('reviewer_id', '=',Session::get('admin')->id)->get();
        //dd($m);exit;
        return view('admin.followers')->with('f', $m);
    }

    public function delete($id)
    {

        MemberReviewer::where('reviewer_id', Session::get('admin')->id)
            ->where('member_id', $id)->delete();
        return redirect()->back();
    }

    public function update(Request $request, Reviewer $reviewer)
    {

    }

    public function destroy(Reviewer $reviewer)
    {

    }
}
