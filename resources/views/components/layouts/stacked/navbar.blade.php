@props([
    'theme' => 'light',
    'logo' => null,
    'logoAlt' => 'Your Company',
    'navItems' => [],
    'userName' => 'Tom Cook',
    'userEmail' => 'tom@example.com',
    'userAvatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    'showNotifications' => true,
    'showMobileMenu' => true,
    'menuAlign' => 'right', // left, center, right
    'colors' => []
])

@php
    // Theme-based color configuration
    if ($theme === 'blue') {
        $colors = array_merge([
            'nav_bg' => 'bg-blue-600',
            'nav_border' => 'border-b border-blue-700',
            'text' => 'text-white',
            'text_hover' => 'hover:text-blue-100',
            'active_text' => 'text-white',
            'active_border' => 'border-white',
            'border_hover' => 'hover:border-blue-300',
            'button_bg' => 'bg-blue-600',
            'button_text' => 'text-white',
            'button_hover_text' => 'hover:text-blue-100',
            'button_focus_ring' => 'focus:ring-blue-300',
            'dropdown_bg' => 'bg-white',
            'dropdown_text' => 'text-gray-700',
            'dropdown_hover_bg' => 'focus:bg-gray-100',
            'mobile_button_bg' => 'bg-blue-600',
            'mobile_button_text' => 'text-white',
            'mobile_button_hover_bg' => 'hover:bg-blue-700',
            'mobile_button_hover_text' => 'hover:text-blue-100',
            'mobile_menu_text' => 'text-white',
            'mobile_menu_hover_bg' => 'hover:bg-blue-700',
            'mobile_menu_hover_text' => 'hover:text-blue-100',
            'mobile_menu_border' => 'border-blue-700',
            'user_text' => 'text-white',
            'user_email' => 'text-blue-100'
        ], $colors);
    }
@endphp

<nav class="{{ $colors['nav_bg'] ?? 'bg-white' }} {{ $colors['nav_border'] ?? 'border-b border-gray-200' }}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            @if($menuAlign === 'left')
                <!-- Left aligned menu -->
                <div class="flex">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="block h-8 w-auto lg:hidden" />
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="hidden h-8 w-auto lg:block" />
                    </div>
                    <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                        @if(empty($navItems))
                            <!-- Default navigation items -->
                            <a href="#" aria-current="page" class="inline-flex items-center border-b-2 {{ $colors['active_border'] ?? 'border-indigo-500' }} px-1 pt-1 text-sm font-medium {{ $colors['active_text'] ?? 'text-gray-900' }}">Dashboard</a>
                            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium {{ $colors['text'] ?? 'text-gray-500' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }} {{ $colors['border_hover'] ?? 'hover:border-gray-300' }}">Team</a>
                            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium {{ $colors['text'] ?? 'text-gray-500' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }} {{ $colors['border_hover'] ?? 'hover:border-gray-300' }}">Projects</a>
                            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium {{ $colors['text'] ?? 'text-gray-500' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }} {{ $colors['border_hover'] ?? 'hover:border-gray-300' }}">Calendar</a>
                        @else
                            <!-- Custom navigation items -->
                            @foreach($navItems as $item)
                                <a href="{{ $item['url'] ?? '#' }}"
                                   class="inline-flex items-center border-b-2 {{ $item['active'] ?? false ? ($colors['active_border'] ?? 'border-indigo-500') . ' ' . ($colors['active_text'] ?? 'text-gray-900') : 'border-transparent ' . ($colors['text'] ?? 'text-gray-500') . ' ' . ($colors['text_hover'] ?? 'hover:text-gray-700') . ' ' . ($colors['border_hover'] ?? 'hover:border-gray-300') }} px-1 pt-1 text-sm font-medium">
                                    {{ $item['label'] }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            @elseif($menuAlign === 'center')
                <!-- Center aligned menu -->
                <div class="flex lg:flex-1">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="block h-8 w-auto lg:hidden" />
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="hidden h-8 w-auto lg:block" />
                    </div>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    @if(empty($navItems))
                        <!-- Default navigation items -->
                        <a href="#" aria-current="page" class="text-sm/6 font-semibold {{ $colors['active_text'] ?? 'text-gray-900' }}">Dashboard</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Team</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Projects</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Calendar</a>
                    @else
                        <!-- Custom navigation items -->
                        @foreach($navItems as $item)
                            <a href="{{ $item['url'] ?? '#' }}"
                               class="text-sm/6 font-semibold {{ $item['active'] ?? false ? ($colors['active_text'] ?? 'text-gray-900') : ($colors['text'] ?? 'text-gray-900') . ' ' . ($colors['text_hover'] ?? 'hover:text-gray-700') }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    @endif
                </div>
            @elseif($menuAlign === 'right')
                <!-- Right aligned menu -->
                <div class="flex">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="block h-8 w-auto lg:hidden" />
                        <img src="{{ $logo }}" alt="{{ $logoAlt }}" class="hidden h-8 w-auto lg:block" />
                    </div>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    @if(empty($navItems))
                        <!-- Default navigation items -->
                        <a href="#" aria-current="page" class="text-sm/6 font-semibold {{ $colors['active_text'] ?? 'text-gray-900' }}">Dashboard</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Team</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Projects</a>
                        <a href="#" class="text-sm/6 font-semibold {{ $colors['text'] ?? 'text-gray-900' }} {{ $colors['text_hover'] ?? 'hover:text-gray-700' }}">Calendar</a>
                    @else
                        <!-- Custom navigation items -->
                        @foreach($navItems as $item)
                            <a href="{{ $item['url'] ?? '#' }}"
                               class="text-sm/6 font-semibold {{ $item['active'] ?? false ? ($colors['active_text'] ?? 'text-gray-900') : ($colors['text'] ?? 'text-gray-900') . ' ' . ($colors['text_hover'] ?? 'hover:text-gray-700') }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    @endif
                </div>
            @endif

            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                @if($showNotifications)
                    <button type="button" class="relative rounded-full {{ $colors['button_bg'] ?? 'bg-white' }} p-1 {{ $colors['button_text'] ?? 'text-gray-400' }} {{ $colors['button_hover_text'] ?? 'hover:text-gray-500' }} focus:ring-2 {{ $colors['button_focus_ring'] ?? 'focus:ring-indigo-500' }} focus:ring-offset-2 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <x-jiny-uikit::icon name="bell" class="size-6" />
                    </button>
                @endif

                <!-- Profile dropdown -->
                <el-dropdown class="relative ml-3">
                    <button class="relative flex max-w-xs items-center rounded-full {{ $colors['button_bg'] ?? 'bg-white' }} text-sm focus:outline-hidden focus-visible:ring-2 {{ $colors['button_focus_ring'] ?? 'focus-visible:ring-indigo-500' }} focus-visible:ring-offset-2">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <x-jiny-uikit::avatar src="{{ $userAvatar }}" alt="{{ $userName }}" size="size-8" />
                    </button>

                    <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md {{ $colors['dropdown_bg'] ?? 'bg-white' }} py-1 shadow-lg ring-1 ring-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] focus:outline-hidden data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                        <a href="#" class="block px-4 py-2 text-sm {{ $colors['dropdown_text'] ?? 'text-gray-700' }} {{ $colors['dropdown_hover_bg'] ?? 'focus:bg-gray-100' }} focus:outline-hidden">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm {{ $colors['dropdown_text'] ?? 'text-gray-700' }} {{ $colors['dropdown_hover_bg'] ?? 'focus:bg-gray-100' }} focus:outline-hidden">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm {{ $colors['dropdown_text'] ?? 'text-gray-700' }} {{ $colors['dropdown_hover_bg'] ?? 'focus:bg-gray-100' }} focus:outline-hidden">Sign out</a>
                    </el-menu>
                </el-dropdown>
            </div>
            @if($showMobileMenu)
                <div class="-mr-2 flex items-center sm:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md {{ $colors['mobile_button_bg'] ?? 'bg-white' }} p-2 {{ $colors['mobile_button_text'] ?? 'text-gray-400' }} {{ $colors['mobile_button_hover_bg'] ?? 'hover:bg-gray-100' }} {{ $colors['mobile_button_hover_text'] ?? 'hover:text-gray-500' }} focus:ring-2 {{ $colors['button_focus_ring'] ?? 'focus:ring-indigo-500' }} focus:ring-offset-2 focus:outline-hidden">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>

    @if($showMobileMenu)
        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
            <div class="space-y-1 pt-2 pb-3">
                @if(empty($navItems))
                    <!-- Default mobile navigation items -->
                    <a href="#" aria-current="page" class="block border-l-4 {{ $colors['active_border'] ?? 'border-indigo-500' }} {{ $colors['active_bg'] ?? 'bg-indigo-50' }} py-2 pr-4 pl-3 text-base font-medium {{ $colors['active_text'] ?? 'text-indigo-700' }}">Dashboard</a>
                    <a href="#" class="block border-l-4 border-transparent py-2 pr-4 pl-3 text-base font-medium {{ $colors['mobile_menu_text'] ?? 'text-gray-600' }} {{ $colors['mobile_menu_hover_bg'] ?? 'hover:bg-gray-50' }} {{ $colors['mobile_menu_hover_text'] ?? 'hover:text-gray-800' }}">Team</a>
                    <a href="#" class="block border-l-4 border-transparent py-2 pr-4 pl-3 text-base font-medium {{ $colors['mobile_menu_text'] ?? 'text-gray-600' }} {{ $colors['mobile_menu_hover_bg'] ?? 'hover:bg-gray-50' }} {{ $colors['mobile_menu_hover_text'] ?? 'hover:text-gray-800' }}">Projects</a>
                    <a href="#" class="block border-l-4 border-transparent py-2 pr-4 pl-3 text-base font-medium {{ $colors['mobile_menu_text'] ?? 'text-gray-600' }} {{ $colors['mobile_menu_hover_bg'] ?? 'hover:bg-gray-50' }} {{ $colors['mobile_menu_hover_text'] ?? 'hover:text-gray-800' }}">Calendar</a>
                @else
                    <!-- Custom mobile navigation items -->
                    @foreach($navItems as $item)
                        <a href="{{ $item['url'] ?? '#' }}"
                           class="block border-l-4 {{ $item['active'] ?? false ? ($colors['active_border'] ?? 'border-indigo-500') . ' ' . ($colors['active_bg'] ?? 'bg-indigo-50') . ' ' . ($colors['active_text'] ?? 'text-indigo-700') : 'border-transparent ' . ($colors['mobile_menu_text'] ?? 'text-gray-600') . ' ' . ($colors['mobile_menu_hover_bg'] ?? 'hover:bg-gray-50') . ' ' . ($colors['mobile_menu_hover_text'] ?? 'hover:text-gray-800') }} py-2 pr-4 pl-3 text-base font-medium">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="border-t {{ $colors['mobile_menu_border'] ?? 'border-gray-200' }} pt-4 pb-3">
                <div class="flex items-center px-4">
                    <div class="shrink-0">
                        <x-jiny-uikit::avatar src="{{ $userAvatar }}" alt="{{ $userName }}" size="size-10" />
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium {{ $colors['user_text'] ?? 'text-gray-800' }}">{{ $userName }}</div>
                        <div class="text-sm font-medium {{ $colors['user_email'] ?? 'text-gray-500' }}">{{ $userEmail }}</div>
                    </div>
                    @if($showNotifications)
                        <button type="button" class="relative ml-auto shrink-0 rounded-full {{ $colors['button_bg'] ?? 'bg-white' }} p-1 {{ $colors['button_text'] ?? 'text-gray-400' }} {{ $colors['button_hover_text'] ?? 'hover:text-gray-500' }} focus:ring-2 {{ $colors['button_focus_ring'] ?? 'focus:ring-indigo-500' }} focus:ring-offset-2 focus:outline-hidden">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <x-jiny-uikit::icon name="bell" class="size-6" />
                        </button>
                    @endif
                </div>
                <div class="mt-3 space-y-1">
                    <a href="#" class="block px-4 py-2 text-base font-medium {{ $colors['dropdown_text'] ?? 'text-gray-500' }} {{ $colors['dropdown_hover_bg'] ?? 'hover:bg-gray-100' }} {{ $colors['text_hover'] ?? 'hover:text-gray-800' }}">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-base font-medium {{ $colors['dropdown_text'] ?? 'text-gray-500' }} {{ $colors['dropdown_hover_bg'] ?? 'hover:bg-gray-100' }} {{ $colors['text_hover'] ?? 'hover:text-gray-800' }}">Settings</a>
                    <a href="#" class="block px-4 py-2 text-base font-medium {{ $colors['dropdown_text'] ?? 'text-gray-500' }} {{ $colors['dropdown_hover_bg'] ?? 'hover:bg-gray-100' }} {{ $colors['text_hover'] ?? 'hover:text-gray-800' }}">Sign out</a>
                </div>
            </div>
        </el-disclosure>
    @endif
</nav>
