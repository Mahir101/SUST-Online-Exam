<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);
        $Name = $req->input('name');
        $Username = $req->input('username');
        $Password = $req->input('password');
        $Email = $req->input('email');

        DB::table("users")->insert(["name"=>$Name,"username"=>$Username,"password"=>$Password,"email"=>$Email]
        );

    //	DB::table('users')->insert($data);
    	echo "user inserted";
    }
    function insert1(Request $req1)
    {
    	$this->validate($req1, [
            'id1' => 'required',
            'id2' => 'required',
            'id3' => 'required',
            'id4' => 'required',
            'id5' => 'required'
             
        ]);
    	$Name = $req1->input('id1');
    	$Registration_no = $req1->input('id2');
    	$Department = $req1->input('id3');
    	$Session = $req1->input('id4');
    	$Semester = $req1->input('id5');

 
    	DB::table('student')->insert(["name"=>$Name,"registration_no"=>$Registration_no,"department"=>$Department,"session"=>$Session,"semester"=>$Semester]

        );
    	echo "student inserted";
    }

    function insert2(Request $req2)
    {
        $this->validate($req2, [
            'id1' => 'required',
            'id2' => 'required',
            'id3' => 'required'
        ]);

    	$Name = $req2->input('id1');
    	$Department = $req2->input('id2');
    	$Designation = $req2->input('id3');
   
    	DB::table('teacher')->insert(["name"=>$Name,"department"=>$Department,"designation"=>$Designation]
        );

    	echo "teacher inserted";
    }



}
