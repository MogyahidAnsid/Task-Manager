@props([ 'type' => 'submit'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center p-2 rounded-md bg-orange-500 border border-transparent font-medium text-sm text-white hover:bg-orange-400 focus:bg-orange-500
    active:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>