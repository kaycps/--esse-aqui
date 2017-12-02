<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Career;
use App\Inscription;
use App\Quotum;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SelectProcess;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $id)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $inscription = Inscription::where('pago', 'LIKE', "%$keyword%")
                ->orWhere('dataPagamento', 'LIKE', "%$keyword%")
                ->orWhere('dataInscrição', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $inscription = Inscription::paginate($perPage);
        }

        return view('inscription.index', compact('inscription', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {   
        $career = Career::all();
        $quota = Quotum::all();

        return view('inscription.create')->with('career',$career)->with('quota',$quota)->with('id', $id);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $id)
    {
        $user = Auth::user();
        $career = Career::all();        
        $quota = Quotum::all();
        $SelectProcess = SelectProcess::find($id); 

        $inscription = new Inscription;

        $inscription->user_id = $user->id;
        $inscription->dataPagamento = $request->dataPagamento;
        $inscription->dataInscrição = $request->dataInscrição;
        $inscription->career_id = $request->curso;
        $inscription->quota_id = $request->quota;
        $inscription->select_process_id = $SelectProcess->id;

        if ($inscription->save()) {            
            return redirect(route('select-process.inscription.index', $id))->with('flash_message', 'Inscription added!');
        } else {
            return redirect(route('select-process.inscription.create', $id))->with('flash_message', 'Deu erro.');
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id, $id_inscription)
    {
        $inscription = Inscription::findOrFail($id_inscription);

        return view('inscription.show', compact('inscription'));
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
        $inscription = Inscription::findOrFail($id);

        return view('inscription.edit', compact('inscription'));
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
        
        $inscription = Inscription::findOrFail($id);
        $inscription->update($requestData);

        return redirect('inscription')->with('flash_message', 'Inscription updated!');
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
        Inscription::destroy($id);

        return redirect('inscription')->with('flash_message', 'Inscription deleted!');
    }
}
