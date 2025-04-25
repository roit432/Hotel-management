<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">
   @include('home.header')
   <style type="text/css">
    label{
        display:inline-block;
        width:200px;
    }
    input{
        width:100%;
    }
    
   </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.head')
      </header>

      <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div >
          
            
            <div class="row">
      
                 <div class="col-md-8">
                    <div id="serv_hover"  class="room">
                       <div style="padding:25px;"class="room_img">
                           <figure><img src="room/{{$room->image}}" alt="#" style="height:400px; width:100%"/></figure>
                        </div>
                        <div class="bed_room">
                          <h3 style="padding:15px;"><b>{{$room->room_title}}</b></h3>
                          <p style="padding:15px;"><b>{{$room->description}}</b></p>
                          <h4 style="padding:15px;"><b>Free WIFI: {{$room->wifi}}</b></h4>
                           <h4 style="padding:15px;"><b>Room Type:{{$room->room_type}}</b></h4>
                           <h4 style="padding:15px;"><b>Price: {{$room->price}}</b></h4>
                       
                        </div>
                     </div>
                  </div> 


                  <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Book Room</h2>
                    
                      
                     @if(session()->has('message'))
            {{session()->get('message')}}
            @endif
                    
                    
                     @if(session()->has('msg'))
            {{session()->get('msg')}}
            @endif
                   

                     @if($errors)
                     @foreach($errors->all() as $errors)
                     <li style="color:red; padding:10px; ">{{$errors}}</li>
                     @endforeach
                     @endif
                     
                <form action="{{url('add_booking',$room->id)}}" method="post">
                    @csrf
                    <div >
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"
                        @if(Auth::id())
                        value="{{Auth::user()->name}}"
                        @endif>
                    </div>
                    <div >
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"
                        @if(Auth::id())
                        value="{{Auth::user()->email}}"
                        @endif>
                    </div>
                    <div >
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone"
                        @if(Auth::id())
                        value="{{Auth::user()->phone}}"
                        @endif>
                    </div>
                    <div >
                        <label for="startdate">Start Date</label>
                        <input type="date" name="startdate" id="startdate"
                        @if(Auth::id())
                        value="{{Auth::user()->startdate}}"
                        @endif>
                    </div>
                    <div >
                        <label for="enddate">End Date</label>
                        <input type="date" name="enddate" id="enddate"
                        @if(Auth::id())
                        value="{{Auth::user()->enddate}}"
                        @endif>
                    </div>
                    <div  style="padding:25px;">
                        
                        <input type="submit" class="btn btn-primary" value="Book Now">
                    </div>
                </form>
               
              
            </div>
</div>






     
      <!-- end contact -->
      <!--  footer -->
      <footer>
        @include('home.footer')
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">

   $(function () {
    var dtToday = new Date();//picking today's Date
    var month = dtToday.getMonth() + 1;//gets today's date

    var day = dtToday.getDate();//getting today's date
    var year = dtToday.getFullYear(); // ✅ Correct method

    // Add leading zero if needed
    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    // Format date as yyyy-mm-dd
    var maxDate = year + '-' + month + '-' + day;

    // Set min attribute for both inputs
    $('#startdate').attr('min', maxDate);//user can't select to the past date
    $('#enddate').attr('min', maxDate);
});

      </script>
   </body>
</html>