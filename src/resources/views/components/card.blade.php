<!-- merge component classes with any class prop passed in -->
<div {{$attributes->merge([
    'class' => 'bg-gray-50 border border-gray-200 rounded p-6'
  ])}}
  >
  {{ $slot }}
</div>
