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
                <a data-toggle="tab" href="#home">Grow Your Practice</a>
            </li>
            <li>
                <a data-toggle="tab" href="#about">Get Advice</a>
            </li>
            <li>
                <a data-toggle="tab" href="#contact">Sign In</a>
            </li>
        </ul>
    </nav>

    {{-- View output --}}
    <main>
        {{ $slot }}
    </main>
    {{-- Footer --}}
    @include('utils.footer')

</body>