<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use App\SpecialNeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            $profile = Profile::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('RG', 'LIKE', "%$keyword%")
                ->orWhere('CPF', 'LIKE', "%$keyword%")
                ->orWhere('DataNascimento', 'LIKE', "%$keyword%")
                ->orWhere('Sexo', 'LIKE', "%$keyword%")
                ->orWhere('NomePai', 'LIKE', "%$keyword%")
                ->orWhere('NomeMãe', 'LIKE', "%$keyword%")
                ->orWhere('Passaporte', 'LIKE', "%$keyword%")
                ->orWhere('Naturalidade', 'LIKE', "%$keyword%")
                ->orWhere('Telefone', 'LIKE', "%$keyword%")
                ->orWhere('Escolaridade', 'LIKE', "%$keyword%")
                ->orWhere('EmissorRG', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $profile = Profile::paginate($perPage);
        }

        return view('profiles.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        $specialneed = SpecialNeed::all();
        return view('profiles.create')->with('specialneed',$specialneed);
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
        //dd($user->id);

        $profile = new Profile;
        $profile->nome = $request->input('nome');
        $profile->rg = $request->input('RG');
        $profile->dataNascimento = $request->input ('DataNascimento');  
        $profile->cpf = $request->input ('CPF');   
        $profile->sexo = $request->input ('Sexo'); 
        $profile->nomePai = $request->input ('NomePai'); 
        $profile->nomeMãe = $request->input ('NomeMãe');
        $profile->passaporte = $request->input ('Passaporte'); 
        $profile->naturalidade = $request->input ('Naturalidade');       
        $profile->telefone = $request->input ('Telefone');
        $profile->escolaridade = $request->input ('Escolaridade');
        $profile->emissorRG = $request->input ('EmissorRG');   
        $profile->user_id = $user->id; 

          

      
        
        if ($profile->save()) {


            $x = [];

                $profileSpecialNeed = $request->specialNeed;
                foreach ($profileSpecialNeed  as $ps) {
                    if (array_key_exists('id', $ps)) {
                        $x[$ps['id']] = ['observação' => $ps['observação'],
                                          'permanente'=>  $ps['permanente']];
                    }
                }


                $profile->special_needs()->sync($x);


            return redirect()->route('adress.create')->with('message', 'Cadastro salvo com sucesso.');

        } else {
            return redirect()->route('profile.create')->with('message', 'Favor corrigir os erros encontrados.');
        }



        
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
        $profile = Profile::findOrFail($id);

        return view('profiles.show', compact('profile'));
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
        $profile = Profile::findOrFail($id);
        $specialneed = SpecialNeed::all();

        return view('profiles.edit')->with('profile', $profile)->with('specialneed',$specialneed);
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
        
        $profile = profile::findOrFail($id);               
        
        $profile->update($request->all());

        return redirect('adress/'. $profile->id . '/edit')->with('flash_message', 'profile updated!');
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
        profile::destroy($id);

        return redirect('profile')->with('flash_message', 'profile deleted!');
    }
}
