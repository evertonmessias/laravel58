<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\Anotacao;
use Illuminate\Support\Facades\Store;

class AgendaController extends Controller
{
    public function lista(){
        $agenda = Agenda::all();
        $anotacao = Anotacao::all();
        //$agenda = DB::table('agendas')->get();
        return view('agenda.lista',compact('agenda'),compact('anotacao'));
    }
       public function contato(){
        return view('agenda.contato');
    }
    public function criar(){
        return view('agenda.criar');
    }
    public function show(Agenda $agenda){
        return view('agenda.show',compact('agenda'));
    }
    public function store(Request $request){
        //$agenda = new Agenda();
        //$agenda->nome = $request['nome'];
        //$agenda->telefone = $request['telefone'];
        //$agenda->save();
        //return back();
        if($request['nome'] && $request['telefone']){
        $nome = $request['nome'];$telefone = $request['telefone'];
        DB::table('agendas')->insert(['nome'=>$nome,'telefone'=>$telefone]);    
        return redirect('lista');
        }else{
            return view('agenda.criar'); 
        }
    }
    public function edit(Agenda $agenda){
        return view('agenda.edit',compact('agenda'));
    }

    public function del(Agenda $agenda){
        return view('agenda.del',compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda){
        if($request['nome'] && $request['telefone']){
        $nome = $request['nome'];$telefone = $request['telefone'];
        DB::table('agendas')
        ->where('id',$agenda->id)
        ->update(['nome'=>$nome,'telefone'=>$telefone]);
        return redirect('lista');
        }else{
            echo "<script>window.location.href='/';</script>"; 
        }
    }
    
    public function destroy(Agenda $agenda){
        //$agenda->delete();
        DB::table('agendas')->where('id',$agenda->id)->delete();
        // CUIDADO APAGA TUDO ===> DB::table('agendas')->truncate();
        return redirect('lista');
    }
    public function envio(Request $request){

        request()->validate([
            'imagem'=>'required|image'
        ]);

        if($request->hasFile('imagem')&& $request->file('imagem')->isValid()){

            $upload = $request->imagem->storeAs('arquivos', $request['imagem'].'.jpg');

            if(!$upload){
                return redirect()->back()->with('error','Falha ao enviar');
            }}
            
        else{
            $data['imagem'] = null;
        }
        return redirect('lista');

    }
}

