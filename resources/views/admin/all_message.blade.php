
<!DOCTYPE html>
<html>
  <head> 
   @include('admin.header')
   <style>
    .table_deg{
        border:3px solid white;
        margin:auto;
        width:100%;
        margin-top:40px;
        text-align:center;
    }
    .th_deg{
        background-color:skyblue;
        padding:10px;
    }
    tr{
        border:3px solid white;
    }
    td{
        border:3px solid white;
    }
   </style>
   
  </head>
  <body>
     
     @include('admin.head')
     <!-- Sidebar Navigation-->
     @include('admin.side')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <table class="table_deg">
            <tr>
                <th class="th_deg">NAME</th>
                <th class="th_deg">E-Mail</th>
                <th class="th_deg">PHONE</th>
                <th class="th_deg">Message</th>
                <th class="th_deg">Mail</th>
             
            </tr>
          @foreach($data as $data)
          <tr>
          <td>{{$data->name}}</td>

          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->messages}}</td>
          <td>
            <a  class="btn btn-success"href="{{url('send_mail',$data->id)}}">Send Mail</a>
          </td>
          </tr>
          @endforeach
          
          </table>
</div>
</div>
</div>

     @include('admin.footer')
  </body>
</html>