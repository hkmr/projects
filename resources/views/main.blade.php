<!-- 
  #########################
  WELCOME TO TWEBOX.COM 
  ########################
 -->
<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>

  <body>

      @include('partials._navBar')  
  
      <div id="app">
        @yield('content')
      </div>
   
      @include('partials._footer')

      @include('partials._javascript')

      @include('partials._messages')

    

  </body>


</html>