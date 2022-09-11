<div>
    <form wire:submit.prevent="save" class="flex flex-col space-y-4">
        <div>
            <p class="text-2xl font-light">Novo Post !!!</p>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
            <input wire:model.defer="state.title"  id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message...">

            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
            <textarea wire:model.defer="state.body" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>

            @error('body') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
{{--            <button class="uppercase p-2 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 transition-all duration-200">cancel</button>--}}
            <button @click="modal = false" class="uppercase p-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 transition-all duration-200">ok</button>
        </div>
    </form>
</div>
