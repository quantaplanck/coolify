@if (session('error'))
  <script>
    alert('{{ session('error') }}');
  </script>
@endif

<x-layout>
  <x-slot name="title">Login</x-slot>
  <div class="flex flex-col justify-center align-middle sm:flex-row gap-10">
    <div class="flex justify-center align-middle sm:w-4xl">
      <img src="{{ asset('img/rumah_talenta_bca.jpg') }}" alt="RTB" class="w-full h-auto rounded-4xl object-contain" />
    </div>
    <div class="h-full">
      <div>
        <h1 class="font-semibold text-3xl">
          Welcome Back
          <span class="text-3xl">&#128075;</span>
        </h1>
        <p class="mt-2">
          Today is a new day. It's your day. You shape it. Sign in to start managing your refrigerator.
        </p>
      </div>

      <div class="flex min-h-full flex-col justify-center">
        <div class="mt-3 sm:mx-auto sm:w-full">
          <form action="/home" method="POST" class="space-y-3">
            @csrf

            <div>
              <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
              <div class="mt-2">
                <input
                  id="email"
                  type="email"
                  name="email"
                  required
                  autocomplete="email"
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-cblue sm:text-sm/6"
                  placeholder="admin@example.com"
                />
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input
                  id="password"
                  type="password"
                  name="password"
                  required
                  autocomplete="current-password"
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-cblue sm:text-sm/6"
                  placeholder="admin"
                />
              </div>
              <div class="text-sm mt-2 flex justify-end">
                <a href="#" class="font-semibold text-cblue hover:text-cblue hover:underline">Forgot password?</a>
              </div>
            </div>

            <div>
              <button
                type="submit"
                class="flex w-full justify-center rounded-md bg-cblue px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs border-2 hover:bg-white hover:text-cblue hover:border-cblue focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
              >
                Sign in
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>
