<!DOCTYPE html>
<html lang="en">
<head>

    <title>Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="design.css">
    <script defer src="helpDesk.js"></script>
    <script defer src="validation.js"></script>

</head>
<body class="helpDesk">

    @extends('layouts.master')


    @section('content')


    <div class="container itemsDisplay">
        <div class="center text-center">
            <h3>Welcome To The Help Desk</h3>
        </div>
                                    <!-- FAQ section the user can interact with. CLicking a question would show or hide the
                                        dummy text answer -->
        <div class="row">
            <div class="col-12 faqs">
                <h2>FAQs</h2>
                <div class="question">
                    <h4 >Why did my package not arrive? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>How Do I Return My Package? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>Received Faulty Item.What Now? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>How Do I Report Abuse? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>How Do I Avoid Scammers? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>I Received The Wrong Item.What Now? <i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
                <div class="question">
                    <h4>How Do I Track My Order?<i class="fas fa-chevron-down down"></i> <i style="display: none;" class="fas fa-chevron-up up"></i></h4>
                    <div style="display: none;" class="answer">
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolor iste, nisi a hic facere.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 submitTicket text-center form-group purple-border-focus">
                <h3 class="text-warning">Submit A Ticket</h3>
                <textarea name="" id="" class="form-control " rows="5" placeholder="Enter Your Complaint. Our Customer Support Representative Will Reach Out To You As Soon As Possible !"></textarea>
                <br>

                <button class="btn btn-danger">Submit</button>
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