<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $service=Services::all();
        return view('services.list', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service=new Services;
        return view('services.add', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesRequest $request)
    {
        $fields=$request->validated();
        $service=new Services();
        $service->fill($fields);
        $service->save();
        return redirect()->route('services.index')->with('success','Serviço criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $service)
    {
        return view('services.show',compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesRequest $request, Services $service)
    {
        $fields=$request->validated();
        $service->fill($fields);
        $service->save();
        return redirect()->route('services.index')->with('success','Serviço atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        // if($services->services()->exists()){
        //     return redirect()->route('services.index')->withErrors(['delete'=>'Existem serviços']);
        // }
        $service->delete();
        return redirect()->route('services.index')->with('success','Serviço eliminado com sucesso');
    }

    public function services()
    {
        $services=Services::all();
        return view('services',compact('services'));
    }
}
