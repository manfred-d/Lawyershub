<x-layout>
    <section class="section ">
        <div class="container px-12">
            {{-- breadcrumb --}}
            <div class="row ">
                @include('components.breadcrumb')
            </div> {{-- end breadcrumb --}}
            <div class="row w-full p-4">
                <x-card class=" border-2 !w-full min-w-full pb-4">
                    <div class="profile_header m-0 w-full">
                        <div class="banner_header h-40 overflow-hidden -mb-7 -z-50 w-full"
                            style="background-image:url('/assets/images/logo.jpg');object-fit:cover;height:10rem;background-position:center ; background-size:cover; background-repeat:no-repeat;width:100%; ">
                            {{-- <picture>
                                <source srcset="/assets/images/logo.jpg" type="image/svg+xml">
                                <img src="assets/images/logo.jpg" height="100%" width="100%" class=" -z-10 object-cover bg-cover " alt="image desc">
                            </picture> --}}
                        </div>
                        {{-- lawyers details --}}
                        <x-card class="lawyer_info bg-slate-100 rounded-xl !mx-0 z-20">
                            <div class="row items-start">
                                <div class="profile_pic min-w-min border h-56 mx-5 mb-7 -mt-16 ">
                                    <picture>
                                        <source srcset="/assets/images/logo.png" type="image/svg+xml">
                                        <img src="image source" class=" w-full h-full object-cover" alt="image desc">
                                    </picture>
                                </div>
                                <div class="profile_details row items-start w-full mb-5 flex-col ">
                                    <div class="row w-full p-4 pl-7">
                                        <h4 class=" font-semibold text-3xl ">{{ $lawyer->last_name .'  '. $lawyer->first_name }}</h4>
                                    </div>
                                    <div class="row  items-start justify-between px-7 pb-0 w-full ">
                                        <div class="title_info items-start flex flex-col">
                                            <p class=" py-2">{{ $lawyer->practice_area }}, {{ $lawyer->location }}</p>
                                            <span class=" py-2">
                                                <ul class="flex justify-center">Reviews 4.0 &nbsp;
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="mr-1 h-5 w-5 text-warning">
                                                            <path fill-rule="evenodd"
                                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="mr-1 h-5 w-5 text-warning">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </span>
                                        </div>
                                        <div class="license mr-4">
                                            <h5 class=" py-2">Licensed {{ $lawyer->license_year->diffForHumans() }} </h5>
                                            <span class=" py-1">Ask a Question?</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- contact --}}
                            <div class="row">
                                <div class="contacts flex gap-3 ml-6 w-full items-center ">
                                    <a href="tel:{{ $lawyer->phone }}">
                                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                            class="mb-2 items-center flex rounded px-6 py-2.5 text-sm font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                            style="background-color: #ff0000">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                            </svg>
                                            Call
                                        </button>
                                    </a>
                                    <a href="https://api.whatsapp.com/wa.me/{{ $lawyer->phone }}">
                                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                            class="mb-2 items-center flex rounded px-6 py-2.5 text-sm font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                            style="background-color: rgb(52, 251, 52)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-4 w-4"
                                                fill="currentColor" style="color: #128c7e" viewBox="0 0 24 24">
                                                <path
                                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                            </svg>
                                            WhatsApp
                                        </button>
                                    </a>
                                    <a href="{{ $lawyer->website }}" target="blank">
                                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                            class="mb-2 flex rounded outline-none px-6 py-2.5 text-sm font-medium uppercase leading-normal text-gray-500 shadow-lg transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                            style="">
                                            Website
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </x-card>
                    </div>
                    
                    {{-- body starts --}}
                    <div class="row justify-between">
                        <div class="more-details relative py-10 px-3 w-2/3">
                            <x-card class=" sticky top-0 !border border-gray-700  -m-1 ">
                                <ul class="nav flex items-center justify-center " role="tablist" data-te-nav-ref>
                                    <li class="nav-item px-3 py-1 mx-5 " role="presentation">
                                        <a class=" text-black/80 hover:text-neutral-700 focus:text-neutral-900 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2  [&.active]:text-black/100 dark:[&.active]:text-gray-800"
                                            data-te-toggle="tab" data-te-target="#about" data-te-nav-active role="tab"
                                            aria-controls="about" aria-selected="true" href="#about"
                                            aria-current="page">About</a>
                                    </li>
                                    <li class="nav-item px-3 py-1 mx-5 " role="presentation">
                                        <a class=" text-black/80 hover:text-neutral-700 focus:text-neutral-900 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2  [&.active]:text-black/100 dark:[&.active]:text-gray-800"
                                            data-te-toggle="pill" data-te-target="#reviews" data-te-nav-active
                                            role="tab" aria-controls="reviews" aria-selected="false"
                                            href="#reviews">Reviews
                                        </a>
                                    </li>
                                    <li class="nav-item px-3 py-1 mx-5" role="presentation">
                                        <a class=" text-black/80 hover:text-neutral-700 focus:text-neutral-900 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2  [&.active]:text-black/100 dark:[&.active]:text-gray-800"
                                            data-te-toggle="tab" data-te-target="#resume" role="tab"
                                            aria-controls="resume" aria-selected="false" href="#resume">Resume</a>
                                    </li>
                                </ul>
                            </x-card>
                            <div class=" mx-2 min-h-screen overflow-y-auto ">
                                <div id="about"
                                    class="transition-opacity bg-gray-400 my-4 scroll-mt-14 duration-150 ease-linear data-[te-tab-active]:block"
                                    role="tabpanel" aria-labelledby="about" data-te-tab-active>
                                    <div class="row border-red-600 border-l-4 pt-2">
                                        <h4 class=" pl-5 text-xl font-medium text-red-600">About Lawyer</h4>
                                    </div>
                                    <div class="row flex-col px-6 mt-2">
                                        <div class="about_profile border-b pb-4 border-neutral-500 mb-2">
                                            <p class="text-medium text-neutral-700 mb-2">
                                                Area of practice. diligently fight for the rights of their clients in both
                                                state
                                                and federal courts.
                                            </p>
                                            <p class="text-medium text-neutral-700 mb-2">
                                                For over 20 years, Robert Loeb has provided aggressive criminal defense in
                                                Chicago and throughout Illinois. Through a combination of hard work and
                                                advanced
                                                trial skills, he diligently fights for the rights of his clients in both
                                                state
                                                and federal courts.
                                            </p>
                                        </div>
                                        {{-- <div class="line m-auto my-3 w-full h-px bg-gray-600 opacity-60"></div> --}}
                                        <div class="license mt-2">
                                            <h4 class=" capitalize text-lg text-gray-600">Licensed {{ $lawyer->license_year->diffForHumans() }}</h4>
                                            <a href="#" class=" grid grid-cols-2 my-3 pl-6 gap-4 ">
                                                <div class="text-base">{{ $lawyer->practice_area }}</div>
                                                <div class="percentage text-lg">80%</div>
                                            </a>
                                            <a href="#" class=" grid grid-cols-2 my-3 pl-6 gap-4 ">
                                                <div class=" text-base">{{ $lawyer->practice_area }}</div>
                                                <div class="percentage text-lg">60%</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="reviews"
                                    class="transition-opacity my-4 scroll-mt-14 duration-150 ease-linear data-[te-tab-active]:block"
                                    role="tabpanel" aria-labelledby="reviews">
                                    <div class="row border-red-600 border-l-4 pt-2 mb-3 items-center justify-between">
                                        <h4 class=" pl-5 text-xl font-medium text-red-600">Reviews</h4>
                                        <a href="/attoneys/reviews/name/write-review"
                                            class=" bg-gray-400 px-3 py-1 rounded-lg text-sm mr-10">Write a Review</a>
                                    </div>
                                    <div class="row px-3">
                                        <div class="card border-b pb-4 border-neutral-300">
                                            <span>rating stars</span>
                                            <p class="mb-2 mt-1 text-sm font-light text-neutral-400 dark:text-neutral-700">
                                                Posted by Robert | March, 2022 | Hired Attoney</p>
                                            <h4 class=" mb-1 text-gray-700 text-lg font-medium">World Class attoney</h4>
                                            <p class="font-light text-neutral-500 dark:text-neutral-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aspernatur
                                                accusamus quaerat recusandae adipisci tenetur labore, ipsam qui ex libero,
                                                sint, nisi ducimus?<br>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde architecto in
                                                aspernatur ut consectetur maiores hic fuga dolore rem tenetur.
                                            </p>
                                        </div>
                                        <div class="card border-b pb-4 border-neutral-300">
                                            <span>rating stars</span>
                                            <p class="mb-2 mt-1 text-sm font-light text-neutral-400 dark:text-neutral-700">
                                                Posted by Robert | March, 2022 | Hired Attoney</p>
                                            <h4 class=" mb-1 text-gray-700 text-lg font-medium">World Class attoney</h4>
                                            <p class="font-light text-neutral-500 dark:text-neutral-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aspernatur
                                                accusamus quaerat recusandae adipisci tenetur labore, ipsam qui ex libero,
                                                sint, nisi ducimus?<br>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde architecto in
                                                aspernatur ut consectetur maiores hic fuga dolore rem tenetur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="resume"
                                    class="transition-opacity my-4 scroll-mt-14 duration-150 ease-linear data-[te-tab-active]:block"
                                    role="tabpanel" aria-labelledby="resume">
                                    <div class="row border-red-600 border-l-4 pt-2">
                                        <h4 class=" pl-5 text-xl font-medium text-red-600">Resume</h4>
                                    </div>
                                    <div class="row">
                                        <x-card>
                                            <p class=" text-neutral-700 font-light text-base">Overrall Rating 7.0 (Very Good)</p>
                                        </x-card>
                                    </div>
                                    {{-- education --}}
                                    <div class="row justify-around border-b border-gray-300 pb-4 mx-3">
                                        <div class="education px-3 ml-3 mb-1 py-5">
                                            <h3 class=" font-bold text-xl text-slate-500 my-3">Education</h3>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2">Law School</h3>
                                                <p class="text-gray-400">Bachelors Degree</p>
                                                <p class="font-sm text-gray-400 mt-1">2000</p>
                                            </div>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2">Law School</h3>
                                                <p class="text-gray-400">Bachelors Degree</p>
                                                <p class="font-sm text-gray-400 mt-1">2000</p>
                                            </div>
                                        </div>
                                        <div class="work_experience px-3 py-5">
                                            <h3 class=" font-bold text-xl text-slate-500 my-3">Work Experience</h3>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2 capitalize">Attorney</h3>
                                                <p class="text-gray-400 capitalize">Law offices of Nairobi</p>
                                                <p class="font-sm text-gray-400 mt-1">2000 - 2010</p>
                                            </div>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2 capitalize">Managing Attorney</h3>
                                                <p class="text-gray-400 capitalize"> Law offices of Nathan & Law</p>
                                                <p class="font-sm text-gray-400 mt-1">2015 - </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Associations --}}
                                    <div class="row justify-around border-b border-gray-300 pb-5 my-10 mx-3">
                                        <div class="education pl-3 ml-3 mb-1 py-5">
                                            <h3 class=" font-bold text-xl text-slate-500 my-3">Associations</h3>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2 capitalize">State Bar of Nairbi</h3>
                                                <p class="text-gray-400 capitalize">member</p>
                                                <p class="font-sm text-gray-400 mt-1">2022 - present</p>
                                            </div>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2">State Bar of ..</h3>
                                                <p class="text-gray-400 capitalize">Member</p>
                                                <p class="font-sm text-gray-400 mt-1">2000 - 2010</p>
                                            </div>
                                        </div>
                                        <div class="work_experience pr-3 py-5">
                                            <h3 class=" font-bold text-xl text-slate-500 my-3 capitalize">Honor And Awards</h3>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2 capitalize">Champion of Justice award</h3>
                                                <p class="text-gray-400 capitalize">State of Nairobi</p>
                                                <p class="font-sm text-gray-400 mt-1">2014</p>
                                            </div>
                                            <div class="one">
                                                <h3 class=" text-gray-700 text-lg my-2 capitalize">Lawyers Award</h3>
                                                <p class="text-gray-400 capitalize"> Law Offices</p>
                                                <p class="font-sm text-gray-400 mt-1">2018 </p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Endorsement --}}
                                    <div class="row flex-col">
                                        <h4 class=" text-lg text-blue-500 ml-5 p-2">Attorney 's Endorsement</h4>
                                        <x-card class=" flex-row row items-center justify-evenly ">
                                            <div class="btns">
                                                <button type="button" data-te-ripple-init data-te-ripple-color="blue"
                                                    class="mb-2 rounded-3xl outline-none px-6 py-3 text-base font-medium uppercase leading-normal text-gray-700 shadow-xl transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none active:shadow-lg active:bg-blue-600"
                                                    style="">
                                                    Received (0)
                                                </button>
                                                <button type="button" data-te-ripple-init data-te-ripple-color="blue"
                                                    class="mb-2 rounded-3xl outline-none px-6 py-3 text-base font-medium uppercase leading-normal text-gray-700 shadow-xl transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none active:shadow-lg active:bg-blue-600"
                                                    style="">
                                                    Given (0)
                                                </button>
                                            </div>
                                            <div class="endorese-btn">
                                                <a href="/attoneys/endorsement/write"
                                                    class=" bg-gray-400 px-4 py-1 rounded-xl text-base mr-10">Endorse Named
                                                </a>
                                            </div>
                                        </x-card>
                                        {{-- endorsements --}}
                                        <x-card class=" border border-gray-300">
                                            <div class="row">
                                                <div class="image h-40 w-40 rounded-xl mr-4">
                                                    <img class="img-fluid rounded-xl h-full w-full" src="{{ asset('assets/images/logo.png') }}" alt="">
                                                </div>
                                                <div class="detail ml-7">
                                                    <h3 class="name text-lg pt-4 text-blue-400">Lawyers Name</h3>
                                                    <p class="text-gray-500 mb-3 capitalize text-sm">Estate Planning</p>
                                                    <p class="font-sm text-gray-500 mt-1">"I endorse this Lawyer" </p>
                                                </div>
                                            </div>
                                        </x-card>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- contact card aside --}}
                        <div class="contact_card w-1/3 my-8 px-3">
                            <x-card class="sticky top-5 border-t-4 border-blue-700 shadow-2xl p-5 ">
                                <div class="row">
                                    <div class="image h-40 w-32 rounded-xl mr-2">
                                        <img class="img-fluid rounded-xl h-full w-full" src="{{ asset('assets/images/logo.png') }}" alt="">
                                    </div>
                                    <div class="detail ml-3">
                                        <h3 class="name text-lg py-1 text-blue-400">{{ $lawyer->first_name ." ". $lawyer->last_name }}</h3>
                                        <p class="text-gray-500 flex mb-2 capitalize text-base">{{ $lawyer->practice_area }}</p>
                                        <p class="font-sm flex text-gray-500 my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                           Licensed {{ $lawyer->license_year->diffForHumans() }}
                                        </p>
                                        <span class="flex text-gray-500 my-1 py-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                            {{ $lawyer->location }}, Kenya
                                        </span>
                                        <span class=" font-sm text-yellow-600 font-light ">Free Consultations</span>
                                    </div>
                                </div>
                                <div class="row mt-6 w-full">
                                    <div class="contacts flex flex-col gap-1 w-full">
                                        <a href="tel:{{ $lawyer->phone }}" class=" w-full">
                                            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                                class="mb-2 w-full items-center justify-center gap-2 flex rounded px-6 py-2 text-base font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                                style="background-color: #ff0000">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4 text-lg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                                </svg>
                                                Call
                                            </button>
                                        </a>
                                        <a href="{{ $lawyer->website }}" class=" w-full">
                                            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                                class="mb-2 justify-center  w-full items-center flex rounded px-6 py-2 text-base font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                                style="background-color: #f00000">
                                                Website
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </x-card>
                        </div>
                    </div>

                </x-card>
            </div>
        </div>
    </section>

</x-layout>
