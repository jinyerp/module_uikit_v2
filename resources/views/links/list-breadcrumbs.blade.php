@props([
    'title' => '',
    'subtitle' => '',
    'items' => [],
    'showHome' => true,
    'homeLabel' => '홈',
    'homeUrl' => '/',
    'showActions' => false,
    'actions' => []
])

<div class="mb-6">
    <!-- Breadcrumb Navigation -->
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            @if($showHome)
                <li class="inline-flex items-center">
                    <a href="{{ $homeUrl }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        {{ $homeLabel }}
                    </a>
                </li>
            @endif

            @foreach($items as $index => $item)
                <li class="inline-flex items-center">
                    @if($index > 0 || $showHome)
                        <svg class="w-5 h-5 text-gray-400 mx-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    @endif

                    @if($index === count($items) - 1)
                        <span class="text-sm font-medium text-gray-500">{{ $item['label'] }}</span>
                    @else
                        <a href="{{ $item['url'] }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                            @if(isset($item['icon']))
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    {!! $item['icon'] !!}
                                </svg>
                            @endif
                            {{ $item['label'] }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>

    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div class="flex-1 min-w-0">
            @if($title)
                <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    {{ $title }}
                </h1>
            @endif
            @if($subtitle)
                <p class="mt-1 text-sm text-gray-500">
                    {{ $subtitle }}
                </p>
            @endif
        </div>

        @if($showActions && count($actions) > 0)
            <div class="mt-4 flex sm:mt-0 sm:ml-4">
                @foreach($actions as $action)
                    <a href="{{ $action['url'] }}"
                       class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 {{ $loop->first ? '' : 'ml-3' }}">
                        @if(isset($action['icon']))
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                {!! $action['icon'] !!}
                            </svg>
                        @endif
                        {{ $action['label'] }}
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</div>
