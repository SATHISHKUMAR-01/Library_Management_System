
<style>
  #navlink1,#navlink2, #navlink3, #navlink4, #navlink5, #navlink6{   
                transition: transform .2s;
            }

            #navlink1:hover, #navlink2:hover, #navlink3:hover, #navlink4:hover, #navlink5:hover, #navlink6:hover {
                  transform: scale(1.1); 
            }

</style>
<nav class="navbar navbar-expand-sm bg-dark text-light fixed-top">

<span
          class="navbar-brand fw-bolder  fs-5 shadow p-1"
        ></span>
        <button
          class="navbar-toggler text-dark"
          type="button" 
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon bg-light text-dark"> </span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="collapsibleNavbar"
        >
  <div class="container-fluid">
    <ul class="navbar-nav    ">
      <li class="nav-item  rounded-pill " id="navlink1">
        <a class="nav-link text-light fs-5" href="dashboard.php"> <i class="fa-solid fa-circle-info"></i> Dashboard  </a>
      </li> &nbsp; 
     <li class="nav-item  rounded-pill" id="navlink2" >
        <a class="nav-link text-light fs-5" href="books.php"> <i class="fa-solid fa-book"></i> Books  </a>
      </li> &nbsp; 
      <li class="nav-item  rounded-pill" id="navlink3">
        <a class="nav-link text-light fs-5" href="borrow.php"> <i class="fa-solid fa-question"></i> Borrowed Books  </a>
          </li> &nbsp; 
      <li class="nav-item rounded-pill" id="navlink4">
        <a class="nav-link text-light fs-5" href="return.php"> <i class="fa-solid fa-check-double"></i> Returned Books</a>
      </li>&nbsp; 
      <li class="nav-item rounded-pill" id="navlink5">
        <a class="nav-link text-light fs-5" href="fav.php"> <i class="fa-solid fa-heart"></i> Favorites</a>
      </li>&nbsp; 
      <li class="nav-item rounded-pill  " id="navlink6">
        <a class="nav-link text-light fs-5" href="info.php"> <i class="fa-solid fa-chart-simple"></i> More info</a>
      </li>
      
    </ul>
  </div>

  <div class="">
        <span class="fs-6"> Welcome <?php echo $name; ?>!</span>
    </div>
    <a class="nav-link text-light float-end text-warning fs-3" href="logout.php">  <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>
</nav>