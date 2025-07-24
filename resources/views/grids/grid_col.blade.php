<div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:grid-cols-'.$col.' gap-4']) }}>
    {{ $slot }}
</div>
