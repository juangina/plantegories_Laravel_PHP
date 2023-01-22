@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{route('dashboard')}}" method="post">
                @csrf

                <div class="flex justify-center mb-4">

                    <div id="viewport" class="flex justify-center border-2 p-4">
                        <h3 class="text-center">Image Viewport</h3>
                        <div id='my_camera' class="p-2 mb-2">
                        </div>
                        <input class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="button" value="Take Snapshot" onClick="take_snapshot()">
                    </div>

                    <div id="imagecapture" class="flex justify-center border-2 p-4">
                        <h3 class="text-center">Image Capture</h3>
                        <div id='camera_image' class="p-2 mb-2">
                        </div>

                        <input class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type=button value="Save Snapshot" onClick="saveSnap()">

                        <input class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full mt-2" type=button value="Reset" onClick="resetCamera()">
                    </div>

                </div>

                <div class="mb-4">
                    <label for="filename" class="sr-only">Image Filename Saved After Snapshot</label>
                    <input type="text" name="filename" id="filename" placeholder="File Location - Required" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('filename') border-red-500 @enderror" value="{{ old('filename') }}">

                    @error('filename')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Item Name - Required" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="price" class="sr-only">Item Price</label>
                    <input type="text" name="price" id="price" placeholder="Enter Item Price - Required" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('price') border-red-500 @enderror" value="{{ old('price') }}">

                    @error('price')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="sr-only">Item Category</label>
                    <select name="category" id="category" placeholder="Select Item Category (optional)" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('location') border-red-500 @enderror" value="{{ old('location') }}">
                        <option value="plant">Plant</option>
                        <option value="flower">Flower</option>
                        <option value="tool">Tool</option>
                        <option value="pot">Pot</option>
                        <option value="soil">Soil</option>
                        <option value="seeds">Seeds</option>
                        <option value="miscellaneous">Miscellaneous</option>
                    </select>
                    
                    @error('category')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="location" class="sr-only">Plant Location</label>
                    <input type="text" name="location" id="location" placeholder="Enter Plant location (optional)" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('location') border-red-500 @enderror" value="{{ old('location') }}">

                    @error('location')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="quantity" class="sr-only">Plant Quantity</label>
                    <input type="text" name="quantity" id="quantity" placeholder="Enter Plant quantity (optional)" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('quantity') border-red-500 @enderror" value="{{ old('quantity') }}">

                    @error('quantity')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Save to Inventory</button>
                </div>

            </form>
        </div>
    </div>

    <div id="debug" style="height: 20px">
        
    </div>

    <script>

        document.addEventListener('DOMContentLoaded', (event) => {
            //Configure a few settings and attach camera
            Webcam.set({
                width: 250,
                height: 188,
                image_format: 'jpeg',
                jpeg_quality: 95
            });
            Webcam.attach( '#my_camera' );
            document.getElementById("viewport").style.display = "initial";
            document.getElementById("imagecapture").style.display = "none";
        })

        //Code to handle taking the snapshot and displaying it locally
        function take_snapshot() {
            // take snapshot and get image data
            Webcam.snap( function(data_uri) {
                // display results in page
                document.getElementById("imagecapture").style.display = "initial";
                document.getElementById('camera_image').innerHTML = '<img id="imageprev" src="'+ data_uri +'"/>';
                
                // Get base64 value from <img id='imageprev'> source
                //var base64image = document.getElementById("imageprev").src;
                //document.getElementById('debug').innerHTML = ;
            });
            Webcam.reset();
            document.getElementById("viewport").style.display = "none";
        }

        function saveSnap() {
            // Get base64 value from <img id='imageprev'> source
            var base64image = document.getElementById("imageprev").src;

            //Webcam.upload( base64image, 'upload.php', function(code, text) {
            Webcam.upload( base64image, 'http://127.0.0.1:8000/php/upload.php', function(code, text) {
            console.log('Saved successfully');
            console.log(text);
            //document.getElementById('debug').innerHTML = text;
            document.getElementById('filename').value = text;
            });
        }

        function resetCamera() {
                        Webcam.attach( '#my_camera' );
            document.getElementById("viewport").style.display = "initial";
            document.getElementById("imagecapture").style.display = "none";
        }

    </script>
@endsection