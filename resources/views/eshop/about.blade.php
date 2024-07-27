@extends('eshop.layouts.app')
    @section('header')
        <h1 class="display-4 fw-bolder">About Us</h1>
    @endsection

    @section('content')
    <div class="lead">
        {{ app(\App\Settings\GeneralSettings::class)->about }}
    </div>
    @endsection

