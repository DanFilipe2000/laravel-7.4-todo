@extends('layouts.app')

@section('title', '| Edit')

@section('content')

<div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="shadow-lg p-3 bg-dark text-white rounded p-5" style="width: 850px; min-height: 300px;">
        <h1>Editar Tarefas</h1>
        <form  method="POST" action="/todos/{{ $todo->id }}" class="mt-3">
            @method('PUT')
            @csrf
            <div class="input-group">
                <div class="input-group-text bg-white p-0">
                    <input type="color" class="form-control form-control-color border-0" name="color" title="Escolha uma cor">
                </div>
                <input type="text" class="form-control" name="title" value="{{ $todo->title }}" placeholder="O que fazer?" required>
                <button type="submit" class="btn btn-secondary">
                    <i class="bi bi-plus fs-4"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection