@props(['messages'])

@if ($messages)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>
        @foreach ((array) $messages as $message)
            <p style="color:red">{{ $message }}</p>
        @endforeach
</p>
@endif
