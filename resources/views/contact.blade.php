@extends('layouts.default')

@section('content')
  <section class="py-10" id="contact">
    <div class="container">
      <div class="row">
        <div class="col md:w-8/12 lg:w-6/12 mb-12">
          <h2 class="display-4 font-semibold mb-4">Связаться с нами</h2>
        </div>
        <div class="col lg:w-8/12 bg-white py-6 rounded-left">
          <form class="row" data-formid="2e035397-fc5c-4655-a232-5f14af213b8e">
            <div class="col md:w-6/12 mb-4">
              <label>Имя</label>
              <input type="text" class="form-input" placeholder="Ваше имя" name="name" />
            </div>
            <div class="col md:w-6/12 mb-4">
              <label>Email</label>
              <input type="email" name="email" class="form-input" placeholder="Email" />
            </div>
            <div class="col mb-4">
              <label>Тема</label>
              <input type="text" class="form-input" name="subject" placeholder="Тема" />
            </div>
            <div class="col mb-4">
              <label>Сообщение</label>
              <textarea name="message" class="form-input" id="message" rows="6"></textarea>
            </div>
            <div class="col md:w-6/12 mb-4">
              <button type="submit" class="btn btn-primary btn-lg">Отправить сообщение</button>
            </div>
          </form>
          <div data-form-successid="2e035397-fc5c-4655-a232-5f14af213b8e"
            class="d-js alert alert-success bg-success text-white">
            <p class="mb-0">Мы получили Ваше сообщение, ожидайте ответа!</p>
          </div>
          <div data-form-errorid="2e035397-fc5c-4655-a232-5f14af213b8e"
            class="d-js alert alert-danger bg-danger text-white mt-2">
            <p class="mb-0">Ошибка отправки, попытайтесь снова.</p>
          </div>
        </div>
        <div class="col lg:w-4/12 bg-primary text-white py-6 rounded-r">
          <h4 class="font-semibold mb-3">Контактная информация</h4>
          <h5 class="font-semibold mb-3">Рабочее время</h5>
          <p class="mb-5">Пн-Пт: 09:00 - 18:00</p>
          <div class="flex items-center mb-3">
            <i class="fas fa-map-marker-alt text-3xl float-left w-[45px]"></i>
            <span>Санкт-Петербург, Россия</span>
          </div>
          <div class="flex items-center mb-3">
            <i class="fas fa-mobile-alt text-3xl float-left w-[45px]"></i>
            <span>+79112802310</span>
          </div>
          <div class="flex items-center mb-3">
            <i class="fas fa-envelope text-3xl float-left w-[45px]"></i>
            <span>kotovayasya@gmail.com</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
