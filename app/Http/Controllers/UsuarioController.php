<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    //função para abrir a página inicial
    public function home(){
        return view('home');
    }

    //função para cadastrar um usuario
    public function cadastrar(Request $request){
        $campos = $request->validate([
            'nome' => ['required', 'min: 3', 'max: 30', Rule::unique('usuarios', 'nome')],
            'email' => ['required', 'email', Rule::unique('usuarios', 'email')],
            'senha' => ['required', 'min: 8', 'confirmed'],
        ]);

        Usuario::create($campos);
        return "entrou na função cadastrar";//aqui poderíamos redirecionar para a página inicial do usuario logado
    }

    //função alternativa para cadastrar um usuario
    public function cadastrar_alternativo(Request $request){
        $campos = $request->validate([
            'nome' => ['required', 'min: 3', 'max: 30', Rule::unique('usuarios', 'nome')],
            'email' => ['required', 'email', Rule::unique('usuarios', 'email')],
            'senha' => ['required', 'min: 8', 'confirmed'],
        ]);

        $usuario = new Usuario; //instanciação de um objeto vazio do tipo usuario

        $usuario->nome = $campos['nome']; //atribuir valores que vieram do formulario ao objeto vazio 
        $usuario->email = $campos['email'];
        $usuario->senha = $campos['senha'];

        $usuario->save();//função save para salvar o objeto no banco de dados

        return "entrou na função cadastrar alternativa!";//aqui poderíamos redirecionar para a página inicial do usuario logado
    }

}

