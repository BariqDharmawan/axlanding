@props(['url' => 'javascript:void(0);', 'text' => null])

<li {{ $attributes->class(['nav-item']) }}>
    <a href="{{ $url }}" class="text-capitalize nav-link">
        @isset($text)
            {{ $text }}
        @else
            {{ $slot }}
        @endisset
    </a>
</li>
