@extends('layouts.app')

@section('main')

    <div class="bg-dark text-light p-3">
        <h5><i class="bi bi-journal-richtext"></i>Product Details</h5>
        <hr />
        <nav class="my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-light">Home</a></li>
                <li class="breadcrumb-item active">Product Details</li>
            </ol>
        </nav>

        <div class="card bg-dark text-light">
            <div class="row no-gutters">
                
                <div class="col-md-4">
                    <img src="/products/{{ $product->image }}" class="card-img-left img-fluid" style="max-width: 80%; height: auto; margin: 20px;" alt="{{ $product->name }}">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                        <p class="card-text text-secondary">{{ $product->description }}</p>
                        <p class="fw-semibold">Original Price <small class="text-danger text-decoration-line-through">{{ $product->mrp }}</small></p>
                        <p class="fw-bold">Selling price <small class="text-success">{{ $product->price }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
