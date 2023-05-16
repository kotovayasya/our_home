@props(['href' => ''])

<a class="px-4 no-underline text-white" {{ $attributes->merge(['href' => $href]) }}>
  {{ $slot }}
</a>
