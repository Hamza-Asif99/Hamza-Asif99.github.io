<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="design.css">  
    <!-- <script defer src="script.js"></script> -->
    <!-- <script defer src="validation.js"></script> -->

    <title>Search Results</title>
</head>
<body onload="heading()">
    @extends('layouts.master')

    @section('content')

    @if(count($items)>0)
        <div class="container itemsDisplay">
            <div class="center text-center">
                <h3 id="header"> </h3>
            </div>
            <div class="row">
            @foreach($items as $item)
                <div class="col-12">
                    <div class="item" style="display:block">
                        <a href="/item" class="anchor">
                        <div class="row">
                        <div class="col-4">
                        
                         <img src="{{$item->image}}" id="images" alt="Item display">
                        </div>
                        <div class="col-8">
                        
                            <div class="details">

                                <h2 id="title">{{$item->title}}</h2>
                                <span id="price">${{$item->price}}</span>
                            </div>
                            <p id="description">{{$item->desc}}</p>
                        </div>
                        </div>
                        
                        </a>
                    </div>
                </div>

            @endforeach

            </div>
        </div>
        

    @else
    <div class="itemsDisplay">
        <div class="center text-center">
            <h3 id="header"> </h3>
        </div>
        <div class="item">
            <p class="text-dark text-center">This Item Does Not Exist</p>
            <br>
            <br>

        </div>
        <br>
        <br>
        <br>
        <br><br><br>
    </div>
    @endif

    <!-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="itemsDisplay">
                    <img src="" id alt="">
                    <h2></h2>

                </div>
            </div>
        </div>
    </div> -->

    @endsection

    <script>
        function heading(){
            let allImages = document.querySelectorAll(".anchor img");
            let allTitles = document.querySelectorAll(".anchor h2");     
            let allPrices = document.querySelectorAll(".anchor span")   
            let allAnchors = document.querySelectorAll(".anchor")
            let allDescs = document.querySelectorAll(".anchor p")

            document.querySelector('h3').innerText = "Search results for "+localStorage.getItem('search')

            for(let i = 0;i<allAnchors.length;i++){
            allAnchors[i].addEventListener("click",function(){
                localStorage.setItem("image",allImages[i].getAttribute("src"))
                localStorage.setItem("title",allTitles[i].innerText)
                localStorage.setItem("price",allPrices[i].innerText)
                localStorage.setItem("description",allDescs[i].innerText)
                latestSearches(allImages[i].getAttribute("src"),allTitles[i].innerText,allPrices[i].innerText,allDescs[i].innerText)

            })
}
        }
        function latestSearches(image,title,price,description){
 
        let changeNow = Math.floor(Math.random() * 10);

        localStorage.setItem("latestChange",changeNow);
        
        if(localStorage.getItem("latestImage1")==null || localStorage.getItem("latestChange") < 3){
            
            localStorage.setItem("latestImage1",image);
            localStorage.setItem("latestTitle1",title);
            localStorage.setItem("latestPrice1",price);
            
        }
        if(localStorage.getItem("latestImage2") == null || localStorage.getItem("latestChange") >= 3 && localStorage.getItem("latestChange") < 7  ){
            
            localStorage.setItem("latestImage2",image);
            localStorage.setItem("latestTitle2",title);
            localStorage.setItem("latestPrice2",price);
        }
        if(localStorage.getItem("latestImage3") == null || localStorage.getItem("latestChange") >= 7 ){
            
            localStorage.setItem("latestImage3",image);
            localStorage.setItem("latestTitle3",title);
            localStorage.setItem("latestPrice3",price);
        }
        }
    </script>
    
</body>
</html>