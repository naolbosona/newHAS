
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

   <div style="position:relative;  top:70px;  right:-150px;">
       <table bgcolor="grey" border="1px">

        <tr>
            <th style="padding:30px">name</th>
            <th style="padding:30px">email</th>
            <th style="padding:30px">phone</th>
            <th style="padding:30px">message</th>
        </tr>
        @foreach ($data as $data)

<tr align="center">
        <td style="padding:30px">{{$data->name}}</td>
        <td style="padding:30px">{{$data->email}}</td>
        <td style="padding:30px">{{$data->phone}}</td>
        <td style="padding:30px">{{$data->message}}</td>
</tr>
@endforeach
</table>
   </div>
      </div>
          
   @include("admin.adminscript")
  </body>
</html>