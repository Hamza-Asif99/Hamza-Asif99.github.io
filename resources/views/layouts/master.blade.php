<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <script src="https://kit.fontawesome.com/0793418c64.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="navMain">

            <a href="{{ route('main.main')}}" class="navbar-brand"><i class="fas fa-store" aria-hidden="true"></i>
                <span>FastCart</span></a>
            
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navSupportedContent" class="collapse navbar-collapse navItems">
            <div class=" w-50">
                <form method="POST" action="/search">
                <div class="d-flex" style="position:relative">
                @csrf
                
                    <input class="input w-100" required onkeyup="searchSuggest()" name="title" id="txtSearch"  type="text" placeholder="Search">
                    <!-- <a href="#" class="btn"><i class="fas fa-search"></i></a> -->
                    <!-- <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button> -->
                    <button type="submit" class="bg-dark text-light border-0" value="search"><i class="fas fa-search"></i></button>
                </div>
                </form>
                <div id="searchSuggestion" style="color:white;z-index:99; background-color:rgba(1,1,1,0.8); position:absolute;padding:0.7rem;display:none" >
                    
                </div>
            </div>
            <ul class="navbar-nav active">
                @if(Session::has('user'))
                    <li style="padding-right:1rem" class="text-light">Welcome {{Session::get('user')}}  </li>
                    <li>
                        <a href="/wishList" onclick="changeStorage2()" title="Wishlist" id="wishlist" class="nav-link"><i class="fas fa-heart"></i></a>
                    </li>
                    <li>
                        
                        <a href="/shoppingCart" onclick="changeStorage()" title="Shopping Cart" target="" id="cart" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li>
                        <form method="POST" action="/userGone">
                            @csrf
                            <!-- <a href="/userGone" class="nav-link">LogOut</a> -->
                            <button type="submit" onclick="setUser()" class="btn">LogOut</button>
                        </form>
                    </li>
                @else        
                <li>
                    <a href="#" class="nav-link" onclick="document.querySelector('.loginForm ').style.display='block'" >Login</a>
                </li>
                <li>
                    <a href="#" class="nav-link" onclick="document.querySelector('.signupForm ').style.display='block'">SignUp</a>
                </li>
                @endif

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
                
                <form method="POST" action="/login"  id="frm1" class="text-light">
                    @csrf
                    <span onclick="document.querySelector('.loginForm').style.display='none'" class="close" title="Close Modal"><i class="fas fa-times"></i></span>
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <label for="pass">Enter Name</label>
                        <input type="text" name="name" id="loginName" class="form-control" placeholder="Full name" onblur="validateSignup('errorLoginName','loginName',/^[a-zA-Z ]{2,30}$/,2,'Username may not contain any numbers or special characters')"  required>
                        <div class="text-danger" id="errorLoginName"></div>
                        
                    </div>
                    <div class="form-group">
                        <label for="gpa">Enter Password</label>
                        <input type="password" name="password" id="passy2" class="form-control" placeholder="Password"  onblur="validateSignup('errorPassName','passy2',/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,8,'Password must contain atleast one uppercase letter,1 special character and one number')" required>
                        <div class="text-danger" id="errorPassName"></div>

                        
                    </div>
                    <div class="text-center" >
                        <button type="submit" id="event1" class="btn btn-info" >Login</button>
                        
                        <a href="/admin" class="btn">Admin Login</a>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger" onclick="document.querySelector('.loginForm').style.display='none'">Cancel</button>
                </form>
            </div>
        </div>

    </div>

    <div class="signupForm" >

        <div class="paretnDiv modal animate text-center " style="display:flex; justify-content: center"  >

            <div style="width: 65%;">
                
                <form method="POST" action="/users" id="frm2" class="text-light">
                    @csrf
                    <span onclick="document.querySelector('.signupForm').style.display='none'" class="close" title="Close Modal"><i class="fas fa-times"></i></span>
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <label for="pass" >Enter Full name</label>
                        <input type="text" name="name" id="username"  class="form-control" placeholder="Full name" onblur="validateSignup('errorName','username',/^[a-zA-Z ]{2,30}$/,2,'Username may not contain any numbers or special characters')" required>
                        <div class="text-danger" id="errorName"></div>
                        <label >Enter Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" onblur="validateSignup('errorEmail','email',
                        null,null,'Enter valid Email')" required>
                        <div class="text-danger" id="errorEmail"></div>
                        <small>We Will Never Share This With Anyone</small>
                        
                    </div>
                    <div class="form-group">
                        <label for="gpa">Enter Password</label>
                        <input type="password" name="password" id="passy"  class="form-control" placeholder="Password" onblur="validateSignup('errorPass','passy',/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,8,'Password must contain atleast one uppercase letter,1 special character and one number')" required>
                        <div class="text-danger" id="errorPass"></div>
                        <label for="gpa">Confirm Password</label>
                        <input type="password" id="confirmPassy"  class="form-control" placeholder="Confirm Password" onblur="confirmPass('errorCP')"  required>
                        <div class="text-danger" id="errorCP"></div>                        
                    </div>
                    <div class="text-center" >
                        <button  class="btn btn-info" id="signUpBTN">Sign Up</button>
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

        function searchSuggest(){
            // $.ajaxSetup({
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // }
            // });
            


            var str = document.getElementById("txtSearch").value
            document.getElementById("searchSuggestion").style.display = "block";
            document.getElementById("searchSuggestion").innerHTML = "";

            var searchReq = new XMLHttpRequest();
            
            searchReq.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200 ){
                    console.log("check3");
                    const JSONResponse = JSON.parse(searchReq.responseText);

                    var count =0;
                    for(let i =0;i<JSONResponse.length;i++){
                        for(let j =0;j<JSONResponse[i].length;j++){
                            if(str.length>0){

                                if(JSONResponse[i][j].title.toLowerCase().includes(str.toLowerCase())){
                                    if(count <= 3){
                                            
                                        var newDiv = document.createElement('div')
                                        newDiv.setAttribute('class','suggestDiv')
                                        newDiv.innerText = JSONResponse[i][j].title
                                        document.getElementById('searchSuggestion').append(newDiv)
       
                                        count++;
                                    }
                                }
                            }
                        }
                    }
                    var childNum = document.getElementById('searchSuggestion').children.length
                    var allChildren = document.querySelectorAll('#searchSuggestion div')
                    for(let i = 0; i< childNum;i++){
                        allChildren[i].addEventListener("mouseenter",function(){
                            document.getElementById('txtSearch').value = allChildren[i].innerText;
                            localStorage.setItem('search',allChildren[i].innerText)
                        })
                    }
                    for(let i = 0; i< childNum;i++){
                        allChildren[i].addEventListener("click",function(){
                            document.getElementById('searchSuggestion').style.display = "none"
                        })
                    }
                }   
            }
            var url ='/request?search='+str;
            searchReq.open("GET","data.json",true);
            searchReq.send()

            var toStore = document.getElementById('txtSearch').value;
            localStorage.setItem('search',toStore);
            
        }
        function changeStorage(){
            localStorage.setItem("addToTable",2)
        }
        function changeStorage2(){
            localStorage.setItem("addToWishlist",2)
        }

        function setUser(){
            // if(localStorage.getItem('tableData') == null){

                
            // }
        }


        // function setStorage(){
        // }

        // function hide(){
        //     document.getElementById("searchSuggestion").style.display = "none"
        // }
    </script>



</body>
</html>