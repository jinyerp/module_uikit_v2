@extends('jiny-uikit::layouts.stacked.main')

@section('title', 'Navbar Components Demo')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Navbar Components Demo</h1>
        <p class="text-gray-600">UIKit에서 제공하는 Navbar 컴포넌트의 다양한 테마를 확인해보세요.</p>
    </div>

    <div class="space-y-8">
        <!-- Light 테마 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Light 테마</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Light 테마</h3>
                    <x-jiny-uikit::layouts.navbar theme="light" />
                </div>
            </div>
        </div>

        <!-- Dark 테마 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Dark 테마</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Dark 테마</h3>
                    <x-jiny-uikit::layouts.navbar theme="dark" />
                </div>
            </div>
        </div>

        <!-- Blue 테마 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Blue 테마</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Blue 테마</h3>
                    <x-jiny-uikit::layouts.navbar theme="blue" />
                </div>
            </div>
        </div>

        <!-- 커스텀 네비게이션 아이템 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">커스텀 네비게이션 아이템</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Light 테마 + 커스텀 아이템</h3>
                    <x-jiny-uikit::layouts.navbar 
                        theme="light"
                        :navItems="[
                            ['label' => '홈', 'url' => '/', 'active' => true],
                            ['label' => '사용자', 'url' => '/users', 'active' => false],
                            ['label' => '설정', 'url' => '/settings', 'active' => false],
                            ['label' => '도움말', 'url' => '/help', 'active' => false]
                        ]"
                        userName="김철수"
                        userEmail="kim@example.com"
                    />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Dark 테마 + 커스텀 아이템</h3>
                    <x-jiny-uikit::layouts.navbar 
                        theme="dark"
                        :navItems="[
                            ['label' => '대시보드', 'url' => '/dashboard', 'active' => true],
                            ['label' => '팀', 'url' => '/team', 'active' => false],
                            ['label' => '프로젝트', 'url' => '/projects', 'active' => false],
                            ['label' => '캘린더', 'url' => '/calendar', 'active' => false]
                        ]"
                        userName="박영희"
                        userEmail="park@example.com"
                    />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Blue 테마 + 커스텀 아이템</h3>
                    <x-jiny-uikit::layouts.navbar 
                        theme="blue"
                        :navItems="[
                            ['label' => '관리', 'url' => '/admin', 'active' => true],
                            ['label' => '사용자 관리', 'url' => '/admin/users', 'active' => false],
                            ['label' => '설정', 'url' => '/admin/settings', 'active' => false],
                            ['label' => '로그', 'url' => '/admin/logs', 'active' => false]
                        ]"
                        userName="관리자"
                        userEmail="admin@example.com"
                    />
                </div>
            </div>
        </div>

        <!-- 사용법 예시 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">사용법</h2>
            <div class="bg-gray-100 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">기본 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-jiny-uikit::layouts.navbar /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">테마 지정</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-jiny-uikit::layouts.navbar theme="light" /&gt;
&lt;x-jiny-uikit::layouts.navbar theme="dark" /&gt;
&lt;x-jiny-uikit::layouts.navbar theme="blue" /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">커스텀 속성</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-jiny-uikit::layouts.navbar
    theme="light"
    :navItems="[
        ['label' => '홈', 'url' => '/', 'active' => true],
        ['label' => '사용자', 'url' => '/users', 'active' => false]
    ]"
    userName="김철수"
    userEmail="kim@example.com"
    userAvatar="https://example.com/avatar.jpg"
    logo="https://example.com/logo.svg"
    logoAlt="회사 로고"
    :showNotifications="true"
    :showMobileMenu="true"
/&gt;</code></pre>
            </div>
        </div>

        <!-- 컴포넌트 정보 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">컴포넌트 정보</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">속성</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>theme</strong> - 테마 선택 (light, dark, blue) (기본값: "light")</li>
                        <li><strong>logo</strong> - 로고 이미지 URL (테마별 기본값 제공)</li>
                        <li><strong>logoAlt</strong> - 로고 대체 텍스트 (기본값: "Your Company")</li>
                        <li><strong>navItems</strong> - 네비게이션 아이템 배열 (기본값: [])</li>
                        <li><strong>userName</strong> - 사용자 이름 (기본값: "Tom Cook")</li>
                        <li><strong>userEmail</strong> - 사용자 이메일 (기본값: "tom@example.com")</li>
                        <li><strong>userAvatar</strong> - 사용자 아바타 URL (기본값: Unsplash 이미지)</li>
                        <li><strong>showNotifications</strong> - 알림 버튼 표시 여부 (기본값: true)</li>
                        <li><strong>showMobileMenu</strong> - 모바일 메뉴 표시 여부 (기본값: true)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">테마별 특징</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>Light</strong> - 흰색 배경, 회색 테두리, 인디고 강조색</li>
                        <li><strong>Dark</strong> - 어두운 회색 배경, 흰색 텍스트</li>
                        <li><strong>Blue</strong> - 인디고 블루 배경, 흰색 텍스트</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">네비게이션 아이템 구조</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>label</strong> - 메뉴 라벨 (필수)</li>
                        <li><strong>url</strong> - 링크 URL (기본값: "#")</li>
                        <li><strong>active</strong> - 활성 상태 (기본값: false)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">특징</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li>3가지 테마 지원 (Light, Dark, Blue)</li>
                        <li>Tailwind CSS 기반의 반응형 디자인</li>
                        <li>데스크톱과 모바일 메뉴 지원</li>
                        <li>사용자 프로필 드롭다운</li>
                        <li>알림 버튼</li>
                        <li>커스텀 네비게이션 아이템 지원</li>
                        <li>Avatar와 Icon 컴포넌트 통합</li>
                        <li>테마별 자동 로고 색상 조정</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 고급 예시 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">고급 예시</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">알림 없이 사용</h3>
                    <x-jiny-uikit::layouts.navbar
                        theme="light"
                        :showNotifications="false"
                        userName="알림 없는 사용자"
                        userEmail="no-notifications@example.com"
                    />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">모바일 메뉴 없이 사용</h3>
                    <x-jiny-uikit::layouts.navbar
                        theme="dark"
                        :showMobileMenu="false"
                        userName="모바일 메뉴 없는 사용자"
                        userEmail="no-mobile@example.com"
                    />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">모든 기능 비활성화</h3>
                    <x-jiny-uikit::layouts.navbar
                        theme="blue"
                        :showNotifications="false"
                        :showMobileMenu="false"
                        userName="최소 기능 사용자"
                        userEmail="minimal@example.com"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 