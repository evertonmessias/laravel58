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
            return redirect('lista');

            if ($request['imagem']) {

                request()->validate([
                    'imagem' => 'required|image'
                ]);

                if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

                    $upload = $request->imagem->storeAs('arquivos', $request['imagem'] . '.jpg');

                    if (!$upload) {
                        return redirect()->back()->with('error', 'Falha ao enviar');
                    }
                }
            }
        } else {
            echo "<script>alert('Nenhuma Alteração!');window.location.href='/';</script>";
        }
    }
}
