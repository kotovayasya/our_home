@extends('layouts.default')

@section('content')
  <section class="py-10" id="features">
    <div class="container">
      <div class="row justify-center pb-12">
        <div class="col text-center">
          <h2 class="text-5xl font-semibold">О проекте</h2>
        </div>
      </div>
      <div class="row md:mb-6">
        <div class="col md:w-4/12 mb-5">
          <div class="bg-primary-50 p-6 h-full">
            <div class="mb-5">
              <i class="fas fa-mobile-alt text-4xl text-primary"></i>
            </div>
            <h3 class="font-semibold mb-3">Block based</h3>
            <p>Versoly templates are built with blocks, that means you can add and swap blocks to give your landing page a
              custom feel while using a template.</p>
          </div>
        </div>
        <div class="col md:w-4/12 mb-5">
          <div class="bg-primary-50 p-6 h-full">
            <div class="mb-5">
              <i class="fas fa-keyboard text-4xl text-primary"></i>
            </div>
            <h3 class="font-semibold mb-3">Fully Responsive</h3>
            <p>All blocks are built with responsiveness in mind, so your landing page will look great on phones, tablets
              and laptops.</p>
          </div>
        </div>
        <div class="col md:w-4/12 mb-5">
          <div class="bg-primary-50 p-6 h-full">
            <div class="mb-5">
              <i class="fas fa-code text-4xl text-primary"></i>
            </div>
            <h3 class="font-semibold mb-3">Keyboard Shortcuts</h3>
            <p>We have built the editor for speed. By adding well known shortcuts such as undo, redo, delete and copy you
              can build faster.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
