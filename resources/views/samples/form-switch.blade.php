@extends('jiny-uikit::layouts.docs')

@section('title', 'Form Switch')
@section('subtitle', '토글 스위치 컴포넌트')

@section('content')
    <!-- 컴포넌트 설명 -->
    <div class="mb-8">
        <p class="text-gray-700 mb-6">
            <code class="bg-gray-100 px-2 py-1 rounded text-sm">x-ui::form-switch</code> 컴포넌트는 사용자가 옵션을 켜거나 끌 수 있는 토글 스위치를 제공합니다.
            접근성을 고려한 설계로 키보드 네비게이션을 지원합니다.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <h4 class="text-sm font-medium text-blue-900 mb-2">주요 특징</h4>
            <ul class="text-sm text-blue-800 space-y-1">
                <li>• 다양한 크기 지원 (small, default, large)</li>
                <li>• 체크/언체크 상태 관리</li>
                <li>• 필수 필드 및 비활성화 상태 지원</li>
                <li>• 키보드 네비게이션 지원</li>
                <li>• ARIA 속성으로 접근성 향상</li>
            </ul>
        </div>
    </div>

    <!-- 기본 사용법 -->
    <section id="basic-usage" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">기본 사용법</h2>
        <p class="text-gray-700 mb-6">가장 기본적인 스위치 사용법입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-switch name="notifications" label="알림 받기" /&gt;
&lt;x-ui::form-switch name="dark_mode" label="다크 모드" :checked="true" /&gt;
&lt;x-ui::form-switch name="auto_save" label="자동 저장" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <div>
                        <x-ui::form-switch name="notifications" label="알림 받기" />
                    </div>
                    <div>
                        <x-ui::form-switch name="dark_mode" label="다크 모드" :checked="true" />
                    </div>
                    <div>
                        <x-ui::form-switch name="auto_save" label="자동 저장" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 크기별 예시 -->
    <section id="sizes" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">크기별 예시</h2>
        <p class="text-gray-700 mb-6">다양한 크기의 스위치를 사용할 수 있습니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-switch name="small" size="small" /&gt;
&lt;x-ui::form-switch name="default" size="default" /&gt;
&lt;x-ui::form-switch name="large" size="large" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">작은 크기</span>
                        <x-ui::form-switch name="small" size="small" />
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">기본 크기</span>
                        <x-ui::form-switch name="default" size="default" />
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium text-gray-700">큰 크기</span>
                        <x-ui::form-switch name="large" size="large" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 상태별 예시 -->
    <section id="states" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">상태별 예시</h2>
        <p class="text-gray-700 mb-6">필수 필드, 비활성화 등 다양한 상태를 지원합니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::form-switch name="required" label="필수 동의" :required="true" /&gt;
&lt;x-ui::form-switch name="disabled" label="비활성화" :disabled="true" /&gt;
&lt;x-ui::form-switch name="disabled_checked" label="비활성화 (체크됨)" :disabled="true" :checked="true" /&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <div>
                        <x-ui::form-switch name="required" label="필수 동의" :required="true" />
                    </div>
                    <div>
                        <x-ui::form-switch name="disabled" label="비활성화" :disabled="true" />
                    </div>
                    <div>
                        <x-ui::form-switch name="disabled_checked" label="비활성화 (체크됨)" :disabled="true" :checked="true" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 실제 사용 예시 -->
    <section id="real-world" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">실제 사용 예시</h2>
        <p class="text-gray-700 mb-6">실제 애플리케이션에서 사용할 수 있는 예시들입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;!-- 알림 설정 --&gt;
&lt;div class="border border-gray-200 rounded-lg p-4"&gt;
    &lt;h4 class="text-sm font-medium text-gray-900 mb-3"&gt;알림 설정&lt;/h4&gt;
    &lt;div class="space-y-3"&gt;
        &lt;x-ui::form-switch name="email_notifications" label="이메일 알림" /&gt;
        &lt;x-ui::form-switch name="push_notifications" label="푸시 알림" /&gt;
        &lt;x-ui::form-switch name="sms_notifications" label="SMS 알림" /&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="text-sm font-medium text-gray-900 mb-3">알림 설정</h4>
                        <div class="space-y-3">
                            <x-ui::form-switch name="email_notifications" label="이메일 알림" />
                            <x-ui::form-switch name="push_notifications" label="푸시 알림" />
                            <x-ui::form-switch name="sms_notifications" label="SMS 알림" />
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="text-sm font-medium text-gray-900 mb-3">개인정보 설정</h4>
                        <div class="space-y-3">
                            <x-ui::form-switch name="profile_public" label="프로필 공개" />
                            <x-ui::form-switch name="data_collection" label="데이터 수집 동의" />
                            <x-ui::form-switch name="marketing_emails" label="마케팅 이메일 수신" />
                        </div>
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
                        <td class="px-6 py-4 text-sm text-gray-500">스위치의 name 속성</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">label</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">스위치의 라벨</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">checked</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                        <td class="px-6 py-4 text-sm text-gray-500">체크 상태</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">size</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">default</td>
                        <td class="px-6 py-4 text-sm text-gray-500">스위치 크기 (small, default, large)</td>
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
    <a href="#sizes" class="block text-sm text-gray-600 hover:text-gray-900 py-1">크기별 예시</a>
    <a href="#states" class="block text-sm text-gray-600 hover:text-gray-900 py-1">상태별 예시</a>
    <a href="#real-world" class="block text-sm text-gray-600 hover:text-gray-900 py-1">실제 사용 예시</a>
    <a href="#attributes" class="block text-sm text-gray-600 hover:text-gray-900 py-1">속성 참조</a>
@endsection
