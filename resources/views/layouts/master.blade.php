<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/0793418c64.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark">
        <div class="navMain">

            <a href="{{ route('main.main','default')}}" class="navbar-brand"><i class="fas fa-store" aria-hidden="true"></i>
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

    <div class="content">
        @yield('content')
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
                        <li><a  href="{{ route('main.main','default')}}">Home</a></li>
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
                        <a href="/admin">
                        
                            <button type="submit"  class="btn btn-info" >Login As Admin</button>
                        </a>
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

    

</body>
</html>