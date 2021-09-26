<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="js/login.js"></script>
    
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>SIM <span>RSO</span></h3>
      </div>
      <div class="right_area">
        <a href="/login" class="login_btn">Login</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="../img/profil.jpg" class="profile_image" alt="">
        <h4>Fransisco</h4>
      </center>
      <a href="/"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="/data-rso"><i class="fas fa-cogs"></i><span>Data</span></a>
      <a href=""><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="/chart"><i class="fas fa-chart-bar"></i><span>Chart</span></a>
    </div>
    <!--sidebar end-->

    

    <div class="content">

        <div class="container">
           @yield('container') 
        </div>

        <div class="footer">
            <em>Copyright &copy; 2021 All Right Reserved.</em>
        </div>

    </div>

    

    
<footer>
        <em>Copyright &copy; 2021 All Right Reserved.</em>

</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
    
  </body>
</html>