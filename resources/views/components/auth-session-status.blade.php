@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 light:text-green-400']) }}>
        {{ $status }}
    </div>
@endif
