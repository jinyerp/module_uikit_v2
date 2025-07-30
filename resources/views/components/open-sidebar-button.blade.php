{{--
    사이드바 열기 버튼 컴포넌트

    사용법:
    <x-ui::open-sidebar-button />

    기능:
    - 모바일에서 사이드바를 열기 위한 햄버거 메뉴 버튼
    - lg:hidden 클래스로 데스크톱에서는 숨김
    - TailwindPlus의 command 시스템을 사용하여 동작
--}}

<button type="button" command="show-modal" commandfor="mobileSidebar" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
        aria-hidden="true" class="size-6">
        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</button>
