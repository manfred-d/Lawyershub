<x-layout>
    <section class="claim min-h-screen bg-gray-600 pb-10">
        <div class="container m-auto">
            <div class="row flex-col md:flex-row sm:justify-around w-full h-ful min-h-screen items-center">
                <div class="details h-full px-3 py-4 mb-6 md:mb-0">
                    <h2 class=" text-2xl md:text-5xl font-bold text-gray-100 mb-6 py-3 ">Be found.<br>Claim your Profile Today</h2>
                    <div class="form mt-1">
                        <form role="form" action="" method="post">
                            @csrf
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="text" name="full_name"
                                    class=" block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                    id="full_name" placeholder="First and Last name" />
                                <x-input_err :messages="$errors->get('email')" class="" />
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="text" name="location"
                                    class=" block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                    id="location" placeholder="City or County" />
                                <x-input_err :messages="$errors->get('email')" class="" />
                            </div>
                            <!-- Submit button -->
                            <button type="submit"
                                class="inline-block w-full rounded px-7 bg-green-600 pt-3 pb-3 text-base font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                                Find Your Profile
                            </button>

                        </form>
                    </div>
                </div>
                <div class="details_img min-w-min  items-center justify-center flex flex-col">
                    <div class="thumb min-h-full h-full md:w-3/4 w-3/5">
                        <img class=" w-full h-full rounded-lg" src="{{ asset('assets/images/claim.jpeg') }}"
                            alt="">
                    </div>
                    <div class="details_name w-full mt-2 text-center ">
                        <h2 class=" font-bold text-2xl text-gray-100">Peninah M. Aki</h2>
                        <span class=" font-light text-base">Information Technology</span>
                    </div>
                </div>
            </div>
            <div class="row w-full mb-3 mt-10 text-center flex items-center">
                <div class="be_part  w-full mb-6">
                    <h2 class=" font-bold text-2xl text-gray-100 capitalize">Be part of the Legal Network</h2>
                    <p class=" font-medium text-lg italic capitalize">Boost your Online Presence</p>
                </div>
            </div>
            <div class="row w-full flex flex-col md:flex-row justify-between items-start pb-5 ">
                <div class="col-1 md:w-3/5 w-full">
                    <x-card>
                        <div class="heading my-2 ">
                            <h2 class=" font-bold text-lg capitalize text-gray-500">Search Your Account Details</h2>
                        </div>
                        <div class="body px-2 leading-7 font-light text-base">
                            Free Free directory listing with high visibility on Google, Bing, and Yahoo.
                            Efficiency you need to provide representation. Expand your reach once registered by
                            receiving messages directly from clients on our site.
                        </div>
                    </x-card>
                    <x-card>
                        <div class="heading my-2 ">
                            <h2 class=" font-bold text-lg capitalize text-gray-500">Confirm thats its you!</h2>
                        </div>
                        <div class="body px-2 leading-7 font-light text-base">
                            Verify that it is you: <br>Use your LinkedIn account to verify your identity 
                            <br>Use you Email account and Phone No. to verify
                        </div>
                    </x-card>
                    <x-card>
                        <div class="heading my-2 ">
                            <h2 class=" font-bold text-lg capitalize text-gray-500">Build your Profile</h2>
                        </div>
                        <div class="body px-2 leading-7 font-light text-base">
                            Log In and start to build your profile;
                            <ul>
                                <li>Upload your profile picture</li>
                                <li>Add your contact information</li>
                                <li>Select area of practice</li>
                                <li>Fill out your resume</li>
                                <li>Ask for reviews</li>
                            </ul>
                        </div>
                    </x-card>
                    <x-card>
                        <div class="heading my-2 ">
                            <h2 class=" font-bold text-lg capitalize text-gray-500">Connect with Clients</h2>
                        </div>
                        <div class="body px-2 leading-7 font-light text-base">
                            Free Free directory listing with high visibility on Google, Bing, and Yahoo.
                            Efficiency you need to provide representation. Expand your reach once registered by
                            receiving messages directly from clients on our site.
                        </div>
                    </x-card>
                    <x-card>
                        <div class="heading my-2 ">
                            <h2 class=" font-bold text-lg capitalize text-gray-500">Solicit peer reviews</h2>
                        </div>
                        <div class="body px-2 leading-7 font-light text-base">
                            Free Free directory listing with high visibility on Google, Bing, and Yahoo.
                            Efficiency you need to provide representation. Expand your reach once registered by
                            receiving messages directly from clients on our site.
                        </div>
                    </x-card>
                </div>
                {{-- image --}}
                <div class="col-2 w-2/5 hidden md:block sticky top-1">
                    <div class="thumb min-h-full h-full w-3/4 py-4 ">
                        <img class=" w-full h-full rounded-lg" src="{{ asset('assets/images/claim.jpeg') }}"
                            alt="">
                    </div>
                </div>

            </div>
            <div class="row w-full flex flex-col md:flex-row items-center px-10 md:px-0">
                <a href="">
                    <x-button class=" mb-5 md:mb-0" >Claim Your Profile</x-button>
                </a>
                <a href="{{ '' }}">
                    <x-button class=" mb-5 md:mb-0 !bg-transparent outline-1 outline hover:outline-0" >Contact Sales Admin</x-button>
                </a>
            </div>
        </div>
    </section>
</x-layout>
