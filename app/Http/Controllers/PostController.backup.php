<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu terceiro Post',
            'content' => 'Inserindo dados',
            'author' => 'Caio Vitor'
        ];

        // FORMA mais convencional de enviar um dado para o banco de dados
        $post = new Post($new_post);
        $post -> save();
        dd($post);

        // OUTRA forma de enviar os dados para o banco de dados
        /*
        $post = new Post();

        $post -> title = 'Meu segundo Post';
        $post -> content = 'Inserindo outros dados no BD';
        $post -> author = 'Vitor';
        $post -> save();
        dd($post);
        */
    }

    public function read(Request $r) {
        $post = new Post();
        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request) {
        //$post = Post::find(3);

        //$post = Post::where('id', '>', 2);
        //$post -> title = 'Atualizando vários posts.';
        //$post -> save();

        $posts = Post::where('id', '>', 2) -> update([
            'author' => 'Desconhecido',
            'title' => 'Developer of the future'
        ]);

        return $posts;
    }

    public function delete(Request $request) {
        $post = Post::where('id', '>', 1) -> delete();
        return $post;

        // ou

        #$post = Post::find(1);

        #if($post)
            #return $post -> delete();

        #return '<h1> Não existe post com este id. </h1>';
    }
}
