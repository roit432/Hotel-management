
<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.header')
   <style type="text/css">
    .div_center{
      text-align:center;
      padding-top:40px;
    }
    /* this property for admin room booking details and types */
    label
    {
        display:inline-block;
        width:200px;
    }
    .div_deg{
      padding-top:30px;
    }
   </style>
   
  </head>
  <body>
     
     @include('admin.head')
    
   
    
      <!-- Sidebar Navigation-->
     @include('admin.side')
    
      <!-- Sidebar Navigation end-->
       <!-- below code for to the hotels rooom in create room Add rooms -->
       <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

         <div class="div_center">
  <div class="brand-text brand-big visible text-uppercase">
    <strong class="text-primary">UPDATE</strong><strong>ROOMS</strong>
  </div>

  <form action="{{ url('edit_room',$data->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="div_deg">
      <label for="title">Room Title</label>
      <input type="text" name="title" id="title" value="{{$data->room_title}}" required>
    </div>

    <div class="div_deg">
      <label for="description">Description</label>
      <textarea name="description" id="description" value="{{$data->description}}" required>{{$data->description}}</textarea>
    </div>

    <div class="div_deg">
      <label for="price">Price</label>
      <input type="number" name="price" id="price" value="{{$data->price}}" required>
    </div>

    <div class="div_deg">
      <label for="type">Room Type</label>
      <select name="type" id="type">
        <option  value="{{$data->type}}">{{$data->type}}</option>
        <option selected value="regular">Regular</option>
        <option value="premium">Premium</option>
        <option value="deluxe">Deluxe</option>
      </select>
    </div>

    <div class="div_deg">
      <label for="wifi">WiFi</label>
      <select name="wifi" id="wifi" >
        <option value="{{$data->wifi}}">{{$data->wifi}}</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>

    <div class="div_deg">
      <label >Current Image</label>
     <img style="margin:auto;" width="100" src="/room/{{$data->image}}" alt="">
    </div>
    <div style="margin-top:15px;">
        <label for="img">Upload Image</label>
        <input type="file" id="img" name="image">
    </div>

    <div class="div_deg">
      <input type="submit" value="Update" class="btn btn-primary" >
    </div>
  </form>
</div>

    
    
    
         </div>
     </div>
     </div>
      @include('admin.footer')
  </body>
</html>