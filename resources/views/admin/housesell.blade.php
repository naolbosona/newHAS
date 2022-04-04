
<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
   @include("admin.navbar")

   <div style="position: relative;  top:60px right:-60px">
       <form action="{{url('/uploadsellhouse')}}" method="post" enctype="multipart/form-data">
           @csrf
        <div>

           <label>title</label>
           <input style="color: black" type="text" name="title" required>
        </div>
        <div>
           <label>price</label>
           <input style="color: black" type="text" name="price" required>
        </div>
        <div>
           <label>location</label>
           <input style="color: black"  type="text" name="location" required>
        </div>
        <div>
            <label>state</label>
           <input style="color: black"  type="text" name="state" required>
        </div>
        <div>
           <label>housetype</label>
           <input style="color: black" type="text" name="housetype" required>
        </div>
        <div>
           <label>no_of_rooms</label>
           <input style="color: black" type="text" name="no_of_rooms" required>
        </div>
        <div>
           <label>no_of_bedroom</label>
           <input style="color: black" type="text" name="no_of_bedroom" required>
        </div>
        <div>
           <label>no_of_kitchen</label>
           <input style="color: black" type="text" name="no_of_kitchen" required>
        </div>
        <div>
           <label>phone-number</label>
           <input style="color: black" type="text" name="phone_number" required>
        </div>
        <div>
           <label>commission_fee</label>
           <input style="color: black" type="text" name="commission_fee" required>
        </div>
        <div>
           <label>image</label>
           <input style="color: black" type="file" name="image" required>
        </div>
        <div>
           <label>description</label>
           <input style="color: black" type="text" name="description" required>
        </div>
        <div>
           <label>size_of_house</label>
           <input style="color: black" type="text" name="size_of_house" required>
           </div>
           <div>
               <input style="color: white" type="submit" value="save">
           </div>
         
       </form>
  <div>
<table>
   <tr>
      <th style="padding: 10px">TITLE</th>
      <th style="padding: 10px">PRICE</th>
      <th style="padding: 10px">LOCATION</th>
      <th style="padding: 10px">STATE</th>
      <th style="padding: 10px">HOUSETYPE</th>
      <th style="padding: 10px">NO-OF_ROOMS</th>
      <th style="padding: 10px">NO-OF-BEDROOMS</th>
      <th style="padding: 10px">NO-OF-KITCHEN</th>
      <th style="padding: 10px">PHONE-NUMBER</th>
      <th style="padding: 10px">COMMISSION-FEE</th>
      <th style="padding: 10px">SIZE-OF-HOUSE</th>
      <th style="padding: 40px">IMAGE</th>
      <th style="padding: 10px">ACTION 1</th>
      <th style="padding: 10px">ACTION 2</th>
   </tr>
   @foreach ($data as $data )
      
   
   <tr align="center">
   <td>{{$data->title}}</td>
   <td>{{$data->price}}</td>
   <td>{{$data->location}}</td>
   <td>{{$data->state}}</td>
   <td>{{$data->housetype}}</td>
   <td>{{$data->no_of_rooms}}</td>
   <td>{{$data->no_of_bedroom}}</td>
   <td>{{$data->no_of_kitchen}}</td>
   <td>{{$data->phone_number}}</td>
   <td>{{$data->commission_fee}}</td>
   <td>{{$data->size_of_house}}</td>
   <td><img style="height: 130px; width:120px" src="/housesellimage/{{$data->image}}"></td>
   <td><a href="{{url('/deletehousesell',$data->id)}}">delete</a></td>
   <td><a href="{{url('/updatehousesell',$data->id)}}">update</a></td>
</tr>
   @endforeach

</table>


  </div>



   </div>
    </div>
          
   @include("admin.adminscript")
  </body>
</html>