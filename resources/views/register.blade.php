@extends('layouts.login')

@section('content')
  <div class="content">
    <form method="POST" action="/create_user">
      @csrf
      <div>
        <h2 class="font-semibold text-xl text-dark mt-5 text-center">Регистрация</h2>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:py-8 lg:mx-56 mb-6">
          <div class="grid gap-4 text-sm grid-cols-1 lg:grid-cols-6">
            <div class="lg:col-span-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                <div class="md:col-span-2">
                  <label for="last_name">Фамилия</label>
                  <input type="text" name="last_name" id="LastName"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                  @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-2">
                  <label for="first_name">Имя</label>
                  <input type="text" name="first_name" id="FirstName"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                  @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-2">
                  <label for="patronymic">Отчество</label>
                  <input type="text" name="patronymic" id="Patronymic"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                  @error('patronymic')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-6">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="Email"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                    placeholder="email@domain.com" />
                  @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>

                <div class="md:col-span-5">
                  <label for="address">Адрес</label>
                  <input type="text" name="address" id="address"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                  <p class="text-red-500 text-xs mt-1" id="message"></p>
                </div>
                <div class="md:col-span-1">
                  <label for="apartment">Квартира</label>
                  <input type="text" name="apartment" id="Apartment"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                  @error('apartment')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-3">
                  <label for="password">Пароль</label>
                  <input type="password" name="password" id="Password"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                  @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-3">
                  <label for="PasswordConfirmation">Повторите пароль</label>
                  <input type="password" name="password_confirmation" id="PasswordConfirmation"
                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                  @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                  @enderror
                </div>
                <div class="md:col-span-2">
                  <div class="inline-flex items-center">
                    <input type="checkbox" name="remember_me" id="RememberMe" class="form-checkbox" />
                    <label for="billing_same" class="ml-2">Запомнить меня?</label>
                  </div>
                </div>
                <input id="city_type" name="city_type" class="hidden">
                <input id="city" name="city" class="hidden">
                <input id="street_type" name="street_type" class="hidden">
                <input id="street" name="street" class="hidden">
                <input id="house_type" name="house_type" class="hidden">
                <input id="house" name="house" class="hidden">
                <input id="block_type" name="block_type" class="hidden">
                <input id="block" name="block" class="hidden">
                <input id="geo_lat" name="geo_lat" class="hidden">
                <input id="geo_lon" name="geo_lon" class="hidden">
                <div class="md:col-span-4 text-right">
                  <div class="inline-flex items-end">
                    <a class="font-bold py-2 px-4">Правила</a>
                  </div>
                </div>
                <div class="md:col-span-6 text-center">
                  <div class="inline-flex items-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                      id="continue">Зарегистрироваться</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@stop
