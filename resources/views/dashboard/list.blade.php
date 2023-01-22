@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Plant Item List
        </div>
    </div>

    @if($inventory->count())
        @foreach ($inventory as $image)
            <div class="flex justify-center">
                <div class="w-4/12 bg-white p-6 rounded-lg mt-2">
                    <a href="/dashboard/{{$image->id}}">{{$image->name}}</a>
                    <br> <img src="{{$image->url}}" alt="Different Plants">
                </div>
                <div class="w-4/12 bg-white p-6 rounded-lg mt-2">
                    <ul>
                        <li>
                            Price: {{$image->price}}
                        </li>
                        <li>
                            Location: {{$image->location}}
                        </li>
                        <li>
                            Quantity: {{$image->quantity}}
                        </li>
                        <li>
                            Category: {{$image->category}}
                        </li>
                    </ul>
                </div>

            </div>            
        @endforeach
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg mt-2">
                {{$inventory->links()}}
            </div>
        </div> 
           
    @else
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg mt-2">
                There are not posts
            </div> 
        </div>
    @endif

@endsection