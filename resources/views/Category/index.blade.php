@extends('layouts.app')

@section('content')
<div class="row">
    <h3 class="text-primary text-center mt-5 mb-5">Category List </h3>
    <div class="col-2"></div>
    <div class="col-8 align-center row">
        <div class="col-4 mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-outline-primary align-center mt-4">Add
                Category</a>
        </div>
        <div class="col-8 mb-3">
            @if(Session::has('success'))
            <div class="alert alert-success">
                <ul>

                    <li>{{Session::get('success')}}</li>

                </ul>

            </div>
            @endif
        </div>

        <table class="table ">
            <tr class="bg-primary text-white">
                <th>ID</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Action</th>
            </tr>
            @foreach($categories as $categorie)
            <tr>
                <td>{{$categorie->id}}</td>
                <td>{{$categorie->name}}</td>
                <td>
                    @if (empty(!$categorie->category_parent))
                    {{$categorie->category_parent->name}}
                    @else
                    -
                    @endif
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>


@endsection