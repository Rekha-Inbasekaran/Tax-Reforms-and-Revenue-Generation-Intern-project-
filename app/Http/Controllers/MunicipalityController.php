<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use DB;

class MunicipalityController extends Controller
{
  
    



    public function taxcollectionform() {
        return view('taxcollection');
     }

     public function taxdemandform() {
        return view('demand');
     }

     public function reportform() {
        return view('viewreport');
     }

   //   public function mreportform() {
   //    return view('monthlyreport');
   // }
   // public function areportform() {
   //    return view('annualreport');
   // }





     public function insertcoll(Request $request){
      $date = $request->input('date');
      $mcode = $request->input('mcode');
      $tcode = $request->input('tcode');
      $colamt = $request->input('colamt');
      $arramt = $request->input('arramt');

      $data=array('ladbodiescode'=>$mcode,"taxscode"=>$tcode,"collectiondate"=>$date,"collectionamount"=>$colamt,"arrearcollection"=>$arramt);
      DB::table('taxcollections')->insert($data);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "./taxcollection">Click Here</a> to go back.';
      }


      public function insertdmd(Request $request){
         $date = $request->input('date');
         $mcode = $request->input('mcode');
         $tcode = $request->input('tcode');
         $dmdamt = $request->input('dmdamt');
        
   
         $data=array('ladbodiescode'=>$mcode,"taxscode"=>$tcode,"demanddate"=>$date,"demandAmount"=>$dmdamt);
         DB::table('demands')->insert($data);
         echo "Record inserted successfully.<br/>";
         echo '<a href = "./demand">Click Here</a> to go back.';
         }


public function mreportform(Request $request)
    {
  
        $users = DB::select('select * from demands');
       return view('monthlyreport',['users'=>$users]);
         
         
   }


   public function areportform(Request $request)
   {
      $users = DB::select('select * from taxcollections');
      return view('annualreport',['users'=>$users]);
   }



}
