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
        $portfolio = new portfolios;
        return view('portfolio.add', compact("portfolio"));
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
        if ($request->hasFile('beat_audio')) {
            $uniqueid = uniqid();
            $original_name = $request->file('beat_audio')->getClientOriginalName();
            $size = $request->file('beat_audio')->getSize();
            $extension = $request->file('beat_audio')->getClientOriginalExtension();
            $filename = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            $path = $request->file('beat_audio')->storeAs('public/upload/files/audio', $filename);
            $portfolios->beat_audio = $path;
        }
        if ($request->hasFile('beat_imagem')) {
            $uniqueid = uniqid();
            $original_name = $request->file('beat_imagem')->getClientOriginalName();
            $size = $request->file('beat_imagem')->getSize();
            $extension = $request->file('beat_imagem')->getClientOriginalExtension();
            $filename = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            $path = $request->file('beat_imagem')->storeAs('public/upload/files/imagens', $filename);
            $portfolios->beat_imagem = $path;
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
        if ($request->hasFile('beat_audio')) {
            $uniqueid = uniqid();
            $original_name = $request->file('beat_audio')->getClientOriginalName();
            $size = $request->file('beat_audio')->getSize();
            $extension = $request->file('beat_audio')->getClientOriginalExtension();
            $filename = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            $path = $request->file('beat_audio')->storeAs('public/upload/files/audio', $filename);
            $portfolio->beat_audio = $path;
        }
        if ($request->hasFile('beat_imagem')) {
            $uniqueid = uniqid();
            $original_name = $request->file('beat_imagem')->getClientOriginalName();
            $size = $request->file('beat_imagem')->getSize();
            $extension = $request->file('beat_imagem')->getClientOriginalExtension();
            $filename = Carbon::now()->format('Ymd') . '_' . $uniqueid . '.' . $extension;
            $path = $request->file('beat_imagem')->storeAs('public/upload/files/imagens', $filename);
            $portfolio->beat_imagem = $path;
        }
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
        if (!empty($portfolio->beat_audio)) 
        {
            Storage::url($portfolio->beat_audio);
        }

        if (!empty($portfolio->beat_imagem)) 
        {
            Storage::url($portfolio->beat_imagem);
        }

        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Category eliminadas com sucesso');
    }
    public function portfolios()
    {
        $portfolios = portfolios::all();
        return view('portfolio', compact('portfolios'));
    }
}
