<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/shopping-cart-custom.css">
    <title>Product Detail</title>
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
            <div class="col-md-5 col-sm-7 col-12">
                <div class="product-grid2 card">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="https://www.w3schools.com/bootstrap4/img_avatar4.png">
                            <img class="pic-2" src="https://www.w3schools.com/bootstrap4/img_avatar3.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-5 col-12">
                <h4 class="h4 d-inline py-5">Barong
                    <span class="badge badge-dark">P599.99</span>
                </h4>
                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi delectus autem impedit recusandae iure laudantium nisi voluptatem id cupiditate voluptates labore fugit, minima quasi eligendi quaerat! Ea animi harum non molestias veniam cum est rerum, deleniti eum ullam. Maxime hic nisi debitis consequatur eaque, quaerat dolorum quis labore quia. Doloribus?</p>
                <hr>
                <h5>Select Size</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radSize" id="radXS" value="XS"><label class="form-check-label pr-4" for="radXS">XS</label>
                    <input class="form-check-input" type="radio" name="radSize" id="radSM" value="SM"><label class="form-check-label pr-4" for="radSM">SM</label>
                    <input class="form-check-input" type="radio" name="radSize" id="radMD" value="MD"><label class="form-check-label pr-4" for="radMD">MD</label>
                    <input class="form-check-input" type="radio" name="radSize" id="radLG" value="LG"><label class="form-check-label pr-4" for="radLG">LG</label>
                    <input class="form-check-input" type="radio" name="radSize" id="radXL" value="XL"><label class="form-check-label pr-4" for="radXL">XL</label>
                </div>
                <hr>
                <h5>Enter Quantity:</h5>
                <input class="form-control" type="number" placeholder="" min="1" max="100" value="1">
                <div class="my-3">
                    <button class="btn btn-dark">
                        <i class="fa-solid fa-circle-check"></i>
                        Confirm Product Purchase
                    </button>
                    <button class="btn btn-danger">Cancel/Go Back</button>
                </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>