<!-- 기본 검색 -->
<x-ui::border-rounded class="mt-6 bg-white">
    <div id="filter-container" class="space-y-4">
        {{ $slot }}
        <!-- 검색 버튼 -->
        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
            <div class="flex items-center gap-2">
                <x-ui::button-dark type="button" id="search-btn">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    검색
                </x-ui::button-dark>
                <x-ui::button-light href="{{ request()->url() }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg>
                    초기화
                </x-ui::button-light>
            </div>
            {{-- CSV 다운로드 버튼 --}}
            <div>
                @if(Route::has($route . 'downloadCsv'))
                <form id="csv-download-form" method="GET" action="{{ route($route . 'downloadCsv') }}">
                    @foreach(request()->except(['page']) as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    <x-ui::button-light type="submit">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 4v12" />
                        </svg>
                        CSV 다운로드
                    </x-ui::button-light>
                </form>
                @endif
            </div>
        </div>
    </div>
</x-ui::border-rounded>
{{-- <div class="mt-6 bg-white rounded-lg border border-gray-200 p-4">

</div> --}}
<script>
(function() {
    const searchBtn = document.getElementById('search-btn');
    const filterContainer = document.getElementById('filter-container');

    if (!searchBtn || !filterContainer) return;

    // 검색 버튼 클릭 이벤트
    searchBtn.addEventListener('click', function() {
        performSearch();
    });

    // Enter 키 이벤트 처리 (input, select, textarea에서만)
    filterContainer.addEventListener('keypress', function(e) {
        if (e.key === 'Enter' && (e.target.tagName === 'INPUT' || e.target.tagName === 'SELECT' || e.target.tagName === 'TEXTAREA')) {
            e.preventDefault();
            performSearch();
        }
    });

    function performSearch() {
        // 검색 버튼 비활성화 (중복 클릭 방지)
        searchBtn.disabled = true;
        searchBtn.innerHTML = `
            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            검색중...
        `;

        // 값이 있는 필터만 추출하여 URL 파라미터 생성
        const params = new URLSearchParams();
        const inputs = filterContainer.querySelectorAll('input, select, textarea');

        inputs.forEach(function(el) {
            // 빈 값, 공백만 있는 값, undefined, null 체크
            if (el.name && el.value && el.value.trim() !== '') {
                // 특수한 경우: checkbox나 radio의 경우 checked 상태 확인
                if (el.type === 'checkbox' || el.type === 'radio') {
                    if (el.checked) {
                        params.append(el.name, el.value);
                    }
                } else {
                    params.append(el.name, el.value.trim());
                }
            }
        });

        // 현재 URL에 파라미터를 추가하여 페이지 이동
        const url = `${window.location.pathname}?${params.toString()}`;
        window.location.href = url;
    }
})();
</script>
