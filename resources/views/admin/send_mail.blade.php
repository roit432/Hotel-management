
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
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <center>
                <h1 style="font-size:30px; font-weight:bold;">Mail Send to {{$data->name}}</h1>
                <form action="{{ url('mail',$data->id) }}" method="post" >
    @csrf

    <div class="div_deg">
      <label for="title">Greetings</label>
      <input type="text" name="greeting" id="title" required>
    </div>

    <div class="div_deg">
      <label for="description">Main Body</label>
      <textarea name="body" id="description" required></textarea>
    </div>

    <div class="div_deg">
      <label for="action_text">Action Text</label>
      <input type="text" name="action_text" id="action_text" required>
    </div>
   

    <div class="div_deg">
      <label for="action_url">Action URL</label>
      <input type="text" name="action_url" id="action_url" required>
    </div>
    <div class="div_deg">
      <label for="endline">End Line</label>
      <input type="text" name="endline" id="endline" required>
    </div>


 

    

    <div class="div_deg">
      <input type="submit" value="Send Mail" class="btn btn-primary">
    </div>
  </form>
            </center>
</div>
</div>
</div>

     @include('admin.footer')
  </body>
</html>