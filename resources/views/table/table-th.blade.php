<th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
    <a href="?sort={{ $sort }}&direction={{ $direction }}" class="group inline-flex">
        {{ $slot }}
        <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
            @if(request('sort') == $sort)
                @if($direction == 'desc')
                    ↑
                @else
                    ↓
                @endif
            @endif
        </span>
    </a>
</th>
