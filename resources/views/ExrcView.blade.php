<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People Home</title></title>
</head>
<body>
    <div style="
        display: flex;"
    >
    @foreach($pessoas as $key => $pessoa)
        <x-cardPeople> <!-- Um componente pode ser declarado assim <x-cardPeople> </x-cardPeople> ou com @ component('') @ endcomponent('')-->
            @slot('image')
                {{$pessoa['image']}}
            @endslot
            @slot('name')
                {{$pessoa['nome']}}
            @endslot
            @slot('year')
                {{$pessoa['idade']}}
            @endslot
            @slot('birth')
                {{$pessoa['birth']}}
            @endslot
        </x-cardPeople>
    @endforeach

    @endcomponent

    {{-- OUTRA MENEIRA DE FAZER QUANDO AS INFORMAÇÕES FOREM ESTATICAS --}}

    {{-- @foreach($pessoas as $pessoa)
        @include('components.cardPeople', $pessoa)
    @endforeach
    --}}
    </div>
</body>
</html>
