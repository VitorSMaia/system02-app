<div x-show="modal" >
    <div class="bg-gray-900 fixed inset-0 opacity-70 "></div>
    <div @click.outside="modal = false" class="bg-white shadow-xl rounded-lg p-5 m-auto max-w-xl h-max fixed inset-0">
        <div>
            @livewire('post.form')
        </div>
    </div>
</div>
