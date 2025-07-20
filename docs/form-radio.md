# Form Radio 컴포넌트

`x-ui::form-radio`, `x-ui::form-radio-item`, `x-ui::form-radio-inline`, `x-ui::form-radio-list` 컴포넌트는 라디오 버튼 그룹을 제공합니다.

## 기본 사용법

### 1. 배열로 아이템 정의
```blade
<x-ui::form-radio 
    name="notification-method" 
    legend="Notifications" 
    description="How do you prefer to receive notifications?"
    :items="['email' => 'Email', 'sms' => 'Phone (SMS)', 'push' => 'Push notification']"
    :selected="old('notification-method', 'email')"
/>
```

### 2. 개별 아이템 컴포넌트 사용
```blade
<x-ui::form-radio 
    name="notification-method" 
    legend="Notifications" 
    description="How do you prefer to receive notifications?"
>
    <x-ui::form-radio-item 
        value="email" 
        label="Email" 
        :checked="old('notification-method') == 'email'"
    />
    <x-ui::form-radio-item 
        value="sms" 
        label="Phone (SMS)" 
        :checked="old('notification-method') == 'sms'"
    />
    <x-ui::form-radio-item 
        value="push" 
        label="Push notification" 
        :checked="old('notification-method') == 'push'"
    />
</x-ui::form-radio>
```

### 3. 인라인 라디오 그룹
```blade
<x-ui::form-radio-inline 
    name="notification-method" 
    legend="Notifications" 
    description="How do you prefer to receive notifications?"
    :items="['email' => 'Email', 'sms' => 'Phone (SMS)', 'push' => 'Push notification']"
    :selected="old('notification-method', 'email')"
/>
```

### 4. 리스트 라디오 그룹
```blade
<x-ui::form-radio-list 
    name="account" 
    legend="Transfer funds" 
    description="Transfer your balance to your bank account."
    :items="[
        'checking' => 'Checking',
        'savings' => 'Savings',
        'mastercard' => 'Mastercard'
    ]"
    :selected="old('account', 'checking')"
/>
```

## 속성

### FormRadio 속성

| 속성 | 타입 | 설명 |
|------|------|------|
| `name` | string | 라디오 그룹의 이름 (필수) |
| `legend` | string | fieldset의 legend 텍스트 |
| `description` | string | 설명 텍스트 |
| `items` | array | 라디오 아이템 배열 |
| `selected` | mixed | 선택된 값 |
| `required` | bool | 필수 필드 여부 |
| `disabled` | bool | 전체 그룹 비활성화 |
| `inline` | bool | 가로 배치 여부 |

### FormRadioItem 속성

| 속성 | 타입 | 설명 |
|------|------|------|
| `value` | string | 라디오 버튼의 값 |
| `label` | string | 라벨 텍스트 |
| `groupName` | string | 라디오 그룹 이름 |
| `checked` | bool | 선택 상태 |
| `required` | bool | 필수 여부 |
| `disabled` | bool | 비활성화 여부 |
| `description` | string | 설명 텍스트 |
| `inline` | bool | 인라인 모드 여부 |
| `list` | bool | 리스트 모드 여부 |

### FormRadioInline 속성

FormRadio와 동일한 속성을 지원하며, 자동으로 가로 배치됩니다.

### FormRadioList 속성

FormRadio와 동일한 속성을 지원하며, 자동으로 리스트 형태로 배치됩니다.

## 사용 예시

### 기본 라디오 그룹
```blade
<x-ui::form-radio 
    name="gender" 
    legend="성별" 
    :items="['male' => '남성', 'female' => '여성']"
    :selected="old('gender', $user->gender)"
/>
```

### 설명이 있는 라디오 그룹
```blade
<x-ui::form-radio 
    name="preferences" 
    legend="알림 설정" 
    description="어떤 방식으로 알림을 받으시겠습니까?"
    :items="[
        'email' => '이메일',
        'sms' => '문자메시지',
        'push' => '푸시 알림'
    ]"
    :selected="old('preferences', $user->notification_preference)"
/>
```

### 필수 필드
```blade
<x-ui::form-radio 
    name="terms" 
    legend="이용약관 동의" 
    :required="true"
    :items="['agree' => '동의합니다', 'disagree' => '동의하지 않습니다']"
    :selected="old('terms')"
/>
```

### 인라인 배치 (기존 방식)
```blade
<x-ui::form-radio 
    name="size" 
    legend="사이즈" 
    :inline="true"
    :items="['S' => 'Small', 'M' => 'Medium', 'L' => 'Large']"
    :selected="old('size', $product->size)"
/>
```

### 인라인 라디오 그룹 (새로운 방식)
```blade
<x-ui::form-radio-inline 
    name="size" 
    legend="사이즈" 
    :items="['S' => 'Small', 'M' => 'Medium', 'L' => 'Large']"
    :selected="old('size', $product->size)"
/>
```

### 개별 아이템 컴포넌트 사용 (세로 배치)
```blade
<x-ui::form-radio 
    name="payment-method" 
    legend="결제 방법" 
    description="선호하는 결제 방법을 선택하세요"
>
    <x-ui::form-radio-item 
        value="credit-card" 
        label="신용카드" 
        :checked="old('payment-method') == 'credit-card'"
        description="Visa, MasterCard, American Express 지원"
    />
    <x-ui::form-radio-item 
        value="bank-transfer" 
        label="계좌이체" 
        :checked="old('payment-method') == 'bank-transfer'"
        description="실시간 계좌이체로 즉시 처리됩니다"
    />
    <x-ui::form-radio-item 
        value="paypal" 
        label="PayPal" 
        :checked="old('payment-method') == 'paypal'"
        description="PayPal 계정으로 안전하게 결제"
    />
</x-ui::form-radio>
```

### 개별 아이템 컴포넌트 사용 (가로 배치)
```blade
<x-ui::form-radio-inline 
    name="notification-method" 
    legend="알림 방법" 
    description="어떤 방식으로 알림을 받으시겠습니까?"
>
    <x-ui::form-radio-item 
        value="email" 
        label="이메일" 
        :checked="old('notification-method') == 'email'"
        :inline="true"
    />
    <x-ui::form-radio-item 
        value="sms" 
        label="문자메시지" 
        :checked="old('notification-method') == 'sms'"
        :inline="true"
    />
    <x-ui::form-radio-item 
        value="push" 
        label="푸시 알림" 
        :checked="old('notification-method') == 'push'"
        :inline="true"
    />
</x-ui::form-radio-inline>
```

### 개별 아이템 컴포넌트 사용 (리스트 형태)
```blade
<x-ui::form-radio-list 
    name="account" 
    legend="Transfer funds" 
    description="Transfer your balance to your bank account."
>
    <x-ui::form-radio-item 
        value="checking" 
        label="Checking" 
        :checked="old('account') == 'checking'"
        description="CIBC ••••6610"
        :list="true"
    />
    <x-ui::form-radio-item 
        value="savings" 
        label="Savings" 
        :checked="old('account') == 'savings'"
        description="Bank of America ••••0149"
        :list="true"
    />
    <x-ui::form-radio-item 
        value="mastercard" 
        label="Mastercard" 
        :checked="old('account') == 'mastercard'"
        description="Capital One ••••7877"
        :list="true"
    />
</x-ui::form-radio-list>
```

### 복잡한 아이템 배열
```blade
<x-ui::form-radio 
    name="shipping" 
    legend="배송 방법" 
    :items="[
        [
            'value' => 'standard',
            'label' => '일반 배송 (3-5일)',
            'id' => 'shipping-standard',
            'description' => '3-5일 내 배송됩니다'
        ],
        [
            'value' => 'express',
            'label' => '빠른 배송 (1-2일)',
            'id' => 'shipping-express',
            'description' => '1-2일 내 배송됩니다'
        ],
        [
            'value' => 'overnight',
            'label' => '당일 배송',
            'id' => 'shipping-overnight',
            'description' => '당일 배송됩니다',
            'disabled' => true
        ]
    ]"
    :selected="old('shipping', 'standard')"
/>
```

## 고급 사용법

### 커스텀 스타일링 (세로 배치)
```blade
<x-ui::form-radio 
    name="theme" 
    legend="테마 선택" 
    class="custom-radio-group"
    legend-class="text-lg font-bold text-blue-600"
    description-class="text-sm text-gray-500"
    container-class="space-y-4"
>
    <x-ui::form-radio-item 
        value="light" 
        label="라이트 테마" 
        :checked="old('theme') == 'light'"
        description="밝고 깔끔한 인터페이스"
        radio-class="custom-radio-input"
        label-class="custom-radio-label"
        description-class="text-sm text-gray-600"
    />
    <x-ui::form-radio-item 
        value="dark" 
        label="다크 테마" 
        :checked="old('theme') == 'dark'"
        description="어두운 배경으로 눈의 피로 감소"
        radio-class="custom-radio-input"
        label-class="custom-radio-label"
        description-class="text-sm text-gray-600"
    />
</x-ui::form-radio>
```

### 커스텀 스타일링 (리스트 형태)
```blade
<x-ui::form-radio-list 
    name="account" 
    legend="계좌 선택" 
    class="custom-radio-list"
    legend-class="text-lg font-bold text-blue-600"
    description-class="text-sm text-gray-500"
    container-class="divide-y divide-gray-200"
>
    <x-ui::form-radio-item 
        value="checking" 
        label="Checking" 
        :checked="old('account') == 'checking'"
        description="CIBC ••••6610"
        :list="true"
        radio-class="custom-radio-input"
        label-class="custom-radio-label"
        description-class="text-sm text-gray-600"
    />
    <x-ui::form-radio-item 
        value="savings" 
        label="Savings" 
        :checked="old('account') == 'savings'"
        description="Bank of America ••••0149"
        :list="true"
        radio-class="custom-radio-input"
        label-class="custom-radio-label"
        description-class="text-sm text-gray-600"
    />
</x-ui::form-radio-list>
```

### 조건부 렌더링
```blade
<x-ui::form-radio 
    name="user-type" 
    legend="사용자 유형" 
    :selected="old('user-type', $user->type)"
>
    <x-ui::form-radio-item 
        value="individual" 
        label="개인" 
        :checked="old('user-type', $user->type) == 'individual'"
        description="개인 계정으로 기본 기능 사용"
    />
    <x-ui::form-radio-item 
        value="business" 
        label="기업" 
        :checked="old('user-type', $user->type) == 'business'"
        description="기업 계정으로 고급 기능 사용"
    />
    @if($user->isAdmin())
        <x-ui::form-radio-item 
            value="admin" 
            label="관리자" 
            :checked="old('user-type', $user->type) == 'admin'"
            description="시스템 관리자 권한"
        />
    @endif
</x-ui::form-radio>
```

### 동적 아이템 생성
```blade
@php
    $categories = [
        'electronics' => '전자제품',
        'clothing' => '의류',
        'books' => '도서',
        'sports' => '스포츠용품'
    ];
@endphp

<x-ui::form-radio 
    name="category" 
    legend="카테고리" 
    :items="$categories"
    :selected="old('category', $product->category)"
/>
```

### 서버 플랜 선택 (description 포함, 세로 배치)
```blade
<x-ui::form-radio 
    name="plan" 
    legend="서버 플랜" 
    :items="[
        [
            'value' => 'small',
            'label' => 'Small',
            'description' => '4 GB RAM / 2 CPUS / 80 GB SSD Storage'
        ],
        [
            'value' => 'medium',
            'label' => 'Medium',
            'description' => '8 GB RAM / 4 CPUS / 160 GB SSD Storage'
        ],
        [
            'value' => 'large',
            'label' => 'Large',
            'description' => '16 GB RAM / 8 CPUS / 320 GB SSD Storage'
        ]
    ]"
    :selected="old('plan', $server->plan)"
/>
```

### 알림 방법 선택 (가로 배치)
```blade
<x-ui::form-radio-inline 
    name="notification-method" 
    legend="알림 방법" 
    description="어떤 방식으로 알림을 받으시겠습니까?"
    :items="[
        'email' => '이메일',
        'sms' => '문자메시지',
        'push' => '푸시 알림'
    ]"
    :selected="old('notification-method', $user->notification_preference)"
/>
```

### 계좌 선택 (리스트 형태)
```blade
<x-ui::form-radio-list 
    name="account" 
    legend="Transfer funds" 
    description="Transfer your balance to your bank account."
    :items="[
        [
            'value' => 'checking',
            'label' => 'Checking',
            'description' => 'CIBC ••••6610'
        ],
        [
            'value' => 'savings',
            'label' => 'Savings',
            'description' => 'Bank of America ••••0149'
        ],
        [
            'value' => 'mastercard',
            'label' => 'Mastercard',
            'description' => 'Capital One ••••7877'
        ]
    ]"
    :selected="old('account', 'checking')"
/>
```

## 오류 처리

컴포넌트는 Laravel의 validation 오류를 자동으로 표시합니다:

```blade
<x-ui::form-radio 
    name="gender" 
    legend="성별" 
    :items="['male' => '남성', 'female' => '여성']"
    :selected="old('gender')"
/>
```

만약 `gender` 필드에 validation 오류가 있다면, 오류 메시지가 자동으로 표시됩니다.

## 접근성

컴포넌트는 다음과 같은 접근성 기능을 제공합니다:

- **fieldset/legend**: 라디오 그룹의 의미적 구조
- **라벨 연결**: `for` 속성을 통한 라벨과 input 연결
- **설명 연결**: `aria-describedby` 속성을 통한 설명 연결
- **필수 표시**: 필수 필드에 대한 시각적 표시
- **상태 표시**: 비활성화 상태의 시각적 구분
- **키보드 네비게이션**: Tab 키로 라디오 버튼 간 이동
- **스크린 리더**: 적절한 ARIA 속성과 의미적 마크업

## 스타일링

컴포넌트는 Tailwind CSS를 사용하여 스타일링됩니다:

- **기본 스타일**: 둥근 라디오 버튼, 포커스 효과
- **상태별 스타일**: 선택, 비활성화, 오류 상태의 시각적 구분
- **반응형**: 다양한 화면 크기에 대응
- **일관성**: 다른 form 컴포넌트들과 일관된 디자인

## 다중 컴포넌트 사용

컴포넌트는 페이지에 여러 번 사용되어도 충돌하지 않습니다:

```blade
{{-- 첫 번째 라디오 그룹 (세로 배치) --}}
<x-ui::form-radio 
    name="gender" 
    legend="성별" 
    :items="['male' => '남성', 'female' => '여성']"
/>

{{-- 두 번째 라디오 그룹 (가로 배치) --}}
<x-ui::form-radio-inline 
    name="age-group" 
    legend="연령대" 
    :items="['10s' => '10대', '20s' => '20대', '30s' => '30대']"
/>

{{-- 세 번째 라디오 그룹 (리스트 형태) --}}
<x-ui::form-radio-list 
    name="account" 
    legend="계좌 선택" 
    :items="[
        'checking' => 'Checking',
        'savings' => 'Savings',
        'mastercard' => 'Mastercard'
    ]"
/>

{{-- 네 번째 라디오 그룹 (세로 배치) --}}
<x-ui::form-radio 
    name="preferences" 
    legend="선호도" 
    :items="['high' => '높음', 'medium' => '보통', 'low' => '낮음']"
/>
``` 
