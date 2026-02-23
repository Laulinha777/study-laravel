@extends('layout.main')

@section('title', 'Sistema de Estudos')

@section('content')
    <h1 class='text-3xl font-semibold p-5 mt-8 flex items-center gap-2'>
        <div class="bg-yellow-200 w-12 h-12 rounded-full flex items-center justify-center">
        <i data-lucide="book-open" class="bg-yellow-200 rounded-full text-black"></i>
        </div>
        Aprendizados
    </h1>
    <p class="p-6">Acompanhe sua jornada de conhecimentos</p>


    @if(session( 'success'))
    <p class="text-sm font-semibold bg-yellow-700 p-4 text-center">{{ session('success') }}</p>
    @endif

    @if(isset($aprendizados) && $aprendizados->count() > 0)

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 p-8">
        @foreach($aprendizados as $aprendizado)
            <div class="bg-white shadow-md rounded-xl p-5">
                <h3 class="text-lg font-semibold mb-2">
                    {{ $aprendizado->nome_aprendizado }}
                </h3>

                <p class="text-sm">
                    <strong>Status:</strong> {{ $aprendizado->status }}
                </p>

                <p class="text-sm">
                    <strong>Área:</strong> {{ $aprendizado->area->nome_area ?? '-' }}
                </p>

                <p class="text-sm">
                    <strong>Fonte:</strong> {{ $aprendizado->fonte->nome_fonte ?? '-' }}
                </p>
            </div>
        @endforeach
    </div>

@else
    <p class="mt-6 text-gray-500 text-center">Nenhum aprendizado cadastrado ainda.</p>
@endif
@endsection

