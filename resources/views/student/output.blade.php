<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <head>
        <title> AppName - @yield('title')</title>
    </head>
    <a href = "{{url('student')}}" class="btn btn-primary">Add Student</a>
    <h1>Registration List</h1>
    @yield('sidebar')
    <div class="container">
        @yield('content')
    </div>
 
</html>