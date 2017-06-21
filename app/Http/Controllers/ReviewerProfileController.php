<?php

namespace App\Http\Controllers;

use App\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Session;
use Purifier;
use Image;



class ReviewerProfileController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Member $member)
    {

    }

    public function edit($username)

    {

        $reviewer = Reviewer::where('username','=',$username)->first();
        return view ('admin.adminprofile', compact('reviewer'));

    }

    public function update(Request $request, $username)
    {

        $reviewer = Reviewer::where('username','=',$username)->first();

        $reviewer->first_name = $request->firstname;
        $reviewer->last_name = $request->lastname;
        $reviewer->email = $request->email;
        $reviewer->city = $request->city;
        $reviewer->region =$request->region;
        $reviewer->gender =$request->gender;
            $reviewer->contact=$request->contact;
            $reviewer->about=$request->bio;

        if(isset($request->password) && isset($request->retypepassword)){

            if ($request->password == $request->retypepassword ){

                $reviewer->password = bcrypt($request->retypepassword);
            }


        }



        if ($request->hasFile('imgInp')) {


            $image      = $request->file('imgInp');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put($fileName, File::get($image));

            $url = Storage::url($fileName);


            $reviewer->avatar=$url;

        }



        if($reviewer->update()){

            $message="Profile Updated";

            return view ('admin.adminprofile', compact('reviewer','message'));

        }




    }

    public function destroy(Member $member)
    {

    }
}
