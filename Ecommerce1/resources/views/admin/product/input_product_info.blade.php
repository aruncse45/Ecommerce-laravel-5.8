@extends('admin.adminpage')

@section('maincontent')

<h1>PRODUCT DETAILS</h1>

<hr>

    {{Session::get('msg')}}
<form method="POST" action="/save_product_info" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Category</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="category name" name="category" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Model name</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="product model name" name="model_name" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="product price" name="price" value="">
    </div>
    <div class="form-group">
      <label for="exampleInputdiscription">Discription</label>
      <textarea class="form-control" id="exampleInputdiscription" placeholder="categorydiscription" name="description" value=""></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputdiscription">Image</label>
      <input class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" type="file" name="image">
    </div>
    


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection