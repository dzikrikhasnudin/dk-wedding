@props(['status'])

@php
switch ($status) {
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

<span class="{{ $statusClass }} text-xs text-center me-2 px-2.5 py-0.5 rounded ms-3">{{ $slot }}</span>