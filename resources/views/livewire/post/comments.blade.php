<div>
{{--    @dd($response->posts)--}}
    @foreach($response->posts as $itemPost)
        <div class="bg-white shadow-xl rounded-lg p-5 m-auto max-w-6xl h-[651px]">
            <div class="flex">
                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-12 w-12">
                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">
                </div>
                <div class="flex justify-start items-center space-x-2">
                    <p class="font-bold ">Vitoria Está Lendo</p>
                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>
                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>
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
                <div class="overflow-y-scroll h-80 scroll-smooth">
                    @foreach($itemPost['comments'] as $itemComment)
                        <div class="border border-0 w-full border-t-2 my-1 py-1">
                            <div class="flex gap-x-2">
                                <div class="rounded-full border-2 border-gray-200 shadow-xl bg-red-500 h-8 w-8">
                                    <img class="rounded-full" src="{{ asset('img/vitoriaestalendo_perfil.jpg') }}" alt="">
                                </div>
                                <div class="flex flex-col justify-start items-start space-x-2">
                                    <p class="font-bold text-sm">Vitoria Está Lendo</p>
                                    <p class="text-xs text-gray-500 ">@vitoriaestalendo</p>
                                    <p class="text-xs text-gray-500 ">{{ now()->format('M d') }}</p>
                                </div>
                            </div>
                            <div class="text-lg font-light">
                                <p class="font-light">{{ $itemComment['body'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                @can('create_comment_post')
                    <div class="border-t-2 border-black">
                        <form wire:submit.prevent="save">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                            <textarea wire:model.defer="state.body" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                            <button class="uppercase mt-5 p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 transition-all duration-200">ok</button>
                        </form>
                    </div>
                @endcan
            </div>
        </div>
    @endforeach
</div>
