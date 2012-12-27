<?php 
  ob_start();
  session_start();
  
  $page = $_GET["page"];

  if(isset($_SESSION['username'])){
    
    include '../includes/header.php';
    
    if($page == "profile") include 'profile.php';
    else if($page == "patients") include 'patients_search.php';
    
    echo '<div id="footer" style="background:#3A3A3A;color:white; margin-top: 30px; height: 120px;">
      &nbsp;
    </div>';
    echo '</body>';
    echo '</html>';
    
  }else{
    header('Location: ../../index.php'); 
  }

?>
