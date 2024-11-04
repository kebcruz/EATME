@props(['type'=> 'info'])
@php
    switch ($type) {
        case 'info':
           $class='bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3';
            break;

        case 'danger':
           $class='bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3';
            break;

        case 'success':
           $class='bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3';
            break;

        case 'warning':
           $class='bg-yellow-100 border-t border-b border-yellow-500 text-yellow-700 px-4 py-3';
            break;

        case 'dark':
           $class='bg-gray-100 border-t border-b border-gray-500 text-gay-700 px-4 py-3';
            break;

        default:
            $class='bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3';
            break;
    }
@endphp
<div {{$attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class])}} role="alert">
    <p class="font-bold">{{$title}}</p>
    <p class="text-sm">{{$slot}}</p>
</div>
