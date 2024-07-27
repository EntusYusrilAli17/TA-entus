@extends('eshop.layouts.app')
    @section('header')
        <h1 class="display-4 fw-bolder">Order: {{ $order->id }}</h1>
    @endsection

    @section('content')

    <div class="alert alert-success" role="alert">
        Successfully ordered
    </div>

    @endsection

