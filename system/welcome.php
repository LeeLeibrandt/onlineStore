<?php

    session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    include_once('header.php');
?>  
    <style>
        .page-header{
            text-align:center;
            margin-top:5rem;
        }
        p{
            text-align:center;
        }

        a{
            width:20%;
            margin:1.5rem;
        }

        .btn-outline-primary:hover{
            border-bottom:2px solid blue;
            background-color:white;
            color:blue;
        }
    </style>
 
    <div class="page-header">
        <h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to NATES store.</h1>
    </div>
    <p>
        <a href="../../index.php" class="btn btn-primary">HOME</a>
        <a href="../profile/profile.php" class="btn-outline-primary">PROFILE</a>
    </p>
<?
    include_once('footer.php');
?>