<label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">
    {{ $label ?? '' }}
</label>
<input type="{{ $type ?? 'text' }}" id="{{ $id }}"
    {{ $attributes
        ->except('label')
        ->except('id')
        ->merge([
        'class' => 'block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm'
    ]) }}
/>
