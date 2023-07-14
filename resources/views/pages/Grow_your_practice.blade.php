<x-layout>
    <section class="claim h-screen bg-gray-600">
        <div class="container m-auto">
            <div class="row flex justify-around w-full h-ful min-h-screen items-center">
                <div class="details h-full px-3 py-4">
                    <h2 class=" text-5xl font-bold text-gray-100 mb-6 py-3 ">Be found.<br>Claim your Profile Today</h2>
                    <div class="form mt-1">
                        <form role="form" action="" method="post">
                            @csrf
                           <div class="relative mb-6" data-te-input-wrapper-init>
                                <input
                                type="text"
                                name="full_name"
                                class=" block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                id="full_name"
                                placeholder="First and Last name" />
                                <x-input_err :messages="$errors->get('email')" class="" />
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input
                                type="text"
                                name="location"
                                class=" block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                id="location"
                                placeholder="City or County" />
                                <x-input_err :messages="$errors->get('email')" class="" />
                            </div>
                            <!-- Submit button -->
                            <button
                                type="submit"
                                class="inline-block w-full rounded px-7 bg-green-600 pt-3 pb-3 text-base font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            >
                                Find Your Profile
                            </button>

                        </form>
                    </div>
                </div>
                <div class="details_img min-w-min  items-center justify-center flex flex-col">
                    <div class="thumb min-h-full h-full w-3/4 ">
                        <img class=" w-full h-full rounded-lg" src="{{ asset('assets/images/claim.jpeg') }}" alt="">
                    </div>
                    <div class="details_name w-full mt-2 text-center ">
                        <h2 class=" font-bold text-2xl text-gray-100">Peninah M. Aki</h2>
                        <span class=" font-light text-base">Information Technology</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>