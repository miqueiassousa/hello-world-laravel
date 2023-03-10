<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Bem vindo, {{$apelido_nome}} sua idade é {{$apelido_idade}}</h2>
    <hr>

    <h2>O que o blade faz:</h2>
    <pre>
        O Blade é um template engine simples de usar e extremamente poderoso.
        Ele possui uma sintaxe expressiva que ajuda na legibilidade das views, além
        de ter uma curva de aprendizado rápida para o pessoal de front-end e outros
        membros da equipe de desenvolvimento.</pre>
    <hr>

    {{-- Fazer um calculo no blade  --}}
    Soma: 1 + 1 é: {{1+1}}<hr>

    {{-- Comentario no Blade  --}}
    Comentario: {{-- funcao() --}}<hr>

    {{-- No SiteController o valor da variavel $html é um codigo html que sera interpretado pelo blade --}}
    Codigo html interpretado pelo balde: {!! $html !!}<hr>

    {{-- Pode colocar todo HTML, ex: Se usuario for adm exibir tal sidebar ou menu --}}
    Condicional: @if($apelido_nome == 'João')
    <p>Sim, é Miquéias</p>
    @elseif($apelido_nome == 'Dariel')
    <p>Não, é Dariel</p>
    @else
    <p>Não é nenhum dos dois</p>
    @endif
    <hr>

    {{-- Laço de repetição --}}
    <b>Laço de repetição:</b>
    @for($i=0;$i<3;$i++)
        <p>O valor de I é: {{$i}}</p>
    @endfor

    {{-- For each --}}
    <br>
    <b>Ingrediente do bolo:</b>
    @foreach($ingredientes as $ing => $b)
    <p>{{$ing.' - '.$b}}</p>
    @endforeach
    <br>
    @foreach($ingredientes2 as $ing => $b)
    <p>{{$ing.' - '.$b}}</p>
    @endforeach


</body>
</html>
