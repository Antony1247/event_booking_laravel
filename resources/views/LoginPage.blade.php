<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="{{ asset('css/landing.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="shadow-title parallax-top-shadow">Events</div>
  <div class="section-parallax parallax-00" style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-0.png');"></div>
  <div class="section-parallax parallax-01" style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-01.png');"></div>
<!-- Link to page
================================================== -->

<!-- <a href="https://themeforest.net/user/ig_design/portfolio"      class="link-to-portfolio hover-target" target=”_blank”></a>-->

<div class="container link-to-portfolio hover-target" target=”_blank”>
          <form action="#" method="POST">
            <a href="{{ route('admin.login') }}">
              <button type="button">Admin</button>
            </a>
            <a href="{{ route('user.login') }}">
              <button type="button">User</button>
            </a>
          </form>
        </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="{{ asset('/js/landing.js') }}"></script>

</body>
</html>
