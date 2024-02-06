<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Price;
use App\Models\backend\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        // dd($services);
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:6',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = time(). "." . $request->image->extension();

        if($validate){
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'image'=> $filename,
            ];


            $model = new Service();       
            if($model->create($data)){
            $request->image->move('images/services/', $filename);    
            return redirect('services')->with('msg', 'Service Added Successfully');
          }


        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::find($id);
        return view('backend.services.edit', compact('services'));
    }


    public function delete(string $id)
    {
        // echo $id;

        // $deleted = DB::table('products')->where('id', $id)->delete();
        // return redirect('product')->with('msg', 'Product Delete Successfully');

        $services = Service::find($id);
        $services->delete();
        return redirect('services')->with('msg', 'Services Delete Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validate = $request->validate([
        'name' => 'required|min:4',
        'description' => 'required|min:6',
        'image' => 'mimes:jpg,jpeg,png',
    ]);

    $service = Service::find($id);

    if (!$service) {
        return redirect('services')->with('error', 'Service not found');
    }

    $filename = $service->image;

    if ($request->hasFile('image')) {
        // If a new image is provided, update the filename
        $filename = time() . "." . $request->image->extension();
        $request->image->move('images/services/', $filename);

        // Delete the old image file if it exists
        if (file_exists('images/services/' . $service->image)) {
            unlink('images/services/' . $service->image);
        }
    }

    if ($validate) {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
        ];

        if ($service->update($data)) {
            return redirect('services')->with('msg', 'Service updated successfully');
        } else {
            return redirect('services')->with('error', 'Failed to update service');
        }
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
