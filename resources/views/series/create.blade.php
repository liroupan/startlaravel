@extends('layout')

@section('titulo-pagina')
    Cadastro de Série
@endsection

@section('cabecalho')
    Cadastro de Série
@endsection

@section('conteudo')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome" class="label">Nome da Série</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn-primary">Adcionar</button>

    </form>
@endsection
