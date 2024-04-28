<li class="page-item {{ $active ? 'active' : '' }} {{ $disabled ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $url }}" aria-label="{{ $label }}" {!! $attributes->merge(['class' => 'page-link']) !!}>
        <span>{{ $slot }}</span>
    </a>
</li>
