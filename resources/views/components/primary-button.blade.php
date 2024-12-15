
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-4 bg-white border rounded-md border border-black font-semibold text center text-xs text-black uppercase tracking-widest hover:bg-gray-200 focus:bg-white active:bg-gray-300 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
    </button>
