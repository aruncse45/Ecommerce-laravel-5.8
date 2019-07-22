@extends('admin.adminpage')

@section('maincontent')

	<h1>MANEGE PRODUCT</h1>
	<hr>
  <form method="POST" action="/pub_unpub_product">
    @csrf
  
	<table class="w3-table-all w3-centered">
    
    <tr>
    	<th>id</th>
      <th>Category</th>
      <th>product name</th>
      <th>Description</th>
      <th>price</th>
      <th>image</th>
      <th>Published</th>
      <th>Unpublished</th>
    </tr>
    
    <?php
		  $i =0; 
		?>

    @foreach ($productinfo as $p)
      <tr>
    		<td>{{++$i}}</td>
        <td>{{$p->category}}</td>
    		<td>{{$p->model_name}}</td>
    		<td>{{$p->description}}</td> 
        <td>{{$p->price}}</td>
        <td><img style="height: 50px; width: 50px" src="{{URL::asset('admin/upload_image/'.$p->image)}}"></td>
        <td><input type="radio" name="{{$p->id}}" value="yes"></td>
        <td><input type="radio" name="{{$p->id}}" value="no"></td>
      </tr>
    @endforeach
    

    
  </table><br><br>
  <input type="submit" class="btn btn-primary" value="SUBMIT">
</form>

{{$productinfo->links()}}

@endsection