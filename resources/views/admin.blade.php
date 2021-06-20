<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin Portal</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">  
    <!-- <script defer src="validation.js"></script> -->

</head>
<body>

    @extends('layouts.master')

    @section('content')
        <div class="container itemsDisplay">
            <div class="center text-center">
                <h3>Welcome To The Admin Portal</h3>
                
            </div>
            <div class="col-12 text-center">

                    <a href="/items">
                    
                        <ul class="li btn btn-default">Add Record</ul>
                    </a>
                    
                </div>
            <div class="row">
                @if(count($items) > 0)
                <table class="table text-light" style="background-color: rgba(1, 1, 1, 0.8)">
                    <div class="text-warning text-center p-4" style="background-color: rgba(1, 1, 1, 0.8)">Current Database</div>
                    <thead class="text-warning">
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Image-src</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Remove</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($items as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->image}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->desc}}</td>
                                <td>{{$item->category}}</td>
                                <td><i class="far fa-times-circle" style="color:red"></i></td>
                                <td><button class="btn">Edit</button></td>
                            
                            </tr>

                       @endforeach
                    </tbody>
                </table>
 
                @else
                    <p>No Items Added</p>
                @endif


        
                
            </div>
        </div>

    @endsection
</body>
</html>