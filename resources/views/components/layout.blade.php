@include('utils.head')

<body>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo.png') }}" alt="Logo" class="img-responsive">
            </a>
        </div>
        <ul class="nav nav-pills nav-justified">
            <li class="active">
                <a data-toggle="tab" href="/for_lawyers">Grow Your Practice</a>
            </li>
            <li>
                <a data-toggle="tab" href="/legal_advice">Get Advice</a>
            </li>
            @if (Auth::user())
                <li class="dropdown relative transition-all ">

                    <button class="inline-flex cursor-pointer items-center gap-2">
                        <a class="">{{ Auth::user()->last_name }}</a>
                        <svg class="fill-current h-5 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="content absolute transition-all top-full bg-slate-500 w-full py-2 ">
                        <x-dropdown_link :href="route('lawyer.profile',Auth::user())"
                                class=" transition-all ">
                               {{ __('Profile') }} 
                            </x-dropdown_link> 
                        <form method="post" action="{{ route('user.destroy') }}">
                              
                            @csrf
                            <x-dropdown_link :href="route('user.destroy')" onclick="event.preventDefault();
                                this.closest('form').submit();" class=" transition-all ">
                               {{ __('Logout') }} 
                            </x-dropdown_link>
                        </form>           
                                  
                    </div>
                </li>
            @else
                <li>
                    <a data-toggle="tab" href="{{ route('user.login') }}">Sign In</a>
                </li>
            @endif
        </ul>
    </nav>

    {{-- View output --}}
    <main>
        {{ $slot }}
    </main>
    {{-- Footer --}}
    @include('utils.footer')

</body>
