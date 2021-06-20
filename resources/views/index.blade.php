<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="design.css">  
    <script defer src="script.js"></script>
    <script defer src="validation.js"></script>
   
    <title>Bootstrap Front End</title>
</head>
<body>
    @extends('layouts.master')

    @section('content')

    <div class="container-fluid bodyDiv">

        <div class="row bodyStarts py-4">
                                                                    <!-- Bootstrap display classes used to create
                                                                    a more attractive design by removing categories div from sm and xs screens -->
            <div class="parentCategories col-md-2 d-none d-md-flex">  

                <div class=" categories text desktopView">
                    <h2>Categories</h2>
                    <ul class="w-100">
                        <li><a href="# " >Clothing <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Electronics <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Pets <i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Outdoors <i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <div class="clickToShow categories smallView">
                    <div id="mainMenu" >
                        <i class="fas fa-chevron-left"></i>
                        <a href="#">MAIN MENU</a>
                    </div>
                    
                    <h2 id="h2"></h2>
                    <ul class="ulClothing">
                        <li><a href="/categories">Men's Fashion</a></li>
                        <li><a href="/categories">Women's Fashion</a></li>
                        <li><a href="/categories">Gym Clothing</a></li>
                    </ul>
                    <ul class="ulElectronics">
                        <li><a href="/categories">Phone</a></li>
                        <li><a href="/categories">Computers</a></li>
                        <li><a href="/categories">Monitor</a></li>
                    </ul>
                    <ul class="ulPets">
                        <li><a href="/categories">Pet Toys</a></li>
                        <li><a href="/categories">Pet Food</a></li>
                    </ul>
                    <ul class="ulOutdoors">
                        <li><a href="/categories">Hiking Gear</a></li>
                        <li><a href="/categories">Gym Equipment</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="parentDiv border-left border-dark col-12 col-sm-12 offset-md-1 col-md-4 belowNav">
                
                <div >
                    <h1>Welcome To <br> The Ultimate <br> Shopping <br> Experience</h1>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 text-center">
                <img src="images/pexels-andrea-piacquadio-919436.jpg" class="w-100" alt="">
            </div>
        </div>
                                                    <!-- Categories show up below the main heading and image for smaller screens -->
        <div class="row categoriesRow d-md-none smallView ">
            
            <div class="col-12 w-50 text-center">

                <h2 class="border-bottom border-dark p-3">Categories</h2>
            </div>
           
            
            <div class="col-6 col-sm-3 text-center ">
                <h4 class="m-4">Clothing</h4>

                        <ul>
                            <li><a href="/categories">Men's Fashion</a></li>
                            <li><a href="/categories">Women's Fashion</a></li>
                            <li><a href="/categories">Gym Clothing</a></li>
                        </ul>
        
            </div>
            <div class="col-6 col-sm-3  text-center">
                <h4 class="m-4">Electronics</h4>
                <ul>
                    <li><a href="/categories">Phone</a></li>
                    <li><a href="/categories">Computers</a></li>
                    <li><a href="/categories">Monitor</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3  text-center">
                <h4 class="m-4">Pets</h4>
                <ul>
                    <li><a href="/categories">Pet Toys</a></li>
                    <li><a href="/categories">Pet Food</a></li>
                    
                </ul>
            </div>
            <div class="col-6 col-sm-3  text-center">
                <h4 class="m-4">Outdoors</h4>
                <ul>
                    <li><a href="/categories">Hiking Gear</a></li>
                    <li><a href="/categories">Gym Equipment</a></li>
                </ul>
            </div>
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
                                                        <!-- Items suggested based on user activities -->
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

    <!-- Items Start  -->

                                                    <!-- Html for the display items written. They will be injected in by script.js 
                                                    by pulling data from data.json file -->
    <div class="container itemsDisplay">
        <div class="center text-center">

            <h3>Popular Right Now</h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item"  class="anchors">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item" class="anchors">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item" class="anchors">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item" class="anchors">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item" class="anchors">

                        <img src="" id="images" class="w-100" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item popItem">
                    <a href="/item" class="anchors">

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
                                                    <!-- ABout us section -->
    <h2 class="fastCart">What is FastCart?</h2>
    <div class="container-fluid aboutUS mb-3">
        <div class="placement">

            <div>

                <div class="row">
                    <div class="col-12  col-md-4 text-center mb-2">
                        <h2>A special Kind of Community</h2>
                        <p>Here at FastCart, people from all over the globe come to buy, sell and trade. We are extremely proud of the community that we have built</p>
                    </div>
                    <div class="col-12 col-md-4 text-center mb-2">
                        <h2>Supporting the Independant Entrepreneur</h2>
                        <p>We have an amazing ecosystem of both business and independant entrepreneurs. We support independant creators and provide them with extensive support</p>
                    </div>
                    <div class="col-12 col-md-4 text-center mb-2">
                        <h2>For Your Support</h2>
                        <p>Our support team is always ready to answer any call of distress! Contact us for any worries or problems you might have</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 bottom-row text-center mb-2">
                        <h3>For the answers to your burning questions</h3>
                        <button  class="button bg-light p-3 rounded-circle mt-4" onclick= "window.location.href= '/helpDesk' ">Visit Our Help Desk</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    @endsection

</body>
</html>