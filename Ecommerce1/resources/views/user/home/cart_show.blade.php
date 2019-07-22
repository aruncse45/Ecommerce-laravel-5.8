@extends('user.homepage_with_logout')

@section('maincontent')

<h1 style="float: left">Cart Products</h1><h4 style="float: right;"><button class="btn btn-primary"><a style="color: white" href="/clear_cart">Clear Cart</a> </button></h4>
	<hr>
	<table class="w3-table-all w3-centered">
    
    <tr>
	    <th>Id</th>
      	<th>Product name</th>
	    <th>Price</th>
	    <th>Quantity</th>
		<th>Sub total</th>
		<th>Remove product</th>
    </tr>
    
    <?php
		  $i =0; 
		  $total = 0;
		?>

    @foreach ($cart_products as $p)
      	<tr>
	    	<td>{{++$i}}</td>
	    	<td>{{$p->name}}</td>
	        <td>{{$p->price}}</td>
	        <td>{{$p->quantity}}
				<!--<form method="POST" action="/update_cart">
					@csrf

		        	<input type="number" value="{{$p->quantity}}" min="1" name="quantity">
		        	<input type="hidden" value="{{$p->id}}" name="product_id" >
	        		<input type="submit" value="update">
				</form>-->
			</td> 
			<?php 
				$subtotal = $p->quantity*$p->price;
				$total = $total + $subtotal;
			?>
			<td>{{$subtotal}}.00 Tk</td>
			<td><a href="{{url('/remove_product/'.$p->id)}}">Remove</a></td>
      	</tr>
    @endforeach
    	<tr>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td>Total</td>
    		<td>{{$total}}.00 Tk</td>
    	</tr>

    
  </table>

@endsection