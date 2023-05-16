@extends('layouts.default')

@section('content')
  <section class="py-10" id="header">
    <div class="container mb-10">
      <div class="row">
        <div class="col lg:w-10/12 mx-auto">
          <div
            class="p-5 md:p-12 flex flex-col md:flex-row items-center bg-gradient-to-r from-gray-50 to-gray-100 text-center md:text-left">
            <div>
              <h4 class="font-semibold mb-3">Форум</h4>
              <h2 class="font-semibold mb-3">Объявления и новости</h2>
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
    <hr class="h-0.5 my-2 bg-primary-700" />
    <div class="container mt-10">
      <div class="row my-5">
        <div class="col relative">
          <a class="text-dark hover:text-primary" href="#">
            <h3>
              <i class="fas fa-comment"></i> Новый парк открывается завтра!
            </h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus at
            ex tortor. Duis dictum facilisis felis, euismod faucibus justo vehicula sed. Curabitur quam dui, consectetur
            at tempor venenatis, imperdiet a diam. Donec venenatis, risus ut bibendum aliquam, diam erat finibus ex, vel
            eleifend leo tellus eu tellus. Curabitur volutpat neque quis neque euismod porttitor.</p>
          <div class="flex flex-row items-center gap-5 text-sm">
            <span class="flex flex-row items-center text-lg">
              <img class="h-12 w-12" src="https://dummyimage.com/1000x600/edf2f7/0f1631&text=Placeholder" /> Котова Я.А.
            </span>
            <span class="grow">
              <i class="fas fa-clock"></i> 01.03.2023 09:47
            </span>
            <span class="mr-5">
              <i class="fas fa-comments"></i> 36
            </span>
          </div>
          <div class="flex flex-row items-center mt-5">
            <span class="text-2xl grow">
              <i class="fas fa-caret-up lg:text-success-700"></i> 15 <i class="fas fa-caret-down lg:text-danger-700"></i>
            </span>
            <select class="form-input w-min mr-5" name="options">
              <option value="">Жалоба</option>
              <option value="">Спам</option>
              <option value="">Мат</option>
            </select>
          </div>
        </div>
      </div>
      <hr class="h-0.5 my-2 bg-primary-600" />
      <div class="row my-5">
        <div class="col relative">
          <a class="text-dark hover:text-primary" href="#">
            <h3>
              <i class="fas fa-comment"></i> Новый парк открывается завтра!
            </h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed magna ut tellus placerat luctus. Vivamus at
            ex tortor. Duis dictum facilisis felis, euismod faucibus justo vehicula sed. Curabitur quam dui, consectetur
            at tempor venenatis, imperdiet a diam. Donec venenatis, risus ut bibendum aliquam, diam erat finibus ex, vel
            eleifend leo tellus eu tellus. Curabitur volutpat neque quis neque euismod porttitor.</p>
          <div class="flex flex-row items-center gap-5 text-sm">
            <span class="flex flex-row items-center text-lg">
              <img class="h-12 w-12" src="https://dummyimage.com/1000x600/edf2f7/0f1631&text=Placeholder" /> Котова Я.А.
            </span>
            <span class="grow">
              <i class="fas fa-clock"></i> 01.03.2023 09:47
            </span>
            <span class="mr-5">
              <i class="fas fa-comments"></i> 36
            </span>
          </div>
          <div class="flex flex-row items-center mt-5">
            <span class="text-2xl grow">
              <i class="fas fa-caret-up lg:text-success-700"></i> 15 <i class="fas fa-caret-down lg:text-danger-700"></i>
            </span>
            <select class="form-input w-min mr-5" name="options">
              <option value="">Жалоба</option>
              <option value="">Спам</option>
              <option value="">Мат</option>
            </select>
          </div>
        </div>
      </div>
      <hr class="h-0.5 my-2 bg-primary-600" />
    </div>
  </section>
@stop
