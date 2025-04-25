<!DOCTYPE html>
<html lang="en">
   <head>
   @include('home.header')
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
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         @include('home.section')
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
        @include('home.about')
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
        @include('home.room')
      </div>
      <!-- end our_room -->
      <!-- gallery -->
      <div  class="gallery">
        @include('home.gallary')
      </div>
      <!-- end gallery -->
      <!-- blog -->
      <div  class="blog">
        @include('home.blog')
      </div>
      <!-- end blog -->
      <!--  contact -->
      <div class="contact">
         @include('home.contact')
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
        // Save scroll position in sessionStorage when the user scrolls
        $(window).scroll(function(){
          sessionStorage.scrollTop=$(this).scrollTop();//When the user scrolls, it gets the current vertical scroll position using $(this).scrollTop().
        });//This code listens for the scroll event on the window.
        //It then stores that value in sessionStorage.scrollTop, so it can be remembered within the same browser session.
        $(document).ready(function(){
          //This part runs when the document is fully loaded.
          if (sessionStorage.scrollTop !== undefined){
            //It checks if sessionStorage.scrollTop is not "undefined".
            $(window).scrollTop(sessionStorage.scrollTop)
            //If it's valid, it restores the scroll position to the previously saved value using $(window).scrollTop(...).
          }
        });
        //This script preserves the scroll position of the page within the same session. So if a user refreshes the page or navigates back to it (without closing the browser tab), they'll be scrolled to where they left off.
      </script>
   </body>
</html>