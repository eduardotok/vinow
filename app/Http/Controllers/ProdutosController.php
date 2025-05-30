<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('areaUsuario.cardapio')->with('produtos',$produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $img = $request->file('img');
            $nomeImagem = time() . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img/produtos'), $nomeImagem);
        
    
        Produto::create([
            'nomeProduto'=> $request->nome,
            'valor'=>$request->valor,
            'imgProduto'=>$nomeImagem,
            'created_at' => now(),
            'update_at' => now(),
        ]);
        return back();
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
        $produto = Produto::findOrFail($id);

        // Verifica se foi enviado um novo arquivo
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            // Remove a imagem antiga
            $imagemAntiga = public_path('img/produtos/' . $request->nomeImg);
            if (file_exists($imagemAntiga)) {
                unlink($imagemAntiga); // deleta o arquivo antigo
            }
        
            // Salva a nova imagem
            $img = $request->file('img');
            $nomeImagem = time() . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img/produtos'), $nomeImagem);
        
            // Atualiza o nome da nova imagem
            $produto->imgProduto = $nomeImagem;
        }
        
        // Atualiza os demais dados
        $produto->nomeProduto = $request->nome;
        $produto->valor = $request->valor;
        $produto->updated_at = now();
        $produto->save();

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
        Produto::where('id',$id)->delete();
        return back();
    }
}
