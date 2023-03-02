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
        @component('components.cardPeople')
            @slot('img')
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
        @endcomponent
    @endforeach
    </div>
</body>
</html>
