@extends('layouts.default')

@section('content')
  <section class="py-10" id="header">
    <div class="content mb-10">
      <div class="row">
        <div class="col lg:w-10/12 mx-auto">
          <div
            class="p-5 md:p-12 flex flex-col md:flex-row items-center bg-gradient-to-r from-gray-50 to-gray-100 text-center md:text-left">
            <div>
              <h5 class="font-semibold mb-3">Форум</h5>
              <h3 class="font-semibold mb-3">{{ $city }}</h3>
            </div>
            <div class="max-w-md mx-auto">
              <div
                class="relative w-full h-10 flex items-center overflow-hidden bg-white rounded-lg focus-within:shadow-lg">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                  <i class="fas fa-search fa-3x text-2xl text-primary ring-tertiary"></i>
                </div>
                <input class="w-full border-none outline-none" type="text" id="search" placeholder="Поиск тем" />
              </div>
            </div>
          </div>
          <div class="h-2 bg-gradient-to-r from-primary to-secondary"></div>
        </div>
      </div>
    </div>
    <div class="content mt-10">
      @foreach ($data as $home)
        <a class="text-dark hover:text-primary"
          href="/forum/{{ $city }}/{{ $home['id'] }}/{{ $home['full_address'] }}">
          <div class="row my-5">
            <div class="col relative">
              <h4><i class="fas fa-home"></i>
                {{ $home['full_address'] }}
              </h4>
              <div class="flex flex-row gap-5 text-sm">
                <span>
                  <i class="fas fa-users"></i> Жители: 25
                </span>
                <span>
                  <i class="fas fa-book"></i> Темы: 8
                </span>
                <span>
                  <i class="fas fa-comments"></i> Комментарии: 36
                </span>
                <span>
                  <i class="fas fa-clock"></i> Последний комментарий: 01.03.2023 09:47
                </span>
              </div>
            </div>
          </div>
        </a>
        <hr class="h-0.5 my-2 bg-primary-600" />
      @endforeach

    </div>
  </section>
@stop
