<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use Session;
use Purifier;
use Image;



class MemberProfileController extends Controller
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


        $member = Member::where('username','=',$username)->first();
        return view ('user.profile', compact('member'));

    }

    public function update(Request $request, $username)
    {

        $member = Member::where('username','=',$username)->first();

        $member->first_name = $request->firstname;
        $member->last_name = $request->lastname;
        $member->email = $request->email;
        $member->city = $request->city;
        $member->region =$request->region;
        $member->gender =$request->gender;
            $member->contact_number=$request->contact;
            $member->bio=$request->bio;

        if(isset($request->password) && isset($request->retypepassword)){

            if ($request->password == $request->retypepassword ){

                $member->password = bcrypt($request->retypepassword);
            }


        }



        if ($request->hasFile('imgInp')) {


            $image      = $request->file('imgInp');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put($fileName, File::get($image));

            $url = Storage::url($fileName);


            $member->avatar=$url;

        }



        if($member->update()){

            $message="Profile Updated";

            return view ('user.profile', compact('member','message'));

        }




    }

    public function destroy(Member $member)
    {

    }
}
