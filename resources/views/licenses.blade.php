<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Licenses
    </h2>
  </x-slot>

  <div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden sm:rounded-md bg-white">
        @livewire('satifest-licenses-table')
      </div>
    </div>
  </div>
</x-app-layout>
