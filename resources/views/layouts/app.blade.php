<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('partials._head')

</head>
<body>
    <div id="app">
        
        @include('partials._navBar') 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 

        @yield('content')

        @include('partials._footer')


    </div>

      @include('partials._javascript')

      @yield('scripts')

      @include('partials._messages')
</body>
</html>
