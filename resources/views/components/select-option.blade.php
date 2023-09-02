@props([
    'options' => [],
    ]
)

<select {!! $attributes->merge(['class' => 'border-gray-300 focus:border-orange-500 focus:ring-orange-600 shadow-sm rounded']) !!}>
    @foreach ($options as $option)
        <option value="{{ $option }}" class="capitalize">{{ $option }}</option>
    @endforeach
</select>