<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'load_name'=>'required',
            'service' => 'required',
            'date' => 'required',
            'period' => 'required',
            'route' => 'required',
            'pick_location' => 'required',
            'drop_location' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'measurement' => 'required',
        ]);

        // Calculating the dimensions
        $measurements = $request->length . ' x ' . $request->width . ' x ' . $request->height. $request->measurement;
        $delivery = new Delivery();
        $delivery->luggage_name = $request->load_name;
        $delivery->service_id = $request->service;
        $delivery->route_id = $request->route;
        $delivery->user_id = Auth::id();
        $delivery->date = $request->date;
        $delivery->period = $request->period;
        $delivery->pick_up_location = $request->pick_location;
        $delivery->drop_off_location = $request->drop_location;
        $delivery->desc = $request->desc;
        $delivery->dimenstions = $measurements;
        $delivery->save();

        Toastr::success('Post Successfully Uploaded', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'load_name' => 'required',
            'service' => 'required',
            'date' => 'required',
            'period' => 'required',
            'route' => 'required',
            'pick_location' => 'required',
            'drop_location' => 'required',

        ]);


        $measurements = $request->length . ' x ' . $request->width . ' x ' . $request->height . $request->measurement;

        $delivery = Delivery::findOrFail($id);
        $delivery->luggage_name = $request->load_name;
        $delivery->service_id = $request->service;
        $delivery->route_id = $request->route;
        // $delivery->user_id = Auth::id();
        $delivery->date = $request->date;
        $delivery->period = $request->period;
        $delivery->pick_up_location = $request->pick_location;
        $delivery->drop_off_location = $request->drop_location;
        $delivery->desc = $request->desc;
        $delivery->dimenstions = $measurements;
        $delivery->save();

        Toastr::success('Post Successfully Uploaded', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->delete();

        Toastr::success('Delivery successfully deleted', 'Success');
        return redirect()->back();
    }

    // Function to cancel a delivery

    public function cancelDelivery($id) 
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->status = 2;
        $delivery->save();


        Toastr::success('Delivery Successfully cancelled', 'Success');
        return redirect()->back();
    }
}
