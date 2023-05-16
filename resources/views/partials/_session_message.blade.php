@if (session()->has('message'))
  <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
    class="fixed bottom-0 left-0 max-w-fit rounded-md bg-primary-300 border border-gray-100 px-4 py-2 shadow-sm">
    <div class="flex items-start gap-4">
      <div class="flex-1">
        <strong class="block font-medium text-gray-900">{{ session('title') }}</strong>
        <p class="text-sm text-gray-700">
          {{ session('message') }}
        </p>
      </div>
    </div>
  </div>
@endif
