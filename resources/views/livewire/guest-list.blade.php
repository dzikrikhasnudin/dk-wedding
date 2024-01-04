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
                <th scope="col" class="px-6 py-3">
                    Tautan
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
            $index = 1;
            @endphp
            @foreach ($guests as $data)
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $index++ }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $data->nama }}
                </th>
                <td class="px-6 py-4" id="link-{{ $data->id }}">
                    {{ route('invite-link', $data->slug) }}
                </td>
                <td class="px-6 py-4">
                    <button wire:click="changeLabel($event.target.value, {{ $data->id }})"
                        class="copy-btn font-medium text-blue-950  hover:underline" data-clipboard-action="copy"
                        data-clipboard-target="#link-{{ $data->id }}"><i class="fa-solid fa-clipboard"></i>
                        <span>{{ $copyLabel ?? 'Salin Tautan' }}</span></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>