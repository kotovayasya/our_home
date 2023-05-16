@extends('layouts.default')

@section('content')
  <div class="content">
    <div class="row mb-10 md:mt-10">
      <div class="col pl-12 mt-6 md:w-8/12 md:mt-0 lg:w-5/12 lg:pl-0 lg:mr-24">
        <h3 class="h2 letter-spacing-xs mt-4 font-black mb-3">Общение с соседями</h3>
        <p class="leading-6 h5">Вы сможете легко общаться с соседями по вашему дому, обсуждать проблемы и находить
          решения вместе</p>
        <h3 class="h2 letter-spacing-xs mt-12 font-black mb-3">Легкий доступ к необходимой информации</h3>
        <p class="leading-6 h5">Вы всегда будете в курсе последних новостей, мероприятий, планов работ по обслуживанию
          дома и сможете быстро получить необходимую информацию</p>
        <h3 class="h2 letter-spacing-xs mt-12 font-black mb-3">Заполнение документации</h3>
        <p class="leading-6 h5">Вы сможете быстро и легко заполнить необходимые документы, такие как планы работ,
          протоколы собраний и другие. Это сэкономит ваше время и упростит процесс</p>
      </div>
      <div class="col col-end md:w-4/12 lg:w-6/12">
        <img class="mx-auto shadow-xl shadow-dark" style="filter:drop-shadow(0.5rem 0.5rem 0.25rem rgba(0, 0, 0, 0.075))"
          src="{{ asset('images/app/landing.png') }}" alt="Многоквартирный дом" loading="lazy" />
      </div>
    </div>
  </div>
@stop
