<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
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
        $services=Services::all();
        return view('services.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=new Services;
        return view('services.add', compact('services'));
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
        $services=new Services();
        $services->fill($fields);
        $services->save();
        return redirect()->route('services.services')->with('success','Serviço criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        return view('services.show',compact("services"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        return view('services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesRequest $request, Services $services)
    {
        $fields=$request->validatd();
        $services->fill($fields);
        $services->save();
        return redirect()->route('services.services')->with('success','Serviço atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        if($services->services()->exists()){
            return redirect()->route('services.services')->withErrors(['delete'=>'Existem serviços']);
        }
        $services->delete();
        return redirect()->route('services.services')->with('success','Serviço eliminado com sucesso');
    }
}
