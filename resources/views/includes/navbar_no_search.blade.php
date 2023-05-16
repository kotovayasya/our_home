<nav class="navbar sticky top-0 bg-primary" id="navbar">
  <div class="container">
    @include('partials._brand')
    <div class="navbar-row" id="navbar-row">
      <ul class="navbar-col">
        <x-navbar-link href="/forum">Форум</x-navbar-link>
        <x-navbar-link href="/info">Информация</x-navbar-link>
      </ul>
      <ul class="navbar-col">
        @auth
          <x-navbar-link href="/profile">{{ auth()->user()->last_name . ' ' . auth()->user()->first_name }}
          </x-navbar-link>
          <x-navbar-link method="POST" action="/logout">Выход</x-navbar-link>
        @else
          <x-navbar-link href="login">
            Вход
          </x-navbar-link>
          <x-navbar-link href="register">
            Регистрация
          </x-navbar-link>
        @endauth
      </ul>
    </div>
  </div>
</nav>
