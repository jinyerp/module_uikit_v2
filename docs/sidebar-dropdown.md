# 사이드바 드롭다운 시스템

## 개요

사이드바 드롭다운 시스템은 체크박스 기반의 접근성 좋은 드롭다운 메뉴를 제공합니다. CSS sibling selector를 활용하여 최소한의 JavaScript로 구현되었으며, 로컬 스토리지를 통해 상태를 유지합니다.

## 주요 기능

### 1. 체크박스 기반 드롭다운
- 숨겨진 체크박스를 사용하여 드롭다운 상태 관리
- CSS `:checked` pseudo-class와 sibling selector (`~`) 활용
- JavaScript 없이도 기본 동작 가능

### 2. 안정적인 상태 유지
- **안정적인 ID 생성**: `uniqid()` 대신 메뉴의 고유한 특성을 기반으로 ID 생성
- **로컬 스토리지**: 브라우저 로컬 스토리지에 상태 저장
- **페이지 리로드 시 상태 복원**: 페이지 새로고침 후에도 메뉴 상태 유지

### 3. 부드러운 애니메이션
- **열림**: 0.6초 (천천히 → 빠르게)
- **닫힘**: 0.4초 (빠르게 → 천천히)
- **체브론 회전**: 0.4초

## 구현 세부사항

### ID 생성 방식

```php
// 안정적인 ID 생성 - 메뉴의 고유한 특성을 기반으로 함
$menuKey = ($item['label'] ?? '') . '-' . ($item['url'] ?? '') . '-' . $depth;
$id = 'dropdown-' . md5($menuKey);
```

이 방식은 페이지 리로드 시에도 동일한 ID가 생성되어 로컬 스토리지와 매칭됩니다.

### CSS 구조

```css
/* 체크박스가 체크되었을 때 체브론 회전 */
.dropdown-checkbox:checked ~ label .dropdown-chevron {
    transform: rotate(180deg);
}

/* 체크박스가 체크되었을 때 드롭다운 메뉴 표시 */
.dropdown-checkbox:checked ~ ul.dropdown-menu {
    max-height: 1000px !important;
    opacity: 1;
    transform: translateY(0);
}

/* 기본 드롭다운 메뉴 스타일 */
.dropdown-menu {
    transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    transform: translateY(-10px);
}

/* 닫힘 애니메이션 */
.dropdown-closing .dropdown-menu {
    max-height: 0 !important;
    opacity: 0;
    transform: translateY(-10px);
    transition: max-height 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                opacity 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
```

### JavaScript 기능

#### 상태 복원
```javascript
function restoreDropdownStates() {
    const checkboxes = document.querySelectorAll('.dropdown-checkbox');
    
    checkboxes.forEach(function(checkbox) {
        const key = checkbox.id;
        const container = checkbox.closest('.dropdown-container');
        const storedState = localStorage.getItem('dropdown-' + key);
        
        if(storedState === 'open') {
            checkbox.checked = true;
            container.classList.add('dropdown-open');
        }
    });
}
```

#### 상태 저장
```javascript
checkbox.addEventListener('change', function() {
    if(checkbox.checked) {
        localStorage.setItem('dropdown-' + key, 'open');
        container.classList.add('dropdown-open');
    } else {
        localStorage.removeItem('dropdown-' + key);
        container.classList.remove('dropdown-open');
    }
});
```

#### 자동 펼침
```javascript
function autoExpandActiveMenus() {
    document.querySelectorAll('.dropdown-container').forEach(function(container) {
        const activeItem = container.querySelector('.active');
        if (activeItem) {
            const checkbox = container.querySelector('.dropdown-checkbox');
            if (checkbox) {
                checkbox.checked = true;
                container.classList.add('dropdown-open');
                localStorage.setItem('dropdown-' + checkbox.id, 'open');
            }
        }
    });
}
```

## 사용법

### 1. 컴포넌트 사용
```blade
<x-jiny-uikit::sidebar-dropdown 
    :item="$menuItem" 
    :depth="0" 
    :menuService="$menuService" 
    :colors="$colors" 
/>
```

### 2. 메뉴 JSON 구조
```json
{
    "type": "menu",
    "label": "Projects",
    "icon": "folder",
    "url": "/projects",
    "children": [
        {
            "type": "menu",
            "label": "Active Projects",
            "url": "/projects/active"
        }
    ]
}
```

## 성능 최적화

1. **CSS 기반 동작**: JavaScript 없이도 기본 드롭다운 동작
2. **최소한의 JavaScript**: 로컬 스토리지와 상태 관리만 담당
3. **안정적인 ID**: 페이지 리로드 시에도 일관된 동작
4. **이벤트 리스너 최적화**: 중복 이벤트 리스너 방지

## 브라우저 호환성

- **모던 브라우저**: CSS sibling selector 지원
- **로컬 스토리지**: IE8+ 지원
- **CSS Transitions**: IE10+ 지원

## 디버깅

브라우저 개발자 도구에서 다음을 확인할 수 있습니다:

1. **콘솔 로그**: 드롭다운 상태 변경 추적
2. **로컬 스토리지**: 저장된 상태 확인
3. **CSS 클래스**: `.dropdown-open`, `.dropdown-closing` 상태 확인 
