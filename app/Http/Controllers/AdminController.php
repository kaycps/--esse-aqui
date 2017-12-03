<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use App\SpecialNeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

public function __construct()
    {
       $this->middleware('admin');
   }

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

        return view('admin.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.create');
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
    
    }
}

