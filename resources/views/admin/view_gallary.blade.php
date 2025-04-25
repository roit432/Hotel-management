
<!DOCTYPE html>
<html>
  <head> 
   @include('admin.header')
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
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
               <h1 style="font-size:40px; font-weight:bolder; color:white;">Gallary</h1>
               <div class="row"> 
               @foreach($data as $data)
                <div class="col-md-4" style="padding:10px;">
                  <img style="height:200px!important; width:300px!important;"src="gallary/{{$data->image}}" alt="">
                  <a  class="btn btn-danger"  href="{{url('delete_gallary',$data->id)}}">Delete Image</a>
                  </div>
               
               @endforeach
               </div>
            <form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding:30px;">
                    <label style="color:white; font-weight:bold;"for="image">Upload Image  </label>
                        <input type="file" name="image" id="image" required>
                        
                   
               
                    <input class="btn btn-primary" type="submit" value="Add Image">
                </div>
            </form>
            </center>


       
          </div>
        </div>
    </div> 



    
     @include('admin.footer')
     <script >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </script>
  </body>
</html>