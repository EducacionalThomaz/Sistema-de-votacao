<?php

namespace App\Http\Controllers;

use App\Models\Alternativa;
use App\Models\Enquete;
use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    public function index() {
        date_default_timezone_set('America/Recife');

        $enquetes = Enquete::all();

        $alternativas = Alternativa::all();        

        foreach ($enquetes as $enquete) {
            $data_atual = date('Y-m-d H:i:s');

            if (strtotime($enquete->data_inicio) > strtotime($data_atual) && strtotime($enquete->data_final) > strtotime($data_atual)) {
                $enquete->type = 'future';
            } else if (strtotime($enquete->data_inicio) < strtotime($data_atual) && strtotime($enquete->data_final) < strtotime($data_atual)) {
                $enquete->type = 'closed';
            } else if (strtotime($enquete->data_inicio) < strtotime($data_atual) && strtotime($enquete->data_final) > strtotime($data_atual)) {
                $enquete->type = 'open';
            }
        }

        return view('home', compact('enquetes', 'alternativas'));

    }

    public function create()
    {
       return view('home');
    }

    public function store(Request $request)
    {
        $enquete = Enquete::create($request->all());
        
        $a = 1;

        $num_alter = (count($request->all()) - 4);

        for ($i = 0; $i < $num_alter; $i++) {    
            $descricao = 'alternativa'.$a;
            Alternativa::create([
               'descricao'=>$request->$descricao,
               'enquete_id'=>$enquete->id
            ]);
            $a++;
        }

        return redirect()->route('enquetes.index');
    }

    public function edit() 
    {
        return redirect()->route('home');
    }

    public function update(Request $request, Enquete $enquete)
    {
        $alternativas = Alternativa::where('enquete_id', $enquete->id)->get();
        $enquete->update($request->all());
        
        $i = 1;

        foreach ($alternativas as $alternativa) {
            $descricao = 'descricao'.$i;
            $alternativa->descricao = $request->$descricao;
            $alternativa->save();

            $i++;
        }

        return redirect()->route('enquetes.index');
    }

    public function destroy(Enquete $enquete)
    {
      $enquete->delete();

       return redirect()->route('enquetes.index');
    }
}
