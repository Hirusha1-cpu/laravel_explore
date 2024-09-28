<!-- <a {{ $attributes }}>{{ $slot }}</a> -->
@props(['active' => false , 'type' => 'a'])

<!-- <a class="{{ request()->is('/') ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{request()->is('/')?'page':'false'}}" {{$attributes}}>{{$slot}}</a> -->
<!-- <{{$type}} class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{ $active ? 'page':'false'}}" {{$attributes}}>{{$slot}}</{{$type}}> -->


<!-- <?php if ($type == "a"): ?>
<a class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{ $active ? 'page':'false'}}" {{$attributes}}>{{$slot}}</a>
<?php else: ?>
    <button class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{ $active ? 'page':'false'}}" {{$attributes}}>{{$slot}}</button>
    <?php endif ?>  -->

    @if($type == "a")
<a class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{ $active ? 'page':'false'}}" {{$attributes}}>{{$slot}}</a>
@else
    <button class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
aria-current="{{ $active ? 'page':'false'}}" {{$attributes}}>{{$slot}}</button>
@endif