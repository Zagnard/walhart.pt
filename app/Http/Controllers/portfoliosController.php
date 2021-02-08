<?php

namespace App\Http\Controllers;

use App\Models\portfolios;
use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreportfoliosRequest;
use App\Http\Requests\UpdateportfoliosRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class portfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = portfolios::all();
        return view('portfolio.list', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfolios = new portfolios;
        return view('portfolio.add', compact("portfolios"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreportfoliosRequest $request)
    {
        $fields = $request->validated();
        $portfolios = new portfolios();
        $portfolios->fill($fields);
        if($request->hasFile('audio')){
            $uniqueid=uniqid();
            $original_name=$request->file('audio')->getClientOriginalName();
            $size=$request->file('audio')->getSize();
            $extension=$request->file('audio')->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $audiopath=url('/storage/upload/files/audio/'.$filename);
            $path=$request->storeAs('public/upload/files/audio/',$filename);
    }
            
        $portfolios->save();
        return redirect()->route('portfolios.index')->with('success', 'Beat criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function show(portfolios $portfolio)
    {
        return view('portfolio.show', compact("portfolio"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function edit(portfolios $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateportfoliosRequest $request, portfolios $portfolio)
    {
        $fields = $request->validated();
        $portfolio->fill($fields);
        $portfolio->save();
        return redirect()->route('portfolios.index')->with(
            'success',
            'Beat foi atulizado com sucesso'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function destroy(portfolios $portfolio)
    {
        //if ($portfolio->posts()->exists()) {
        //    return redirect()->route('portfolios.index')->withErrors(
        //        ['delete' => 'Categoria tem postagens relacionadas']
        //    );
        //}
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Category eliminadas com sucesso');
    }
}
