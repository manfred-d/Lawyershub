<x-layout>
    <section class="main">
        <div class="container">
            <div class="row flex-col justify-center items-center min-h-screen w-full">
                <h3 class=" font-medium capitalize text-cyan-100 mb-10 text-5xl">Experienced Lawyers are ready to help
                    ...</h3>
                <div class="search">
                    @include('partials._search')
                </div>
            </div>
        </div>
    </section>
    @include('partials._banner')

    {{-- more lawyers card --}}
    <section class="more_cards">
        <div class="container overflow-x-hidden">
            <div class="row p-5 text-center mx-3 mt-2">
                <h4 class=" text-xl text-neutral-500">Top Rated Lawyers</h4>
            </div>
            <div class="row bg-red-600">
            
            @if ($lawyers->count())
                <div class="rated_lawyers grid w-full">
                    @foreach ($lawyers as $lawyer)
                    {{-- Start of the card --}}
                    <x-card class=" m-0">
                        <div class="card_head flex w-full ">
                            <div class="card_image w-48 h-52 rounded-lg">
                                <img class="w-full h-full rounded-lg" src="{{ asset('assets/images/lawyers.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card_head_info w-3/5 pl-5">
                                <a href="{{ route('lawyer.profile',$lawyer->id) }}" class=" text-xl capitalize text-blue-600 font-semibold">{{ $lawyer->first_name ." ". $lawyer->last_name}}</a>
                                <ul class=" text-lg mb-1 text-emerald-800 font-light py-1">Practice Area:
                                    <li class=" text-sm pl-3 mb-1 capitalize">
                                        {{ $lawyer->practice_area }}
                                    </li>
                                    <li class=" text-sm pl-3 mb-1 capitalize">
                                        {{ $lawyer->practice_area }}
                                    </li>
                                </ul>
                                <p class=" text-lg text-blue-500 font-light py-2">Location: </p>
                                <span class="flex text-gray-500 px-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    {{ $lawyer->location }}
                                </span>
                            </div>
                        </div>
                        <div class=" mt-4 h-px w-full bg-gray-300 px-1"></div>
                        <div class="card_body">
                        <h4 class=" text-left text-lg capitalize text-gray-500 font-semibold ">World Class Attorney</h4>
                            <p class="body_info text-lg text-stone-700 py-2 text-ellipsis  ">
                                Every now and then you’re the recipient of good fortune. In my case the good fortune was to hire a World Class Attorney in the person 
                            </p>
                            <div class="row justify-center items-center text-center w-full">
                                <a name="" id=""
                                    class=" btn py-2 mt-4 mx-5 w-full border-2 border-blue-500 rounded-lg " href="#"
                                    role="button">See more similar lawyers</a>
                            </div>
                        </div>

                    </x-card>
                    {{-- End of card --}}
                    @endforeach
                </div>                
            @else
                
            @endif
            </div>
        </div>
    </section>
</x-layout>
