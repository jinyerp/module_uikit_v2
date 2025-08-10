# Period Progress 컴포넌트

기간 진행률을 시각적으로 표시하는 컴포넌트입니다. 날짜 계산은 컴포넌트 내부에서 자동으로 처리됩니다.

## 기본 사용법

```blade
<x-ui::period-progress 
    start-date="2024-01-01"
    end-date="2024-01-20"
/>
```

## 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `start-date` | string | null | 시작일 (Y-m-d 형식) |
| `end-date` | string | null | 종료일 (Y-m-d 형식) |
| `show-details` | bool | true | 상세 정보 표시 여부 |
| `size` | string | 'md' | 크기 (sm, md, lg) |

## 크기 옵션

- `sm`: 작은 크기 (높이: 8px)
- `md`: 중간 크기 (높이: 12px) - 기본값
- `lg`: 큰 크기 (높이: 16px)

## 진행률에 따른 색상

- 0-49%: 파란색 (정상)
- 50-69%: 노란색 (주의)
- 70-89%: 주황색 (경고)
- 90-100%: 빨간색 (위험)

## 상태 메시지

- 남은 일수 > 30일: "진행 중"
- 남은 일수 ≤ 30일: "잠시 후 만료"
- 남은 일수 ≤ 7일: "곧 만료"
- 남은 일수 ≤ 0일: "기간 만료"

## 계산 방식

컴포넌트는 다음과 같이 진행률을 계산합니다:

1. **총 일수**: 시작일과 종료일의 차이
2. **경과일수**: 시작일부터 현재까지의 일수
3. **진행률**: (경과일수 / 총 일수) × 100 (소수점 2자리)
4. **남은 일수**: 총 일수 - 경과일수 (소수점 2자리)

모든 계산 결과는 소수점 2자리로 제한되어 정확성을 보장합니다.

## 예제

### 기본 사용
```blade
<x-ui::period-progress 
    start-date="2024-01-01"
    end-date="2024-01-20"
/>
```

### 작은 크기, 상세 정보 숨김
```blade
<x-ui::period-progress 
    start-date="2024-01-01"
    end-date="2024-01-20"
    :show-details="false"
    size="sm"
/>
```

### 큰 크기
```blade
<x-ui::period-progress 
    start-date="2024-01-01"
    end-date="2024-01-20"
    size="lg"
/>
```

### Carbon 인스턴스 사용
```blade
<x-ui::period-progress 
    :start-date="$item->reserved_from->format('Y-m-d')"
    :end-date="$item->reserved_to->format('Y-m-d')"
/>
```

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- `role="progressbar"`: 진행률 바 역할 명시
- `aria-valuenow`: 현재 진행률 값
- `aria-valuemin`: 최소값 (0)
- `aria-valuemax`: 최대값 (100)
- `aria-label`: 진행률 설명

## 스타일링

컴포넌트는 Tailwind CSS 클래스를 사용하며, 다음과 같은 클래스들이 적용됩니다:

- 진행률 바: `bg-gray-200` (배경), 동적 색상 (진행률에 따라)
- 텍스트: `text-gray-600` (기간), `text-gray-500` (남은 일수), `text-gray-400` (상태)
- 애니메이션: `transition-all duration-300 ease-in-out` 
