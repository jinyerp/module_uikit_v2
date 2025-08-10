<div {{ $attributes->merge(['class' => 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-' . $col . ' gap-4']) }}>
    {{ $slot }}
</div>
