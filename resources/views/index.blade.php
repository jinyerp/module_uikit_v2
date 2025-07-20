@extends('jiny-uikit::layouts.docs')

@section('title', 'UIkit 컴포넌트')
@section('subtitle', 'Laravel Blade 컴포넌트 라이브러리')

@section('content')
    <!-- 소개 -->
    <div class="mb-8">
        <p class="text-gray-700 mb-6">
            UIkit은 Laravel Blade를 위한 현대적이고 접근성 높은 UI 컴포넌트 라이브러리입니다.
            Tailwind CSS를 기반으로 하며, 개발자가 빠르고 일관된 사용자 인터페이스를 구축할 수 있도록 도와줍니다.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <h4 class="text-sm font-medium text-blue-900 mb-2">주요 특징</h4>
            <ul class="text-sm text-blue-800 space-y-1">
                <li>• 빠른 개발 - 미리 만들어진 컴포넌트로 빠르게 개발하세요</li>
                <li>• 접근성 - WCAG 가이드라인을 준수한 접근성</li>
                <li>• 커스터마이징 - Tailwind CSS로 쉽게 스타일 커스터마이징</li>
                <li>• 반응형 - 모든 디바이스에서 완벽하게 작동</li>
                <li>• TypeScript 지원 - 완전한 타입 안전성</li>
            </ul>
        </div>
    </div>

    <!-- 빠른 시작 -->
    <section id="quick-start" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">빠른 시작</h2>
        <p class="text-gray-700 mb-6">UIkit 컴포넌트를 사용하려면 다음과 같이 설치하세요:</p>

        <div class="bg-gray-900 rounded-lg p-4 mb-6">
            <pre class="text-green-400 text-sm"><code>composer require jiny/uikit</code></pre>
        </div>

        <div class="bg-gray-900 rounded-lg p-4 mb-6">
            <pre class="text-green-400 text-sm"><code>// 서비스 프로바이더 등록 (자동으로 등록됨)
// bootstrap/providers.php에 자동으로 추가됩니다

// 컴포넌트 사용 예시
&lt;x-uikit::form-input name="username" label="사용자명" /&gt;
&lt;x-uikit::form-switch name="notifications" label="알림 받기" /&gt;
&lt;x-uikit::alert-success title="성공!" message="작업이 완료되었습니다." /&gt;</code></pre>
        </div>
    </section>

    <!-- 컴포넌트 카테고리 -->
    <section id="components" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">컴포넌트</h2>
        <p class="text-gray-700 mb-6">다양한 UI 컴포넌트를 확인하고 사용해보세요.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Form Inputs -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Form Inputs</h3>
                    <div class="space-y-3">
                        <a href="{{ route('uikit.form-input') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            📝 Form Input
                        </a>
                        <a href="{{ route('uikit.form-textarea') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            📄 Form Textarea
                        </a>
                        <a href="{{ route('uikit.form-select-check') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            📋 Form Select Check
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form Radio -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Form Radio</h3>
                    <div class="space-y-3">
                        <a href="{{ route('uikit.form-radio') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            🔘 Form Radio
                        </a>
                        <a href="{{ route('uikit.form-radio-inline') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            ↔️ Form Radio Inline
                        </a>
                        <a href="{{ route('uikit.form-radio-list') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            📋 Form Radio List
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form Controls -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Form Controls</h3>
                    <div class="space-y-3">
                        <a href="{{ route('uikit.form-switch') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            🔄 Form Switch
                        </a>
                    </div>
                </div>
            </div>

            <!-- Display Components -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Display Components</h3>
                    <div class="space-y-3">
                        <a href="{{ route('uikit.form-panel') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            📋 Form Panel
                        </a>
                        <a href="{{ route('uikit.alert') }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline">
                            🚨 Alert Components
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 기능 특징 -->
    <section id="features" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">기능 특징</h2>
        <p class="text-gray-700 mb-6">UIkit의 강력한 기능들을 확인하세요.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-gray-900">빠른 개발</h4>
                        <p class="text-sm text-gray-500">미리 만들어진 컴포넌트로 빠르게 개발하세요</p>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-gray-900">접근성</h4>
                        <p class="text-sm text-gray-500">WCAG 가이드라인을 준수한 접근성</p>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-gray-900">커스터마이징</h4>
                        <p class="text-sm text-gray-500">Tailwind CSS로 쉽게 스타일 커스터마이징</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 커뮤니티 -->
    <section id="community" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">커뮤니티</h2>
        <p class="text-gray-700 mb-6">UIkit 커뮤니티에 참여하고 기여하세요.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h4 class="text-lg font-medium text-gray-900 mb-2">GitHub</h4>
                <p class="text-sm text-gray-600 mb-4">소스 코드를 확인하고 이슈를 보고하세요.</p>
                <a href="https://github.com/jiny/uikit" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                    </svg>
                    GitHub 저장소
                </a>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h4 class="text-lg font-medium text-gray-900 mb-2">문서</h4>
                <p class="text-sm text-gray-600 mb-4">자세한 사용법과 예제를 확인하세요.</p>
                <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    문서 보기
                </a>
            </div>
        </div>
    </section>
@endsection

@section('toc')
    <a href="#quick-start" class="block text-sm text-gray-600 hover:text-gray-900 py-1">빠른 시작</a>
    <a href="#components" class="block text-sm text-gray-600 hover:text-gray-900 py-1">컴포넌트</a>
    <a href="#features" class="block text-sm text-gray-600 hover:text-gray-900 py-1">기능 특징</a>
    <a href="#community" class="block text-sm text-gray-600 hover:text-gray-900 py-1">커뮤니티</a>
@endsection
