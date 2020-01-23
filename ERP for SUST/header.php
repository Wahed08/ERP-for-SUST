<?php
    session_start();
    $login_s = false;
    $name_s = null;
    $occupation_s = null;
    $department_s = null;
    $batch = null;
                
    if ((isset($_SESSION['login']) && $_SESSION['login'] != '')) {
        $login_s = $_SESSION['login']; 
        $name_s = ucfirst($_SESSION['name']);
        $occupation_s = $_SESSION['occupation'];
        $department_s = $_SESSION['department'];
        $batch = $_SESSION['batch'];
        $your_assignment = true;
    }
?>

<nav class="navbar navbar-expand-sm bg-light" style="margin-bottom: 10%;">  
        <a class="navbar-brand" style="margin-left: 3%;" href="index.php">
            <img class="img-responsive" src="Img/Logos/logo2.png" alt="logo" style="width:120px">
        </a>

        <ul class="navbar-nav" style="margin-left: 2%;">
            <li class="nav-item">
                <a class="nav-link" href="https://www.sust.edu/">My Campus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="margin-right: 3%;">
            <li class="nav-item dropdown" style="cursor: pointer;">
                <?php
                    if($login_s){
                        echo "<span class='nav-link dropdown-toggle' id='navbardrop' data-toggle='dropdown'> 
                            <img class='img-responsive' src='Img/Designs/myAccount-logo.png' alt='Account-Avatar' style='width: 25px; height: 20px; margin-right: 8px; margin-bottom: 8px;'>".htmlspecialchars($name_s)."
                            </span>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item' href='logout.php'>Log Out</a>
                            </div> 
                            </span>";
                    }
                    else{ 
                        echo "<span class='nav-link dropdown-toggle' id='navbardrop' data-toggle='dropdown'> 
                                My Account
                            </span>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item' href='login.php'>Log In</a>
                                <a class='dropdown-item' href='signUp.php'>Sign Up</a>
                            </div> 
                            </span>";
                    }
                ?>
            </li>
        </ul>
    </nav>