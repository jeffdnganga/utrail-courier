<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::latest()->get();
        return view('admin.routes.index', compact('routes'));
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
            'source' => 'required',
            'destination' => 'required'
        ]);

        $route = new Route();

        $source = Str::ucfirst($request->source);
        $destination = Str::ucfirst($request->destination);


        $route->name = $source . ' ' . $destination;
        $route->source = $source;
        $route->destination = $destination;
        $route->user_id = Auth::id();
        $route->save();

        Toastr::success('Route Successfully Uploaded', 'Success');
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
            'source' => 'required',
            'destination' => 'required'
        ]);

        $route = Route::findOrFail($id);

        $source = Str::ucfirst($request->source);
        $destination = Str::ucfirst($request->destination);


        $route->name = $source . ' ' . $destination;
        $route->source = $source;
        $route->destination = $destination;
        // $route->user_id = Auth::id();
        $route->save();

        Toastr::success('Route Successfully Uploaded', 'Success');
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
        //
    }
}
