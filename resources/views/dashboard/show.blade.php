@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Plant Item
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg mt-2">
            {{$item->name}}
            <br> <img src="{{$item->filename}}" alt="Inventory Item" width="640" height="480">
        </div>
        <div class="w-4/12 bg-white p-6 rounded-lg mt-2">
            <ul>
                <li>
                    Price: {{$item->price}}
                </li>
                <li>
                    Location: {{$item->location}}
                </li>
                <li>
                    Quantity: {{$item->quantity}}
                </li>
                <li>
                    Category: {{$item->category}}
                </li>
            </ul>
        </div>
    </div>            
@endsection