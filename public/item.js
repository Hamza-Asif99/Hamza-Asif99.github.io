function readData(){

    var image = localStorage.getItem("image");      //This file takes data from localStorage and shows the specific item the 
    var title = localStorage.getItem("title");      // user clicked on. 
                                                    // Belongs to items.html
    var price = localStorage.getItem("price");
    var description = localStorage.getItem("description");

    document.getElementById("productImage").setAttribute("src",image);
    document.getElementById("productTitle").innerText = title;
    document.getElementById("productPrice").innerText = price;
    document.getElementById("description").innerText = description;
}

readData();


document.getElementById("shoppingCart").addEventListener("click",function(){
    localStorage.setItem("addToTable",1)
})
document.getElementById("wishList").addEventListener("click",function(){
    localStorage.setItem("addToWishlist",1)
})
function changeStorage(){
    localStorage.setItem("addToTable",2)
}
changeStorage();
