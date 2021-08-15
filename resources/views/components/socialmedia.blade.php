@props(['name', 'path'])

<svg class="filter invert" role="img" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <a href="https://www.{{ $name }}.com" target="_blank">
        <path d="{{ $path }}" />
    </a>
</svg>