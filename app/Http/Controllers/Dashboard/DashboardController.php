<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function capture() {
        return view('dashboard.capture');
    }

    public function store(Request $request) {

        //dd($request);

        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'filename' => 'required|max:255',
        ]);

        $contents = Storage::get('public/upload/'.$request->input('filename'));
        //dd($contents);
        $status = Storage::disk('s3')->put( $request->input('filename'), $contents, 'public');
        //dd($status);
        $url = Storage::disk('s3')->url($request->input('filename'));
        //dd($url);
        $status = Storage::delete('public/upload/'.$request->input('filename'));
        //dd($status);

        $inventory = new Inventory;
        $inventory->name = $request->input('name');
        $inventory->price = $request->input('price');
        $inventory->category = $request->input('category');
        $inventory->location = $request->input('location');
        $inventory->quantity = $request->input('quantity');
        $inventory->filename = $request->input('filename');
        $inventory->url = $url;
        $inventory->save();

        return redirect()->route('list');
    }

    public function list() {

        $inventory = Inventory::orderBy('created_at', 'desc')->paginate(4);
        
        return view('dashboard.list')->with('inventory', $inventory);
    }

    public function show($id)
    {
        $item = Inventory::find($id);

        return view('dashboard.show')->with('item', $item);
        
    }
    public function calculator() {
        return view('dashboard.calculator');
    }

}
