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

    	$Name = $req->input('name');
    	$Username = $req->input('username');
    	$Password = $req->input('password');
    	$Email = $req->input('email');


    	$data=array("name"=>$Name,"username"=>$Username,"password"=>$Password,"email"=>$Email);

    	DB::table('users')->insert($data);
    	echo "user+student/teacher inserted";
    }
    function insert1(Request $req1)
    {
    	
    	$Name = $req1->input('id1');
    	$Registration_no = $req1->input('id2');
    	$Department = $req1->input('id3');
    	$Session = $req1->input('id4');
    	$Semester = $req1->input('id5');

 
    	$data=array("name"=>$Name,"registration_no"=>$Registration_no,"department"=>$Department,"session"=>$Session,"semester"=>$Semester);

    	DB::table('student')->insert($data);
    	echo "student inserted";
    }

    function insert2(Request $req2)
    {

    	$Name = $req2->input('id1');
    	$Department = $req2->input('id2');
    	$Designation = $req2->input('id3');
   
    	$data=array("name"=>$Name,"department"=>$Department,"designation"=>$Designation);

    	DB::table('teacher')->insert($data);
    	echo "teacher inserted";
    }



}
