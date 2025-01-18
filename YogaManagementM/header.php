<!DOCTYPE html>
<html>
    <head> <title>College Project</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="index.php">
    <img
        src="assets/img/logo.png"
        height="66"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
      <!-- <button type="button" class=" btn btn-link px-3 me-2">
         <h4> HOME</h4>
        </button> -->
          <a class="btn btn-link px-3 me-2" href="index.php" role="button">HOME </a> 
          <a class="btn btn-link px-3 me-2" href="#" role="button" onclick="return confirm_alert(this);">PLANS </a> 
          <a class="btn btn-primary me-3" href="adminLogin.php"  role="button">LOGIN </a> 
        <!-- <button type="button" class="btn btn-primary me-3">
          HOME
        </button>
       
        <button type="button" class="btn btn-primary me-3">
       PLANS
        </button>
        <button type="button" class="btn btn-primary me-3">
         LoGIN
        </button> -->
        <!-- <a
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a> -->
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<script>
function confirm_alert(node) {
    alert("Please Login to See the Plans Page");
}
</script>
</body>
</html>