@extends('layout.app')
@section('title', 'VitoriaEstalendo')
@section('content')
    <div class="bg-black mb-10">
        <img class="w-full h-28 bg-auto" src="{{ asset('img/n.png') }}" alt="">
        <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-40 w-40 absolute left-10 top-24">
            <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">
        </div>
    </div>
    @can('create_post')
        <div class="flex flex-col justify-center items-center mt-10">
            <button x-on:click="modal = true" class="p-2  bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 ">Novo Post</button>
        </div>
    @endcan
    <div class="flex flex-col justify-center items-start mx-24 space-y-10">
        <div class="flex flex-col">
            <div class="flex flex-col justify-start items-start">
                <p class="text-xl text-black">Vitoria Está Lendo</p>
                <p class="text-xs text-gray-500">@vitoriaestalendo</p>
                <p class="text-xl font-light w-96 text-black">Falo sobre livros na internet desde 2012, mais ativa na rede de vídeos e na rede de fotos!</p>
            </div>
            <div class="flex justify-end items-center space-x-5">
                <div class="flex justify-center items-center">
                    <span class="material-symbols-rounded">
                        location_on
                    </span>
                    <p>Brasil</p>
                </div>
                <div class="flex justify-center items-center">
                    <span class="material-symbols-rounded">
                        youtube_activity
                    </span>
                    <a class="text-blue-400" href="https://youtube.com/vitoriacholanda" target="_blank">youtube.com/vitoriacholanda</a>
                </div>
            </div>
        </div>
        <div class="w-full">
            @livewire('post.list-card')
        </div>

{{--        <div class="border border-x-0 w-full border-y-2">--}}
{{--            <div class="flex">--}}
{{--                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">--}}
{{--                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="flex justify-start items-center space-x-2">--}}
{{--                    <p class="font-bold ">Vitoria Está Lendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-xl font-light">--}}
{{--                <p>Quando achei que tinha finalmente terminado de completar a minha coleção! E lá vamos nós....--}}
{{--                    @editorajbc--}}
{{--                    tá sabendo disso?</p>--}}
{{--                <p class="text-blue-400">scribd.com/g/7ca6s1</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="border border-x-0 w-full border-y-2">--}}
{{--            <div class="flex">--}}
{{--                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">--}}
{{--                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="flex justify-start items-center space-x-2">--}}
{{--                    <p class="font-bold ">Vitoria Está Lendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-xl font-light">--}}
{{--                <p>"The Nico and Will book that--}}
{{--                    @MarkDoesStuff--}}
{{--                    and I co-authored...has now been edited and is going into production. Title, cover, release date . . . all coming soon." #Solangelo--}}
{{--                    https://rickriordan.com/2022/07/from-vancouver-to-boston-and-back-again/</p>--}}
{{--                <p class="text-blue-400">scribd.com/g/7ca6s1</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="border border-x-0 w-full border-y-2">--}}
{{--            <div class="flex">--}}
{{--                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">--}}
{{--                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="flex justify-start items-center space-x-2">--}}
{{--                    <p class="font-bold ">Vitoria Está Lendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-xl font-light">--}}
{{--                <p>Estou presa nessa fic de Solancelo e é sobre isso!--}}

{{--                    https://twitter.com/EvannaLaRue/status/1314300717461581824--}}

{{--                    ps: pensando e voltar a usar o twitter com mais frequência, será que rola?</p>--}}
{{--                <p class="text-blue-400">scribd.com/g/7ca6s1</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="border border-x-0 w-full border-y-2">--}}
{{--            <div class="flex">--}}
{{--                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">--}}
{{--                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="flex justify-start items-center space-x-2">--}}
{{--                    <p class="font-bold ">Vitoria Está Lendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>--}}
{{--                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="text-xl font-light">--}}
{{--                <p>Vou sortear 5 e-books de "E se eu precisasse de você?" e 5 de "E se eu me importasse?" hoje às 19h!--}}

{{--                    Para participar:--}}
{{--                    - siga esse perfil--}}
{{--                    - dê RT nesse tweet sem escrever comentário</p>--}}
{{--                <p class="text-blue-400">scribd.com/g/7ca6s1</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
