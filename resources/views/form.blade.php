
@extends('layouts.master')

@section('header')
<h2>Laravel Skills Test</h2>
@stop

@section('content')

  
    

<div class="row">
  <div class="col-md-2">&nbsp;</div>
  <div class="col-md-8">
      <div class="form-group">
        <label for="ProductName">Product Name:</label>
        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name">
      </div>
      <div class="form-group">
        <label for="quantity">Quantity in stock:</label>
        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity in stock">
      </div>
      <div class="form-group">
        <label for="price">Price per item:</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price per item">
      </div>
      <button type="submit" id="submit" class="btn btn-default">Submit</button>

    </div>  
   </div>
   <div class="col-md-2">&nbsp;</div>

</div>






 
@stop
