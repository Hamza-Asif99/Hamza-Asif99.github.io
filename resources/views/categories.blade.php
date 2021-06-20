<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Categories Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="design.css">
    <script defer src="categories.js"></script>
    <script defer src="validation.js"></script>

</head>

<body>
    @extends('layouts.master')


    @section('content')

    <div class="container itemsDisplay">
        <div class="center text-center">

            <h3 id="pageTitle"></h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>

                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
                        <div class="details">

                            <h2></h2>
                            <span></span>
                        </div>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="item">
                    <a href="/item" class="anchor">

                        <img src="" id="images" alt="Item display">
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

    @endsection
    
        <script>
            function changeStorage(){
                localStorage.setItem("addToTable",2)
            }
            function changeStorage2(){
                localStorage.setItem("addToWishlist",2)
            }
        </script>
</body>
</html>