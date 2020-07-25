<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class NewUserController extends Controller
{



    

    public function insertform() {
        return view('newuser');
     }

   
     public function taxdetailsform() {
        return view('entertax');
     }

     public function addmunicipalityform() {
        return view('newmunicipality');
     }






     public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $profilecode = $request->input('profilecode');


        $data=array('name'=>$name,"email"=>$email,"username"=>$username,"password"=>$password,"profilecode"=>$profilecode);
        DB::table('newusers')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "./insert">Click Here</a> to go back.';
        }



        public function inserttax(Request $request){
         $code = $request->input('taxcode');
         $scode = $request->input('taxcode');
         
         $name = $request->input('taxname');
         $description = $request->input('taxdiscription');
        
 
 
         $data=array('code'=>$code,'Subcode'=>$scode,"taxname"=>$name,"taxdescreption"=>$description);
         DB::table('taxes')->insert($data);
         echo "Record inserted successfully.<br/>";
         echo '<a href = "./entertax">Click Here</a> to go back.';
         }
 

         public function insertmunci(Request $request){
            $code = $request->input('mcode');
            $name = $request->input('mname');
            $sname = $request->input('sname');
            $adname = $request->input('adname');
            $ofph = $request->input('ofph');
            $ofcl = $request->input('ofcl');
            $ofemail = $request->input('email');
            $semail = $request->input('semail');
    
    
            $data=array('Code'=>$code,'name'=>$name,"Short_Name"=>$sname,"Admin_Name"=>$adname,'Off_Phone'=>$ofph,'Officer_cell'=>$ofcl,"Officer_email"=>$ofemail,"Section_email"=>$semail);
            DB::table('ladbodies')->insert($data);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "./addmunicipality">Click Here</a> to go back.';
            }

        // public function check(Request $request) {
            
            
        //     $username = $request->input('username');
        //     $password = $request->input('password');
        //     $users = DB::table('newuser')
        //             ->where('username',$username )
        //             ->Where('password', $password )
        //             ->get();

        //     if($users!=null)
        //     {
        //         return view('home');
        //     }
        //     else{

        //         return view('userlogin');
        //     }

            
        //  }



}
