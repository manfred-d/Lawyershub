<button {{ $attributes->merge(['class'=> 'p-4 mx-3 bg-red-500 text-lg px-3 py-2 w-full text-gray-100 font-medium rounded-md gap-2 hover:bg-red-300 transition-all  ease-in-out', 'font-bold' => true]) }}>
    {{ $slot }}
</button>