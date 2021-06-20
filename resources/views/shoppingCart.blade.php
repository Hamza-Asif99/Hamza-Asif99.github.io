<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="design.css">
    <script defer src="validation.js"></script>
    <script defer src="shoppingList.js"></script>

 
</head>
<body>

    @extends('layouts.master')

    @section('content')
    

    <div class="container itemsDisplay">
        <div class="center text-center">
            <h3 id="header" >Add items to your cart !</h3>

        </div>        

        <div class="row categoriesRow hideOnAddition">
            <div class="col-12 item">
                <h4>Cart Is Empty</h4>
                <p class="text-dark">Your shopping cart lives to serve, give it purpose and add items to buy.
                    <br><br> For inspiration, browse the categories below, or just revisit your latest searches.
                </p>
            </div>
            <br>
 
            <div class="col-6 col-sm-3 item text-center">
                <h2>Clothing</h2>
                <ul class="ulClothing">
                    <li><a class="p-2" href="/categories">Men's Fashion</a></li>
                    <li><a class="p-2" href="/categories">Women's Fashion</a></li>
                    <li><a class="p-2" href="/categories">Gym Clothing</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Electronics</h2>
                <ul class="ulElectronics">
                    <li><a class="p-2" href="/categories">Phone</a></li>
                    <li><a class="p-2" href="/categories">Computers</a></li>
                    <li><a class="p-2" href="/categories">Monitor</a></li>
                </ul>                
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Pets</h2>
                <ul class="ulClothing">
                    <li><a class="p-2" href="/categories">Pet Toys</a></li>
                    <li><a class="p-2" href="/categories">Pet Food</a></li>
                </ul>                
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Outdoors</h2>
                <ul class="ulClothing">
                    <li><a class="p-2" href="/categories">Hiking Gear</a></li>
                    <li><a class="p-2" href="/categories">Gym Equipment</a></li>
                </ul>                
            </div>
        </div>
        
    </div>
    <div class="container itemsDisplay hideOnRemoval">
        <div class="row">
            <div class="col-12">
                <table class="table text-light" id="list" style="background-color: rgba(1, 1, 1, 0.8);">
                    <thead>
                      <tr class="text-warning">
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="total text-warning p-4" style="background-color:rgba(1, 1, 1, 0.8) ;">
            <span>Total Amount: </span>
            <span class="text-light ml-5" id="amount"></span>
        </div>
    </div>


    <div class="container itemsDisplay " id="latestSearchDiv">
        <div class="center text-center">

            <h3>Your Latest Searches</h3>
        </div>
        <div class="row categoriesRow">
            <div class="col-12 item">
                <p class="text-dark">Browse around to see your latest searches here.</p>
            </div>
        </div>
    </div>
    <div class="container itemsDisplay" id="latestSearchDiv2" style="display: none;">
        <div class="center text-center">

            <h3>Your Latest Searches</h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item"  class="anchor">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4" id="item2">
                <div class="item">
                    <a href="/item"  class="anchor">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4" id="item3" >
                <div class="item">
                    <a href="/item"  class="anchor">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            
        </div>
    </div>

    @endsection


</body>
</html>