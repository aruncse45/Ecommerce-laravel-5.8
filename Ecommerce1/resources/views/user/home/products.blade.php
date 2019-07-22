@extends('user.homepage_with_logout')

@section('maincontent')
	
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Products Name</li>
    </ul>
	<h3> Products Name <small class="pull-right"> 40 products are available </small></h3>	
	<hr class="soft"/>
	<p>
		Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
	</p>
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	  
<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		@foreach($products as $p)
		<div class="row">	  
			<div class="span2">
				<img height="100px" width="100px" src="{{URL::asset('admin/product_image/'.$p->image)}}" alt=""/>
			</div>
			<div class="span4">
				<h3>{{$p->category}}</h3>				
				<hr class="soft"/>
				<h5>{{$p->model_name}} </h5>
				<p>
				{{$p->description}}
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form method="POST" action="/add_to_cart" class="form-horizontal qtyFrm">
					@csrf
					<h3> {{$p->price}}</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br/>
					  <button type="submit" class="btn btn-large btn-primary">Add to <i class=" icon-shopping-cart"></i></button>
					  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					
					<input type="hidden" name="id" value="{{$p->id}}">
					<input type="hidden" name="qty" value="1">
				</form>
			</div>
		</div>
		@endforeach
		<hr class="soft"/>
	
		<hr class="soft"/>
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			@foreach($products as $p)
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img height="100px" width="100px" src="{{URL::asset('admin/product_image/'.$p->image)}}" alt=""/></a>
				<div class="caption">
				  <h3>{{$p->category}}</h3>
				  <h3>{{$p->model_name}}</h3>
				  <p> 
					{{$p->description}} 
				  </p>
					<form method="POST" action="/add_to_cart">
						@csrf
				   		<h4 style="text-align:center">
				   			<a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a>
				   			<button type="submit" class="btn btn-medium btn-primary">Add to <i class=" icon-shopping-cart"></i></button> 
				   			<a class="btn btn-primary" href="#">{{$p->price}}</a></h4>

				   		<input type="hidden" name="id" value="{{$p->id}}">
					<input type="hidden" name="qty" value="1">
					</form>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
	<hr class="soft"/>
	</div>
</div>

	<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
			<ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul>
			</div>
			<br class="clr"/>

@endsection