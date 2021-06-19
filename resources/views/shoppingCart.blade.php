<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="design.css">
    <script defer src="validation.js"></script>

    <script src="https://kit.fontawesome.com/0793418c64.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="navMain">

            <a href="/" class="navbar-brand"><i class="fas fa-store" aria-hidden="true"></i>
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
                        <input type="password" id="passy2" class="form-control" placeholder="Password" onblur="validateSignup('errorPassName','passy2',/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/,8,'Password must contain atleast one uppercase letter,1 special character and one number')" required>
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
        if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
            // location.href = "shoppingCart.html";
            localStorage.setItem("addToTable",2);
            console.log("page reloaded")
        }

        function categories(){
            var allCats = document.querySelectorAll(".hideOnAddition a")
            for(let i = 0; i<allCats.length; i++){
                allCats[i].addEventListener("click",function(){
                    localStorage.setItem("toLoad",allCats[i].innerText)
                })
            }
        }
        categories()

        if(localStorage.getItem("addToTable") == 1){
            if(localStorage.getItem("tableData") == null){
                // console.log("check null")
                var newRow= document.createElement("tr");
                var table =document.querySelector("#list tbody");
                table.append(newRow);

                var newtd= document.createElement("td");
                newtd.innerText = localStorage.getItem("title")

                var errorDiv = document.createElement("div")
                var errorMessage = document.createTextNode("Enter valid number in the 1-9 range")
                errorDiv.append(errorMessage)
                table.append(errorDiv);
                errorDiv.style.display = "none"
                console.log(errorDiv.getAttribute("id"))
                console.log(errorDiv.innerText)
                var newtd2=document.createElement("td");
                var inputQuantity = document.createElement("input")
                inputQuantity.setAttribute("type","text")
                inputQuantity.style.width = "2rem"               

                newtd2.append(inputQuantity);
                
                var newtd3= document.createElement("td");
                newtd3.innerText = localStorage.getItem("price")

                var newtd4 = document.createElement("td")
                var icon = document.createElement("i")
                icon.setAttribute("class", "far fa-times-circle")
                icon.style.color="red"
                newtd4.append(icon)

                
                newRow.append(newtd);
                newRow.append(newtd2);
                newRow.append(newtd3);
                newRow.append(newtd4)

                localStorage.setItem("addToTable",0)
                var data = [
                        { 
                            name: newtd.innerText,
                            price:newtd3.innerText
                        }
                ];
                var baseCostss = [
                    {
                        price:parseInt(newtd3.innerText.substring(1))
                    }
                ];

                localStorage.setItem("baseCosts",JSON.stringify(baseCostss))
                localStorage.setItem("tableData",JSON.stringify(data));
            }
            else{
                var carryOn = alreadyAdded();
                    var baseCostss = JSON.parse(localStorage.getItem("baseCosts"))
                    var data = JSON.parse(localStorage.getItem("tableData"))
                    var objLength = Object.keys(data).length;

                    for(let i = 0; i<objLength;i++){
                        var newRow= document.createElement("tr");
                        var table =document.querySelector("#list tbody");
                        table.append(newRow);

                        console.log(data)

                        var newtd= document.createElement("td");
                        newtd.innerText = data[i].name;
                        console.log(data[i].name)

                        var errorDiv = document.createElement("div")
                        var errorMessage = document.createTextNode("Enter valid number in the 1-9 range")
                        errorDiv.append(errorMessage)
                        table.append(errorDiv);
                        errorDiv.style.display = "none"
                        console.log(errorDiv.getAttribute("id"))
                        console.log(errorDiv.innerText)
                        var newtd2=document.createElement("td");
                        var inputQuantity = document.createElement("input")
                        inputQuantity.setAttribute("type","text")
                        inputQuantity.style.width = "2rem"

                        newtd2.append(inputQuantity);
                        
                        var newtd3= document.createElement("td");
                        newtd3.innerText = data[i].price
                        
                        var newtd4 = document.createElement("td")
                        var icon = document.createElement("i")
                        icon.setAttribute("class", "far fa-times-circle")
                        icon.style.color="red"
                        newtd4.append(icon)
                        
                        newRow.append(newtd);
                        newRow.append(newtd2);
                        newRow.append(newtd3);
                        newRow.append(newtd4);
                    }
                if(carryOn == 1){
                
                    var newRow= document.createElement("tr");
                        var table =document.querySelector("#list tbody");
                        table.append(newRow);

                        var newtd= document.createElement("td");
                        newtd.innerText = localStorage.getItem("title")

                        var errorDiv = document.createElement("div")
                        var errorMessage = document.createTextNode("Enter valid number in the 1-9 range")
                        errorDiv.append(errorMessage)
                        table.append(errorDiv);
                        errorDiv.style.display = "none"
                        console.log(errorDiv.getAttribute("id"))
                        console.log(errorDiv.innerText)
                        var newtd2=document.createElement("td");
                        var inputQuantity = document.createElement("input")
                        inputQuantity.setAttribute("type","text")
                        inputQuantity.style.width = "2rem"

                        newtd2.append(inputQuantity);

                        
                        var newtd3= document.createElement("td");
                        newtd3.innerText = localStorage.getItem("price")

                        var newtd4 = document.createElement("td")
                        var icon = document.createElement("i")
                        icon.setAttribute("class", "far fa-times-circle")
                        icon.style.color="red"
                        newtd4.append(icon)
                        
                        
                        newRow.append(newtd);
                        newRow.append(newtd2);
                        newRow.append(newtd3);
                        newRow.append(newtd4);
                        // var val = newtd2.value;

                    data.push({name: newtd.innerText, quantity:inputQuantity.value,price:newtd3.innerText})
                    baseCostss.push({price:parseInt(newtd3.innerText.substring(1))})

                    localStorage.setItem("baseCosts",JSON.stringify(baseCostss))
                    localStorage.setItem("tableData",JSON.stringify(data))
                    localStorage.setItem("addToTable",0);
                }
                
            }
        }
        if(localStorage.getItem("addToTable")==2 && localStorage.getItem("tableData")!=null){
            var data = JSON.parse(localStorage.getItem("tableData"))
                var objLength = Object.keys(data).length;
                console.log(objLength)

                for(let i = 0; i<objLength;i++){
                    var newRow= document.createElement("tr");
                    var table =document.querySelector("#list tbody");
                    table.append(newRow);
                    console.log(data)
                    var newtd= document.createElement("td");
                    newtd.innerText = data[i].name;
                    console.log(data[i].name)


                    var errorDiv = document.createElement("div")
                        var errorMessage = document.createTextNode("Enter valid number in the 1-9 range")
                        errorDiv.append(errorMessage)
                        table.append(errorDiv);
                        errorDiv.style.display = "none"
                        console.log(errorDiv.getAttribute("id"))
                        console.log(errorDiv.innerText)
                        var newtd2=document.createElement("td");
                        var inputQuantity = document.createElement("input")
                        inputQuantity.setAttribute("type","text")
                        inputQuantity.style.width = "2rem"

                        newtd2.append(inputQuantity);

                    
                    var newtd3= document.createElement("td");
                    newtd3.innerText = data[i].price
                    
                    var newtd4 = document.createElement("td")
                    var icon = document.createElement("i")
                    icon.setAttribute("class", "far fa-times-circle")
                    icon.style.color="red"
                    newtd4.append(icon)

                    
                    newRow.append(newtd);
                    newRow.append(newtd2);
                    newRow.append(newtd3);
                    newRow.append(newtd4);
                }
        }

        if(JSON.parse(localStorage.getItem("tableData")) != null){
            document.getElementsByClassName("hideOnAddition")[0].style.display = "none";

            document.getElementById("header").innerText = "Shopping Cart"
        }
        else{
            document.querySelector(".table").style.display = "none";
            document.querySelector(".total").style.display = "none";
            
        }

        var anchors = document.querySelectorAll(".item ul li a");

        for(let i = 0; i < anchors.length; i++){
            anchors[i].addEventListener("click",function(){
            localStorage.setItem("toLoad",anchors[i].innerText)
        
        })
        }
        let allImages = document.querySelectorAll(".anchor img");
        let allTitles = document.querySelectorAll(".anchor h2");    
        let allPrices = document.querySelectorAll(".anchor span")
        let allDescriptions = document.querySelectorAll(".item p")

        allImages[0].setAttribute("src",localStorage.getItem("latestImage1"))
        allTitles[0].innerText = localStorage.getItem("latestTitle1")
        allPrices[0].innerText = localStorage.getItem("latestPrice1")
        // allDescriptions[0].innerText = localStorage.getItem("latestDesc1")

        if(localStorage.getItem("latestImage2")!=null){
            allImages[1].setAttribute("src",localStorage.getItem("latestImage2"))   
            allTitles[1].innerText = localStorage.getItem("latestTitle2")
            allPrices[1].innerText = localStorage.getItem("latestPrice2")
            // allDescriptions[1].innerText = localStorage.getItem("latestDesc2")
        }
        if(localStorage.getItem("latestImage3")!=null){
            allImages[2].setAttribute("src",localStorage.getItem("latestImage3"))
            allTitles[2].innerText = localStorage.getItem("latestTitle3")
            allPrices[2].innerText = localStorage.getItem("latestPrice3")
            document.getElementById("latestSearchDiv").style.display = "none"
            document.getElementById("latestSearchDiv2").style.display = "block"
        }

        function latestSearchesClick(){
            var allAnchors = document.querySelectorAll(".anchor")
            var allTitles = document.querySelectorAll(".anchor h2")
            var searchQuery=""

            for(let i = 0;i<allAnchors.length;i++){
                allAnchors[i].addEventListener("click",function(){
                    
                    var searchQuery = allTitles[i].innerText
                    // alert(searchQuery)
                    
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var  response = JSON.parse(xhttp.responseText);
                            // alert(response[0][0].title)
                            for(let i = 0; i < response.length;i++){
                                for(let j =0; j<response[i].length;j++){
                                    if(searchQuery.localeCompare(response[i][j].title) == 0){
                                        localStorage.setItem("title",response[i][j].title)
                                        localStorage.setItem("image",response[i][j].image)
                                        localStorage.setItem("price","$"+response[i][j].price)
                                        localStorage.setItem("description",response[i][j].description)
                                    }
                                }

                            }
                        };
                    }
                    xhttp.open("GET", "data.json", true);
                    xhttp.send();
                })
            }

        }
        latestSearchesClick()

        function changeStorage(){
            localStorage.setItem("addToTable",2)
        }
        function changeStorage2(){
            localStorage.setItem("addToWishlist",2)
        }

        function valueCalculate(){
            var quantityVal = document.getElementById("quantity").value;
            return quantityVal;
        }

        function validate(){
                var regex = /^[1-9]$/
                var ctrl = document.getElementById("quantity").value;
                if(regex.test(ctrl)==false){
                    document.getElementById("error").style.display = "block"
                    document.getElementById("quantity").style.border = "3px solid red"
                }
                else{
                    document.getElementById("error").style.display = "none";
                    document.getElementById("quantity").style.border = "3px solid green"
                    // document.getElementById("addNow").style.display = "block"
                }
        }

        function alreadyAdded(){
            var data = JSON.parse(localStorage.getItem("tableData"))
            var objLength = Object.keys(data).length;
            var switcher = 1;

            for(let i = 0; i <objLength ;i++){
                if(localStorage.getItem("title") == data[i].name){
                    alert("This item is already added")
                    switcher = 0;
                    break;
                }
                
            }
            return switcher;
        }

        function cartInteractivity(){
            var allRows = document.querySelectorAll("tbody tr input");
            
            var alltr = document.querySelectorAll("tbody tr")
            var allErrorDivs = document.querySelectorAll("#list div")
            var allCrosses = document.querySelectorAll("#list tr i")

            var data = JSON.parse(localStorage.getItem("tableData"))
            var baseCostss = JSON.parse(localStorage.getItem("baseCosts"))


            for(let i = 0 ; i < data.length;i++){
                allRows[i].addEventListener("blur",function(){
                    var regex = /^[1-9]$/
                    var ctrl = allRows[i].value;
                    if(regex.test(ctrl)==false){
                        allErrorDivs[i].style.display="block"
                        allRows[i].style.border="3px solid red"
                        allErrorDivs[i].style.color="red"
                    }
                    else{
                        allErrorDivs[i].style.display="none"
                        allRows[i].style.border="3px solid green"
                        costCalculate(i,allRows[i].value);
                    
                 }
                });
            }

            for(let i = 0; i<allCrosses.length;i++){
                allCrosses[i].addEventListener("click",function(){
                    alltr[i].remove()
                    data.splice(i,1)
                    localStorage.setItem("tableData",JSON.stringify(data))

                    baseCostss.splice(i,1)

                    localStorage.setItem("baseCosts",JSON.stringify(baseCostss))
                    localStorage.setItem("addToTable",2)

                    checkNull()

                    location.href = "/shoppingCart"

                })
            }

        }
        if(localStorage.getItem("tableData")!=null){

            cartInteractivity();
        }
        function checkNull(){
            var alltr = document.querySelectorAll("tbody tr")

            if(alltr.length == 0){
                localStorage.removeItem("tableData")
            }
        }

        function costCalculate(index,quantity){
            console.log(index)
            var baseCostss = JSON.parse(localStorage.getItem("baseCosts"))
            console.log(baseCostss[index])
            console.log("quantity is : "+quantity)
            var price = parseInt(baseCostss[index].price)*quantity

            var allRows = document.querySelectorAll("tbody tr")
            allRows[index].children[2].innerText ="$"+ price
            totalAmount()

        }
       
        function totalAmount(){
            // console.log("total amount")
            var total=0;
            var allRows = document.querySelectorAll("tbody tr")
            for(let i = 0; i<allRows.length;i++){
                total += parseInt(allRows[i].children[2].innerText.substring(1))
            }
            document.getElementById("amount").innerText ="$"+ total;

        }
        // totalAmount()
    </script>
</body>
</html>