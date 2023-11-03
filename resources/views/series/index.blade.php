<x-layout title="Séries">

    <a href="/series/criar">Adicionar</a>

    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>

    {{-- passando uma variavel do php para o js, é preciso usar o js::fromjson --}}
</x-layout>

