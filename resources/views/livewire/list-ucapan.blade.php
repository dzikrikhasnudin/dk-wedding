<div class="bg-white max-w-lg p-8 mx-auto rounded-lg h-[500px] overflow-y-scroll">

    <ol class="relative border-s border-gray-200 dark:border-gray-700">
        @forelse ($ucapan as $data)
        <x-ucapan>
            <x-slot name="nama">{{ $data->nama }}</x-slot>
            <x-slot name="kehadiran">{{ $data->kehadiran }}</x-slot>
            <x-slot name="tanggal">{{ $data->created_at->diffForHumans() }}</x-slot>
            {{ $data->ucapan }}
        </x-ucapan>
        @empty
        <div class="my-auto text-center">
            <h4>Belum ada ucapan.</h4>
        </div>
        @endforelse
    </ol>

</div>