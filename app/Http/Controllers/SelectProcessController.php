<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Quotum;
use App\Career;
use App\SelectProcess;
use Illuminate\Http\Request;

class SelectProcessController extends Controller
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
            $selectprocess = SelectProcess::where('dataInicio', 'LIKE', "%$keyword%")
                ->orWhere('dataFim', 'LIKE', "%$keyword%")
                ->orWhere('ativo', 'LIKE', "%$keyword%")
                ->orWhere('nome', 'LIKE', "%$keyword%")
                ->orWhere('descrição', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $selectprocess = SelectProcess::paginate($perPage);
        }

        return view('select-process.index', compact('selectprocess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        $career = Career::all();
        $cota = Quotum::all();
        return view('select-process.create')->with('career',$career)->with('cota',$cota);
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
      // dd($request);
        $careers = Career::all();
             
        $selectprocess = new SelectProcess;
        $selectprocess->dataInicio = $request->dataInicio;
        $selectprocess->dataFim = $request->dataFim;
        $selectprocess->nome = $request->nome;
        $selectprocess->descrição = $request->descrição; 



          if ($selectprocess->save()) {  


           $x = [];

                $selected_curso = $request->cursos;
                foreach ($selected_curso as $sc) {
                    if (array_key_exists('id', $sc)) {
                        $x[$sc['id']] = ['vagas' => $sc['vagas']];
                    }
                }
                $selectprocess->careers()->sync($x);

             
<<<<<<< HEAD
            $y = [];

                $cota_curso = $request->cotas;
                foreach ($cota_curso as $c) {
                    if(array_key_exists('id', $c)){
                        $y[$c['id']] = ['vagas' => $c['vagas']];
                    }        
                }  

                $selectprocess->quotas()->sync($c);

            return redirect('select-process')->with('message', 'SelectProcess added!');
=======
                    
            return redirect('select-process')->with('success_message', 'Processo seletivo adicionado!');
>>>>>>> 2ab7efbfce6b493eec7091c9f0e1f36ece4c9e7c
        } else {
            return redirect('select-process.create')->with('error_message', 'Erro ao cadastrar.');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Request $request,$id)
    {   
        
        $selectprocess = SelectProcess::findOrFail($id);

        return view('select-process.show', compact('selectprocess'));
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
        $selectprocess = SelectProcess::findOrFail($id);
        $career = Career::all();

        return view('select-process.edit', compact('selectprocess', 'career'));
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

        $selectprocess = SelectProcess::findOrFail($id);
        $selectprocess->dataInicio = $request->dataInicio;
        $selectprocess->dataFim = $request->dataFim;
        $selectprocess->nome = $request->nome;
        $selectprocess->descrição = $request->descrição;
        $selectprocess->save();

        $dados = [];

        foreach($request->cursos as $curso) {
            if(array_key_exists('id', $curso)) {
                $dados[$curso['id']] = ['vagas' => $curso['vagas']];
            }
        }

        $selectprocess->careers()->sync($dados);

        return redirect('select-process')->with('flash_message', 'SelectProcess updated!');
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
        SelectProcess::destroy($id);

        return redirect('select-process')->with('flash_message', 'SelectProcess deleted!');
    }
}
