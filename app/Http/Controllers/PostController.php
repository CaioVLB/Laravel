<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        # Mostrar os dados
        # Rota tipo GET

        $new_post = [
            'title' => 'Meu terceiro Post',
            'content' => 'Inserindo dados',
            'author' => 'Caio Vitor'
        ];

        // FORMA mais convencional de enviar um dado para o banco de dados

        $post = new Post($new_post);
        $post -> save();
        dd($post);
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # Receber os dados para criação
        # Rota tipo POST
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = new Post();
        $post = $post->find($id);

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        # exibir o formulário de edição

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        # De fato realiza a edição
        
        $posts = Post::find($id) -> update([
            'author' => 'Desconhecido',
            'title' => 'Developer of the future'
        ]);

        return $posts;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id) -> delete();
        return $post;
    }
}
