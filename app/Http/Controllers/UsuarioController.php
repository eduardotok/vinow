<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        $quantidadeUsuarios = Usuario::where('statusUser', 1)->count();

        $produtos = produto::all();
        $quantidadeProdutos = produto::count();

        return view('areaAdmin.homeAdmin')
            ->with('usuarios', $usuario)
            ->with('quantUsuarios', $quantidadeUsuarios)
            ->with('produtos', $produtos)
            ->with('quantidadeProdutos', $quantidadeProdutos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nomeUser = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->dataNascUser = $request->dataNasc;
        $usuario->statusUser = 1;
        $usuario->save();

        return view('areaUsuario.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->nomeUser = $request->nome;
        $usuario->email = $request->email;
        $usuario->dataNascUser = $request->nascimento;
        $usuario->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::where('id', $id)->delete();
        return back();
    }
    public function login(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Tentativa de autenticação
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect('/loginView')->withErrors([
                'login' => 'E-mail ou senha inválidos.'
            ]);
        }

        // Login bem-sucedido
        return redirect('/home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/loginView');
    }
}
