@extends('admin.adminpage')

@section('maincontent')

<h1>PRODUCT DETAILS</h1>

<hr>

    {{Session::get('msg')}}
<form method="POST" action="/save_edit_product" enctype="multipart/form-data">
  @csrf
  
    <div class="form-group">
      <label for="exampleInputEmail1">Category</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="category name" name="category" value="{{$p->category}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Model name</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="product model name" name="model_name" value="{{$p->model_name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="exampleInputcategory" aria-describedby="emailHelp" placeholder="product price" name="price" value="{{$p->price}}">
    </div>
    <div class="form-group">
      <label for="exampleInputdiscription">Discription</label>
      <textarea class="form-control" id="exampleInputdiscription" placeholder="categorydiscription" name="description" value="{{$p->description}}"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputdiscription">Image</label>
      <input class="image" class="form-control" id="file" aria-describedby="emailHelp" type="file" name="image" onchange="checkfiledetails()">
    </div>
    <div class="form-group">
      <img id="b" height="50px" width="50px" src="{{URL::asset('admin/upload_image/'.$p->image)}}">
      <img id="blah" height="50px" width="50px" src="#">
    </div>
	
  	<input type="hidden" name="id" value="{{$p->id}}">
    <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
    <br><br>
</form>

<script type="text/javascript">
	
	function checkfiledetails(){
		document.getElementById('b').style.display = 'none';
      var fi = document.getElementById('file');
      if (fi.files.length > 0) {
        for (var i = 0; i <= fi.files.length - 1; i++) {
          var filename, fileextension;
          filename = fi.files.item(i).name;
          fileextension = filename.replace(/^.*\./, '');
          if (fileextension == 'png' || fileextension == 'PNG' || fileextension == 'jpg' || fileextension == 'JPG' ||fileextension == 'jpeg' || fileextension == 'JPEG') {
            readimagefile(fi.files.item(i));
          }
          else{$("#wa").text("must be"+maxheight+"X"+maxwidth);}
        }
    
        function readimagefile(file){
           
            var reader = new FileReader();
            reader.onload = function(e){
              var img = new Image();
              img.src = e.target.result;
              img.onload = function(){
               $('#blah').attr('src', e.target.result);
              }
            
            };
          reader.readAsDataURL(file);
        }

      }
}
</script>
@endsection