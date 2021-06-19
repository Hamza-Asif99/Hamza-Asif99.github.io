
var allImages = document.querySelectorAll(".anchors img")
var allTitles = document.querySelectorAll(".anchors h2");
var allDescriptions = document.querySelectorAll(".popItem p");
var allPrices= document.querySelectorAll(".anchors span");  //This script puts some default items on the home page.
let allAnchors = document.querySelectorAll(".anchor") 
let popRightNow = document.querySelectorAll(".anchors")                                                             // It also allows interactivity with the page where user can navigate through
                                                           // the categories section on the left hand side. 
                                                           // Belongs to index.html

function latestSearches(image,title,price,description){
 
        let changeNow = Math.floor(Math.random() * 10);

        localStorage.setItem("latestChange",changeNow);
        
        if(localStorage.getItem("latestImage1")==null || localStorage.getItem("latestChange") < 3){
            
            localStorage.setItem("latestImage1",image);
            localStorage.setItem("latestTitle1",title);
            localStorage.setItem("latestPrice1",price);
            // localStorage.setItem("latestDesc1",description);
            
        }
        if(localStorage.getItem("latestImage2") == null || localStorage.getItem("latestChange") >= 3 && localStorage.getItem("latestChange") < 7  ){
            
            localStorage.setItem("latestImage2",image);
            localStorage.setItem("latestTitle2",title);
            localStorage.setItem("latestPrice2",price);
            // localStorage.setItem("latestDesc2",description);
        }
        if(localStorage.getItem("latestImage3") == null || localStorage.getItem("latestChange") >= 7 ){
            
            localStorage.setItem("latestImage3",image);
            localStorage.setItem("latestTitle3",title);
            localStorage.setItem("latestPrice3",price);
            // localStorage.setItem("latestDesc3",description);
        }
}
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var  response = JSON.parse(xhttp.responseText);
            // console.log(response[10].length);
            for(let i = 0; i < response[10].length;i++){
                allImages[i].setAttribute("src",response[10][i].image);
                allTitles[i].innerText = response[10][i].title; 
                allPrices[i].innerText ="$"+ response[10][i].price;
                allDescriptions[i].innerText =response[10][i].description;

                // allAnchors[i].addEventListener("click",function(){
                //     localStorage.setItem("image",response[10][i].image);
                //     localStorage.setItem("title",response[10][i].title);
                //     localStorage.setItem("price","$"+response[10][i].price);
                //     localStorage.setItem("description",response[10][i].description);
                //     // latestSearches(response[10][i].image,response[10][i].title,"$"+response[10][i].price,response[10][i].description)
                // })

                popRightNow[i].addEventListener("click",function(){
                    localStorage.setItem("image",response[10][i].image);
                    localStorage.setItem("title",response[10][i].title);
                    localStorage.setItem("price","$"+response[10][i].price);
                    localStorage.setItem("description",response[10][i].description);
                    latestSearches(response[10][i].image,response[10][i].title,"$"+response[10][i].price,response[10][i].description)
                })

            }
        };
    }
    xhttp.open("GET", "data.json", true);
    xhttp.send();

var categoryLI = document.querySelectorAll(".desktopView ul li a");
var smallScreen = document.querySelectorAll(".smallView ul li a");

for(let i = 0; i < smallScreen.length; i++){
    smallScreen[i].addEventListener("click",function(){
        localStorage.setItem("toLoad",smallScreen[i].innerText)
        
    })
}
for(let i =0;i<categoryLI.length;i++){
    categoryLI[i].addEventListener("click",function(){
       
        document.getElementById("mainMenu").style.display = "block";
        document.querySelector(".categories").style.display = "none";
        const text = categoryLI[i].innerText;
        document.getElementById("h2").innerText = text;

        var uls = document.querySelectorAll(".clickToShow ul");

        if(document.getElementById("h2").innerText.localeCompare("Clothing") == 0){
            uls[0].style.display = "block";            
        }
        if(document.getElementById("h2").innerText.localeCompare("Electronics") == 0){
            uls[1].style.display = "block";
        }
        if(document.getElementById("h2").innerText.localeCompare("Pets") == 0){
            uls[2].style.display = "block";
        }
        if(document.getElementById("h2").innerText.localeCompare("Outdoors") == 0){
            uls[3].style.display = "block";
        }

    });
}
var mainMenu = document.getElementById("mainMenu").addEventListener("click",function(){
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("h2").innerText = "";

    document.querySelector(".categories").style.display = "block";
    document.querySelectorAll(".clickToShow ul")[0].style.display="none";
    document.querySelectorAll(".clickToShow ul")[1].style.display="none";
    document.querySelectorAll(".clickToShow ul")[2].style.display="none";
    document.querySelectorAll(".clickToShow ul")[3].style.display="none";
});

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