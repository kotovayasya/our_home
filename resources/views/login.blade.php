@extends('layouts.default')

@section('content')
  <div class="content">
    <form method="POST" action="/authenticate">
      @csrf
      <div class="lg:mx-80">
        <h2 class="font-semibold text-xl text-dark mt-5 text-center">Вход</h2>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:py-8 mb-6">
          <div class="grid gap-4 text-sm grid-cols-1">
            <div>
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1">
                <div>
                  <label for="email">Email</label>
                  <input type="text" name="email" id="Email"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ old('email') }}" />
                  @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div>
                  <label for="password">Пароль</label>
                  <input type="password" name="password" id="Password"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                  @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div>
                  <div class="inline-flex items-center">
                    <input type="checkbox" name="remember_me" id="RememberMe" class="form-checkbox" />
                    <label for="billing_same" class="ml-2">Запомнить меня?</label>
                  </div>
                </div>
                <div class="text-center">
                  <div class="inline-flex items-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                      id="continue">Войти</button>
                  </div>
                  <p class="mt-4 text-sm text-dark">
                    Еще не зарегистрированы?
                    <a href="/register" class="underline text-primary-1000">Регистрация</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@stop
