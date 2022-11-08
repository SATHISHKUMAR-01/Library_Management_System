<nav class="navbar navbar-expand-sm bg-dark text-light justify-content-between fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav justify-content-between">
      <li class="nav-item  rounded-pill">
        <a class="nav-link text-light fs-5" href="dashboard.php"> <i class="fa-solid fa-circle-info"></i> Dashboard  </a>
      </li> &nbsp; &nbsp; &nbsp; 
     <li class="nav-item  rounded-pill">
        <a class="nav-link text-light fs-5" href="books.php"> <i class="fa-solid fa-book"></i> Books  </a>
      </li> &nbsp; &nbsp; &nbsp; 
      <li class="nav-item  rounded-pill">
        <a class="nav-link text-light fs-5" href="borrow.php"> <i class="fa-solid fa-question"></i> Borrowed Books  </a>
      </li>&nbsp; &nbsp; &nbsp; 
      <li class="nav-item rounded-pill">
        <a class="nav-link text-light fs-5" href="return.php"> <i class="fa-solid fa-check-double"></i> Returned Books</a>
      </li>
      <li class="nav-item rounded-pill">
        <a class="nav-link text-light fs-5" href="fav.php"> <i class="fa-solid fa-heart"></i> Favorites</a>
      </li>
    </ul>
  </div>

  <div class="justify-content-">
        <span class="fs-6"> Welcome <?php echo $name; ?>!</span>
    </div>
    <a class="nav-link text-light float-end text-warning fs-3" href="logout.php">  <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
 
</nav>