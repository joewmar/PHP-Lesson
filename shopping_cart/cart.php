<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/shopping-cart-custom.css">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 ">
            <h3 class="h3 d-inline mt-5">Pambansang Damit </h3>
            <div class="d-inline float-right ">
                <button type="button" name="btnCart" class="btn btn-primary btn-sm mt-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart <span class="badge badge-light">0</span>
                    <span class="sr-only">unread messages</span>
                </button>
            </div>
        </div>
        <!-- Tables -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Product</th>
                                <th scope="col">Size</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th scope="col" class="text-right">Total</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Dada</td>
                                <td>In stock</td>
                                <td><input class="form-control text-center" type="number" min="1" max="100" value="1" /></td>
                                <td class="text-right">124,90 €</td>
                                <td class="text-right">300,90 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Toto</td>
                                <td>In stock</td>
                                <td><input class="form-control text-center" type="number" min="1" max="100" value="1" /></td>
                                <td class="text-right">33,90 €</td>
                                <td class="text-right">300,90 €</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                <td>Product Name Titi</td>
                                <td>In stock</td>
                                <td><input class="form-control text-center" type="number" min="1" max="100" value="1" /></td>
                                <td class="text-right">70,00 €</td>
                                <td class="text-right">300,90 €</td>

                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-center">2</td>
                                <td class="text-right">----</td>
                                <td class="text-right"><strong>2400.00</strong></td>
                                <td class="text-center">----</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Footer button -->
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-4">
                        <button class="btn btn-block btn-danger">
                            <i class="fa-solid fa-bag-shopping"></i>
                            Continue Shopping
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center">
                        <button class="btn btn-block btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>                          
                            Update Cart
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-4 text-right">
                        <button class="btn btn-lg btn-block btn-info">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>
</html>