@include('utils.head')
<section>
    <div class="side_nav max-h-full bg-gray-400 w-64 h-screen fixed py-5 pl-3">
        {{-- Header details --}}
        <div class="lawyer_name mx-5 my-2 text-center font-semibold text-xl">
            Lawyer Names
            <span class=" font-light text-base py-2">License no.</span>
        </div>
        {{-- menu --}}
        <div class="files py-5 my-10 w-full">
            <div class="menu"> {{-- ul --}}
                {{-- menu item --}}
                <div class="menu_item" data-te-dropdown-ref>
                    <button class=" w-full mb-4 text-center items-center flex justify-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-neutral-900 shadow-[0_4px_9px_-4px_#3b71ca] duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                        type="button"
                        id="dropdownMenuButton1h"
                        data-te-dropdown-toggle-ref
                        aria-expanded="false"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                    >
                       Create 
                        <span class="ml-2 w-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>                                            
                    </button>
                    {{-- sub-menu --}}
                    <ul class="absolute z-[1000] hidden m-0 min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton1h"
                        data-te-dropdown-menu-ref
                    >
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#"
                                data-te-dropdown-item-ref
                                >Action
                            </a>                            
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#"
                                data-te-dropdown-item-ref
                                >Action
                            </a>                            
                        </li>
                    </ul>
                </div>
                {{-- end menu item --}}
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Edit</a> </li>
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Profile</a> </li>
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Messages</a> </li>
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Endorsment</a> </li>
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Reviews</a> </li>
                <li
                    class=" mb-4 text-base font-medium text-center border-b py-2  hover:bg-white transition-all duration-400 cursor-pointer">
                    <a href="">Logout</a> </li>
            </div>
        </div>

    </div>
    <div class="main_view bg-red-700 min-h-screen  w-full h-full overflow-y-auto ">

    </div>
</section>
