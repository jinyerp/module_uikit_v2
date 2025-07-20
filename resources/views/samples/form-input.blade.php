@extends('jiny-uikit::layouts.docs')

@section('title', 'Form Input')
@section('subtitle', '다양한 타입의 입력 필드 컴포넌트')

@section('heading')
    <div>
        <div>
            <nav aria-label="Back" class="sm:hidden">
                <a href="{{ route('uikit.index') }}" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1 -ml-1 size-5 shrink-0 text-gray-400">
                        <path d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                    Back
                </a>
            </nav>
            <nav aria-label="Breadcrumb" class="hidden sm:flex">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="{{ route('uikit.index') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">UIkit</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400">
                                <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">컴포넌트</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400">
                                <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                            <a href="#" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Form Input</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Form Input</h2>
                <p class="text-sm text-gray-500 mt-1">다양한 타입의 입력 필드 컴포넌트</p>
            </div>
            <div class="mt-4 flex shrink-0 md:mt-0 md:ml-4">
                <a href="https://github.com/jiny/uikit" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                    </svg>
                    GitHub
                </a>
                <a href="{{ route('uikit.index') }}" class="ml-3 inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    목록으로
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- 컴포넌트 설명 -->
    <div class="mb-8">
        <p class="text-gray-700 mb-6">
            <code class="bg-gray-100 px-2 py-1 rounded text-sm">x-ui::form-input</code> 컴포넌트는 다양한 타입의 입력 필드를 제공합니다.
            Tailwind CSS로 스타일링되어 있으며, 접근성을 고려한 설계입니다.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <h4 class="text-sm font-medium text-blue-900 mb-2">주요 특징</h4>
            <ul class="text-sm text-blue-800 space-y-1">
                <li>• 다양한 input 타입 지원 (text, email, password, number, tel, url, date 등)</li>
                <li>• 라벨과 플레이스홀더 지원</li>
                <li>• 필수 필드 및 비활성화 상태 지원</li>
                <li>• 커스텀 CSS 클래스 적용 가능</li>
                <li>• 접근성 고려 (ARIA 속성, 키보드 네비게이션)</li>
            </ul>
        </div>
    </div>

    <!-- 기본 사용법 -->
    <section id="basic-usage" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">기본 사용법</h2>
        <p class="text-gray-700 mb-6">가장 기본적인 입력 필드 사용법입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-input name="username" label="사용자명" placeholder="사용자명을 입력하세요" /&gt;
&lt;x-ui::form-input name="email" label="이메일" type="email" placeholder="example@email.com" /&gt;
&lt;x-ui::form-input name="password" label="비밀번호" type="password" placeholder="비밀번호를 입력하세요" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <div>
                        <x-ui::form-input name="username" label="사용자명" placeholder="사용자명을 입력하세요" />
                    </div>
                    <div>
                        <x-ui::form-input name="email" label="이메일" type="email" placeholder="example@email.com" />
                    </div>
                    <div>
                        <x-ui::form-input name="password" label="비밀번호" type="password" placeholder="비밀번호를 입력하세요" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 다양한 타입 -->
    <section id="input-types" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">다양한 타입</h2>
        <p class="text-gray-700 mb-6">HTML5의 다양한 input 타입을 지원합니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-input name="number" label="숫자" type="number" placeholder="숫자를 입력하세요" /&gt;
&lt;x-ui::form-input name="tel" label="전화번호" type="tel" placeholder="010-1234-5678" /&gt;
&lt;x-ui::form-input name="url" label="URL" type="url" placeholder="https://example.com" /&gt;
&lt;x-ui::form-input name="date" label="날짜" type="date" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-ui::form-input name="number" label="숫자" type="number" placeholder="숫자를 입력하세요" />
                    </div>
                    <div>
                        <x-ui::form-input name="tel" label="전화번호" type="tel" placeholder="010-1234-5678" />
                    </div>
                    <div>
                        <x-ui::form-input name="url" label="URL" type="url" placeholder="https://example.com" />
                    </div>
                    <div>
                        <x-ui::form-input name="date" label="날짜" type="date" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 상태별 예시 -->
    <section id="states" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">상태별 예시</h2>
        <p class="text-gray-700 mb-6">필수 필드, 비활성화, 기본값 등 다양한 상태를 지원합니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-input name="required" label="필수 필드" placeholder="이 필드는 필수입니다" :required="true" /&gt;
&lt;x-ui::form-input name="disabled" label="비활성화" placeholder="이 필드는 비활성화되었습니다" :disabled="true" /&gt;
&lt;x-ui::form-input name="with_value" label="기본값" value="기본값이 설정된 필드" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <div>
                        <x-ui::form-input name="required" label="필수 필드" placeholder="이 필드는 필수입니다" :required="true" />
                    </div>
                    <div>
                        <x-ui::form-input name="disabled" label="비활성화" placeholder="이 필드는 비활성화되었습니다" :disabled="true" />
                    </div>
                    <div>
                        <x-ui::form-input name="with_value" label="기본값" value="기본값이 설정된 필드" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 커스텀 스타일 -->
    <section id="custom-styles" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">커스텀 스타일</h2>
        <p class="text-gray-700 mb-6">Tailwind CSS 클래스를 사용하여 스타일을 커스터마이징할 수 있습니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-input
    name="custom"
    label="커스텀 스타일"
    placeholder="커스텀 클래스가 적용된 필드"
    class="border-purple-300 focus:border-purple-500 focus:ring-purple-500"
/&gt;
&lt;x-ui::form-input
    name="large"
    label="큰 크기"
    placeholder="큰 크기의 입력 필드"
    class="text-lg px-4 py-3"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                                        <div>
                        <x-ui::form-input
                            name="custom"
                            label="커스텀 스타일"
                            placeholder="커스텀 클래스가 적용된 필드"
                            class="border-purple-300 focus:border-purple-500 focus:ring-purple-500"
                        />
                    </div>
                    <div>
                        <x-ui::form-input
                            name="large"
                            label="큰 크기"
                            placeholder="큰 크기의 입력 필드"
                            class="text-lg px-4 py-3"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 속성 참조 -->
    <section id="attributes" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">속성 참조</h2>
        <p class="text-gray-700 mb-6">사용 가능한 모든 속성과 옵션을 확인하세요.</p>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">속성</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">타입</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">기본값</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">설명</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">name</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">입력 필드의 name 속성</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">label</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">입력 필드의 라벨</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">type</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">text</td>
                        <td class="px-6 py-4 text-sm text-gray-500">입력 필드의 타입 (text, email, password, number, tel, url, date 등)</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">placeholder</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">플레이스홀더 텍스트</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">value</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">입력 필드의 기본값</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">required</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                        <td class="px-6 py-4 text-sm text-gray-500">필수 필드 여부</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">disabled</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                        <td class="px-6 py-4 text-sm text-gray-500">비활성화 여부</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('toc')
    <a href="#basic-usage" class="block text-sm text-gray-600 hover:text-gray-900 py-1">기본 사용법</a>
    <a href="#input-types" class="block text-sm text-gray-600 hover:text-gray-900 py-1">다양한 타입</a>
    <a href="#states" class="block text-sm text-gray-600 hover:text-gray-900 py-1">상태별 예시</a>
    <a href="#custom-styles" class="block text-sm text-gray-600 hover:text-gray-900 py-1">커스텀 스타일</a>
    <a href="#attributes" class="block text-sm text-gray-600 hover:text-gray-900 py-1">속성 참조</a>
@endsection
