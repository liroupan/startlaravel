@extends('layout')

@section('titulo-pagina')
    Séries Assitidas
@endsection

@section('cabecalho')
    Séries
@endsection

@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
@endif

    <a href="{{route('form_add_serie')}}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}

                <form method="post" action="/series/{{$serie->id}}"
                      onsubmit="return confirm('Deseja realmente deletar a série {{addslashes($serie->nome)}} ?')">
                    @csrf
                    @method ('DELETE')
                    <button class="btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>

            </li>

        @endforeach
    </ul>

@endsection
