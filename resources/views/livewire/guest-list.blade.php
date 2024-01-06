<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Undangan') }}
            </h2>

            <button type="button" onclick="Livewire.dispatch('openModal', { component: 'create-guest' })"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i
                    class="fa-solid fa-plus"></i> Tambah</button>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @if (session('success'))
                <div class="w-full p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Berhasil!</span> {{ session('success') }}
                </div>
                @endif

                {{-- Search Box --}}
                <div class="flex mb-4 lg:w-1/3">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input wire:model.live="search" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                            placeholder="Search">
                    </div>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 hidden lg:block">
                                    Tautan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $index = 1;
                            @endphp
                            @forelse ($guests as $data)
                            <tr wire:key="{{ $data->id }}" x-data="{ isClicked: false }"
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $index++ }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap hover:underline">
                                    <a href="{{ route('invite-link', $data->slug) }}">{{ $data->nama }}</a>
                                </th>
                                <td class="px-6 py-4 hidden lg:block" id="link-{{ $data->id }}">
                                    <a href="{{ route('invite-link', $data->slug) }}" wire:navigate
                                        class="hover:underline">{{
                                        route('invite-link', $data->slug)
                                        }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    <div x-on:click="isClicked = !isClicked"
                                        class="copy-btn cursor-copy font-medium text-blue-950  hover:underline"
                                        data-clipboard-action="copy" data-clipboard-target="#link-{{ $data->id }}">
                                        <span x-text="isClicked ? 'Tautan Disalin' : 'Salin Tautan'"></span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">

                                    <button wire:click="destroy({{ $data->id }})"
                                        class="bg-red-600 px-2 py-1 rounded text-white hover:bg-red-700 transition duration-300">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="px-2 py-4 text-center" colspan="4">Data tidak ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $guests->links() }}
                </div>

            </div>
        </div>
    </div>

</div>