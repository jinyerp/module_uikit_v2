<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div id="mobileSidebar" class="relative z-50 lg:hidden" role="dialog" aria-modal="true" style="display: none;">
    <div id="mobileSidebarBackdrop" class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>
    <div class="fixed inset-0 flex">
        <div class="relative mr-16 flex w-full max-w-xs flex-1 -translate-x-full transition-transform duration-300 ease-in-out">

            <div class="absolute top-0 left-full flex w-16 justify-center pt-5">
                <button id="closeSidebarBtn" type="button" class="-m-2.5 p-2.5">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div
                class="flex grow flex-col gap-y-5 overflow-y-auto {{ $colors['sidebar_bg'] }} px-6 pb-4 {{ $colors['sidebar_border'] }}">
                <div class="flex h-16 shrink-0 items-center">
                    {{-- 로고 슬롯 --}}
                    @if(isset($slot) && $slot->isNotEmpty())
                        {{ $slot }}
                    @elseif(isset($logo))
                        {{ $logo }}
                    @else
                        {{-- 기본 로고 --}}
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg{{ $colors['logo_color'] }}"
                            alt="Your Company" class="h-8 w-auto" />
                    @endif
                </div>
                <nav class="flex flex-1 flex-col">
                    @if($hasMenu)
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    @foreach($topMenu as $menuItem)
                                        @if(isset($menuItem['type']))
                                            @if($menuItem['type'] === 'title')
                                                <x-jiny-uikit::sidebar-title :item="$menuItem" :colors="$colors" />
                                            @elseif($menuItem['type'] === 'menu')
                                                @if(isset($menuItem['children']) && !empty($menuItem['children']))
                                                    <x-jiny-uikit::sidebar-dropdown :item="$menuItem" :depth="0" :colors="$colors" />
                                                @else
                                                    <x-jiny-uikit::sidebar-item :item="$menuItem" :depth="0" :colors="$colors" />
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <div class="text-xs/6 font-semibold {{ $colors['text_muted'] }}">Your teams</div>
                                <ul role="list" class="-mx-2 mt-2 space-y-1">
                                    @foreach($teamsMenu as $teamItem)
                                        @if(isset($teamItem['type']) && $teamItem['type'] === 'menu')
                                            <li>
                                                <a href="{{ $teamItem['url'] ?? '#' }}"
                                                    class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ $colors['text'] }} {{ $colors['hover_bg'] }} {{ $colors['hover_text'] }}">
                                                    <span
                                                        class="flex size-6 shrink-0 items-center justify-center rounded-lg border {{ $colors['team_border'] }} {{ $colors['team_bg'] }} text-[0.625rem] font-medium {{ $colors['text_muted'] }} {{ $colors['team_hover_border'] }} {{ $colors['team_hover_text'] }}">{{ $teamItem['icon'] ?? 'T' }}</span>
                                                    <span class="truncate">{{ $teamItem['label'] }}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="mt-auto">
                                @foreach($bottomMenu as $bottomItem)
                                    @if(isset($bottomItem['type']))
                                        @if($bottomItem['type'] === 'title')
                                            <x-jiny-uikit::sidebar-title :item="$bottomItem" :colors="$colors" />
                                        @elseif($bottomItem['type'] === 'menu')
                                            @if(isset($bottomItem['children']) && !empty($bottomItem['children']))
                                                <x-jiny-uikit::sidebar-dropdown :item="$bottomItem" :depth="0" :colors="$colors" />
                                            @else
                                                <x-jiny-uikit::sidebar-item :item="$bottomItem" :depth="0" :colors="$colors" />
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    @else
                        <div class="flex flex-1 items-center justify-center">
                            <div class="text-center">
                                @if($menuPath !== null && !$fileExists)
                                    <svg class="mx-auto h-12 w-12 {{ $colors['text_muted'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium {{ $colors['text'] }}">지정한 파일을 찾을 수 없습니다</h3>
                                    <p class="mt-1 text-sm {{ $colors['text_muted'] }}">경로: {{ $menuPath }}</p>
                                @else
                                    <svg class="mx-auto h-12 w-12 {{ $colors['text_muted'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium {{ $colors['text'] }}">메뉴 목록이 없습니다</h3>
                                    <p class="mt-1 text-sm {{ $colors['text_muted'] }}">메뉴 파일 경로를 지정해주세요.</p>
                                @endif
                            </div>
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div
        class="flex grow flex-col gap-y-5 overflow-y-auto {{ $colors['sidebar_bg'] }} px-6 pb-4 {{ $colors['sidebar_border'] }}">
        <div class="flex h-16 shrink-0 items-center">
            {{-- 로고 슬롯 --}}
            @if(isset($slot) && $slot->isNotEmpty())
                {{ $slot }}
            @elseif(isset($logo))
                {{ $logo }}
            @else
                {{-- 기본 로고 --}}
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg{{ $colors['logo_color'] }}"
                    alt="Your Company" class="h-8 w-auto" />
            @endif
        </div>
        <nav class="flex flex-1 flex-col">
            @if($hasMenu)
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            @foreach($topMenu as $menuItem)
                                @if(isset($menuItem['type']))
                                    @if($menuItem['type'] === 'title')
                                        <x-jiny-uikit::sidebar-title :item="$menuItem" :colors="$colors" />
                                    @elseif($menuItem['type'] === 'menu')
                                        @if(isset($menuItem['children']) && !empty($menuItem['children']))
                                            <x-jiny-uikit::sidebar-dropdown :item="$menuItem" :depth="0" :colors="$colors" />
                                        @else
                                            <x-jiny-uikit::sidebar-item :item="$menuItem" :depth="0" :colors="$colors" />
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <div class="text-xs/6 font-semibold {{ $colors['text_muted'] }}">Your teams</div>
                        <ul role="list" class="-mx-2 mt-2 space-y-1">
                            @foreach($teamsMenu as $teamItem)
                                @if(isset($teamItem['type']) && $teamItem['type'] === 'menu')
                                    <li>
                                        <a href="{{ $teamItem['url'] ?? '#' }}"
                                            class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ $colors['text'] }} {{ $colors['hover_bg'] }} {{ $colors['hover_text'] }}">
                                            <span
                                                class="flex size-6 shrink-0 items-center justify-center rounded-lg border {{ $colors['team_border'] }} {{ $colors['team_bg'] }} text-[0.625rem] font-medium {{ $colors['text_muted'] }} {{ $colors['team_hover_border'] }} {{ $colors['team_hover_text'] }}">{{ $teamItem['icon'] ?? 'T' }}</span>
                                            <span class="truncate">{{ $teamItem['label'] }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="mt-auto">
                        @foreach($bottomMenu as $bottomItem)
                            @if(isset($bottomItem['type']))
                                @if($bottomItem['type'] === 'title')
                                    <x-jiny-uikit::sidebar-title :item="$bottomItem" :colors="$colors" />
                                @elseif($bottomItem['type'] === 'menu')
                                    @if(isset($bottomItem['children']) && !empty($bottomItem['children']))
                                        <x-jiny-uikit::sidebar-dropdown :item="$bottomItem" :depth="0" :colors="$colors" />
                                    @else
                                        <x-jiny-uikit::sidebar-item :item="$bottomItem" :depth="0" :colors="$colors" />
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    </li>
                </ul>
            @else
                <div class="flex flex-1 items-center justify-center">
                    <div class="text-center">
                        @if($menuPath !== null && !$fileExists)
                            <svg class="mx-auto h-12 w-12 {{ $colors['text_muted'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium {{ $colors['text'] }}">지정한 파일을 찾을 수 없습니다</h3>
                            <p class="mt-1 text-sm {{ $colors['text_muted'] }}">경로: {{ $menuPath }}</p>
                        @else
                            <svg class="mx-auto h-12 w-12 {{ $colors['text_muted'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium {{ $colors['text'] }}">메뉴 목록이 없습니다</h3>
                            <p class="mt-1 text-sm {{ $colors['text_muted'] }}">메뉴 파일 경로를 지정해주세요.</p>
                        @endif
                    </div>
                </div>
            @endif
        </nav>
    </div>
</div>

<style>
/* 사이드바 활성 메뉴 스타일 */
.sidebar-scroll .active, .active {
    background: #334155 !important;
    color: #fff !important;
    font-weight: bold;
    border-radius: 6px;
}

/* Dropdown 체크박스 스타일 */
.dropdown-checkbox {
    position: absolute;
    opacity: 0;
    pointer-events: none;
    z-index: -1;
}

/* Dropdown 토글 버튼 스타일 */
.dropdown-toggle {
    cursor: pointer;
    user-select: none;
}

/* Dropdown 메뉴 스타일 */
.dropdown-menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-in-out;
}

/* 체크박스가 체크되었을 때 chevron 회전 */
.dropdown-checkbox:checked + label .dropdown-chevron {
    transform: rotate(180deg);
}

/* 체크박스가 체크되었을 때 메뉴 표시 */
.dropdown-checkbox:checked ~ .dropdown-menu {
    max-height: 1000px !important;
}

/* Dropdown 컨테이너 */
.dropdown-container {
    position: relative;
}

/* 로컬스토리지 상태 복원을 위한 JavaScript */
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dropdown 초기화 시작');

    // 로컬스토리지에서 dropdown 상태 복원
    const dropdowns = document.querySelectorAll('.dropdown-checkbox');
    console.log('발견된 체크박스 개수:', dropdowns.length);

    dropdowns.forEach(checkbox => {
        const key = checkbox.getAttribute('data-key');
        console.log('체크박스 ID:', checkbox.id, 'data-key:', key);

        if (key) {
            const savedState = localStorage.getItem(key);
            console.log('로컬스토리지에서 읽은 상태:', key, savedState);

            if (savedState === 'true') {
                checkbox.checked = true;
                console.log('체크박스 상태 복원됨:', checkbox.id, 'checked = true');
            }
        }
    });

    // Dropdown 상태 변경 시 로컬스토리지에 저장
    dropdowns.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const key = this.getAttribute('data-key');
            if (key) {
                localStorage.setItem(key, this.checked);
                console.log('체크박스 상태 저장됨:', key, this.checked);
            }
        });
    });

    // 라벨 클릭 이벤트 디버깅
    const labels = document.querySelectorAll('.dropdown-toggle');
    console.log('발견된 라벨 개수:', labels.length);

    labels.forEach(label => {
        label.addEventListener('click', function(e) {
            const checkboxId = this.getAttribute('for');
            const checkbox = document.getElementById(checkboxId);
            console.log('라벨 클릭됨:', checkboxId, '체크박스 상태:', checkbox ? checkbox.checked : '체크박스 없음');
        });
    });

    console.log('Dropdown 초기화 완료');
});
</script>
