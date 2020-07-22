@extends('base')

@section('title')
    Register
@endsection

@section('content')
    <h1>Register</h1>
    <div id="registration-form"></div>
@endsection

@push('scripts')
    <script src="{{ asset('js/register.js')}}"></script>
@endpush
