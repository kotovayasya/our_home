<footer class="py-6 bg-primary lg:py-3" id="footer">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        @include('partials._footer_brand')
        <div class="flex flex-col md:flex-row justify-center mx-auto mb-6 gap-y-3">
          <x-footer-link href="/about">О проекте</x-footer-link>
          <x-footer-link href="/contact">Контакты</x-footer-link>
          <x-footer-link href="/sitemap">Карта сайта</x-footer-link>
        </div>
      </div>
    </div>
  </div>
</footer>
