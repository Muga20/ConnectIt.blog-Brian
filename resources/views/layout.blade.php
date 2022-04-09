<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Connect.It</title>
    <!-- Css -->
    {{--<link rel="stylesheet" href="style.css" />--}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    />
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
      @yield('header')

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Connect.It</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{Request::routeIs('welcome.index')?'active':''}}" href="{{route('welcome.index')}}">Blogs</a></li>

            <li><a class="{{Request::routeIs('contact.index')?'active':''}}"  href="{{route('contact.index')}}">Contact.us</a></li>
         @guest
         <li><a class="{{Request::routeIs('login')?'active':''}}"  href="{{route('login')}}">Login</a></li>

        <li><a class="{{Request::routeIs('register')?'active':''}}"  href="{{route('register')}}">Register</a></li>
         @endguest
         @auth
         <li><a class="{{Request::routeIs('dashboard')?'active':''}}"  href="{{route('dashboard')}}">Dashboard</a>
            
         @endauth
         
          </ul>
        </div>
      </div>
      
    
    @yield('main')

    
   
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>
   
    
        </form>
  </body>
</html>
