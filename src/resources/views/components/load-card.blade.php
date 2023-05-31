@props(['load'])

<x-card>
  <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src="{{$load->logo ? asset('storage/' . $load->logo) : asset('/images/no-image.png')}}"
          alt=""
      />
      <div>
          <h3 class="text-2xl">
              <a href="/load/{{$load->id}}">{{ $load->title }}</a>
          </h3>

          <div class="text-xl font-bold mb-4">{{ $load->company }}</div>
          <div class="text-lg mt-4">
              <i class="fa-solid fa-location-dot"></i> {{ $load->location }}
          </div>
      </div>
  </div>
</x-card>
