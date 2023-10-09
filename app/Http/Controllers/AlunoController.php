<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    public function cadastrar(Request $request){
        $aluno = new Aluno();
        //id é inserido de forma automática, porque é tipo increment
        $aluno->matricula = $request->matricula;
        $aluno->data_ingresso = $request->data_ingresso;
        $aluno->usuario_id = $request->usuario_id;
        //created_at e updated_at é automático, porque o laravel cuida desses campos
        if($aluno->save()){
            return "Aluno criado com sucesso!";
        }
    }
}
