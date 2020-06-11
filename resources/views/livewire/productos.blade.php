
<div class="special">
	<div class="container">
		<h3>Ofertas especiales</h3>
		<div class="specia-top">
			<ul class="grid_2">
                @foreach ($products as $product)
		<li>
				<a href="details.html"><img loading="lazy" src={{$product->img}} class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>{{$product->name}}</h5>
					<div class=""><span class=""><h6>{{$product->price}}</h6></span></div>
				<div class="items_add"><span class="items_price">  <button wire:click="addcard({{$product->id}})">añadir al carrito</button></span></div>
				</div>
		</li>
        @endforeach
		<div class="clearfix"> </div>
	</ul>
		</div>
	</div>
</div>