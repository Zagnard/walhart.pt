<?php

namespace App\Http\Controllers;

use App\Models\portfolios;
use Illuminate\Http\Request;
use App\Http\Requests\StoreportfoliosRequest;
use App\Http\Requests\UpdateportfoliosRequest;

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
