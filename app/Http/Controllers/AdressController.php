<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Adress;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $adress = Adress::where('Rua', 'LIKE', "%$keyword%")
                ->orWhere('numeroEndereço', 'LIKE', "%$keyword%")
                ->orWhere('cep', 'LIKE', "%$keyword%")
                ->orWhere('bairro', 'LIKE', "%$keyword%")
                ->orWhere('complemento', 'LIKE', "%$keyword%")
                ->orWhere('cidade', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('pais', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $adress = Adress::paginate($perPage);
        }

        return view('adress.index', compact('adress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('adress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
      $user = Auth::user();
      

       $adress = new Adress;
       $adress->Rua = $request->input('Rua');
       $adress->numeroEndereço = $request->input('numeroEndereço');
       $adress->cep = $request->input('cep');
       $adress->bairro = $request->input('bairro');
       $adress->complemento = $request->input('complemento');
       $adress->cidade = $request->input('cidade');
       $adress->estado = $request->input('estado');
       $adress->pais = $request->input('pais');
       $adress->tipo = $request->input('tipo'); 

       $adress->profile_id = $user->id;
      
       $adress->save();

       if ($adress->save()) {
            return redirect()->route('home')->with('message', 'Cadastro salvo com sucesso.');

        } else {
            return redirect()->route('adress.create')->with('message', 'Favor corrigir os erros encontrados.');
        }

        return redirect('adress')->with('flash_message', 'Adress added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $adress = Adress::findOrFail($id);

        return view('adress.show', compact('adress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $adress = Adress::findOrFail($id);

        return view('adress.edit', compact('adress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $adress = Adress::findOrFail($id);
        $adress->update($requestData);

        return redirect('adress')->with('flash_message', 'Adress updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Adress::destroy($id);

        return redirect('adress')->with('flash_message', 'Adress deleted!');
    }
}
