<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        return view('backend.prices.index', compact('prices'));
    }

    public function create()
    {
        return view('backend.prices.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required | min:4',
            'price' => 'required',
            'description' => 'required | min:6',
        ]);

        if($validate){
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ];


            $model = new Price();       
            if($model->create($data)){
            return redirect('prices')->with('msg', 'Packeges Added Successfully');
          }
        }
    }

    public function edit(string $id)
    {
        $prices = Price::find($id);
        return view('backend.prices.edit', compact('prices'));
    }

    public function delete(string $id)
    {
        
        $services = Price::find($id);
        $services->delete();
        return redirect('prices')->with('msg', 'Packeges Delete Successfully');
    }

    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required | min:4',
            'price' => 'required',
            'description' => 'required | min:6',
        ]);

        if($validate){
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ];


            $model = new Price();       
            if($model->update($data)){
            return redirect('prices')->with('msg', 'Packeges Updated Successfully');
          }
        }
    }

    

    

}
