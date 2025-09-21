<nav class="bg-[#eee]">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="https://pt-slp.co.id/assets/img/SLP-Trans.png" alt="SLP" class="h-9 sm:h-11" />
        </div>
      </div>
      <div class="block">
        <div class="flex items-center">
          <div class="block">
            <div class="flex items-baseline space-x-2 sm:space-x-4">
              <!-- Current: "bg-gray-950/50 text-black", Default: "text-black hover:bg-white/5 hover:text-black" -->
              <a
                href="/home"
                aria-current="page"
                class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-black/75 hover:text-white"
              >
                Home
              </a>
              <a
                href="/about"
                class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-black/75 hover:text-white"
              >
                About
              </a>
              <form
                method="POST"
                action="{{ route('logout') }}"
                class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-red-700/75 hover:text-white"
              >
                @csrf
                <button type="submit">Logout</button>
              </form>
            </div>
          </div>
          {{--
            <button
            type="button"
            class="relative rounded-full p-1 text-gray-400 hover:text-black focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500"
            >
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            data-slot="icon"
            aria-hidden="true"
            class="size-6"
            >
            <path
            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
            stroke-linecap="round"
            stroke-linejoin="round"
            />
            </svg>
            </button>
          --}}

          <!-- Profile dropdown -->
          {{--
            <el-dropdown class="relative ml-3">
            <button
            class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
            >
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt=""
            class="size-8 rounded-full outline -outline-offset-1 outline-white/10"
            />
            </button>
            
            <el-menu
            anchor="bottom end"
            popover
            class="w-48 origin-top-right rounded-md bg-gray-800 py-1 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in"
            >
            <a href="#" class="block px-4 py-2 text-sm text-black focus:bg-white/5 focus:outline-hidden">
            Your profile
            </a>
            <a href="#" class="block px-4 py-2 text-sm text-black focus:bg-white/5 focus:outline-hidden">
            Settings
            </a>
            <a href="#" class="block px-4 py-2 text-sm text-black focus:bg-white/5 focus:outline-hidden">
            Sign out
            </a>
            </el-menu>
            </el-dropdown>
          --}}
        </div>
      </div>
    </div>
  </div>
</nav>
