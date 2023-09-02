@props([ 'type' => 'submit'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 rounded-md py-2 bg-orange-500 border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-400 focus:bg-orange-500
    active:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>