@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success text-center">
                {{ session()->get('success_message') }}
            </div>
        @endif

        <div class="thank-you-section">
            <h1>Thank you for choosing</h1>
            <h1>NW Energy Direct!</h1>
            <p>A confirmation email was sent</p>
            <div class="spacer"></div>
            <div>
                <a href="{{ url('/') }}" class="button">Home Page</a>
            </div>
        </div>

@endsection
