# Form Select Check Component

`x-ui::form-select-check` 컴포넌트는 선택된 항목을 체크마크로 표시하는 드롭다운 선택 컴포넌트입니다.

## 기본 사용법

```blade
<x-ui::form-select-check 
    name="assigned_to" 
    label="담당자" 
    :options="$users" 
    :selected="$selectedUser" 
/>
```

## 속성

| 속성 | 타입 | 기본값 | 설명 |
|------|------|--------|------|
| `name` | string | null | 폼 필드의 name 속성 |
| `id` | string | null | 컴포넌트의 id 속성 |
| `label` | string | null | 라벨 텍스트 |
| `options` | array | [] | 선택 옵션들의 배열 |
| `selected` | mixed | null | 현재 선택된 값 |
| `placeholder` | string | '선택해주세요' | 선택되지 않았을 때 표시할 텍스트 |
| `required` | boolean | false | 필수 필드 여부 |
| `disabled` | boolean | false | 비활성화 여부 |
| `class` | string | null | 추가 CSS 클래스 |
| `optionValue` | string | 'value' | 옵션 배열에서 값으로 사용할 키 |
| `optionLabel` | string | 'label' | 옵션 배열에서 라벨로 사용할 키 |
| `optionKey` | string | 'key' | 옵션 배열에서 고유 키로 사용할 키 |

## 옵션 배열 형식

### 간단한 배열
```php
$options = [
    'user' => '일반 사용자',
    'admin' => '관리자',
    'super' => '슈퍼 관리자'
];
```

### 복잡한 배열
```php
$options = [
    [
        'key' => 1,
        'value' => 'user',
        'label' => '일반 사용자'
    ],
    [
        'key' => 2,
        'value' => 'admin',
        'label' => '관리자'
    ],
    [
        'key' => 3,
        'value' => 'super',
        'label' => '슈퍼 관리자'
    ]
];
```

## 사용 예시

### 기본 사용법
```blade
<x-ui::form-select-check 
    name="user_type" 
    label="사용자 타입" 
    :options="[
        'user' => '일반 사용자',
        'admin' => '관리자',
        'super' => '슈퍼 관리자'
    ]" 
    :selected="$user->type" 
/>
```

### 필수 필드
```blade
<x-ui::form-select-check 
    name="country" 
    label="국가" 
    :options="$countries" 
    :selected="$user->country" 
    required="true" 
/>
```

### 사용자 정의 옵션 키
```blade
<x-ui::form-select-check 
    name="category" 
    label="카테고리" 
    :options="$categories" 
    :selected="$post->category_id" 
    option-value="id"
    option-label="name"
    option-key="id"
/>
```

### 비활성화된 컴포넌트
```blade
<x-ui::form-select-check 
    name="status" 
    label="상태" 
    :options="$statuses" 
    :selected="$item->status" 
    disabled="true" 
/>
```

### 추가 클래스 적용
```blade
<x-ui::form-select-check 
    name="priority" 
    label="우선순위" 
    :options="$priorities" 
    :selected="$task->priority" 
    class="w-full md:w-1/2" 
/>
```

## 컨트롤러에서 사용

```php
public function create()
{
    $users = User::all()->mapWithKeys(function ($user) {
        return [$user->id => $user->name];
    });

    return view('users.create', compact('users'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'assigned_to' => 'required|exists:users,id',
    ]);

    // 폼 처리...
}
```

## 뷰에서 사용

```blade
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    
    <x-ui::form-select-check 
        name="assigned_to" 
        label="담당자" 
        :options="$users" 
        :selected="old('assigned_to')" 
        required="true" 
    />
    
    <button type="submit">작업 생성</button>
</form>
```

## JavaScript 기능

컴포넌트는 다음 JavaScript 기능들을 포함합니다:

### 드롭다운 토글
- 버튼 클릭 시 드롭다운 열기/닫기
- 외부 클릭 시 드롭다운 닫기
- 다른 드롭다운 열기 시 기존 드롭다운 닫기

### 옵션 선택
- 옵션 클릭 시 선택 상태 변경
- 선택된 옵션에 체크마크 표시
- 버튼 텍스트 업데이트
- 숨겨진 input 필드 값 업데이트

### 접근성
- ARIA 속성 지원
- 키보드 네비게이션 준비
- 스크린 리더 지원

## 스타일링

컴포넌트는 Tailwind CSS 클래스를 사용하여 스타일링됩니다:

### 기본 스타일
- **라벨**: `block text-sm/6 font-medium text-gray-900`
- **버튼**: `grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-2 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6`
- **드롭다운**: `absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black/5 focus:outline-hidden sm:text-sm`
- **옵션**: `relative cursor-default py-2 pr-4 pl-8 text-gray-900 select-none`

### 상태별 스타일
- **선택된 옵션**: `font-semibold`, 체크마크 표시
- **호버 상태**: `hover:bg-indigo-600 hover:text-white`
- **비활성화**: `opacity-50 cursor-not-allowed`

## $attributes 객체 활용

컴포넌트는 `$attributes` 객체를 지원합니다:

### 컨테이너 속성
```blade
<x-ui::form-select-check 
    name="category" 
    label="카테고리" 
    :options="$categories" 
    container-class="mb-4"
    container-data-testid="category-select"
/>
```

### 라벨 속성
```blade
<x-ui::form-select-check 
    name="priority" 
    label="우선순위" 
    :options="$priorities" 
    label-class="text-lg font-bold"
    label-data-testid="priority-label"
/>
```

### 버튼 속성
```blade
<x-ui::form-select-check 
    name="status" 
    label="상태" 
    :options="$statuses" 
    button-class="bg-gray-50"
    button-data-testid="status-button"
/>
```

### 리스트박스 속성
```blade
<x-ui::form-select-check 
    name="type" 
    label="타입" 
    :options="$types" 
    listbox-class="max-h-40"
    listbox-data-testid="type-listbox"
/>
```

## 접근성

컴포넌트는 접근성을 고려하여 설계되었습니다:

- **ARIA 속성**: `aria-expanded`, `aria-haspopup`, `aria-labelledby` 등
- **역할 정의**: `role="listbox"`, `role="option"`
- **키보드 지원**: Tab 키로 포커스 이동 가능
- **스크린 리더**: 적절한 라벨과 설명 제공

## 오류 처리

컴포넌트는 Laravel의 validation 오류를 자동으로 표시합니다:

```blade
<x-ui::form-select-check 
    name="assigned_to" 
    label="담당자" 
    :options="$users" 
    :selected="old('assigned_to')" 
/>
```

만약 `assigned_to` 필드에 validation 오류가 있다면, 오류 메시지가 자동으로 표시됩니다.

## 다중 컴포넌트 사용

컴포넌트는 페이지에 여러 번 사용되어도 충돌하지 않도록 설계되었습니다:

### 고유 ID 자동 생성
각 컴포넌트 인스턴스는 자동으로 고유 ID를 생성합니다:
- 형식: `{name}_{uniqid}_{random}`
- 예: `user_type_64f8a1b2c3d4e_1234`

### 다중 사용 예시
```blade
{{-- 첫 번째 컴포넌트 --}}
<x-ui::form-select-check 
    name="user_type" 
    label="사용자 타입" 
    :options="$userTypes" 
    :selected="$user->type" 
/>

{{-- 두 번째 컴포넌트 --}}
<x-ui::form-select-check 
    name="department" 
    label="부서" 
    :options="$departments" 
    :selected="$user->department" 
/>

{{-- 세 번째 컴포넌트 --}}
<x-ui::form-select-check 
    name="role" 
    label="역할" 
    :options="$roles" 
    :selected="$user->role" 
/>
```

### JavaScript 충돌 방지
- **전역 함수**: `window.selectOption`, `window.toggleSelectDropdown`
- **데이터 속성**: `data-select-id`, `data-select-button`, `data-select-listbox`
- **이벤트 위임**: 한 번만 초기화되는 이벤트 리스너

### 고급 사용법
```blade
{{-- 동일한 name을 사용하더라도 고유 ID로 구분됨 --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <x-ui::form-select-check 
        name="category" 
        label="주 카테고리" 
        :options="$categories" 
        :selected="$item->primary_category" 
    />
    
    <x-ui::form-select-check 
        name="category" 
        label="보조 카테고리" 
        :options="$categories" 
        :selected="$item->secondary_category" 
    />
</div>
```

### 디버깅
브라우저 개발자 도구에서 각 컴포넌트의 고유 ID를 확인할 수 있습니다:
```html
<div data-select-id="category_64f8a1b2c3d4e_1234">
    <button data-select-button="category_64f8a1b2c3d4e_1234">
    <ul data-select-listbox="category_64f8a1b2c3d4e_1234">
``` 
