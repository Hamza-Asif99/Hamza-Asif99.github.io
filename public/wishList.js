if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
    localStorage.setItem("addToWishlist",2);
    console.log("page reloaded")
}
function addingItems(){
    if(localStorage.getItem("addToWishlist") == 1){
        if(localStorage.getItem("wishlistData") == null){
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
    if(localStorage.getItem("addToWishlist")==2 && localStorage.getItem("wishlistData")!=null){
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
            var data = JSON.parse(localStorage.getItem("wishlistData"))
            data.push({name:newtd.innerText,price:newtd2.innerText})
            localStorage.setItem("wishlistData",JSON.stringify(data))
        }
        else{
            var data = [
                    { 
                        name: newtd.innerText,
                        price:newtd2.innerText
                    }
            ];
            localStorage.setItem("wishlistData",JSON.stringify(data))
            
        }
        localStorage.setItem("addToWishlist",0)

}
function alreadyAdded(){
    var data = JSON.parse(localStorage.getItem("wishlistData"))
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
            var data = JSON.parse(localStorage.getItem("wishlistData"))
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

    if(JSON.parse(localStorage.getItem("wishlistData")) != null){
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
    var data = JSON.parse(localStorage.getItem("wishlistData"))

    if(indexSpecified != null){
        alltr[indexSpecified].remove()
        data.splice(indexSpecified,1)
        localStorage.setItem("wishlistData",JSON.stringify(data))
        localStorage.setItem("addToWishlist",2)
        checkNull()
    }
    else{
        for(let i = 0; i<allCrosses.length;i++){
            allCrosses[i].addEventListener("click",function(){
                alltr[i].remove()
                data.splice(i,1)
                localStorage.setItem("wishlistData",JSON.stringify(data))

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
        localStorage.removeItem("wishlistData")
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