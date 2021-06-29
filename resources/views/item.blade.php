<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Item Display</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="design.css">
    <script defer src="item.js"></script>
    <script defer src="validation.js"></script>

    <!-- <script  src="categories.js"></script> -->
</head>
<body class="itemPage">

    @extends('layouts.master')

    @section('content')


    <div class="container itemsDisplay">
        <div class="center text-center">

            <h3>Order Now !</h3>
           
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 text-center productImage">
                <img src="" id="productImage" width="100%" alt="Image of The Item">
            </div>
            <div class="col-12 offset-lg-1 col-lg-7 productDetails ">
                <div>
                    
                    <h3 style="color: gold;" id="productTitle"></h3>
                    <h4 style="color: gold;" id="productPrice"></h4>
                    <h4 style="color: gold;">Description</h2>

                    <p style="color: wheat;" id="description"></p>
                </div>
                <div class="btns">
                    @if(Session::has('user'))
                    <a href="/shoppingCart">

                        <button class="btn" id="shoppingCart">Add To Cart</button>
                    </a>
                    <a href="/wishList">

                        <button id="wishList" class="btn">Add To WishList</button>
                    </a>
                    @else
                        <p class="text-white">Login To Add To Cart or Wishlist</p>
                    @endif
                    
                    
                </div>
               
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                
            </div>
        </div>

    </div>

    @endsection
    

        

</body>
</html>