@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="text-primary text-center mt-5 mb-5">Add Category </h3>
            <form method="POST" action="{{ route('category.store') }}">
                @csrf


                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"
                        placeholder="Name of the category">
                </div>
                <div class="mb-3">
                    <label for="parentCategory" class="form-label">Parent Categories</label>
                    <select class="form-select" aria-label="size 3 select example" name="parentCategory"
                        id="parentCategory" value="{{old('parentCategory')}}">
                        <option {{ !(old('parentCategory')) ? "selected" :""
                            }} value="00">Select the Parent
                            Category</option>
                        @foreach($categories as $category)
                        <option {{ $category->id==(old('parentCategory')) ? "selected" :""
                            }} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary" type="submit">Add Category</button>
                </div>

            </form>
        </div>

    </div>
</div>


@endsection