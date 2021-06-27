<!DOCTYPE html>
<html lang="en">
<head>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">  
    <title>Edit Record</title>
</head>
<body>
    
    @extends('layouts.master')

    @section('content')

    <div class="container" >
        <div class="row">
            <div class="col-12">
            <form class="text-warning m-3 p-4 " style="background-color: rgba(1, 1, 1, 0.8)"  method="post" action="/items" >
            @csrf

                <div class="form-group">
                    <label for="title">Item Title</label>
                    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title" value="{{$items[0]->title}}" required>
                    
                </div>

                <div class="form-group">
                    <label for="price">Item Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{$items[0]->price}}" required>
                </div>

                <div class="form-group">
                    <label for="img-src">Item Image source</label>
                    <input type="text" class="form-control" id="img-src" name="image" placeholder="Enter Image source" value="{{$items[0]->image}}" required>
                </div>

                <div class="form-group">
                    <label for="desc">Item description</label>
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter description" value="{{$items[0]->desc}}" required>
                </div>

                <div class="form-group">
                    <label for="Category">Item Category</label>
                    <input type="text" class="form-control" id="Category" name="category" placeholder="Enter Category" value="{{$items[0]->category}}" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Item quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" value="{{$items[0]->quantity}}" required>
                </div>

            
                <!-- <a href="/store"> -->
                    <button type="submit"  class="btn btn-danger text-center">Add Record</button>
                <!-- </a> -->

            </form>
            </div>
        </div>
    </div>

    

    @endsection

</body>
</html