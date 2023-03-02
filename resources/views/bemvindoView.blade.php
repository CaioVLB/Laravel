<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Home Page</title>
</head>
<body>
    <h1>Sejá bem vindo, {{$nome_apelido}}</h1>
    <h2>Html sendo interpretado: {!! $html !!} </h2> <!-- Para interpretar código html vindo do php, é preciso usar quatros exclamações (!! $ !!) -->

    <!-- como adicionar um IF no blade -->
    <!-- ele permite verificação if ternário -->
    <h1> {{$nome_apelido == 'Blade' ? 'Sim' : 'Não'}} </h1>

    <!-- caso queira fazer uma verificação com if else, faça assim: -->
    <span> O usuário é Caio Vitor? </span>
    @if($nome_apelido == 'Caio Vitor')
        <h1>SIM</h1>
    @else
        <h1>NÃO</h1>
    @endif

    <!-- LAÇO DE REPETIÇÃO -->

    @for($i = 0; $i < 10; $i++)
        <div style = "align:center; text-align:center" >
            <p> Mensagem de <b> Fulano </b> </p>
            <p> Esta é uma mensagem qualquer </p>
        </div>
        <hr />
    @endfor

    @foreach ($ingredientes as $ing) <!-- significa PARA CADA -->
        <ul>
            <li>{{$ing}} -
                @component('components.button')

                    @slot('endereco')
                    http://google.com.br
                    @endslot

                    @slot('cor')
                        green
                    @endSlot
                    Editar
                @endcomponent

                @component('components.button')

                    @slot('endereco')
                    https://www.youtube.com/watch?v=s9CH7-U7-ZQ&list=PLkCE3sVoRjCQ4kXo631CuUrVyLasd7NWr
                    @endslot

                    @slot('cor')
                        red
                    @endslot
                    Deletar
                @endcomponent
            </li>
        </ul>
    @endforeach

</body>
</html>
