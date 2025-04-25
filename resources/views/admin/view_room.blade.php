
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
     <!-- @include('admin.sidebar') -->
     <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
         

          <table class="table_deg">
            <tr>
                <th class="th_deg">ROOM TITLE</th>
                <th class="th_deg">DESCRIPTION</th>
                <th class="th_deg">PRICE</th>
                <th class="th_deg">WIFI</th>
                <th class="th_deg">ROOM TYPE</th>
                <th class="th_deg">IMAGE</th>
                <th class="th_deg">DELETE</th>
                <th class="th_deg">Update</th>
            </tr>
          @foreach($data as $data)
          <tr>
          <td>{{$data->room_title}}</td>
          <!-- by importing the STr method which contain the rules for string -->
          <td>{{$data->description}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->wifi}}</td>
          <td>{{$data->room_type}}</td>
          <td><img width="100" src="room/{{$data->image}}" alt=""></td>
          <td>
            <a class="btn btn-danger" onclick="return confirm('Are you Sure to delete it?');" href="{{url('delete_room',$data->id)}}">Delete</a>
          </td>
          <td>
            <a class="btn btn-secondary" onclick="return confirm('Are you Sure to update it?');" href="{{url('update_room',$data->id)}}">Update</a>
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