@extends('layout.main')

@section('title', 'Criar Aprendizado')

@section('content')

<div class="max-w-4xl mx-auto mt-10 bg-white shadow-lg rounded-xl border border-yellow-200">
    <div class="bg-yellow-100 p-6 rounded-t-xl">
        <h2 class="text-2xl font-bold text-gray-800">Cadastrar Aprendizado</h2>
        <p class="text-sm text-gray-600">
            Preencha os dados do aprendizado que deseja iniciar
        </p>
    </div>

    <form action="{{ route('criar.store') }}" method="POST" class="p-8 space-y-6">
        @csrf

        <div class="space-y-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Nome do aprendizado
            </label>
            <input type="text" name="nome_aprendizado" placeholder="Ex: Python, Violão..." class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">

            <label class=" block text-sm font-medium text-gray-700 mb-1">Areas</label>
            <select name="id_areas_fk" class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400">
                @foreach ( $areas as $area )
                <option value="{{ $area->id_area}}">
                    {{ $area->nome_area }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700">Data Início</label>
                <input type="date" name="data_inicio" class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:ring-2">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Data Fim </label>
                <input type="date" name="data_fim_prevista" class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:ring-2">
            </div>
        </div>

        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
        <select name="status" class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 ">
            <option value="0">Não iniciado</option>
            <option value="1">Em andamento</option>
            <option value="2">Concluído</option>
            <option value="3">Pausado</option>
        </select>

        <label class="block text-sm font-medium text-gray-700 mb-1">Fonte do Aprendizado</label>
        <select name="id_fontes_fk" class="w-full border border-yellow-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 ">
            @foreach ( $fontes as $fonte )
            <option value="{{ $fonte->id_fonte }}">
                {{ $fonte->nome_fonte }}
            </option>
            @endforeach
        </select>
        <div class="flex justify-betwenn p-4">
            <button type="submit" class="px-8 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 shadow">Salvar</button>
        </div>
    </form>
</div>
@endsection