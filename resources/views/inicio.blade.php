@extends('layout.main')

@section('title', 'Sistema de Estudos')

@section('content')

<div class="px-6 py-10">
    <div class="flex items-center justify-between mb-10 px-6 py-10">
        <div>
            <div class="flex items-center gap-4">
                <svg class='w-10 h-10' xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 40 40">
<path fill="#ffeea3" d="M32.794,37.746l3.753-3.891c1.193-1.235,1.175-3.229-0.04-4.444l-7.62-7.619l-1.414,1.414 l7.62,7.619c0.449,0.449,0.456,1.185,0.015,1.642l-3.753,3.891L32.794,37.746z"></path><path fill="#ffeea3" d="M7.11,37.746l-3.753-3.891c-1.193-1.235-1.175-3.229,0.04-4.444l7.62-7.619l1.414,1.414l-7.62,7.619 c-0.449,0.449-0.456,1.185-0.015,1.642l3.753,3.891L7.11,37.746z"></path><path fill="#ba9b48" d="M6.667,38.008h0.892l1.697-1.637l-4.101-4.25c-0.252-0.262-0.248-0.685,0.009-0.941l7.973-7.973 l-2.121-2.121l-7.973,7.973c-1.407,1.406-1.428,3.715-0.046,5.145L6.667,38.008z M3.75,29.765l7.266-7.266l0.707,0.707 l-7.266,7.266c-0.64,0.641-0.649,1.69-0.021,2.342l3.406,3.531l-0.72,0.694l-3.406-3.531C2.711,32.468,2.727,30.788,3.75,29.765z"></path><path fill="#ba9b48" d="M34.749,32.119l-4.102,4.251l1.697,1.637h0.892l3.67-3.804c1.383-1.431,1.361-3.739-0.046-5.146 l-7.973-7.973l-2.121,2.121l7.973,7.973C34.996,31.436,35.001,31.859,34.749,32.119z M28.888,22.499l7.266,7.266 c1.024,1.023,1.039,2.703,0.034,3.744l-3.406,3.53l-0.72-0.694l3.407-3.531c0.628-0.651,0.617-1.702-0.022-2.342l-7.266-7.266 L28.888,22.499z"></path><rect width="25" height="24.702" x="7.5" y="13.298" fill="#ffeea3"></rect><polygon fill="#ba9b48" points="8,38 8,13.798 32,13.798 32,38 33,38 33,12.798 7,12.798 7,38"></polygon><path fill="#ffeea3" d="M35.493,17C35.415,10.516,30.002,2.5,20,2.5S4.585,10.516,4.507,17H4.5v2 c0,1.381,1.119,2.5,2.5,2.5s2.5-1.119,2.5-2.5v-1.857h21V19c0,1.381,1.119,2.5,2.5,2.5s2.5-1.119,2.5-2.5v-2H35.493z"></path><path fill="#ba9b48" d="M36,17.143h-1C35,11.439,30.232,3,20,3S5,11.439,5,17.143H4C4,9.86,10.117,2,20,2 S36,9.86,36,17.143z"></path><path fill="#ba9b48" d="M7,22c-1.654,0-3-1.346-3-3v-2h1v2c0,1.103,0.897,2,2,2s2-0.897,2-2v-1h1v1 C10,20.654,8.654,22,7,22z"></path><path fill="#ba9b48" d="M33,22c-1.654,0-3-1.346-3-3v-1h1v1c0,1.103,0.897,2,2,2s2-0.897,2-2v-2h1v2 C36,20.654,34.654,22,33,22z"></path><g><path fill="none" stroke="#ba9b48" stroke-miterlimit="10" d="M15,20c3.856,2.004,6.37,2.052,10,0"></path></g><g><circle cx="13.5" cy="12.503" r="4" fill="#b0c1d4"></circle><path fill="#66798f" d="M13.5,17.003c-2.481,0-4.5-2.019-4.5-4.5s2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5 S15.981,17.003,13.5,17.003z M13.5,9.003c-1.93,0-3.5,1.57-3.5,3.5s1.57,3.5,3.5,3.5s3.5-1.57,3.5-3.5S15.43,9.003,13.5,9.003z"></path><g><circle cx="26.5" cy="12.503" r="4" fill="#b0c1d4"></circle><path fill="#66798f" d="M26.5,17.003c-2.481,0-4.5-2.019-4.5-4.5s2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5 S28.981,17.003,26.5,17.003z M26.5,9.003c-1.93,0-3.5,1.57-3.5,3.5s1.57,3.5,3.5,3.5s3.5-1.57,3.5-3.5S28.43,9.003,26.5,9.003z"></path></g></g><g><circle cx="13.5" cy="11.786" r="2.786" fill="#fff"></circle><circle cx="26.5" cy="11.786" r="2.786" fill="#fff"></circle></g><g><path fill="#f5ce85" stroke="#967a44" stroke-miterlimit="10" d="M20,13.5c-8.595,0.192-7.835,6.927-7.052,8.936 c0.478,1.218,1.473,2.064,2.351,2.064c2.351,0,2.758-3.495,3.134-5.503c0.149-0.846,0.87-1.183,1.567-1.266 c0.698,0.082,1.418,0.419,1.567,1.266c0.376,2.009,0.784,5.503,3.134,5.503c0.877,0,1.873-0.846,2.351-2.064 C27.835,20.427,28.595,13.692,20,13.5z"></path><path fill="#66798f" stroke="#36404d" stroke-miterlimit="10" d="M23.5,17.003c0-0.829-1.567-1.5-3.5-1.5s-3.5,0.671-3.5,1.5 s1.567,1.5,3.5,1.5S23.5,17.832,23.5,17.003z"></path></g>
</svg>
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Meus Aprendizados </h1>
            </div>
            <p class="text-gray-500 text-sm">Acompanhe sua evolução constante.</p>
        </div>
        <a href="{{ route('criar.form') }}" class="bg-yellow-400 hover:bg-yellow-500 text-yellow-900 px-5 py-2 rounded-lg font-medium text-sm">
            + Novo Aprendizado
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 p-4 mb-8 text-green-800 text-sm animate-pulse">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($aprendizados) && $aprendizados->count() > 0)
    <div class="grid lg:grid-cols-4 gap-6">
        @foreach($aprendizados as $aprendizado)
            <div class="group border border-gray-100 bg-white p-6 rounded-2xl hover:shadow-xl hover:border-yellow-200">
            <div class="flex items-center justify-between mx-auto">
                <h3 class="text-lg font-bold text-gray-800 group-hover:text-yellow-600">
                    {{ $aprendizado->nome_aprendizado }}
                </h3>

            <div class='flex items-center justify-between gap-4'>
             <a href="{{route('editar.form', $aprendizado->id_aprendizado)}}" class="text-sm text-yellow-500 hover:text-yellow-600">Editar</a>

             <form action="{{ route('aprendizado.destroy', $aprendizado->id_aprendizado) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja apagar esse aprendizado?')">
                @csrf
                @method('DELETE')
                    <button type="submit" class="text-sm text-yellow-500 hover:text-yellow-600">
                        Excluir
                    </button>
            </form>
            </div>
             </div>
            

                <div class="flex justify-between items-start">
                    <span class="mt-4 pt-4 border-t border-gray-50 flex items-center justify-between text-xs text-gray-400">
                        Area: {{ $aprendizado->area->nome_area}}
                    </span>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-50 flex items-center justify-between text-xs text-gray-400">
                    <span>Fonte: {{ $aprendizado->fonte->nome_fonte ?? 'Fonte externa' }}</span>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-50 flex items-center justify-between text-xs text-gray-400">
                    <span> Status: {{ $aprendizado->status_aprendizado }}</span>
                </div>

                <p class="text-xs mt-6 text-gray-300 mt-2">
                Registrado em: {{ $aprendizado->created_at->format('d/m/Y H:i') }}
                <!-- diffForHumans() essa função mostra o tempo que passou desde a criação.BACANA DIMASS SÔ-->
            </p>
            </div>
        @endforeach
    </div>
    @else
        <div class="text-center py-20 border-2 border-dashed border-gray-100 rounded-3xl">
            <p class="text-gray-400">Nenhum aprendizado por aqui ainda...</p>
        </div>
    @endif
</div>
@endsection
