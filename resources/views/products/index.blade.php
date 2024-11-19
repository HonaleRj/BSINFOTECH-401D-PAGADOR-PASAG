@extends('layouts.app')

@section('main')


<div class="d-flex justify-content-between">
  <h5 class="text-light"><i class="bi bi-journal-richtext"></i> Product Details</h5>
  <a class="btn btn-primary" href="products/create" role="button"><i class="bi bi-plus-circle"> </i> New Product</a>
</div>


<div class="row mt-3">
  @foreach($products as $product)
  @php
      $index = ($products->currentpage() - 1) * $products->perpage() + $loop->iteration;
  @endphp

  <div class="col-md-3 mb-4">
    <div class="card" style="background-color: #212121; color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);">
      <img src="products/{{ $product->image }}" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;" alt="Product Image">
      
      <div class="card-body">
        <h5 class="card-title">
          <a href="products/{{ $product->id }}/show" class="text-light">{{ $product->name }}</a>
        </h5>
        <p class="card-text">Original Price <small class="text-danger text-decoration-line-through">${{ $product->mrp }}</small></p>
        <p class="card-text">Selling Price <small class="text-success">${{ $product->price }}</small></p>
      </div>

      <div class="card-footer bg text-center">
        <a href="products/{{ $product->id }}/edit" class="btn btn-secondary btn-md w-100 mb-2">
          <i class="bi bi-pencil-square"></i> Edit
        </a>
        <a href="products/{{ $product->id }}/delete" onclick="return confirm('Are you sure you want to Delete!!')" class="btn btn-danger btn-md w-100">
          <i class="bi bi-trash"></i> Delete
        </a>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
  {{ $products->links() }}
</div>

@endsection
