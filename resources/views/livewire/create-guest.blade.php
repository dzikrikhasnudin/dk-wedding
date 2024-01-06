<div>
    <div class="pt-2 pb-4">
        <div class="py-2 px-4 border-b border-slate-200">
            <h2 class="text-xl font-bold">Tambah Undangan</h2>
        </div>
        <div class="bg-white overflow-hidden sm:rounded-lg p-4">
            <form wire:submit.prevent='save' method="POST">
                <div>
                    <x-label for="name" value="Nama Lengkap" />
                    <x-input id="name" wire:model="name" class="block mt-1 w-full " type="text" autofocus />
                    @error('name')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div class="flex gap-2">
                    <x-button class="mt-4 text-right" type="submit">
                        Tambah
                    </x-button>
                    <button
                        class="items-center mt-4 px-4 py-2 bg-transparent underline border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 hover:text-white hover:no-underline active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        wire:click.prevent="$dispatch('closeModal')">
                        Batal
                    </button>

                </div>
            </form>
        </div>
    </div>

</div>