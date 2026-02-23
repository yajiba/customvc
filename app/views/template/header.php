
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
</head>
<body>
    <header style="display:flex;justify-content: space-between;">
        <nav>
            <ul>
                <li><a href="<?php echo BASE_URL;?>">Home</a></li>
                <li><a href="<?php echo BASE_URL;?>shop">Shop</a></li>
                <?php if(isset($_SESSION['logged-in'])) { ?>
                <li><a href="<?php echo BASE_URL;?>product/add">Add Product</a></li>
                <?php } ?>
              
            </ul>
        </nav>
        <nav>
            <ul><?php if(isset($_SESSION['logged-in'])) { ?>
                <li><a href="<?php echo BASE_URL;?>logout">Logout</a></li>

            <?php }else { ?>
                <li><a href="<?php echo BASE_URL;?>login">Login</a></li>
            <?php } ?>
                
               
              
            </ul>
        </nav>
       
    </header>
<div class="container-fluid" id="main-content">