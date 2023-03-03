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
                <a data-toggle="tab" href="#home">Home</a>
            </li>
            <li>
                <a data-toggle="tab" href="#about">About</a>
            </li>
            <li>
                <a data-toggle="tab" href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    {{-- View output --}}
    <main>
        {{ $slot }}
    </main>
    {{-- Footer --}}
    {{-- @include('utils.footer'); --}}

</body>