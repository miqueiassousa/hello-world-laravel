<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>
    <div style="
        display: flex;
        flex-direction: row"
    >
    @foreach($pessoas as $p)


        {{-- @component('components.avatar')
            @slot('image')
                {{$p['image']}}
            @endslot
            @slot('nome')
                {{$p['nome']}}
            @endslot
            @slot('idade')
                {{$p['idade']}}
            @endslot
            @slot('birth')
                {{$p['birth']}}
            @endslot
        @endcomponent --}}

        @include('components.avatar',$p)

    @endforeach



    </div>


    {{-- @for($i=0;$i<count($ingredientes);$i++)
        <p>{{$ingredientes[$i]}} </p>
    @endfor --}}


</html>
