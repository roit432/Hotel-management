
<!DOCTYPE html>
<html>
  <head> 
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
    <strong class="text-primary">ADD</strong><strong>ROOMS</strong>
  </div>

  <form action="{{ url('add_room') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="div_deg">
      <label for="title">Room Title</label>
      <input type="text" name="title" id="title" required>
    </div>

    <div class="div_deg">
      <label for="description">Description</label>
      <textarea name="description" id="description" required></textarea>
    </div>

    <div class="div_deg">
      <label for="price">Price</label>
      <input type="number" name="price" id="price" required>
    </div>

    <div class="div_deg">
      <label for="type">Room Type</label>
      <select name="type" id="type">
        <option selected value="regular">Regular</option>
        <option value="premium">Premium</option>
        <option value="deluxe">Deluxe</option>
      </select>
    </div>

    <div class="div_deg">
      <label for="wifi">WiFi</label>
      <select name="wifi" id="wifi">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>

    <div class="div_deg">
      <label for="img">Upload Image</label>
      <input type="file" name="image" id="img" accept="image/*" required>
    </div>

    <div class="div_deg">
      <input type="submit" value="Add Rooms" class="btn btn-primary">
    </div>
  </form>
</div>

    
    
    
         </div>
     </div>
     </div>
      @include('admin.footer')
  </body>
</html>