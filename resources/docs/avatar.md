# Avatar Component

Avatar 컴포넌트는 사용자 프로필 이미지를 표시하는 UI 컴포넌트입니다.

## 기본 사용법

```blade
<x-ui::avatar src="이미지URL" alt="대체텍스트" />
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | string | `''` | 이미지 URL |
| `alt` | string | `''` | 대체 텍스트 |
| `size` | string | `'size-6'` | 아바타 크기 (Tailwind CSS 클래스) |
| `class` | string | `''` | 추가 CSS 클래스 |

## 사용 예제

### 기본 아바타
```blade
<x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" />
```

### 크기 지정
```blade
<x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" />
```

### 추가 클래스
```blade
<x-ui::avatar 
    src="https://example.com/avatar.jpg" 
    alt="User Avatar" 
    size="size-10"
    class="border-2 border-blue-500" 
/>
```

### 이미지가 없는 경우 (기본 아이콘)
```blade
<x-ui::avatar size="size-8" />
```

## 사용 가능한 크기

| 크기 | 픽셀 | Tailwind 클래스 |
|------|------|----------------|
| 작음 | 24px | `size-6` (기본값) |
| 작음+ | 32px | `size-8` |
| 중간 | 40px | `size-10` |
| 중간+ | 48px | `size-12` |
| 큼 | 56px | `size-14` |
| 큼+ | 64px | `size-16` |
| 매우 큼 | 80px | `size-20` |
| 매우 큼+ | 96px | `size-24` |

## 스타일링

### 기본 스타일
아바타는 기본적으로 다음 스타일이 적용됩니다:
- `inline-block` - 인라인 블록 요소
- `rounded-full` - 완전한 원형
- 지정된 크기 클래스 적용

### 테두리 추가
```blade
<x-ui::avatar 
    src="https://example.com/avatar.jpg" 
    alt="User Avatar" 
    class="border-4 border-blue-500" 
/>
```

### 그림자 추가
```blade
<x-ui::avatar 
    src="https://example.com/avatar.jpg" 
    alt="User Avatar" 
    class="shadow-lg" 
/>
```

### 호버 효과
```blade
<x-ui::avatar 
    src="https://example.com/avatar.jpg" 
    alt="User Avatar" 
    class="hover:scale-110 transition-transform cursor-pointer" 
/>
```

## 접근성

### alt 속성
모든 아바타 이미지에는 의미있는 alt 속성을 제공해야 합니다:

```blade
<x-ui::avatar 
    src="https://example.com/avatar.jpg" 
    alt="John Doe의 프로필 사진" 
/>
```

### 기본 아이콘
이미지가 없을 때는 기본 사용자 아이콘이 표시되어 접근성을 보장합니다.

## 고급 예시

### 다양한 크기의 아바타
```blade
<div class="flex items-center space-x-4">
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-6" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-8" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-10" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-14" />
</div>
```

### 색상별 테두리
```blade
<div class="flex items-center space-x-4">
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="border-4 border-blue-500" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="border-4 border-green-500" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="border-4 border-red-500" />
</div>
```

### 그림자 효과
```blade
<div class="flex items-center space-x-4">
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="shadow-lg" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="shadow-xl" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="shadow-2xl" />
</div>
```

### 호버 애니메이션
```blade
<div class="flex items-center space-x-4">
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="hover:scale-110 transition-transform cursor-pointer" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="hover:opacity-75 transition-opacity cursor-pointer" />
    <x-ui::avatar src="https://example.com/avatar.jpg" alt="User Avatar" size="size-12" class="hover:ring-4 hover:ring-blue-300 transition-all cursor-pointer" />
</div>
```

## 실제 사용 예시

### 사용자 프로필
```blade
<div class="flex items-center space-x-3">
    <x-ui::avatar src="{{ $user->avatar }}" alt="{{ $user->name }}의 프로필 사진" size="size-10" />
    <div>
        <h3 class="text-lg font-medium">{{ $user->name }}</h3>
        <p class="text-gray-600">{{ $user->email }}</p>
    </div>
</div>
```

### 댓글 시스템
```blade
<div class="space-y-4">
    @foreach($comments as $comment)
        <div class="flex space-x-3">
            <x-ui::avatar src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}" size="size-8" />
            <div class="flex-1">
                <div class="bg-gray-100 rounded-lg p-3">
                    <p class="text-sm font-medium">{{ $comment->user->name }}</p>
                    <p class="text-gray-700">{{ $comment->content }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
```

### 네비게이션 바
```blade
<div class="flex items-center space-x-4">
    <x-ui::avatar src="{{ auth()->user()->avatar }}" alt="내 프로필" size="size-8" class="hover:ring-2 hover:ring-blue-300 cursor-pointer" />
    <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
</div>
``` 
