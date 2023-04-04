<x-layout>
    <section class="profile">
        <div class="container">
            <div class="row w-full min-h-screen items-center justify-center">
                <x-card class=" max-w-full px-8 my-10 md:mx-6 md:p-10">
                    <div class="form_title mb-5 flex flex-col items-center justify-center mt-2   border-b border-gray-300 w-full pb-3">
                        <h5>Are You a Lawyer</h5>
                        <p>Create your profile by entering your license information</p>
                    </div>
                    <form role="form" method="POST" action="{{ route('create.profile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            class="peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none @error('first_name') border-red-500 @enderror"
                            id="exampleFormControlInput33"
                            placeholder="First Name" 
                            
                            />
                            @error('first_name')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror                           
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            class="@error('last_name') border-red-500 @enderror peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="Last Name" 
                            
                            />
                            @error('last_name')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror       
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="@error('email') border-red-500 @enderror block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="email"
                            placeholder="Email address"  />
                            @error('email')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror 
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            name="practice_area"
                            value="{{ old('practice_area') }}"
                            class="@error('practice_area') border-red-500 @enderror  peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="Area of Practice(s). separate with comma (,)" 
                            
                            />
                            @error('practice_area')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror                             
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            name="location"
                            value="{{ old('location') }}"
                            class="@error('location') border-red-500 @enderror  peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="Location" /> 
                            @error('location')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror                            
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="tel"
                            name="phone"
                            value="{{ old('phone') }}"
                            class="@error('phone') border-red-500 @enderror  peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="Phone no. e.g 25471.." 
                           
                            />                            
                            @error('phone')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror 
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            name="license"
                            value="{{ old('license') }}"
                            class="@error('license') border-red-500 @enderror  peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            min="9"
                            placeholder="License Number" 
                            
                            />        
                            @error('license')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror                     
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="date"
                            name="license_year"
                            value="{{ old('license_year') }}"
                            class="@error('license_year') border-red-500 @enderror  peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="License year" /> 
                            @error('license_year')
                                <p class=" text-red-600 text-sm" >{{ $message }}</p>
                            @enderror                            
                        </div>

                        <!-- Submit button -->
                        <button
                            type="submit"
                            class="inline-block w-full rounded px-7 bg-green-600 pt-3 pb-3 text-base font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            >
                            Create Profile
                        </button>
                    </form>
                     <div class="text border-b-2 my-7 p-5">
                        <p class=" text-base font-light text-gray-700">Claim your account ?<a href="/account/claim" class=" text-blue-600"> Here </a> </p>
                    </div>
                </x-card>
            </div>
 
        </div>
    </section>
</x-layout>