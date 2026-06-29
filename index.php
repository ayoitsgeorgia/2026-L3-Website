<!DOCTYPE HTML>

<?php
    // function to allow easy insertion of gallery code
    include("functions.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Different Dog Breeds">
    <meta name="keywords" content="Dogs, dog breeds, puppy, images, gallery">
    <meta name="author" content="Georgia Pemberton">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dog Breeds</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-lightbox.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/layout.css"> 
    <link rel="stylesheet" href="css/navigation.css" />  
    <link rel="stylesheet" href="css/form.css" />  

    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>

    
</head>
    
<body>
    
<div class="wrapper">

    <div class="logo">
        <a href="index.php"><img class="responsive" src="images/dog_logo.png" alt="s" /></a>
    </div> <!-- / logo-->

    <div class="top-title">
        <h2>CC Showcase</h2>
    </div>  <!-- / top title -->

    <div class="header">
        <div class="menu-header">

        <i class="fa fa-bars"></i>

        <div class="menu-content">
            <ul>
                <li><a class="nav" href="index.php">Home</a></li>
                <li><a class="nav dropbtn" href="#">Gallery <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a class="nav" href="index.php?page=insects">Insects</a></li>
                        <li><a class="nav" href="index.php?page=space">Space</a></li>
                        <li><a class="nav" href="index.php?page=people">People</a></li>
                    </ul>
                
                </li>   <!-- / gallery dropdown -->

                <li><a class="nav" href="index.php?page=links">Links</a></li>
                <li><a class="nav" href="index.php?page=contact">Contact</a></li>
            </ul>
        </div>

        </div>
    </div>

    <!-- 'Main Div goes here' -->
    <?php

    if (!isset($_REQUEST['page'])) {
        include("home.php");
    }

    else {
        // prevents users from navigating through file system
        $page=preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']);
        include("$page.php");
    }

    ?>
        

    <div class="box footer">
        CC Georgia Pemberton 2026
    </div>    <!-- / footer -->

</div>  <!-- / wrapper  -->

  <!-- Add jquery to bottom of pages!! -->
<script>
    $('.dropbtn').click(function()
        {
            $('.dropdown').toggleClass('display');
        }
    )

    // Make navigation button clickable

    $('.fa-bars').click(function()
    {
        $('.menu-content').toggle();

    })

</script>  

<!-- Lightbox Javascript... -->
<script src="js/simple-lightbox.min.js"></script>

<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>

    
</body>        