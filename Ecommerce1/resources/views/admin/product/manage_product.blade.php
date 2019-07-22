@extends('admin.adminpage')

@section('maincontent')

	<h1>MANEGE PRODUCT</h1>
	<hr>
	<table class="w3-table-all w3-centered">
    
    <tr>
    	<th>id</th>
      <th>Category</th>
      <th>product name</th>
      <th>Description</th>
      <th>price</th>
      <th>image</th>
      <th>change</th>
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
        <td><a href="{{url('/edit_product/'.$p->id)}}"><button class="btn btn-primary">UPDATE</button></a><a href="{{url('/delete_product/'.$p->id)}}">   <button class="btn btn-primary">DELETE</button></a></td>
      </tr>
    @endforeach

    
  </table>


{{$productinfo->links()}}

@endsection