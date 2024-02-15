<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#fa8fb1] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#fc97b8] focus:bg-[#fc97b8] active:bg-[#f783a8] focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
