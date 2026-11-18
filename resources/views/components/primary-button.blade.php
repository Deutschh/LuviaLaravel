<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center gap-2 rounded-xl bg-luvia-600 px-5 py-3 text-sm font-bold text-white shadow-blue transition duration-200 hover:bg-luvia-700 focus:outline-none focus:ring-2 focus:ring-luvia-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60']) }}>
    {{ $slot }}
</button>
