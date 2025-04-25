
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
         
         <div style="color:green; font-size:30px;">
            <h3>{{session('msg')}}</h3>
         </div>

          <table class="table_deg">
            <tr>
                <th class="th_deg">Room_id</th>
                <th class="th_deg">Customer Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">CheckIn </th>
                <th class="th_deg">CheckOut </th>
                <th class="th_deg">Status </th>
                <th class="th_deg">Room Type </th>
                <th class="th_deg">Price </th>
                <th class="th_deg">Image </th>
                <th class="th_deg">Delete </th>
                <th class="th_deg">Status Update </th>
                
                
            </tr>
         @foreach($data as $data)
          <tr>
          <td>{{$data->room_id}}</td>
        
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->startdate}}</td>
          <td>{{$data->endtdate}}</td>
          <td>@if($data->status=='approve')
            <span style="color:lightgreen;">Approved</span>
            @endif
            @if($data->status=='reject')
            <span style="color:red;">Rejected</span>
            @endif
            @if($data->status=='waiting')
            <span style="color:yellow;">Waiting</span>
            @endif
          </td>
          <!-- in below we build relation with room and bookings table and  -->
          <td>{{ $data->room->room_type ?? 'N/A' }}</td>
          <td>{{ $data->room->price ?? 'N/A' }}</td>
          <td>
  @if($data->room && $data->room->image)
    <img src="room/{{ $data->room->image }}" style="width: 100px;">
  @else
    No Image
  @endif
</td>
          <td><a onClick="return confirm('Are you sure want to delete Room ?')"class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a></td>
          <td>
           <a class="btn btn-success"href="{{url('approve_book',$data->id)}}">Approved</a></span>
            <br><br>
            <span style="padding-bottom:10px;">
            <a class="btn btn-warning"href="{{url('reject_book',$data->id)}}">Reject</a>
</span>
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