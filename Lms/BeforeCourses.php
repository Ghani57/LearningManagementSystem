<?php
    session_start();

    if (isset($_SESSION['user'])) 
    {
      //    echo "Hi <a href='#'>".$_SESSION['user']."</a>   ";
        //  echo "<a style='background-color:blue; padding: 5px; color:  white' href='logout.php?logout'> Logout </a>";
      header("Location:Courses.php");
        }
    else{
      
      header("Location:signin.php");
    }
        ?>