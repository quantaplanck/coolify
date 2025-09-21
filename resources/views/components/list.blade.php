@props([
  'posts',
])

<div>
  <h2 class="text-base/7 font-semibold text-gray-900">List Makanan</h2>
  <p class="mt-1 text-sm/6 text-gray-600">Jangan lupa makanan yang disimpan, ya!</p>
  <ul role="list" class="divide-y divide-gray-100">
    @foreach ($posts as $post)
      <li class="flex justify-between gap-x-6 py-5">
        <div class="flex min-w-0 gap-x-4">
          <div class="min-w-0 flex-auto">
            <p class="text-sm/6 font-semibold text-gray-900">{{ $post->foodName }}</p>
            <div class="bg-amber-100 rounded-3xl">
              <p class="mt-1 truncate text-xs/5 text-gray-500 text-center">
                {{ 14 + ((int) now()->diffInDays($post->dateIn)) . ' days' }}
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-end">
          <p class="text-sm/6 text-gray-900">{{ 'In: ' . \Carbon\Carbon::parse($post->dateIn)->format('d M Y') }}</p>
          <br />
          <p class="text-sm/6 text-gray-900">
            {{ 'Out: ' .\Carbon\Carbon::parse($post->dateIn)->addDays(14)->format('d M Y') }}
          </p>
          <br />
        </div>
      </li>
    @endforeach
  </ul>
</div>
