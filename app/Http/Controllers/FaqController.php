<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

		public function faqs() {
			$faqs=Faq::all();
				return view('faq', compact('faqs'));
		}

    public function index()
    {
				//
				$faqs=Faq::all();
				return view('faqs.list', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
				$faq = new Faq;
				return view('faqs.add', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        //
				$fields = $request->validated();
				$faq = new Faq();
				$faq->fill($fields);
				$faq->save();
				return redirect()->route('categories.index')->with('success', 'Faq successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
				return view('faqs.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
				return view('faqs.edit', compact($faq));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        //
				$fields = $request->validated();
				$faq->fill($fields);
				$faq->save();
				return redirect()->route('faqs.index')->with('success', 'Faq atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
      //
			$faq->delete();
			return redirect()->route('faqs.index')->with('sucesso', 'Faq apagacado com sucesso');
    }
}
