@extends('layouts.app')




@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        New Product      	
      </div>    	
      <div class="panel-body">
      	<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
      		{{ csrf_field()}}
      		<div class="form-group">
      			<label for="name">Name</label>
      			<input type="text" name="name" value="{{ old('name')}}" class="form-control">
      		</div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ old('price')}}" class="form-control">
          </div>
      		<div class="form-group">
      			<label for="image">Image</label>
      			<input type="file" name="image" class="form-control">
      		</div>
      		<div class="form-group">
      			<label for="description">Description</label>
      			<textarea name="description" id="description" cols="30" rows="10" class="form-control"> {{ old('description')}}</textarea>
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