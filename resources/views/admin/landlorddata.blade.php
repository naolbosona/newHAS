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
       <form action="{{url('/uploadland')}}" method="post" enctype="multipart/form-data">
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
           <label>phone-number</label>
           <input style="color: black" type="text" name="phone_number" required>
        </div>
        <div>
           <label>commission_fee</label>
           <input style="color: black" type="text" name="commission_fee" required>
        </div>
        <div>
            <label>size_of_land</label>
            <input style="color: black" type="text" name="size_of_land" required>
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
      <th style="padding: 10px">PHONE-NUMBER</th>
      <th style="padding: 10px">COMMISSION-FEE</th>
      <th style="padding: 10px">SIZE-OF-LAND</th>
      <th style="padding: 40px">IMAGE</th>
      <th style="padding: 10px">ACTION 1</th>
      <th style="padding: 10px">ACTION 2</th>
   </tr>
   @foreach ($dataland as $dataland )
      
   
   <tr align="center">
   <td>{{$dataland->title}}</td>
   <td>{{$dataland->price}}</td>
   <td>{{$dataland->location}}</td>
   <td>{{$dataland->state}}</td>
   <td>{{$dataland->housetype}}</td>
   <td>{{$dataland->phone_number}}</td>
   <td>{{$dataland->commission_fee}}</td>
   <td>{{$dataland->size_of_land}}</td>
   <td><img style="height: 130px; width:120px" src="/landimage/{{$dataland->image}}"></td>
   <td><a href="">delete</a></td>
   <td><a href="">update</a></td>
</tr>
   @endforeach
</table>


  </div>



   </div>
    </div>
          
   @include("admin.adminscript")
  </body>
</html>