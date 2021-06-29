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
    if(localStorage.getItem("tableData") == null){
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
    var total=0;
    var allRows = document.querySelectorAll("tbody tr")
    for(let i = 0; i<allRows.length;i++){
        total += parseInt(allRows[i].children[2].innerText.substring(1))
    }
    document.getElementById("amount").innerText ="$"+ total;

}