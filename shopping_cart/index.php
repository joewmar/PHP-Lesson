<?php
    $arrProducts = array(
        array(),
        array(),
        array(),
        array(),

    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/shopping-cart-custom.css">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="mt-5">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
                <button type="button" name="btnCart" class="btn btn-primary btn-sm mt-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart <span class="badge badge-light">0</span>
                    <span class="sr-only">unread messages</span>
                </button>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                            <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                        </a>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title d-inline">Women's Designer Top
                            <span class="badge badge-dark">$599.99</span>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2 card">
                  <div class="product-image2">
                      <a href="#">
                          <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                          <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                      </a>
                      <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title d-inline">Women's Yellow Top</h3>
                            <span class="badge badge-dark">$699.99</span>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                            <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                        </a>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title d-inline">Women's Designer Top
                            <span class="badge badge-dark">$599.99</span>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                            <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                        </a>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title d-inline">Hello
                            <span class="badge badge-dark">$599.99</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>