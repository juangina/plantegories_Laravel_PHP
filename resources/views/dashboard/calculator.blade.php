@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-4">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1>Soil Calculator</h1>
            <p>Use this calculator to calculate soil volume for rectangles and circles.</p>            
        </div>
    </div>

<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
      <form id="rectangle" class="mt-8 space-y-6">

        <input type="hidden" name="remember_rectangle" value="true">

        <div class="rounded-md shadow-sm -space-y-px">

            <div class="flex flex-row mb-4">

                <!--Rectangle Length-->
                <div>
                    <label for="rect_quantity_length" class="block text-sm font-medium text-gray-700">Length</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="rect_quantity_length" id="rect_quantity_length" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Rectangle Width-->
                <div>
                    <label for="rect_quantity_width" class="block text-sm font-medium text-gray-700">Width</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="rect_quantity_width" id="rect_quantity_width" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Rectangle Height-->
                <div>
                    <label for="rect_quantity_height" class="block text-sm font-medium text-gray-700">Height</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">

                        <input type="text" name="rect_quantity_height" id="rect_quantity_height" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Rectangle Quantity-->
                <div>
                    <label for="rect_quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="rect_quantity" id="rect_quantity" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Rectangle Volume-->
                <div>
                    <div class="block text-sm font-medium text-gray-700">
                        Results
                    </div>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <div class="bg-green-100 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md">
                            <div class="inline-block">
                                <input type="text" name="rect_volume" id="rect_volume" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0" disabled>
                            </div>
                            <div class="inline-block pl-4">
                                <label for="rect_volume_unit" class="sr-only">Units</label>
                                <select id="rect_volume_unit" name="rect_volume_unit" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                    <option>ft</option>
                                    <option>in</option>
                                    <option>cm</option>
                                    <option>m</option>
                                    <option>yd</option>
                                    <option>l</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </form>
      <div>
        <button id="update_rect_form" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Calculate Rectangular Soil Volume
        </button>
      </div>
    </div>
</div>

<div class="flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
      <form id="circle" class="mt-8 space-y-6">

        <input type="hidden" name="remember_circle" value="true">

        <div class="rounded-md shadow-sm -space-y-px">

            <div class="flex flex-row mb-4">

                <!--Circle Diameter Top-->
                <div>
                    <label for="circle_quantity_diameter_top" class="block text-sm font-medium text-gray-700">Diameter Top</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="circle_quantity_diameter_top" id="circle_quantity_diameter_top" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Circle Diameter Base-->
                <div>
                    <label for="circle_quantity_diameter_base" class="block text-sm font-medium text-gray-700">Diameter Base</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="circle_quantity_diameter_base" id="circle_quantity_diameter_base" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Circle Depth-->
                <div>
                    <label for="circle_quantity_depth" class="block text-sm font-medium text-gray-700">Depth</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="circle_quantity_depth" id="circle_quantity_depth" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>

                <!--Circle Quantity-->
                <div>
                    <label for="circle_quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="circle_quantity" id="circle_quantity" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" value='1.00'>
                    </div>
                </div>                

                <!--Circle Volume-->
                <div>
                    <div class="block text-sm font-medium text-gray-700">
                        Results
                    </div>
                    <div class="border-2 mt-1 relative rounded-md shadow-sm">
                        <div class="bg-green-100 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md">
                            <div class="inline-block">
                                <input type="text" name="circle_volume" id="circle_volume" class="bg-green-100 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0" disabled>
                            </div>
                            <div class="inline-block pl-4">
                                <label for="circle_volume_unit" class="sr-only">Units</label>
                                <select id="circle_volume_unit" name="circle_volume_unit" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                    <option>ft</option>
                                    <option>in</option>
                                    <option>cm</option>
                                    <option>m</option>
                                    <option>yd</option>
                                    <option>l</option>
                                </select>
                            </div>
                    </div>
                </div>

            </div>

        </div>
      </form>
      <div>
        <button id="update_circle_form" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Calculate Circle Soil Volume
        </button>
      </div>
    </div>
</div>
@include('incl.calculator')
@endsection