@props(['href', 'method', 'action'])

<li>
  @isset($action)
    <form method="{{ $method }}" action="{{ $action }}">
      @csrf
      <button class="px-1 font-semibold text-dark hover:text-primary-1000" type="submit">
        {{ $slot }}
      </button>
    </form>
  @else
    <a class="px-1 font-semibold text-dark hover:text-primary-1000" href="{{ $href }}">
      {{ $slot }}
    </a>
  @endisset

</li>
