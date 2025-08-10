<?php

namespace Jiny\Uikit\App\View\Progress;

use Illuminate\View\Component;
use Carbon\Carbon;

class PeriodProgress extends Component
{
    public $percentage;
    public $elapsedDays;
    public $totalDays;
    public $remainingDays;
    public $startDate;
    public $endDate;
    public $showDetails;
    public $size;

    /**
     * 기간 진행률 컴포넌트 생성
     *
     * @param string|null $startDate 시작일 (Y-m-d 형식)
     * @param string|null $endDate 종료일 (Y-m-d 형식)
     * @param bool $showDetails 상세 정보 표시 여부
     * @param string $size 크기 (sm, md, lg)
     */
    public function __construct(
        $startDate = null,
        $endDate = null,
        $showDetails = true,
        $size = 'md'
    ) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->showDetails = $showDetails;
        $this->size = $size;

        // 날짜 계산
        $this->calculateProgress();
    }

    /**
     * 진행률 계산
     */
    private function calculateProgress()
    {
        if (!$this->startDate || !$this->endDate) {
            $this->percentage = 0;
            $this->elapsedDays = 0;
            $this->totalDays = 0;
            $this->remainingDays = 0;
            return;
        }

        $start = Carbon::parse($this->startDate);
        $end = Carbon::parse($this->endDate);
        $now = Carbon::now();

        // 총 일수 계산
        $this->totalDays = $start->diffInDays($end);

        if ($this->totalDays <= 0) {
            $this->percentage = 100;
            $this->elapsedDays = 0;
            $this->remainingDays = 0;
            return;
        }

        // 경과일수 계산
        $this->elapsedDays = $start->diffInDays($now);

        // 진행률 계산 (소수점 2자리까지만)
        $this->percentage = min(100, max(0, round(($this->elapsedDays / $this->totalDays) * 100, 2)));

        // 남은 일수 계산 (소수점 2자리로 제한)
        $this->remainingDays = round(max(0, $this->totalDays - $this->elapsedDays), 2);

    }

    /**
     * 컴포넌트 렌더링
     */
    public function render()
    {
        return view('jiny-uikit::progress.period-progress');
    }

    /**
     * 진행률에 따른 색상 클래스 반환
     */
    public function getProgressColorClass()
    {
        if ($this->percentage >= 90) {
            return 'bg-red-500';
        } elseif ($this->percentage >= 70) {
            return 'bg-orange-500';
        } elseif ($this->percentage >= 50) {
            return 'bg-yellow-500';
        } else {
            return 'bg-blue-500';
        }
    }

    /**
     * 진행률에 따른 텍스트 색상 클래스 반환
     */
    public function getTextColorClass()
    {
        if ($this->percentage >= 90) {
            return 'text-red-600';
        } elseif ($this->percentage >= 70) {
            return 'text-orange-600';
        } elseif ($this->percentage >= 50) {
            return 'text-yellow-600';
        } else {
            return 'text-blue-600';
        }
    }

    /**
     * 크기에 따른 높이 클래스 반환
     */
    public function getHeightClass()
    {
        switch ($this->size) {
            case 'sm':
                return 'h-2';
            case 'lg':
                return 'h-4';
            default:
                return 'h-3';
        }
    }

    /**
     * 상태 메시지 반환
     */
    public function getStatusMessage()
    {
        if ($this->remainingDays <= 0) {
            return '기간 만료';
        } elseif ($this->remainingDays <= 7) {
            return '곧 만료';
        } elseif ($this->remainingDays <= 30) {
            return '잠시 후 만료';
        } else {
            return '진행 중';
        }
    }

    /**
     * 포맷된 시작일 반환
     */
    public function getFormattedStartDate()
    {
        if (!$this->startDate) {
            return null;
        }
        return Carbon::parse($this->startDate)->format('Y-m-d');
    }

    /**
     * 포맷된 종료일 반환
     */
    public function getFormattedEndDate()
    {
        if (!$this->endDate) {
            return null;
        }
        return Carbon::parse($this->endDate)->format('Y-m-d');
    }
}
