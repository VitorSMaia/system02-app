<div>
    @foreach($response->posts as $itemPost)
        <div class="border border-0 w-full border-t-2 my-1 py-1">
            <div class="flex">
                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">
                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">
                </div>
                <div class="flex justify-start items-center space-x-2">
                    <p class="font-bold ">Vitoria Está Lendo</p>
                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>
                    <p class="text-xs text-gray-500 ">{{ $itemPost['created_at']->format('d/m/Y h:i') }}</p>
                </div>
            </div>
            <div class="text-xl font-light" x-data="{ open: true}">
                <div class="flex justify-start items-end ">
                    <p class="font-medium">{{ $itemPost['title'] }}</p>
{{--                    <span x-on:click="open = ! open" class="material-symbols-rounded  cursor-pointer" :class="open ? '' : 'animate-bounce'">--}}
{{--                        <template x-if="!open">--}}
{{--                            <div>--}}
{{--                                expand_more--}}
{{--                            </div>--}}
{{--                        </template>--}}
{{--                        <template x-if="open">--}}
{{--                            <div>--}}
{{--                                expand_less--}}
{{--                            </div>--}}
{{--                        </template>--}}
{{--                    </span>--}}
                </div>
                <div  x-show="open" x-transition.opacity.delay.100ms>
                    <p class="break-words truncate ">{{ $itemPost['body'] }}</p>
{{--                    <p class="text-blue-400 cursor-pointer w-max"><a target="_blank" href="http://scribd.com/g/7ca6s1">scribd.com/g/7ca6s1</a></p>--}}
                    <div class="flex gap-x-5">
                        <p class="text-sm mt-5"><a href="{{ route('post.details',$itemPost['id']) }}">Detalhes</a></p>
                        <p class="text-sm mt-5">{{ count($itemPost['comments']) }} Comentários</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
