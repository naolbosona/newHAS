<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use\App\Models\User;
use\App\Models\Housesell;
use\App\Models\Renthouse;
use App\Models\comment;
use App\Models\land;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
   {
       //data --- house for sale
       //datarent ---- house for rent
       //dataland --- land
    //    $data = Property::where([
    //        'isActive' => true,
    //        'isSell' => true,
    //        'ishouse' => true,
    //    ])->get();
    // KJHLIUHIJ
      $data=housesell::all();
      $datarent=Renthouse::all();
      $dataland=land::all();
       return view("home" ,compact("data","datarent","dataland"));
   }

   public function userhome()
   {
      $data=housesell::all();
      $datarent=Renthouse::all();
      $dataland=land::all();
       return view("userhome" ,compact("data","datarent","dataland"));
   }



   public function userhousesell()
   {
    $data=housesell::all();
       return view('userhousesell',compact("data"));
   }
   public function userrenthouse()
   {
       $datarent=renthouse::all();
       return view("userrenthouse",compact("datarent"));
   }


   
   public function userviewcomment()
   {
$data=comment::all();
return view("userviewcomment",compact("data"));
   }






   public function sellhousehome()
   {
       $data=housesell::all();
       return view ("sellhousehome",compact("data")) ;
      }


      public function search()
      {
          $data=housesell::all();
          $datarent=renthouse::all();
          $dataland=land::all();
          return view ("search",compact("data","datarent","dataland")) ;
         }


      public function renthousehome()
      {
          $datarent=renthouse::all();
          return view ("renthousehome",compact("datarent")) ;
         }


         public function rentlandhome()
         {
             $dataland=land::all();
             return view ("rentlandhome",compact("dataland")) ;
            }
         
      public function tobeouragent()
      {
          
          return view ("tobeouragent") ;
         }


      
      public function home()
   {
      $data=housesell::all();
      $datarent=Renthouse::all();
      $dataland=land::all();
       return view("home" ,compact("data","datarent","dataland"));
   }


      public function sellhousedetail(Request $request, Housesell $home )
      {
        return view ("sellhousedetail", ["data" => $home]) ;
         }



         public function renthousedetail(Request $request, Renthouse $home )
         {
           return view ("renthousedetail", ["datarent" => $home]) ;
            }



            public function landdetail(Request $request, Land $home )
      {
        return view ("landdetail", ["dataland" => $home]) ;
         }




   public function redirects()
   {  
    $datarent=Renthouse::all(); 
    $data=housesell::all();
    $dataland=land::all();
      $usertype=Auth::user()->usertype;
      if ($usertype=='1'){

          return view('admin.adminhome');

      }
      elseif($usertype=='2'){

        return view('agent.agenthome');

    }


      else{
          return view('home',compact("data","datarent","dataland"));
      }

}}
