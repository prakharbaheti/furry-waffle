<!DOCTYPE html>
<html lang="en">

  @include('partial.head')

  <body>

    <!-- Default Bootstrap Navbar -->
    @include('partial.nav')

    <div class="container">
      @include('partial.messages')
      {{ Auth::check() ? 'logged in' : 'Log Out' }}
      @yield('content')

    </div>
    <!-- end of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>

</html>