<div class="period-progress">
    {{-- 기간 정보 --}}
    @if($getFormattedStartDate() && $getFormattedEndDate())
        <div class="text-sm text-gray-600 mb-2">
            {{ $getFormattedStartDate() }} ~ {{ $getFormattedEndDate() }}
        </div>
    @endif

    {{-- 진행률 바 --}}
    <div class="w-full bg-gray-200 rounded-full {{ $getHeightClass() }} mb-2">
        <div class="{{ $getProgressColorClass() }} {{ $getHeightClass() }} rounded-full transition-all duration-300 ease-in-out"
             style="width: {{ $percentage }}%"
             role="progressbar"
             aria-valuenow="{{ $percentage }}"
             aria-valuemin="0"
             aria-valuemax="100"
             aria-label="진행률 {{ $percentage }}%">
        </div>
    </div>

    {{-- 상세 정보 --}}
    @if($showDetails)
        <div class="flex justify-between items-center text-xs">
            <div class="{{ $getTextColorClass() }} font-medium">
                {{ number_format($percentage, 2) }}% 완료
            </div>
            <div class="text-gray-500">
                @if($remainingDays > 0)
                    {{ number_format($remainingDays, 2) }}일 남음
                @else
                    기간 만료
                @endif
            </div>
        </div>

        {{-- 상태 메시지 --}}
        {{-- <div class="text-xs text-gray-400 mt-1">
            {{ $getStatusMessage() }}
        </div> --}}
    @endif
</div>
