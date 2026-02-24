@extends('layout.main')

@section('title', 'Editar Aprendizado')

@section('content')
<div class=" mx-auto p-12">
    <div class="flex md:flex-row gap-12">
        
        <div>
            <h2 class="text-3xl font-black text-gray-900">
                EDITAR <br> <span class="text-yellow-500">APRENDIZADO.</span>
            </h2>
            <p class="mt-4 text-gray-500 font-medium">
                Edite os dados do aprendizado que deseja atualizar.
            </p>
        </div>

        <div class="bg-white p-4 rounded-2xl">
            <form action="{{ route('editar.update', $aprendizado->id_aprendizado) }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @csrf
                @method('PUT')
                <div class="md:col-span-2 group">
                    <label class="text-xs uppercase font-semibold text-gray-400">O que você vai aprender?</label>
                    <input type="text" name="nome_aprendizado" placeholder="Ex: Masterizar Laravel" 
                        class="w-full mt-2 bg-gray-50 border-none rounded-lg p-3 text-gray-700" value="{{ $aprendizado->nome_aprendizado }}">
                </div>

                <div class="flex flex-col">
                    <label class="text-xs uppercase font-semibold text-gray-400">Área</label>
                    <select name="id_areas_fk" class="mt-2 bg-gray-50 border-none rounded-lg p-3 text-gray-700">
                        @foreach ( $areas as $area )
                            <option value="{{ $area->id_area }}" @selected($area->id_area == $aprendizado->id_areas_fk)>{{ $area->nome_area }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="text-xs uppercase font-semibold text-gray-400">Status Atual</label>
                    <select name="status" class="mt-2 bg-gray-50 border-none rounded-lg p-3 text-gray-700">
                        <option value="0">Não iniciado</option>
                        <option value="1">Em andamento</option>
                        <option value="2">Concluído</option>
                    </select>
                </div>

                <div>
                    <label class="text-xs uppercase font-semibold text-gray-400">Início</label>
                    <input type="date" name="data_inicio" class="w-full mt-2 bg-gray-50 border-none rounded-lg p-3" value="{{ $aprendizado->data_inicio }}">
                </div>

                <div>
                    <label class="text-xs uppercase font-semibold text-gray-400">Previsão de Fim</label>
                    <input type="date" name="data_fim_previsao" class="w-full mt-2 bg-gray-50 border-none rounded-lg p-3" value="{{ $aprendizado->data_fim_previsao }}">
                </div>

                <div class="md:col-span-2">
                    <label class="text-xs uppercase font-semibold text-gray-400">Onde está estudando?</label>
                    <select name="id_fontes_fk" class="w-full mt-2 bg-gray-50 border-none rounded-lg p-3">
                        @foreach ( $fontes as $fonte )
                            <option value="{{ $fonte->id_fonte }}" @selected($fonte->id_fonte == $aprendizado->id_fontes_fk)>{{ $fonte->nome_fonte }}</option>
                        @endforeach
                    </select>   
                </div>

                <div class="md:col-span-2 pt-4">
                    <button type="submit" class="px-8 py-2 bg-gray-800 text-white rounded-lg hover:bg-yellow-500 shadow">
                        EDITAR →
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
