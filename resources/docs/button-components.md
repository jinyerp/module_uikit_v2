# UIkit 버튼 컴포넌트

## 개요

UIkit 버튼 컴포넌트는 다양한 스타일의 버튼을 제공하며, `href` 속성에 따라 링크 또는 버튼으로 렌더링됩니다.

## 사용법

### 기본 버튼

```blade
{{-- 일반 버튼 --}}
<x-ui::button-primary type="submit">
    저장
</x-ui::button-primary>

{{-- 링크 버튼 --}}
<x-ui::button-primary href="/admin/users">
    사용자 목록
</x-ui::button-primary>
```

### 버튼 타입별 사용법

#### Primary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-primary type="submit">
    제출
</x-ui::button-primary>

{{-- 링크 --}}
<x-ui::button-primary href="{{ route('admin.users.create') }}">
    사용자 추가
</x-ui::button-primary>
```

#### Secondary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-secondary type="button">
    취소
</x-ui::button-secondary>

{{-- 링크 --}}
<x-ui::button-secondary href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-secondary>
```

#### Success 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-success type="submit">
    승인
</x-ui::button-success>

{{-- 링크 --}}
<x-ui::button-success href="{{ route('admin.users.approve', $user->id) }}">
    승인하기
</x-ui::button-success>
```

#### Danger 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-danger type="button" onclick="confirmDelete()">
    삭제
</x-ui::button-danger>

{{-- 링크 --}}
<x-ui::button-danger href="{{ route('admin.users.delete', $user->id) }}">
    삭제하기
</x-ui::button-danger>
```

#### Warning 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-warning type="button">
    경고
</x-ui::button-warning>

{{-- 링크 --}}
<x-ui::button-warning href="{{ route('admin.users.suspend', $user->id) }}">
    정지하기
</x-ui::button-warning>
```

#### Info 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-info type="button">
    정보
</x-ui::button-info>

{{-- 링크 --}}
<x-ui::button-info href="{{ route('admin.users.details', $user->id) }}">
    상세보기
</x-ui::button-info>
```

#### Light 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-light type="button">
    취소
</x-ui::button-light>

{{-- 링크 --}}
<x-ui::button-light href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-light>
```

### Outline 버튼들

#### Outline Primary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-primary type="button">
    기본 액션
</x-ui::button-outline-primary>

{{-- 링크 --}}
<x-ui::button-outline-primary href="{{ route('admin.users.create') }}">
    사용자 추가
</x-ui::button-outline-primary>
```

#### Outline Secondary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-secondary type="button">
    보조 액션
</x-ui::button-outline-secondary>

{{-- 링크 --}}
<x-ui::button-outline-secondary href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-outline-secondary>
```

#### Outline Success 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-success type="button">
    승인
</x-ui::button-outline-success>

{{-- 링크 --}}
<x-ui::button-outline-success href="{{ route('admin.users.approve', $user->id) }}">
    승인하기
</x-ui::button-outline-success>
```

#### Outline Danger 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-danger type="button">
    삭제
</x-ui::button-outline-danger>

{{-- 링크 --}}
<x-ui::button-outline-danger href="{{ route('admin.users.delete', $user->id) }}">
    삭제하기
</x-ui::button-outline-danger>
```

#### Outline Warning 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-warning type="button">
    경고
</x-ui::button-outline-warning>

{{-- 링크 --}}
<x-ui::button-outline-warning href="{{ route('admin.users.suspend', $user->id) }}">
    정지하기
</x-ui::button-outline-warning>
```

#### Outline Info 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-info type="button">
    정보
</x-ui::button-outline-info>

{{-- 링크 --}}
<x-ui::button-outline-info href="{{ route('admin.users.details', $user->id) }}">
    상세보기
</x-ui::button-outline-info>
```

#### Outline Light 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-light type="button">
    취소
</x-ui::button-outline-light>

{{-- 링크 --}}
<x-ui::button-outline-light href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-outline-light>
```

#### Outline Dark 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-outline-dark type="button">
    강조 액션
</x-ui::button-outline-dark>

{{-- 링크 --}}
<x-ui::button-outline-dark href="{{ route('admin.users.important', $user->id) }}">
    중요 표시
</x-ui::button-outline-dark>
```

### Rounded 버튼들

#### Rounded Primary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-primary type="button">
    기본 액션
</x-ui::button-rounded-primary>

{{-- 링크 --}}
<x-ui::button-rounded-primary href="{{ route('admin.users.create') }}">
    사용자 추가
</x-ui::button-rounded-primary>
```

#### Rounded Secondary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-secondary type="button">
    보조 액션
</x-ui::button-rounded-secondary>

{{-- 링크 --}}
<x-ui::button-rounded-secondary href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-rounded-secondary>
```

#### Rounded Success 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-success type="button">
    승인
</x-ui::button-rounded-success>

{{-- 링크 --}}
<x-ui::button-rounded-success href="{{ route('admin.users.approve', $user->id) }}">
    승인하기
</x-ui::button-rounded-success>
```

#### Rounded Danger 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-danger type="button">
    삭제
</x-ui::button-rounded-danger>

{{-- 링크 --}}
<x-ui::button-rounded-danger href="{{ route('admin.users.delete', $user->id) }}">
    삭제하기
</x-ui::button-rounded-danger>
```

#### Rounded Warning 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-warning type="button">
    경고
</x-ui::button-rounded-warning>

{{-- 링크 --}}
<x-ui::button-rounded-warning href="{{ route('admin.users.suspend', $user->id) }}">
    정지하기
</x-ui::button-rounded-warning>
```

#### Rounded Info 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-info type="button">
    정보
</x-ui::button-rounded-info>

{{-- 링크 --}}
<x-ui::button-rounded-info href="{{ route('admin.users.details', $user->id) }}">
    상세보기
</x-ui::button-rounded-info>
```

#### Rounded Light 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-light type="button">
    취소
</x-ui::button-rounded-light>

{{-- 링크 --}}
<x-ui::button-rounded-light href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-rounded-light>
```

#### Rounded Dark 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-dark type="button">
    강조 액션
</x-ui::button-rounded-dark>

{{-- 링크 --}}
<x-ui::button-rounded-dark href="{{ route('admin.users.important', $user->id) }}">
    중요 표시
</x-ui::button-rounded-dark>
```

### Rounded Outline 버튼들

#### Rounded Outline Primary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-primary type="button">
    기본 액션
</x-ui::button-rounded-outline-primary>

{{-- 링크 --}}
<x-ui::button-rounded-outline-primary href="{{ route('admin.users.create') }}">
    사용자 추가
</x-ui::button-rounded-outline-primary>
```

#### Rounded Outline Secondary 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-secondary type="button">
    보조 액션
</x-ui::button-rounded-outline-secondary>

{{-- 링크 --}}
<x-ui::button-rounded-outline-secondary href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-rounded-outline-secondary>
```

#### Rounded Outline Success 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-success type="button">
    승인
</x-ui::button-rounded-outline-success>

{{-- 링크 --}}
<x-ui::button-rounded-outline-success href="{{ route('admin.users.approve', $user->id) }}">
    승인하기
</x-ui::button-rounded-outline-success>
```

#### Rounded Outline Danger 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-danger type="button">
    삭제
</x-ui::button-rounded-outline-danger>

{{-- 링크 --}}
<x-ui::button-rounded-outline-danger href="{{ route('admin.users.delete', $user->id) }}">
    삭제하기
</x-ui::button-rounded-outline-danger>
```

#### Rounded Outline Warning 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-warning type="button">
    경고
</x-ui::button-rounded-outline-warning>

{{-- 링크 --}}
<x-ui::button-rounded-outline-warning href="{{ route('admin.users.suspend', $user->id) }}">
    정지하기
</x-ui::button-rounded-outline-warning>
```

#### Rounded Outline Info 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-info type="button">
    정보
</x-ui::button-rounded-outline-info>

{{-- 링크 --}}
<x-ui::button-rounded-outline-info href="{{ route('admin.users.details', $user->id) }}">
    상세보기
</x-ui::button-rounded-outline-info>
```

#### Rounded Outline Light 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-light type="button">
    취소
</x-ui::button-rounded-outline-light>

{{-- 링크 --}}
<x-ui::button-rounded-outline-light href="{{ route('admin.users.index') }}">
    목록으로
</x-ui::button-rounded-outline-light>
```

#### Rounded Outline Dark 버튼
```blade
{{-- 버튼 --}}
<x-ui::button-rounded-outline-dark type="button">
    강조 액션
</x-ui::button-rounded-outline-dark>

{{-- 링크 --}}
<x-ui::button-rounded-outline-dark href="{{ route('admin.users.important', $user->id) }}">
    중요 표시
</x-ui::button-rounded-outline-dark>
```

## 속성

### 공통 속성

- `type`: 버튼 타입 (`button`, `submit`, `reset`) - 기본값: `button`
- `href`: 링크 URL - 제공 시 `<a>` 태그로 렌더링
- `disabled`: 비활성화 여부 - 기본값: `false`
- `fullWidth`: 전체 너비 여부 - 기본값: `false`
- `size`: 버튼 크기 (`xs`, `sm`, `md`, `lg`, `xl`) - 기본값: `md`

### 추가 HTML 속성

모든 표준 HTML 속성을 지원합니다:

```blade
<x-ui::button-primary 
    href="/admin/users"
    target="_blank"
    rel="noopener noreferrer"
    class="custom-class"
    data-id="123">
    새 창에서 열기
</x-ui::button-primary>
```

## 스타일 가이드

### 색상 체계

#### Solid 버튼
- **Primary**: 인디고색 - 주요 액션
- **Secondary**: 회색 - 보조 액션
- **Success**: 초록색 - 성공/승인 액션
- **Danger**: 빨간색 - 삭제/위험 액션
- **Warning**: 노란색 - 경고/주의 액션
- **Info**: 파란색 - 정보/상세보기 액션
- **Light**: 밝은 회색 - 취소/뒤로가기 액션

#### Outline 버튼
- **Primary**: 흰색 배경, 회색 테두리 - 주요 액션
- **Secondary**: 흰색 배경, 회색 테두리 - 보조 액션
- **Success**: 흰색 배경, 초록색 테두리 - 성공/승인 액션
- **Danger**: 흰색 배경, 빨간색 테두리 - 삭제/위험 액션
- **Warning**: 흰색 배경, 노란색 테두리 - 경고/주의 액션
- **Info**: 흰색 배경, 파란색 테두리 - 정보/상세보기 액션
- **Light**: 흰색 배경, 회색 테두리 - 취소/뒤로가기 액션
- **Dark**: 흰색 배경, 진한 회색 테두리 - 강조 액션

#### Rounded 버튼
- **Primary**: 인디고색 배경, 완전 둥근 모서리 - 주요 액션
- **Secondary**: 회색 배경, 완전 둥근 모서리 - 보조 액션
- **Success**: 초록색 배경, 완전 둥근 모서리 - 성공/승인 액션
- **Danger**: 빨간색 배경, 완전 둥근 모서리 - 삭제/위험 액션
- **Warning**: 노란색 배경, 완전 둥근 모서리 - 경고/주의 액션
- **Info**: 파란색 배경, 완전 둥근 모서리 - 정보/상세보기 액션
- **Light**: 밝은 회색 배경, 완전 둥근 모서리 - 취소/뒤로가기 액션
- **Dark**: 진한 회색 배경, 완전 둥근 모서리 - 강조 액션

#### Rounded Outline 버튼
- **Primary**: 흰색 배경, 회색 테두리, 완전 둥근 모서리 - 주요 액션
- **Secondary**: 흰색 배경, 회색 테두리, 완전 둥근 모서리 - 보조 액션
- **Success**: 흰색 배경, 초록색 테두리, 완전 둥근 모서리 - 성공/승인 액션
- **Danger**: 흰색 배경, 빨간색 테두리, 완전 둥근 모서리 - 삭제/위험 액션
- **Warning**: 흰색 배경, 노란색 테두리, 완전 둥근 모서리 - 경고/주의 액션
- **Info**: 흰색 배경, 파란색 테두리, 완전 둥근 모서리 - 정보/상세보기 액션
- **Light**: 흰색 배경, 회색 테두리, 완전 둥근 모서리 - 취소/뒤로가기 액션
- **Dark**: 흰색 배경, 진한 회색 테두리, 완전 둥근 모서리 - 강조 액션

### 크기

- **xs**: 매우 작은 버튼
- **sm**: 작은 버튼
- **md**: 중간 버튼 (기본)
- **lg**: 큰 버튼
- **xl**: 매우 큰 버튼

## 실제 사용 예시

### 관리자 패널에서의 사용

```blade
{{-- 사용자 목록 페이지 --}}
<div class="flex gap-2">
    <x-ui::button-primary href="{{ route('admin.users.create') }}">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        사용자 추가
    </x-ui::button-primary>
    
    <x-ui::button-secondary href="{{ route('admin.users.export') }}">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        내보내기
    </x-ui::button-secondary>
</div>

{{-- 사용자 상세 페이지 --}}
<div class="flex gap-2">
    <x-ui::button-primary href="{{ route('admin.users.edit', $user->id) }}">
        수정
    </x-ui::button-primary>
    
    <x-ui::button-success href="{{ route('admin.users.approve', $user->id) }}">
        승인
    </x-ui::button-success>
    
    <x-ui::button-warning href="{{ route('admin.users.suspend', $user->id) }}">
        정지
    </x-ui::button-warning>
    
    <x-ui::button-danger href="{{ route('admin.users.delete', $user->id) }}">
        삭제
    </x-ui::button-danger>
    
    <x-ui::button-light href="{{ route('admin.users.index') }}">
        목록으로
    </x-ui::button-light>
</div>

{{-- Outline 버튼 사용 예시 --}}
<div class="flex gap-2 mt-4">
    <x-ui::button-outline-primary href="{{ route('admin.users.edit', $user->id) }}">
        수정
    </x-ui::button-outline-primary>
    
    <x-ui::button-outline-success href="{{ route('admin.users.approve', $user->id) }}">
        승인
    </x-ui::button-outline-success>
    
    <x-ui::button-outline-warning href="{{ route('admin.users.suspend', $user->id) }}">
        정지
    </x-ui::button-outline-warning>
    
    <x-ui::button-outline-danger href="{{ route('admin.users.delete', $user->id) }}">
        삭제
    </x-ui::button-outline-danger>
    
    <x-ui::button-outline-light href="{{ route('admin.users.index') }}">
        목록으로
    </x-ui::button-outline-light>
</div>

{{-- Rounded 버튼 사용 예시 --}}
<div class="flex gap-2 mt-4">
    <x-ui::button-rounded-primary href="{{ route('admin.users.edit', $user->id) }}">
        수정
    </x-ui::button-rounded-primary>
    
    <x-ui::button-rounded-success href="{{ route('admin.users.approve', $user->id) }}">
        승인
    </x-ui::button-rounded-success>
    
    <x-ui::button-rounded-warning href="{{ route('admin.users.suspend', $user->id) }}">
        정지
    </x-ui::button-rounded-warning>
    
    <x-ui::button-rounded-danger href="{{ route('admin.users.delete', $user->id) }}">
        삭제
    </x-ui::button-rounded-danger>
    
    <x-ui::button-rounded-light href="{{ route('admin.users.index') }}">
        목록으로
    </x-ui::button-rounded-light>
</div>

{{-- Rounded Outline 버튼 사용 예시 --}}
<div class="flex gap-2 mt-4">
    <x-ui::button-rounded-outline-primary href="{{ route('admin.users.edit', $user->id) }}">
        수정
    </x-ui::button-rounded-outline-primary>
    
    <x-ui::button-rounded-outline-success href="{{ route('admin.users.approve', $user->id) }}">
        승인
    </x-ui::button-rounded-outline-success>
    
    <x-ui::button-rounded-outline-warning href="{{ route('admin.users.suspend', $user->id) }}">
        정지
    </x-ui::button-rounded-outline-warning>
    
    <x-ui::button-rounded-outline-danger href="{{ route('admin.users.delete', $user->id) }}">
        삭제
    </x-ui::button-rounded-outline-danger>
    
    <x-ui::button-rounded-outline-light href="{{ route('admin.users.index') }}">
        목록으로
    </x-ui::button-rounded-outline-light>
</div>

{{-- 폼 제출 --}}
<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf
    {{-- 폼 필드들 --}}
    
    <div class="flex gap-2 mt-4">
        <x-ui::button-primary type="submit">
            저장
        </x-ui::button-primary>
        
        <x-ui::button-secondary type="button" onclick="history.back()">
            취소
        </x-ui::button-secondary>
    </div>
</form>
```

### 조건부 렌더링

```blade
{{-- 사용자 상태에 따른 버튼 표시 --}}
@if($user->status === 'pending')
    <x-ui::button-success href="{{ route('admin.users.approve', $user->id) }}">
        승인
    </x-ui::button-success>
@elseif($user->status === 'active')
    <x-ui::button-warning href="{{ route('admin.users.suspend', $user->id) }}">
        정지
    </x-ui::button-warning>
@elseif($user->status === 'suspended')
    <x-ui::button-success href="{{ route('admin.users.activate', $user->id) }}">
        활성화
    </x-ui::button-success>
@endif
```

## 접근성

모든 버튼 컴포넌트는 접근성을 고려하여 설계되었습니다:

- 적절한 `aria-label` 속성 지원
- 키보드 네비게이션 지원
- 포커스 표시기 포함
- 스크린 리더 호환성

```blade
<x-ui::button-primary 
    href="/admin/users"
    aria-label="사용자 목록 페이지로 이동">
    사용자 목록
</x-ui::button-primary>
```

## 커스터마이징

### CSS 클래스 추가

```blade
<x-ui::button-primary 
    href="/admin/users"
    class="my-custom-class">
    사용자 목록
</x-ui::button-primary>
```

### 조건부 스타일링

```blade
<x-ui::button-primary 
    href="/admin/users"
    class="{{ $isActive ? 'ring-2 ring-blue-500' : '' }}">
    사용자 목록
</x-ui::button-primary>
```

## 성능 최적화

- 컴포넌트는 지연 로딩됩니다
- CSS 클래스는 최적화되어 있습니다
- 불필요한 DOM 요소를 최소화했습니다 
