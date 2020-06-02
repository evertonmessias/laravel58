<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\Anotacao;
use Illuminate\Support\Facades\Store;

class AnotacaoController extends Controller
{

    public function envio(Request $request, Agenda $agenda)
    {
        if ($request['email']) {
            $existe = false;
            $email = $request['email'];
            $anotacao = Anotacao::all();
            foreach ($anotacao as $s) {
                if ($s->agenda_id == $agenda->id) {
                    $existe = true;
                }
            }
            if ($existe) {
                DB::table('anotacaos')
                    ->where('agenda_id', $agenda->id)
                    ->update(['email' => $email]);
            } else {
                DB::table('anotacaos')->insert(['email' => $email, 'agenda_id' => $agenda->id]);
            }
        }
        if (isset($request['imagem'])) {
            request()->validate([
                'imagem' => 'mimes:jpg,jpeg,bmp,png'
            ]);            
            $arquivo = $_FILES['imagem'];            
            if ($arquivo['size'] != 0) {
                $envio = move_uploaded_file($arquivo['tmp_name'], "img/" . $arquivo['name']);
                if ($envio) {
                    DB::table('anotacaos')
                    ->where('agenda_id', $agenda->id)
                    ->update(['foto' => $arquivo['name']])
                ;                    
                }
            }





            /*
            $extensao = $imagem->guessClientExtension();
            $diretorio = 'img/';
            $imagem->move($diretorio, $imagem.".".$extensao);
            $foto = substr($imagem.".".$extensao, 5);

            */
           

            /*
            request()->validate([
                'imagem' => 'required|image'
            ]);

            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

                $arq = $request->imagem->storeAs('arquivos', $request['imagem'] . '.jpg');
                $rest = substr($arq, -13);
                if ($arq) {
                    DB::table('anotacaos')
                        ->where('agenda_id', $agenda->id)
                        ->update(['foto' => $rest]);
                }
            }*/
        }
        return redirect('lista');
    }
}
