@extends('layouts.default')

@section('content')
  <section class="py-10" id="header">
    <div class="content lg:px-20 mb-10">
      <div class="row items-center">
        <div class="col lg:w-6/12">
          <h1 class="display-4 letter-spacing-xs mb-6 font-semibold">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary capitalize">Форум</span>
          </h1>
          <p class="text-muted text-lg">Общение с жильцами своего дома, обмен опытом и полезной информацией, решение общих
            вопросов, организация мероприятий и многое другое</p>
          <div class="max-w-md border-b-[2px]">
            <div class="relative w-full h-10 flex items-center overflow-hidden bg-white rounded-lg focus-within:shadow-lg">
              <div class="grid place-items-center h-full w-12 text-gray-300">
                <i class="fas fa-search fa-3x text-2xl text-primary ring-tertiary"></i>
              </div>
              <input class="w-full border-none outline-none" type="text" id="search"
                placeholder="Поиск дома на форуме" />
            </div>
          </div>
        </div>
        <div class="col lg:w-6/12 mt-12 lg:mt-0">
          <img class="block mx-auto lg:mr-0 pr-6 lg:max-w-[500px]" src="{{ asset('images/app/forum.png') }}"
            style="filter:drop-shadow(0.5rem 0.5rem 0.25rem rgba(0, 0, 0, 0.075))" width="500" height="370"
            alt="Форум" />
        </div>
      </div>
    </div>
    <div class="content mt-10">
      @foreach ($data as $city)
        <a class="text-dark hover:text-primary" href="/forum/{{ $city['city'] }}">
          <div class="row my-5">
            <div class="col relative">
              <h4><i class="fas fa-city"></i> {{ $city['city_type'] . '. ' . $city['city'] }}</h4>
              <div class="flex flex-row gap-5">
                <span>
                  <i class="fas fa-home"></i>Домов: {{ $city['count'] }}
                </span>
                <span>
                  <i class="fas fa-users"></i>Жителей: {{ $city['userCount'] }}
                </span>
              </div>
            </div>
          </div>
        </a>
        <hr class="h-px my-2 bg-primary-800" />
      @endforeach
      <hr class="h-px my-2 bg-primary-800" />
    </div>
  </section>
@stop
