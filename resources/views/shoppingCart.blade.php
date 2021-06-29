<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="design.css">
    <script defer src="validation.js"></script>
    <!-- <script defer src="shoppingList.js"></script> -->

 
</head>
<body onload="cartFunctionality()">

    @extends('layouts.master')

    @section('content')
    
    @if(Session::has('user'))

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
                    <li><a class="p-2" href="{{ route('category.category','Men\'s Fashion')}}">Men's Fashion</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Women\'s Fashion')}}">Women's Fashion</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Gym Clothing')}}">Gym Clothing</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Electronics</h2>
                <ul class="ulElectronics">
                    <li><a class="p-2" href="{{ route('category.category','Phone')}}">Phone</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Computers')}}">Computers</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Monitor')}}">Monitor</a></li>
                </ul>                
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Pets</h2>
                <ul class="ulClothing">
                    <li><a class="p-2" href="{{ route('category.category','Pet Toys')}}">Pet Toys</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Pet Food')}}">Pet Food</a></li>
                </ul>                
            </div>
            <div class="col-6 col-sm-3 item text-center">
                <h2>Outdoors</h2>
                <ul class="ulClothing">
                    <li><a class="p-2" href="{{ route('category.category','Hiking Gear')}}">Hiking Gear</a></li>
                    <li><a class="p-2" href="{{ route('category.category','Gym Equipment')}}">Gym Equipment</a></li>
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

            <h3>Recommended For You</h3>
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


    @else
        <p class="text-dark text-center p-4 bg-warning">Login to access this page</p>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    @endif

    @endsection

    <script>
        var userCost = "<?php echo Session::get('user')?>"+"Cost"

        function cartFunctionality(){
            if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
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
    if(localStorage.getItem("<?php echo Session::get('user')?>") == null){
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
        localStorage.setItem(userCost,JSON.stringify(baseCostss))
        localStorage.setItem("<?php echo Session::get('user')?>",JSON.stringify(data));
    }
    else{
        var carryOn = alreadyAdded();
            var baseCostss = JSON.parse(localStorage.getItem(userCost))
            var data = JSON.parse(localStorage.getItem("<?php echo Session::get('user')?>"))
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

            localStorage.setItem(userCost,JSON.stringify(baseCostss))
            localStorage.setItem("<?php echo Session::get('user')?>",JSON.stringify(data))
            localStorage.setItem("addToTable",0);
        }
        
    }
}
if(localStorage.getItem("addToTable")==2 && localStorage.getItem("<?php echo Session::get('user')?>")!=null){
    var data = JSON.parse(localStorage.getItem("<?php echo Session::get('user')?>"))
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

if(JSON.parse(localStorage.getItem("<?php echo Session::get('user')?>")) != null){
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
        }
}

function alreadyAdded(){
    var data = JSON.parse(localStorage.getItem("<?php echo Session::get('user')?>"))
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

    var data = JSON.parse(localStorage.getItem("<?php echo Session::get('user')?>"))
    var baseCostss = JSON.parse(localStorage.getItem(userCost))


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
            localStorage.setItem("<?php echo Session::get('user')?>",JSON.stringify(data))

            baseCostss.splice(i,1)

            localStorage.setItem(userCost,JSON.stringify(baseCostss))
            localStorage.setItem("addToTable",2)

            checkNull()

            location.href = "/shoppingCart"

        })
    }

}
if(localStorage.getItem("<?php echo Session::get('user')?>")!=null){

    cartInteractivity();
}
function checkNull(){
    var alltr = document.querySelectorAll("tbody tr")

    if(alltr.length == 0){
        localStorage.removeItem("<?php echo Session::get('user')?>")
    }
}

function costCalculate(index,quantity){
    console.log(index)
    var baseCostss = JSON.parse(localStorage.getItem(userCost))
    console.log(baseCostss[index])
    console.log("quantity is : "+quantity)
    var price = parseInt(baseCostss[index].price)*quantity

    var allRows = document.querySelectorAll("tbody tr")
    allRows[index].children[2].innerText ="$"+ price
    totalAmount()

}

function totalAmount(){
    var total=0;
    var allRows = document.querySelectorAll("tbody tr")
    for(let i = 0; i<allRows.length;i++){
        total += parseInt(allRows[i].children[2].innerText.substring(1))
    }
    document.getElementById("amount").innerText ="$"+ total;

}
        }
    </script>

</body>
</html>