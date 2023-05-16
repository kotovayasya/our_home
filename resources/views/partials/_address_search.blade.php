<li>
  <form method="POST" action="/">
    @csrf
    <div class="absolute -top-2">
      <span id="message"></span>
    </div>
    <div class="inline-flex flex-col md:w-128 justify-center relative text-gray-500">
      <input type="search" class="p-2 pl-8 bg-transparent text-dark placeholder-dark focus:outline-none" id="address"
        placeholder="Поиск дома" autocomplete="off" />
      <button id="continue" type="submit" class="absolute left-0 top-0 mt-2 ml-2"><i
          class="fas fa-search text-dark w-4 h-4"></i></button>
      <input id="city" name="city" class="hidden">
      <input id="street" name="street" class="hidden">
      <input id="house" name="house" class="hidden">
      <input id="block" name="block" class="hidden">
      <input id="geo_lat" name="geo_lat" class="hidden">
      <input id="geo_lon" name="geo_lon" class="hidden">
    </div>
  </form>

</li>
