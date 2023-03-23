<x-layout>
    <section class="h-screen">
        <div class="container m-auto h-full">
            <div class="row w-full min-h-screen items-center justify-center">
                <x-card class="max-w-full px-8 my-10 md:mx-6 md:p-10">
                    <div class="form_title mb-5 flex flex-col items-center justify-center mt-2   border-b border-gray-300 w-full pb-3">
                        <h5>Login</h5>                            
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                            type="email"
                            class=" block min-h-[auto] w-full rounded border border-gray-400 min-w-[90%] mt-2 bg-transparent py-1 px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="email"
                            placeholder="Email address" />
                            
                        </div>
                        <div class="relative mb-6 mt-6" data-te-input-wrapper-init>
                            <input
                            type="password"
                            class="peer block min-h-[auto] w-full rounded border border-gray-400 bg-transparent py-1 px-4 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                            id="exampleFormControlInput33"
                            placeholder="Password" />                            
                        </div>
                        
                        <!-- Submit button -->
                        <button
                            type="submit"
                            class="inline-block w-full rounded px-7 bg-green-600 pt-3 pb-3 text-base font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            Sign up
                        </button>

                        <div class="my-4 flex mb-10 items-center justify-center before:mt-0.5 bg-slate-500 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border after:border-neutral-500">
                            <p class="mx-4 mb-0 text-center font-semibold dark:text-neutral-400">
                            OR
                            </p>
                        </div>
                        {{-- sign up with facebook --}}
                        <a
                            class="mb-3 mt-8 flex w-full items-center justify-center rounded bg-primary px-7 pt-3 pb-2.5 text-center text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            style="background-color: #e05d4d"
                            href="#!"
                            role="button"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            <!-- Facebook -->
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mr-2 h-3.5 w-3.5"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                            Continue with Google
                        </a>
                    </form>
                    <div class="text border-b-2 my-7 p-5">
                        <p class=" text-base font-light text-gray-700">Don't have an account yet ?<a href="{{ '/account/register' }}" class=" text-blue-600"> sign up</a> </p>
                    </div>
                </x-card>
            </div>
            
        </div>
    </section>
</x-layout>