<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\housesell;
use App\Models\renthouse;
use App\Models\agent;
use App\Models\land;
use App\Models\comment;
class AdminController extends Controller
{

    public function users()
    {
  $data=user::all();
        return view('admin.users',compact("data"));
    }


    public function deleteuser($id)
    {
       $data=user::find($id);
       $data->delete();
        return redirect()->back();
    }



    public function deletehousesell($id)
    {
       $data=housesell::find($id);
       $data->delete();
        return redirect()->back();
    }

    public function deleterenthouse($id)
    {
       $datarent=renthouse::find($id);
       $datarent->delete();
        return redirect()->back();
    }


    
    public function updatehousesell($id)
    {
       $data=housesell::find($id);
       return view("admin.updatehousesell",compact("data"));
    }



    public function housesell()
    {
     $data=housesell::all();
        return view('admin.housesell',compact("data"));
    }
    public function renthouse()
    {
        $datarent=renthouse::all();
        return view("admin.renthouse",compact("datarent"));
    }
    public function agentrenthouse()
    {
        $datarent=renthouse::all();
        return view("agent.agentrenthouse",compact("datarent"));
    }

    public function agentsellhouse()
    {
        $data=housesell::all();
        return view("agent.agentsellhouse",compact("data"));
    }



    public function landlorddata()
    {
        $dataland=land::all();
        return view("admin.landlorddata",compact("dataland"));
    }




    public function updaterenthouse($id)
    {
       $datarent=renthouse::find($id);
       return view("admin.updaterenthouse",compact("datarent"));
    }

    
    public function uprenthouse(Request $request,$id)
    {
       $datarent=renthouse::find($id);
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('renthouseimage',$imagename);
       $datarent->image=$imagename;
       $datarent->title=$request->title;
       $datarent->price=$request->price;
       $datarent->location=$request->location;
       $datarent->state=$request->state;
       $datarent->housetype=$request->housetype;
       $datarent->no_of_rooms=$request->no_of_rooms;
       $datarent->no_of_bedroom=$request->no_of_bedroom;
       $datarent->no_of_kitchen=$request->no_of_kitchen;
       $datarent->phone_number=$request->phone_number;
       $datarent->commission_fee=$request->commission_fee;
       $datarent->size_of_house=$request->size_of_house;
       $datarent->description=$request->description;
       $datarent->save();
       return redirect()->back();
     
    }





    public function uphousesell( Request $request,$id)
    {
       $data=housesell::find($id);
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('housesellimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->location=$request->location;
       $data->state=$request->state;
       $data->housetype=$request->housetype;
       $data->no_of_rooms=$request->no_of_rooms;
       $data->no_of_bedroom=$request->no_of_bedroom;
       $data->no_of_kitchen=$request->no_of_kitchen;
       $data->phone_number=$request->phone_number;
       $data->commission_fee=$request->commission_fee;
       $data->size_of_house=$request->size_of_house;
       $data->description=$request->description;
       $data->save();
       return redirect()->back();
     
    }




    public function uploadsellhouse(Request  $request)
    {
       $data=new housesell();
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('housesellimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->location=$request->location;
       $data->state=$request->state;
       $data->housetype=$request->housetype;
       $data->no_of_rooms=$request->no_of_rooms;
       $data->no_of_bedroom=$request->no_of_bedroom;
       $data->no_of_kitchen=$request->no_of_kitchen;
       $data->phone_number=$request->phone_number;
       $data->commission_fee=$request->commission_fee;
       $data->size_of_house=$request->size_of_house;
       $data->description=$request->description;
       $data->save();
       return redirect()->back();
      
    }




    public function uploadrenthouse(Request  $request)
    {
       $datarent=new renthouse();
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('renthouseimage',$imagename);
       $datarent->image=$imagename;
       $datarent->title=$request->title;
       $datarent->price=$request->price;
       $datarent->location=$request->location;
       $datarent->state=$request->state;
       $datarent->housetype=$request->housetype;
       $datarent->no_of_rooms=$request->no_of_rooms;
       $datarent->no_of_bedroom=$request->no_of_bedroom;
       $datarent->no_of_kitchen=$request->no_of_kitchen;
       $datarent->phone_number=$request->phone_number;
       $datarent->commission_fee=$request->commission_fee;
       $datarent->size_of_house=$request->size_of_house;
       $datarent->description=$request->description;
       $datarent->save();
       return redirect()->back();
      
    }


    public function uploadland(Request  $request)
    {
       $data=new land();
       $image=$request->image;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('landimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->location=$request->location;
       $data->state=$request->state;
       $data->housetype=$request->housetype;
       $data->phone_number=$request->phone_number;
       $data->commission_fee=$request->commission_fee;
       $data->size_of_land=$request->size_of_land;
       $data->description=$request->description;
       $data->save();
       return redirect()->back();
      
    }



    public function uploadregister(Request  $request)
    {
       $data=new agent();
       $data->firstname=$request->firstname;
       $data->lastname=$request->lastname;
       $data->birthdate=$request->birthdate;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->address=$request->address;
       $data->state=$request->state;
       $data->bankaccount=$request->bankaccount;

       $cvimage=$request->cvimage;
       $imagename=time().'.'.$cvimage->getClientOriginalExtension();
       $request->cvimage->move('agentimage',$imagename);
       $data->cvimage=$imagename;
      

       $yourimage=$request->yourimage;
       $imagename=time().'.'.$yourimage->getClientOriginalExtension();
       $request->yourimage->move('agentimage',$imagename);
       $data->yourimage=$imagename;

       $idimage=$request->idimage;
       $imagename=time().'.'.$idimage->getClientOriginalExtension();
       $request->idimage->move('agentimage',$imagename);
       $data->idimage=$imagename;
       
       $data->save();
       return redirect()->back();
      
    }






    public function comment(Request  $request)
    {
       $data=new comment();
      
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->message=$request->message;
       
       $data->save();
       return redirect()->back();
      
    }
    
    public function adminchat(Request  $request)
    {
       $data=new adminchat();
      
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->message=$request->message;
       
       $data->save();
       return redirect()->back();
      
    }



    public function viewcomment()
    {
$data=comment::all();
return view("admin.admincomment",compact("data"));
    }

    public function viewagentregister()
    {
$data=agent::all();
return view("admin.adminagentregister",compact("data"));
    }
   
}

