@extends('layout.default')

@section('content')
    @if(session('success'))
        <div class="relative mt-5 mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded max-w-screen-sm" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="container flex flex-col md:flex-row flex-wrap my-6 font-bold lg:mt-8 text-3xl">
        <h1 class="text-gray-900 page-title title-font">
            <span class="base" data-ui-id="page-title-wrapper">Hello, {{ $firstname }} {{ $lastname }}</span>
        </h1>
        <a data-test="logout" href="{{ url('logout') }}" class="btn btn-primary ml-1">Logout</a>
    </div>
@stop
