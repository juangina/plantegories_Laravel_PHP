@extends('layouts.app')

@section('content')
    <x-welcome message="Nice Component!">
        <x-slot name="title">
            <div class="flex justify-center">
                <div class="w-8/12 bg-white p-6 rounded-lg">
                    <h1>Plantegories (Plant Categories) - a</h1>
                    <p>Please <strong><a href="{{ route('login')}}" class="">login</a></strong> to use the Plantegories App.</p>
                    <h3>You must be a <strong><a href="{{route('register')}}">registered user</a></strong> to use Plantegories.</h3>
                    <h3>Please ask for a registration key to register and gain access.</h3>
                </div>
            </div>
        </x-slot>
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <h1>Plantegories (Plant Categories) - b</h1>
                <p>Please <strong><a href="{{ route('login')}}" class="">login</a></strong> to use the Plantegories App.</p>
                <h3>You must be a <strong><a href="{{route('register')}}">registered user</a></strong> to use Plantegories.</h3>
                <h3>Please ask for a registration key to register and gain access.</h3>
            </div>
        </div>
    </x-welcome>
@endsection