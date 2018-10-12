@extends('layouts.app')




@section('content')

  @if(count($errors)>0)
    <ul class="list-group">
    	@foreach($errors->all() as $error)
	    	<li class="list-group-item text-danger">
	    		{{$error}}
	    	</li>
	    @endforeach
    </ul>
   @endif

    <div class="panel panel-default">
      <div class="panel-heading">
        New Product      	
      </div>    	
      <div class="panel-body">
      	<form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
      		{{ csrf_field()}}
          {{ method_field('PUT') }}
      		<div class="form-group">
      			<label for="name">Name</label>
      			<input type="text" name="name" value="{{ $product->name}}" class="form-control">
      		</div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $product->price}}" class="form-control">
          </div>
      		<div class="form-group">
      			<label for="image">Image</label>
      			<input type="file" name="image" class="form-control">
      		</div>
      		<div class="form-group">
      			<label for="description">Description</label>
      			<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $product->description}}</textarea>
      		</div>
      		<div class="form-group">
      			<div class="text-center">
      				<button class="btn btn-lg btn-success" type="submit">
      					Save Product
      				</button>
      			</div>
      		</div>

      	</form>
      </div>
    </div>

@stop