<section class="mt-6 bg-white rounded-lg border border-gray-200 p-4">
    <div id="filter-container" class="space-y-4">
        {{ $slot }}

        <!-- 검색 버튼 -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between pt-4 border-t border-gray-200 gap-4">
            <div class="flex items-center gap-2 w-full sm:w-auto justify-center sm:justify-start">

                <x-ui::button-dark type="button" id="search-btn" class="w-32 sm:w-auto">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    검색
                </x-ui::button-dark>
                <x-ui::button-light href="{{ request()->url() }}" class="w-32 sm:w-auto">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                        </path>
                    </svg>
                    초기화
                </x-ui::button-light>
            </div>


            <div class="w-full sm:w-auto flex justify-center sm:justify-end">
                {{-- 필터 추가 버튼 --}}
                @isset($buttons)
                    {{ $buttons }}
                @endisset
            </div>
        </div>
    </div>
</section>
