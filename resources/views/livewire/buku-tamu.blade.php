<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buku Tamu') }}
        </h2>
        <div class="flex gap-2 text-sm mt-1">
            <p><span class="font-semibold">{{ $hadir }}</span> Hadir</p>
            <p><span class="font-semibold">{{ $tidakHadir }}</span> Tidak hadir</p>
            <p><span class="font-semibold">{{ $belumPasti }}</span> Belum Pasti</p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">


                <select id="countries" wire:model.live='filter'
                    class="lg:w-1/3 mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Status Kehadiran</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Belum Pasti">Belum Pasti</option>
                </select>


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
                                <th scope="col" class="px-6 py-3 text-center ">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 hidden lg:block">
                                    Ucapan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $index = 1;
                            @endphp
                            @forelse ($listUcapan as $data)
                            <tr wire:key="{{ $data->id }}"
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $index++ }}
                                </td>
                                <th scope="row" class="px-6 py-4 w-72 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $data->nama }}
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap " id="link-{{ $data->id }}">
                                    <x-status-kehadiran :status="$data->kehadiran">{{ $data->kehadiran }}
                                    </x-status-kehadiran>

                                </td>
                                <td class="px-6 py-4  hidden lg:block">
                                    {{ $data->ucapan }}
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
            </div>
        </div>
    </div>
</div>