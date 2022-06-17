<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css"> -->
   
   
    

<?php wp_head(); ?>
</head>

<body>

<header>
    <style>
        .success-text{
    
    color: #006400;
    margin-top: 5px;
    margin-bottom: 0px;
    text-align: center;
}
    </style>
    <div class="container"><img src="./img/Logologo.png" alt=""></a>
        
        
            <h3 class="success-text"><?=$_COOKIE['allseccess']?></h3>
        
      
        <nav class="navbar navbar-expand-lg navbar-light"></nav>
       
            <!-- <a class="navbar-brand" href="#"><img src="./img/Logologo.png" alt=""></a> --> <?php the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php wp_nav_menu( array(
          'theme_location' => 'top',
          'container' => null,
          'container_class' => null,
          'menu_class' => 'navbar-nav m-auto nav_menu',

        )); ?>
              <!-- <ul class="navbar-nav m-auto nav_menu">
        
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    apparel
                  </a>
                  <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>                   
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      office & home
                    </a>
                    <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                <li class="nav-item"><a href="" class="nav-link">bags</a></li>
                <li class="nav-item"><a href="" class="nav-link">tech</a></li>
                <li class="nav-item"><a href="" class="nav-link">drinkware</a></li>
                <li class="nav-item"><a href="" class="nav-link">gifts</a></li>
              </ul> -->
              <div class="nav_right">
                <a href=""><i class="fa fa-trash icon_cart"  aria-hidden="true"></i></a>
                <a href="/registration.php"> <button>create an account</button></a>
                
              </div> 
                
            </div>
          </nav>
    </div>
</header>