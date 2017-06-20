<?php

namespace App\Http\Controllers;

use App\MemberReviewer;
use App\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ReviewerController extends Controller
{

    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = Reviewer::where('email', '=', $email)->where('password', '=', $password)->get();
        if (count($admin)) {
            session(["admin" => $admin[0]]);
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
        $r = Reviewer::create($request->except('avatar'));
        $id = str_random(15);
        $file_name = $id . '.' . $request->file('avatar')->getClientOriginalExtension();
        Storage::disk('images')->put(
            $file_name,
            File::get($request->file('avatar'))
        );
        $r->avatar = $file_name;
        $r->save();
        return redirect('/');
    }

    public function get_followers()
    {
        $m = MemberReviewer::where('reviewer_id', session('admin')->id)->get();
//        dd($m);
        return view('admin.followers')->with('f', $m);
    }

    public function delete($id)
    {

        MemberReviewer::where('reviewer_id', session('admin')->id)
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
