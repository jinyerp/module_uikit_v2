@extends('jiny-uikit::layouts.stacked.main')

@section('title', 'Avatar Components Demo')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Avatar Components Demo</h1>
        <p class="text-gray-600">UIKit에서 제공하는 Avatar 컴포넌트를 확인해보세요.</p>
    </div>

    <div class="space-y-8">
        <!-- 기본 아바타 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">기본 아바타</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">이미지가 있는 아바타</h3>
                    <div class="flex items-center space-x-4">
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-6" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-8" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-10" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-14" />
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">이미지가 없는 아바타 (기본 아이콘)</h3>
                    <div class="flex items-center space-x-4">
                        <x-ui::avatar size="size-6" />
                        <x-ui::avatar size="size-8" />
                        <x-ui::avatar size="size-10" />
                        <x-ui::avatar size="size-12" />
                        <x-ui::avatar size="size-14" />
                    </div>
                </div>
            </div>
        </div>

        <!-- 사용법 예시 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">사용법</h2>
            <div class="bg-gray-100 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">기본 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::avatar src="이미지URL" alt="대체텍스트" /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">크기 지정</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::avatar
    src="이미지URL"
    alt="대체텍스트"
    size="size-8" /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">추가 클래스</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::avatar
    src="이미지URL"
    alt="대체텍스트"
    size="size-10"
    class="border-2 border-blue-500" /&gt;</code></pre>
            </div>
        </div>

        <!-- 컴포넌트 정보 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">컴포넌트 정보</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">속성</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>src</strong> - 이미지 URL (기본값: "")</li>
                        <li><strong>alt</strong> - 대체 텍스트 (기본값: "")</li>
                        <li><strong>size</strong> - 아바타 크기 (기본값: "size-6")</li>
                        <li><strong>class</strong> - 추가 CSS 클래스 (기본값: "")</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">사용 가능한 크기</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>size-6</strong> - 24px (기본값)</li>
                        <li><strong>size-8</strong> - 32px</li>
                        <li><strong>size-10</strong> - 40px</li>
                        <li><strong>size-12</strong> - 48px</li>
                        <li><strong>size-14</strong> - 56px</li>
                        <li><strong>size-16</strong> - 64px</li>
                        <li><strong>size-20</strong> - 80px</li>
                        <li><strong>size-24</strong> - 96px</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">특징</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li>Tailwind CSS 기반의 반응형 디자인</li>
                        <li>원형 아바타 이미지 지원</li>
                        <li>이미지가 없을 때 기본 사용자 아이콘 표시</li>
                        <li>다양한 크기 옵션 제공</li>
                        <li>접근성을 위한 alt 속성 지원</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 고급 예시 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">고급 예시</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">테두리가 있는 아바타</h3>
                    <div class="flex items-center space-x-4">
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="border-4 border-blue-500" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="border-4 border-green-500" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="border-4 border-red-500" />
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">그림자가 있는 아바타</h3>
                    <div class="flex items-center space-x-4">
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="shadow-lg" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="shadow-xl" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="shadow-2xl" />
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">호버 효과가 있는 아바타</h3>
                    <div class="flex items-center space-x-4">
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="hover:scale-110 transition-transform cursor-pointer" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="hover:opacity-75 transition-opacity cursor-pointer" />
                        <x-ui::avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Avatar" size="size-12" class="hover:ring-4 hover:ring-blue-300 transition-all cursor-pointer" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
