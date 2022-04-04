
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

   <div style="position:relative;  top:70px;  right:-100px; left:-10px ">
       <table bgcolor="grey" border="1px">

        <tr>
            <th style="padding:10px">firstname</th>
            <th style="padding:10px">lastname</th>
            <th style="padding:10px">email</th>
            <th style="padding:10px">address</th>
            <th style="padding:10px">state</th>
            <th style="padding:10px">bankaccount</th>
            <th style="padding:10px">yourimage</th>
            <th style="padding:10px">idimage</th>
            <th style="padding:10px">cvimage</th>
            <th style="padding:10px">phone</th>
            <th style="padding:10px">birthdate</th>
        </tr>
        @foreach ($data as $data)

<tr align="center">
        <td style="padding:10px">{{$data->firstname}}</td>
        <td style="padding:10px">{{$data->lastname}}</td>
        <td style="padding:10px">{{$data->email}}</td>
        <td style="padding:10px">{{$data->address}}</td>
        <td style="padding:10px">{{$data->state}}</td>
        <td style="padding:10px">{{$data->bankaccount}}</td>
        <td style="padding:10px">{{$data->yourimage}}</td>
        <td style="padding:10px">{{$data->idimage}}</td>
        <td style="padding:10px">{{$data->cvimage}}</td>
        <td style="padding:10px">{{$data->phone}}</td>
        <td style="padding:10px">{{$data->birthdate}}</td>
</tr>
@endforeach
</table>
   </div>
      </div>
          
   @include("admin.adminscript")
  </body>
</html>