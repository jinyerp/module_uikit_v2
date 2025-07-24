<!DOCTYPE html>
<html lang="ko" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UIkit 컴포넌트') - UIkit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css" rel="stylesheet" />
    <style>
        .sidebar-scroll {
            scrollbar-width: thin;
            scrollbar-color: #374151 #111827;
        }
        .sidebar-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .sidebar-scroll::-webkit-scrollbar-track {
            background: #111827;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #374151;
            border-radius: 3px;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb:hover {
            background: #4B5563;
        }
    </style>
</head>
<body class="h-full">
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div role="dialog" aria-modal="true" class="relative z-50 lg:hidden">
            <!--
                Off-canvas menu backdrop, show/hide based on off-canvas menu state.

                Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
            -->
            <div aria-hidden="true" class="fixed inset-0 bg-gray-900/80"></div>

            <div class="fixed inset-0 flex">
                <!--
                    Off-canvas menu, show/hide based on off-canvas menu state.

                    Entering: "transition ease-in-out duration-300 transform"
                        From: "-translate-x-full"
                        To: "translate-x-0"
                    Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "-translate-x-full"
                -->
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <!--
                        Close button, show/hide based on off-canvas menu state.

                        Entering: "ease-in-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                        Leaving: "ease-in-out duration-300"
                            From: "opacity-100"
                            To: "opacity-0"
                    -->
                    <div class="absolute top-0 left-full flex w-16 justify-center pt-5">
                        <button type="button" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-white">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-2 ring-1 ring-white/10 sidebar-scroll">
                        <div class="flex h-16 shrink-0 items-center">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h1 class="text-lg font-bold text-white">UIkit</h1>
                                    <p class="text-xs text-gray-400">v1.0.0</p>
                                </div>
                            </div>
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <li>
                                            <a href="{{ route('uikit.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.index') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                개요
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="text-xs/6 font-semibold text-gray-400">컴포넌트</div>
                                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                                        <li>
                                            <a href="{{ route('uikit.form-input') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-input') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Input
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-textarea') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-textarea') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Textarea
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-select-check') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-select-check') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Select Check
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-radio') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Radio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-radio-inline') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio-inline') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Radio Inline
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-radio-list') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio-list') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Radio List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-switch') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-switch') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Switch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.form-panel') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-panel') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Form Panel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.alert') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.alert') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Alert
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uikit.buttons') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.buttons') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                                    <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Buttons
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 sidebar-scroll">
                <div class="flex h-16 shrink-0 items-center">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h1 class="text-lg font-bold text-white">UIkit</h1>
                            <p class="text-xs text-gray-400">v1.0.0</p>
                        </div>
                    </div>
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <a href="{{ route('uikit.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.index') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        개요
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="text-xs/6 font-semibold text-gray-400">컴포넌트</div>
                            <ul role="list" class="-mx-2 mt-2 space-y-1">
                                <li>
                                    <a href="{{ route('uikit.form-input') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-input') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Input
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-textarea') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-textarea') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Textarea
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-select-check') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-select-check') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Select Check
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-radio') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Radio
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-radio-inline') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio-inline') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Radio Inline
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-radio-list') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-radio-list') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Radio List
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-switch') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-switch') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Switch
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.form-panel') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.form-panel') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Form Panel
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.alert') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.alert') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Alert
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('uikit.buttons') }}" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->routeIs('uikit.buttons') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 shrink-0">
                                            <path d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Buttons
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-gray-900 px-4 py-4 shadow-xs sm:px-6 lg:hidden">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="flex-1 text-sm/6 font-semibold text-white">@yield('title', 'UIkit 컴포넌트')</div>
        </div>

        <main class="py-10 lg:pl-72">
            <div class="px-4 sm:px-6 lg:px-8">
                <!-- 헤딩 섹션 -->
                @yield('heading')

                <!-- 메인 콘텐츠 영역 -->
                <div class="max-w-4xl mx-auto">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script>
        // Prism.js 초기화
        if (typeof Prism !== 'undefined') {
            Prism.highlightAll();
        }
    </script>
</body>
</html>
