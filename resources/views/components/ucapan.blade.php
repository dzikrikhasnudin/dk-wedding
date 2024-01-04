@php
switch ($kehadiran) {
case 'Hadir':
$statusClass = 'bg-green-100 text-green-800';
break;
case 'Tidak Hadir':
$statusClass = 'bg-red-100 text-red-800';
break;

default:
$statusClass = 'bg-amber-100 text-amber-800';
break;
}
@endphp

<li class="mb-6 ms-6">
    <span
        class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white ">
        <i class="fa-solid fa-user text-xs text-blue-950"></i>
    </span>
    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">{{ $nama }}
        <span class="{{ $statusClass }} text-sm font-medium me-2 px-2.5 py-0.5 rounded ms-3">{{ $kehadiran }}</span>
    </h3>
    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
        {{ $tanggal }}</time>
    <p class="mb-4 font-normal text-gray-500 dark:text-gray-400">
        {{ $slot }}
    </p>
</li>