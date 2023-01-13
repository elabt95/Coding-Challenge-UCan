@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="text-primary text-center mt-5 mb-5">Add Product </h3>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>

                </div>
                @endif
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Name of the product" value="{{old('name')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Description of the product" value="{{old('description')}}"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" id="exampleFormControlInput1"
                        placeholder="Price of the product" value="{{old('price')}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="formFile" value="{{old('image')}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Categories</label>
                    <select class="form-select" name="categories[]" size="3" multiple
                        aria-label="size 3 select example">
                        <option selected value="">Select Categories</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary" type="submit">Add Product</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection