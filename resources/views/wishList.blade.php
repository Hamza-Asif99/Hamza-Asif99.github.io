<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="design.css">
    <script defer src="validation.js"></script>
    <!-- <script defer src="wishList.js"></script> -->

</head>
<body onload="listFunctionality()">

    @extends('layouts.master')

    @section('content')


    @if(Session::has('user'))

    <div class="container itemsDisplay">
        <div class="center text-center">
            <h3 id="header" >Add items to your wishlist</h3>

        </div>        

        <div class="row categoriesRow hideOnAddition">
            <div class="col-12 item">
                <h4>Wishlist Is Empty</h4>
                <p class="text-dark"> For inspiration, browse the categories below, or just revisit your latest searches.
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
                        <th scope="col">Price</th>
                        <th scope="col">Remove</th>
                        <th scope="col">Quick Add</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                  </table>
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
    <div class="container itemsDisplay" id="latestSearchDiv2" style="display: none;" >
        <div class="center text-center">

            <h3>Recommended For You</h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

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
                    <a href="/item" class="anchor">

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
                    <a href="/item" class="anchor">

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
        var userList = "<?php echo Session::get('user')?>"+"List"
        function listFunctionality(){
            if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
    localStorage.setItem("addToWishlist",2);
    console.log("page reloaded")
}
function addingItems(){
    if(localStorage.getItem("addToWishlist") == 1){
        if(localStorage.getItem(userList) == null){
            appendRow(0)
        }
        else{
            var carryOn = alreadyAdded()
            refreshRows()
            if(carryOn == 1){
                appendRow(1)
            }
        }
    }
    if(localStorage.getItem("addToWishlist")==2 && localStorage.getItem(userList)!=null){
        refreshRows()
    }
    display()

}
addingItems()

function categories(){
    var allCats = document.querySelectorAll(".hideOnAddition a")
    for(let i = 0; i<allCats.length; i++){
        allCats[i].addEventListener("click",function(){
            localStorage.setItem("toLoad",allCats[i].innerText)
        })
    }
}
categories()

function changeStorage(){
    localStorage.setItem("addToTable",2)
}
function changeStorage2(){
    localStorage.setItem("addToWishlist",2)
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


function appendRow(switcher){
     var newRow= document.createElement("tr");
        var table =document.querySelector("#list tbody");
        table.append(newRow);

        var newtd= document.createElement("td");
        newtd.innerText = localStorage.getItem("title")
        
        var newtd2= document.createElement("td");
        newtd2.innerText = localStorage.getItem("price")

        var newtd3 = document.createElement("td")
        var icon = document.createElement("i")
        icon.setAttribute("class", "far fa-times-circle")
        icon.style.color="red"
        newtd3.append(icon)

        var newtd4 = document.createElement("td")
        var button = document.createElement("button")
        button.setAttribute("class","btn")
        button.innerText = "Add to cart"
        newtd4.append(button)

        newRow.append(newtd);
        newRow.append(newtd2);
        newRow.append(newtd3)
        newRow.append(newtd4)

        if(switcher == 1){
            var data = JSON.parse(localStorage.getItem(userList))
            data.push({name:newtd.innerText,price:newtd2.innerText})
            localStorage.setItem(userList,JSON.stringify(data))
        }
        else{
            var data = [
                    { 
                        name: newtd.innerText,
                        price:newtd2.innerText
                    }
            ];
            localStorage.setItem(userList,JSON.stringify(data))
            
        }
        localStorage.setItem("addToWishlist",0)

}
function alreadyAdded(){
    var data = JSON.parse(localStorage.getItem(userList))
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
function refreshRows(){
            var data = JSON.parse(localStorage.getItem(userList))
            var objLength = Object.keys(data).length;

            for(let i = 0; i<objLength;i++){
                var newRow= document.createElement("tr");
                var table =document.querySelector("#list tbody");
                table.append(newRow);

                var newtd= document.createElement("td");
                newtd.innerText = data[i].name;
                
                var newtd2= document.createElement("td");
                newtd2.innerText = data[i].price
                
                var newtd3 = document.createElement("td")
                var icon = document.createElement("i")
                icon.setAttribute("class", "far fa-times-circle")
                icon.style.color="red"
                newtd3.append(icon)

                var newtd4 = document.createElement("td")
                var button = document.createElement("button")
                button.setAttribute("class","btn ")
                button.innerText = "Add to cart"
                newtd4.append(button)
                
                newRow.append(newtd);
                newRow.append(newtd2);
                newRow.append(newtd3);
                newRow.append(newtd4);

            }
}

function display(){

    if(JSON.parse(localStorage.getItem(userList)) != null){
        document.getElementsByClassName("hideOnAddition")[0].style.display = "none";

        document.getElementById("header").innerText = "Your wishlist"
    }
    else{
        document.querySelector(".table").style.display = "none";
        
    }
}
function latestSearches(){
    let allImages = document.querySelectorAll(".anchor img");
    let allTitles = document.querySelectorAll(".anchor h2");    
    let allPrices = document.querySelectorAll(".anchor span")
    let allDescriptions = document.querySelectorAll(".item p")

    allImages[0].setAttribute("src",localStorage.getItem("latestImage1"))
    allTitles[0].innerText = localStorage.getItem("latestTitle1")
    allPrices[0].innerText = localStorage.getItem("latestPrice1")
    // allDescriptions[0].innerText = localStorage.getItem("latestPrice1")

    if(localStorage.getItem("latestImage2")!=null){
        allImages[1].setAttribute("src",localStorage.getItem("latestImage2"))   
        allTitles[1].innerText = localStorage.getItem("latestTitle2")
        allPrices[1].innerText = localStorage.getItem("latestPrice2")
    }
    if(localStorage.getItem("latestImage3")!=null){
        allImages[2].setAttribute("src",localStorage.getItem("latestImage3"))
        allTitles[2].innerText = localStorage.getItem("latestTitle3")
        allPrices[2].innerText = localStorage.getItem("latestPrice3")
        document.getElementById("latestSearchDiv").style.display = "none"
        document.getElementById("latestSearchDiv2").style.display = "block"
    }
}
latestSearches()

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

function itemRemoval(indexSpecified){
    var allCrosses = document.querySelectorAll("#list tr i")
    var alltr = document.querySelectorAll("tbody tr")
    var data = JSON.parse(localStorage.getItem(userList))

    if(indexSpecified != null){
        alltr[indexSpecified].remove()
        data.splice(indexSpecified,1)
        localStorage.setItem(userList,JSON.stringify(data))
        localStorage.setItem("addToWishlist",2)
        checkNull()
    }
    else{
        for(let i = 0; i<allCrosses.length;i++){
            allCrosses[i].addEventListener("click",function(){
                alltr[i].remove()
                data.splice(i,1)
                localStorage.setItem(userList,JSON.stringify(data))

                localStorage.setItem("addToWishlist",2)
                checkNull()
                location.href = "/wishList"

            })
        }
    }

}
itemRemoval()

function checkNull(){
    var alltr = document.querySelectorAll("tbody tr")

    if(alltr.length == 0){
        console.log("check")
        localStorage.removeItem(userList)
    }
}

function addingToCart(){
    var allButtons = document.querySelectorAll("#list tr button")
    var allRows = document.querySelectorAll("tbody tr")

    for(let i =0; i < allRows.length ;i++){
        allButtons[i].addEventListener("click",function(){
            localStorage.setItem("title",allRows[i].children[0].innerText)
            localStorage.setItem("price",allRows[i].children[1].innerText)
            localStorage.setItem("addToTable",1)
            itemRemoval(i)
            location.href = "/shoppingCart"
        })
    }
}
addingToCart()
        }
    </script>

</body>