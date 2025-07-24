@extends('jiny-uikit::layouts.docs')

@section('title', 'Buttons')
@section('subtitle', '버튼 컴포넌트')

@section('content')
    <!-- 컴포넌트 설명 -->
    <div class="mb-8">
        <p class="text-gray-700 mb-6">
            <code class="bg-gray-100 px-2 py-1 rounded text-sm">x-ui::button-*</code> 컴포넌트는 다양한 스타일과 크기의 버튼을 제공합니다.
            href 속성이 있으면 &lt;a&gt; 태그로, 없으면 &lt;button&gt; 태그로 렌더링됩니다.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <h4 class="text-sm font-medium text-blue-900 mb-2">주요 특징</h4>
            <ul class="text-sm text-blue-800 space-y-1">
                <li>• 다양한 스타일 지원 (primary, secondary, success, danger, warning, info, light)</li>
                <li>• Outline 스타일 지원</li>
                <li>• Rounded 스타일 지원</li>
                <li>• 다양한 크기 지원 (xs, sm, md, lg, xl)</li>
                <li>• href 속성에 따른 자동 태그 렌더링</li>
                <li>• 비활성화 상태 지원</li>
                <li>• 전체 너비 옵션</li>
                <li>• 접근성 고려 설계</li>
            </ul>
        </div>
    </div>

    <!-- 기본 버튼 -->
    <section id="basic-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">기본 버튼</h2>
        <p class="text-gray-700 mb-6">가장 기본적인 스타일의 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary&gt;Primary Button&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-secondary&gt;Secondary Button&lt;/x-ui::button-secondary&gt;
&lt;x-ui::button-success&gt;Success Button&lt;/x-ui::button-success&gt;
&lt;x-ui::button-danger&gt;Danger Button&lt;/x-ui::button-danger&gt;
&lt;x-ui::button-warning&gt;Warning Button&lt;/x-ui::button-warning&gt;
&lt;x-ui::button-info&gt;Info Button&lt;/x-ui::button-info&gt;
&lt;x-ui::button-light&gt;Light Button&lt;/x-ui::button-light&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-primary>Primary Button</x-ui::button-primary>
                    <x-ui::button-secondary>Secondary Button</x-ui::button-secondary>
                    <x-ui::button-success>Success Button</x-ui::button-success>
                    <x-ui::button-danger>Danger Button</x-ui::button-danger>
                    <x-ui::button-warning>Warning Button</x-ui::button-warning>
                    <x-ui::button-info>Info Button</x-ui::button-info>
                    <x-ui::button-light>Light Button</x-ui::button-light>
                </div>
            </div>
        </div>
    </section>

    <!-- Outline 버튼 -->
    <section id="outline-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Outline 버튼</h2>
        <p class="text-gray-700 mb-6">테두리가 있는 스타일의 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-outline-primary&gt;Primary Outline&lt;/x-ui::button-outline-primary&gt;
&lt;x-ui::button-outline-secondary&gt;Secondary Outline&lt;/x-ui::button-outline-secondary&gt;
&lt;x-ui::button-outline-success&gt;Success Outline&lt;/x-ui::button-outline-success&gt;
&lt;x-ui::button-outline-danger&gt;Danger Outline&lt;/x-ui::button-outline-danger&gt;
&lt;x-ui::button-outline-warning&gt;Warning Outline&lt;/x-ui::button-outline-warning&gt;
&lt;x-ui::button-outline-info&gt;Info Outline&lt;/x-ui::button-outline-info&gt;
&lt;x-ui::button-outline-light&gt;Light Outline&lt;/x-ui::button-outline-light&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-outline-primary>Primary Outline</x-ui::button-outline-primary>
                    <x-ui::button-outline-secondary>Secondary Outline</x-ui::button-outline-secondary>
                    <x-ui::button-outline-success>Success Outline</x-ui::button-outline-success>
                    <x-ui::button-outline-danger>Danger Outline</x-ui::button-outline-danger>
                    <x-ui::button-outline-warning>Warning Outline</x-ui::button-outline-warning>
                    <x-ui::button-outline-info>Info Outline</x-ui::button-outline-info>
                    <x-ui::button-outline-light>Light Outline</x-ui::button-outline-light>
                </div>
            </div>
        </div>
    </section>

    <!-- Rounded 버튼 -->
    <section id="rounded-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Rounded 버튼</h2>
        <p class="text-gray-700 mb-6">완전히 둥근 모서리를 가진 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-rounded-primary&gt;Primary Rounded&lt;/x-ui::button-rounded-primary&gt;
&lt;x-ui::button-rounded-secondary&gt;Secondary Rounded&lt;/x-ui::button-rounded-secondary&gt;
&lt;x-ui::button-rounded-success&gt;Success Rounded&lt;/x-ui::button-rounded-success&gt;
&lt;x-ui::button-rounded-danger&gt;Danger Rounded&lt;/x-ui::button-rounded-danger&gt;
&lt;x-ui::button-rounded-warning&gt;Warning Rounded&lt;/x-ui::button-rounded-warning&gt;
&lt;x-ui::button-rounded-info&gt;Info Rounded&lt;/x-ui::button-rounded-info&gt;
&lt;x-ui::button-rounded-light&gt;Light Rounded&lt;/x-ui::button-rounded-light&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-rounded-primary>Primary Rounded</x-ui::button-rounded-primary>
                    <x-ui::button-rounded-secondary>Secondary Rounded</x-ui::button-rounded-secondary>
                    <x-ui::button-rounded-success>Success Rounded</x-ui::button-rounded-success>
                    <x-ui::button-rounded-danger>Danger Rounded</x-ui::button-rounded-danger>
                    <x-ui::button-rounded-warning>Warning Rounded</x-ui::button-rounded-warning>
                    <x-ui::button-rounded-info>Info Rounded</x-ui::button-rounded-info>
                    <x-ui::button-rounded-light>Light Rounded</x-ui::button-rounded-light>
                </div>
            </div>
        </div>
    </section>

    <!-- Rounded Outline 버튼 -->
    <section id="rounded-outline-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Rounded Outline 버튼</h2>
        <p class="text-gray-700 mb-6">둥근 모서리와 테두리를 가진 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-rounded-outline-primary&gt;Primary Rounded Outline&lt;/x-ui::button-rounded-outline-primary&gt;
&lt;x-ui::button-rounded-outline-secondary&gt;Secondary Rounded Outline&lt;/x-ui::button-rounded-outline-secondary&gt;
&lt;x-ui::button-rounded-outline-success&gt;Success Rounded Outline&lt;/x-ui::button-rounded-outline-success&gt;
&lt;x-ui::button-rounded-outline-danger&gt;Danger Rounded Outline&lt;/x-ui::button-rounded-outline-danger&gt;
&lt;x-ui::button-rounded-outline-warning&gt;Warning Rounded Outline&lt;/x-ui::button-rounded-outline-warning&gt;
&lt;x-ui::button-rounded-outline-info&gt;Info Rounded Outline&lt;/x-ui::button-rounded-outline-info&gt;
&lt;x-ui::button-rounded-outline-light&gt;Light Rounded Outline&lt;/x-ui::button-rounded-outline-light&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-rounded-outline-primary>Primary Rounded Outline</x-ui::button-rounded-outline-primary>
                    <x-ui::button-rounded-outline-secondary>Secondary Rounded Outline</x-ui::button-rounded-outline-secondary>
                    <x-ui::button-rounded-outline-success>Success Rounded Outline</x-ui::button-rounded-outline-success>
                    <x-ui::button-rounded-outline-danger>Danger Rounded Outline</x-ui::button-rounded-outline-danger>
                    <x-ui::button-rounded-outline-warning>Warning Rounded Outline</x-ui::button-rounded-outline-warning>
                    <x-ui::button-rounded-outline-info>Info Rounded Outline</x-ui::button-rounded-outline-info>
                    <x-ui::button-rounded-outline-light>Light Rounded Outline</x-ui::button-rounded-outline-light>
                </div>
            </div>
        </div>
    </section>

    <!-- 크기별 버튼 -->
    <section id="button-sizes" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">크기별 버튼</h2>
        <p class="text-gray-700 mb-6">다양한 크기의 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary size="xs"&gt;Extra Small&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-primary size="sm"&gt;Small&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-primary size="md"&gt;Medium&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-primary size="lg"&gt;Large&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-primary size="xl"&gt;Extra Large&lt;/x-ui::button-primary&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-primary size="xs">Extra Small</x-ui::button-primary>
                    <x-ui::button-primary size="sm">Small</x-ui::button-primary>
                    <x-ui::button-primary size="md">Medium</x-ui::button-primary>
                    <x-ui::button-primary size="lg">Large</x-ui::button-primary>
                    <x-ui::button-primary size="xl">Extra Large</x-ui::button-primary>
                </div>
            </div>
        </div>
    </section>

    <!-- 링크 버튼 -->
    <section id="link-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">링크 버튼</h2>
        <p class="text-gray-700 mb-6">href 속성이 있으면 자동으로 &lt;a&gt; 태그로 렌더링됩니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary href="/dashboard"&gt;대시보드로 이동&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-outline-secondary href="/settings"&gt;설정으로 이동&lt;/x-ui::button-outline-secondary&gt;
&lt;x-ui::button-success href="/users"&gt;사용자 목록&lt;/x-ui::button-success&gt;
&lt;x-ui::button-rounded-outline-primary href="/profile"&gt;프로필 보기&lt;/x-ui::button-rounded-outline-primary&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-primary href="/dashboard">대시보드로 이동</x-ui::button-primary>
                    <x-ui::button-outline-secondary href="/settings">설정으로 이동</x-ui::button-outline-secondary>
                    <x-ui::button-success href="/users">사용자 목록</x-ui::button-success>
                    <x-ui::button-rounded-outline-primary href="/profile">프로필 보기</x-ui::button-rounded-outline-primary>
                </div>
            </div>
        </div>
    </section>

    <!-- 비활성화 버튼 -->
    <section id="disabled-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">비활성화 버튼</h2>
        <p class="text-gray-700 mb-6">disabled 속성을 사용하여 비활성화된 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary :disabled="true"&gt;비활성화된 버튼&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-outline-secondary :disabled="true"&gt;비활성화된 Outline&lt;/x-ui::button-outline-secondary&gt;
&lt;x-ui::button-rounded-success :disabled="true"&gt;비활성화된 Rounded&lt;/x-ui::button-rounded-success&gt;
&lt;x-ui::button-danger :disabled="true"&gt;비활성화된 Danger&lt;/x-ui::button-danger&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-primary :disabled="true">비활성화된 버튼</x-ui::button-primary>
                    <x-ui::button-outline-secondary :disabled="true">비활성화된 Outline</x-ui::button-outline-secondary>
                    <x-ui::button-rounded-success :disabled="true">비활성화된 Rounded</x-ui::button-rounded-success>
                    <x-ui::button-danger :disabled="true">비활성화된 Danger</x-ui::button-danger>
                </div>
            </div>
        </div>
    </section>

    <!-- 전체 너비 버튼 -->
    <section id="full-width-buttons" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">전체 너비 버튼</h2>
        <p class="text-gray-700 mb-6">fullWidth 속성을 사용하여 전체 너비를 차지하는 버튼들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary :fullWidth="true"&gt;전체 너비 Primary&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-outline-secondary :fullWidth="true"&gt;전체 너비 Outline&lt;/x-ui::button-outline-secondary&gt;
&lt;x-ui::button-success :fullWidth="true"&gt;전체 너비 Success&lt;/x-ui::button-success&gt;
&lt;x-ui::button-rounded-danger :fullWidth="true"&gt;전체 너비 Rounded Danger&lt;/x-ui::button-rounded-danger&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::button-primary :fullWidth="true">전체 너비 Primary</x-ui::button-primary>
                    <x-ui::button-outline-secondary :fullWidth="true">전체 너비 Outline</x-ui::button-outline-secondary>
                    <x-ui::button-success :fullWidth="true">전체 너비 Success</x-ui::button-success>
                    <x-ui::button-rounded-danger :fullWidth="true">전체 너비 Rounded Danger</x-ui::button-rounded-danger>
                </div>
            </div>
        </div>
    </section>

    <!-- 버튼 타입 -->
    <section id="button-types" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">버튼 타입</h2>
        <p class="text-gray-700 mb-6">type 속성을 사용하여 다양한 버튼 타입을 지정할 수 있습니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::button-primary type="button"&gt;일반 버튼&lt;/x-ui::button-primary&gt;
&lt;x-ui::button-success type="submit"&gt;제출 버튼&lt;/x-ui::button-success&gt;
&lt;x-ui::button-danger type="reset"&gt;리셋 버튼&lt;/x-ui::button-danger&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-x-4 space-y-4">
                    <x-ui::button-primary type="button">일반 버튼</x-ui::button-primary>
                    <x-ui::button-success type="submit">제출 버튼</x-ui::button-success>
                    <x-ui::button-danger type="reset">리셋 버튼</x-ui::button-danger>
                </div>
            </div>
        </div>
    </section>

    <!-- API 참조 -->
    <section id="api-reference" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">API 참조</h2>

        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">속성</h3>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">type</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">'button'</td>
                            <td class="px-6 py-4 text-sm text-gray-500">버튼 타입 (button, submit, reset)</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">size</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">'md'</td>
                            <td class="px-6 py-4 text-sm text-gray-500">버튼 크기 (xs, sm, md, lg, xl)</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">disabled</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                            <td class="px-6 py-4 text-sm text-gray-500">버튼 비활성화 여부</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">fullWidth</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                            <td class="px-6 py-4 text-sm text-gray-500">전체 너비 사용 여부</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">href</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string|null</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">null</td>
                            <td class="px-6 py-4 text-sm text-gray-500">링크 URL (있으면 &lt;a&gt; 태그로 렌더링)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg p-6 mt-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">사용 가능한 컴포넌트</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">기본 버튼</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• x-ui::button-primary</li>
                        <li>• x-ui::button-secondary</li>
                        <li>• x-ui::button-success</li>
                        <li>• x-ui::button-danger</li>
                        <li>• x-ui::button-warning</li>
                        <li>• x-ui::button-info</li>
                        <li>• x-ui::button-light</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Outline 버튼</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• x-ui::button-outline-primary</li>
                        <li>• x-ui::button-outline-secondary</li>
                        <li>• x-ui::button-outline-success</li>
                        <li>• x-ui::button-outline-danger</li>
                        <li>• x-ui::button-outline-warning</li>
                        <li>• x-ui::button-outline-info</li>
                        <li>• x-ui::button-outline-light</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Rounded 버튼</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• x-ui::button-rounded-primary</li>
                        <li>• x-ui::button-rounded-secondary</li>
                        <li>• x-ui::button-rounded-success</li>
                        <li>• x-ui::button-rounded-danger</li>
                        <li>• x-ui::button-rounded-warning</li>
                        <li>• x-ui::button-rounded-info</li>
                        <li>• x-ui::button-rounded-light</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium text-gray-900 mb-2">Rounded Outline 버튼</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• x-ui::button-rounded-outline-primary</li>
                        <li>• x-ui::button-rounded-outline-secondary</li>
                        <li>• x-ui::button-rounded-outline-success</li>
                        <li>• x-ui::button-rounded-outline-danger</li>
                        <li>• x-ui::button-rounded-outline-warning</li>
                        <li>• x-ui::button-rounded-outline-info</li>
                        <li>• x-ui::button-rounded-outline-light</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
