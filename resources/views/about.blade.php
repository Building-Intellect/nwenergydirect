@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')
    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>About</span>
    @endcomponent

    <div class="container text-center">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br />
        <h1 class="text-center">More Content Coming Soon</h2>
        <i class="fa fa-cogs" style="font-size:64px;margin:40px;"></i>
        <br />
    </div>
@endsection
