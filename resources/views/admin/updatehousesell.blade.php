
<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
   @include("admin.navbar")



   <div style="position: relative;  top:60px right:-60px">
    <form action="{{url('/uphousesell',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
     <div>

        <label>title</label>
        <input style="color: black" type="text" name="title" value="{{$data->title}}"  required>
     </div>
     <div>
        <label>price</label>
        <input style="color: black" type="text" name="price"   value="{{$data->price}}" required>
     </div>
     <div>
        <label>location</label>
        <input style="color: black"  type="text" name="location"  value="{{$data->location}}"  required>
     </div>
     <div>
         <label>state</label>
        <input style="color: black"  type="text" name="state"  value="{{$data->state}}"  required>
     </div>
     <div>
        <label>housetype</label>
        <input style="color: black" type="text" name="housetype"  value="{{$data->housetype}}"  required>
     </div>
     <div>
        <label>no_of_rooms</label>
        <input style="color: black" type="text" name="no_of_rooms"  value="{{$data->no_of_rooms}}" required>
     </div>
     <div>
        <label>no_of_bedroom</label>
        <input style="color: black" type="text" name="no_of_bedroom"  value="{{$data->no_of_bedroom}}" required>
     </div>
     <div>
        <label>no_of_kitchen</label>
        <input style="color: black" type="text" name="no_of_kitchen"  value="{{$data->no_of_kitchen}}"  required>
     </div>
     <div>
        <label>phone-number</label>
        <input style="color: black" type="text" name="phone_number" value="{{$data->phone_number}}" required>
     </div>
     <div>
        <label>commission_fee</label>
        <input style="color: black" type="text" name="commission_fee" value="{{$data->commission_fee}}" required>
     </div>
     <div>
        <label>image</label>
        <img src="/housesellimage/{{$data->image}}">
     </div>

     <div>
        <label>image</label>
        <input style="color: black" type="file" name="image" required>
     </div>
     <div>
        <label>description</label>
        <input style="color: black" type="text" name="description" {{$data->description}} required>
     </div>
     <div>
        <label>size_of_house</label>
        <input style="color: black" type="text" name="size_of_house"  {{$data->size_of_house}} required>
        </div>
        <div>
            <input style="color: white" type="submit" value="save">
        </div>
    </div>
      
    </form>
   </div>
          
   @include("admin.adminscript")
  </body>
</html>