<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="design.css">

    <script src="https://kit.fontawesome.com/0793418c64.js" crossorigin="anonymous"></script>
    
    <script defer src="script.js"></script>
    <script defer src="validation.js"></script>
   
    <title>Bootstrap Front End</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="navMain">

            <a href='/' class="navbar-brand"><i class="fas fa-store" aria-hidden="true"></i>
                <span>FastCart</span></a>
            
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navSupportedContent" class="collapse navbar-collapse navItems">
            <div class="search d-flex w-50">

                <input class="input w-100"  type="text" placeholder="Search">
                <button type="submit" class="bg-dark text-light border-0"><i class="fas fa-search"></i></button>
            </div>
            <ul class="navbar-nav active">
                <li>
                    <a href="#" class="nav-link" onclick="document.querySelector('.loginForm ').style.display='block'" >Login</a>
                </li>
                <li>
                    <a href="#" class="nav-link" onclick="document.querySelector('.signupForm ').style.display='block'">SignUp</a>
                </li>
                <li>
                    <a href="/wishList" onclick="changeStorage2()" title="Wishlist" id="wishlist" class="nav-link"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                    
                    <a href="/shoppingCart" onclick="changeStorage()" title="Shopping Cart" target="" id="cart" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    
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

    <!-- Footer starts here -->

    <div class="container-fluid text-light">
        <footer class="footer">
            <div class="row" >
                <div class="col-12 col-sm-4 center-items">
                    

                        <h3 class="bold-text">FastCart</h3>
                        <div class="icons">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-linkedin-square"></i>       
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-instagram"></i>
                        </div>
                    
                </div>
                <div class="col-12 col-sm-4 center-items text-center">
                    <h4>Address</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, at.</p>
                </div>
                <div class="col-12 col-sm-4 center-items text-center">
                    <h4>Menu</h4>
                    <ul >
                        <li><a  href="/">Home</a></li>
                        <li><a href="#"onclick="document.querySelector('.loginForm ').style.display='block'">Login</a></li>
                        <li><a href="#" onclick="document.querySelector('.signupForm ').style.display='block'">Sign Up</a></li>
                        <li><a href="/helpDesk">Help Desk</a></li>
                        
                    </ul>
                </div>
            </div>
            
        </footer>
    </div>

<!-- Login and signup Forms with Bootstrap. -->

    <div class="loginForm">

        <div class="paretnDiv modal animate text-center" style="display: flex; justify-content: center;">

            <div style="width: 65%;">
                
                <form action="" id="frm1" class="text-light">
                    <span onclick="document.querySelector('.loginForm').style.display='none'" class="close" title="Close Modal"><i class="fas fa-times"></i></span>
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <label for="pass">Enter Name</label>
                        <input type="text" id="loginName" class="form-control" placeholder="Full name" onblur="validateSignup('errorLoginName','loginName',/^[a-zA-Z ]{2,30}$/,2,'Username may not contain any numbers or special characters')"  required>
                        <div class="text-danger" id="errorLoginName"></div>
                        
                    </div>
                    <div class="form-group">
                        <label for="gpa">Enter Password</label>
                        <input type="password" id="passy2" class="form-control" placeholder="Password"  onblur="validateSignup('errorPassName','passy2',/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,8,'Password must contain atleast one uppercase letter,1 special character and one number')" required>
                        <div class="text-danger" id="errorPassName"></div>

                        
                    </div>
                    <div class="text-center" >
                        <button type="submit" id="event1" class="btn btn-info" onclick="formcheck2()">Login</button>
                        <button type="submit" id="event2" class="btn btn-warning">Forgot Password?</button>
                    </div>
                    <input type="checkbox" checked>Remember Me
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger" onclick="document.querySelector('.loginForm').style.display='none'">Cancel</button>
                </form>
            </div>
        </div>

    </div>

    <div class="signupForm">

        <div class="paretnDiv modal animate text-center " style="display:flex; justify-content: center"  >

            <div style="width: 65%;">
                
                <form action="" id="frm2" class="text-light">
                    <span onclick="document.querySelector('.signupForm').style.display='none'" class="close" title="Close Modal"><i class="fas fa-times"></i></span>
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <label for="pass">Enter Full name</label>
                        <input type="text" id="username"  class="form-control" placeholder="Full name" onblur="validateSignup('errorName','username',/^[a-zA-Z ]{2,30}$/,2,'Username may not contain any numbers or special characters')" required>
                        <div class="text-danger" id="errorName"></div>
                        <label >Enter Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Email" onblur="validateSignup('errorEmail','email',
                        null,null,'Enter valid Email')" required>
                        <div class="text-danger" id="errorEmail"></div>
                        <small>We Will Never Share This With Anyone</small>
                        
                    </div>
                    <div class="form-group">
                        <label for="gpa">Enter Password</label>
                        <input type="password" id="passy"  class="form-control" placeholder="Password" onblur="validateSignup('errorPass','passy',/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,8,'Password must contain atleast one uppercase letter,1 special character and one number')" required>
                        <div class="text-danger" id="errorPass"></div>
                        <label for="gpa">Confirm Password</label>
                        <input type="password" id="confirmPassy"  class="form-control" placeholder="Confirm Password" onblur="confirmPass('errorCP')" required>
                        <div class="text-danger" id="errorCP"></div>                        
                    </div>
                    <div class="text-center" >
                        <button  class="btn btn-info" onclick="formCheck()">Sign Up</button>
                        <!-- <button type="submit" id="event2" class="btn btn-warning">Forgot Password?</button> -->
                    </div>
                    <br>
                    <input type="checkbox" checked>Do You Want To Receive Emails About Our Latest Offers?
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger" onclick="document.querySelector('.signupForm').style.display='none'">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Form Validation script
 
        let allImage = document.querySelectorAll(".anchor img");
        let allTitle = document.querySelectorAll(".anchor h2");     //This script pulls data from the JSON file and onto the categories page
        let allPrice = document.querySelectorAll(".anchor span")

        allImage[0].setAttribute("src",localStorage.getItem("latestImage1"))
        allTitle[0].innerText = localStorage.getItem("latestTitle1")
        allPrice[0].innerText = localStorage.getItem("latestPrice1")

        if(localStorage.getItem("latestImage2")!=null){
            allImage[1].setAttribute("src",localStorage.getItem("latestImage2"))
            allTitle[1].innerText = localStorage.getItem("latestTitle2")
            allPrice[1].innerText = localStorage.getItem("latestPrice2")
        }
        if(localStorage.getItem("latestImage3")!=null){
            allImage[2].setAttribute("src",localStorage.getItem("latestImage3"))
            allTitle[2].innerText = localStorage.getItem("latestTitle3")
            allPrice[2].innerText = localStorage.getItem("latestPrice3")
            document.getElementById("latestSearchDiv").style.display = "none"
            document.getElementById("latestSearchDiv2").style.display = "block"

        }

        function changeStorage(){
            localStorage.setItem("addToTable",2)
        }
        function changeStorage2(){
            localStorage.setItem("addToWishlist",2)
        }
    </script>

    
</body>
</html>