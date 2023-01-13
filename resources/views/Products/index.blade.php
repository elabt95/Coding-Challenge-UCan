@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
    <div class="row">

        <product-component :products="{{$products}}" :categoriesv="{{$categoriesv}}"></product-component>
    </div>
</div>
@else
@endif
@endsection