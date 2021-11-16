@props(['type', 'icon', 'width' => '55px', 'name'])
@php
    $animateFirstVersion = 'absolute-top absolute-top--';
    $animateSecondVersion = 'position-absolute top--';

    if ($type == 'left-45') {
        $class = $animateFirstVersion . 'left-45';
    }
    else if ($type == 'left-17') {
        $class = $animateFirstVersion . 'left-17 top-35px';
    }
    else if ($type == 'left-5') {
        $class = $animateFirstVersion . 'left-5 top-10px';
    }
    else if ($type == 'right-26') {
        $class = $animateFirstVersion . 'right-26 top-35px left-auto';
    }
    else if ($type == 'top--16px') {
        $class = $animateSecondVersion . '16px right-6-5 left-auto';
    }
    else if ($type == 'top-30px') {
        $class = $animateSecondVersion . '30px left-35';
    }
@endphp
<div class="{{ $class }} animate-{{ $name }}">
    <img src="{{ asset($icon) }}" width="{{ $width }}">
</div>
