<header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Scissors</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="hairstyle.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">StyleFinder</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="men.php">Men</a>
                  <a class="dropdown-item" href="women.php">Women</a>
                  <a class="dropdown-item" href="package.php">PacKages</a>
                   <a class="dropdown-item" href="hairstyle.php">Basic</a>
                </div>
 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class='nav-item'><a class='nav-link' href='appointment.php'>Appointment</a></li>
              <?php  
                if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    }
                if(isset($_SESSION['username']))
                  echo '<li class="nav-item"><a class="nav-link" href="admin.php">Welcome '.$_SESSION['username'].'</a></li>';
                else
                  echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>