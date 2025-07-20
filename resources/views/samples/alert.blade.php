@extends('jiny-uikit::layouts.docs')

@section('title', 'Alert')
@section('subtitle', '알림 컴포넌트')

@section('content')
    <!-- 컴포넌트 설명 -->
    <div class="mb-8">
        <p class="text-gray-700 mb-6">
            <code class="bg-gray-100 px-2 py-1 rounded text-sm">x-ui::alert-*</code> 컴포넌트는 사용자에게 중요한 정보를 전달하는 알림을 제공합니다.
            성공, 경고, 오류, 정보 등 다양한 타입을 지원하며 접근성을 고려한 설계입니다.
        </p>

        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <h4 class="text-sm font-medium text-blue-900 mb-2">주요 특징</h4>
            <ul class="text-sm text-blue-800 space-y-1">
                <li>• 다양한 타입 지원 (success, warning, error, info)</li>
                <li>• 제목과 메시지 분리</li>
                <li>• 닫기 가능한 알림 (dismissible)</li>
                <li>• 아이콘 표시/숨김 옵션</li>
                <li>• 슬롯을 통한 커스텀 내용</li>
                <li>• ARIA 속성으로 접근성 향상</li>
            </ul>
        </div>
    </div>

    <!-- 성공 알림 -->
    <section id="success-alerts" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">성공 알림</h2>
        <p class="text-gray-700 mb-6">성공적인 작업 완료를 알리는 녹색 알림입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-success
    title="업그레이드 완료!"
    message="프리미엄 플랜으로 성공적으로 업그레이드되었습니다."
/&gt;

&lt;x-ui::alert-success
    title="저장 완료"
    message="모든 변경사항이 성공적으로 저장되었습니다."
    :dismissible="true"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-success
                        title="업그레이드 완료!"
                        message="프리미엄 플랜으로 성공적으로 업그레이드되었습니다."
                    />

                    <x-ui::alert-success
                        title="저장 완료"
                        message="모든 변경사항이 성공적으로 저장되었습니다."
                        :dismissible="true"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- 경고 알림 -->
    <section id="warning-alerts" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">경고 알림</h2>
        <p class="text-gray-700 mb-6">주의가 필요한 상황을 알리는 노란색 알림입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-warning
    title="저장 공간 부족"
    message="저장 공간이 90% 이상 사용되었습니다. 불필요한 파일을 정리해주세요."
/&gt;

&lt;x-ui::alert-warning
    title="주의"
    message="이 작업은 되돌릴 수 없습니다. 계속하시겠습니까?"
    :dismissible="true"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-warning
                        title="저장 공간 부족"
                        message="저장 공간이 90% 이상 사용되었습니다. 불필요한 파일을 정리해주세요."
                    />

                    <x-ui::alert-warning
                        title="주의"
                        message="이 작업은 되돌릴 수 없습니다. 계속하시겠습니까?"
                        :dismissible="true"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- 오류 알림 -->
    <section id="error-alerts" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">오류 알림</h2>
        <p class="text-gray-700 mb-6">오류 상황을 알리는 빨간색 알림입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-error
    title="연결 오류"
    message="서버에 연결할 수 없습니다. 인터넷 연결을 확인해주세요."
/&gt;

&lt;x-ui::alert-error
    title="업로드 실패"
    message="파일 업로드 중 오류가 발생했습니다. 다시 시도해주세요."
    :dismissible="true"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-error
                        title="연결 오류"
                        message="서버에 연결할 수 없습니다. 인터넷 연결을 확인해주세요."
                    />

                    <x-ui::alert-error
                        title="업로드 실패"
                        message="파일 업로드 중 오류가 발생했습니다. 다시 시도해주세요."
                        :dismissible="true"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- 정보 알림 -->
    <section id="info-alerts" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">정보 알림</h2>
        <p class="text-gray-700 mb-6">일반적인 정보를 전달하는 파란색 알림입니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-info
    title="새로운 기능"
    message="새로운 분석 도구가 추가되었습니다. 더 정확한 인사이트를 얻을 수 있습니다."
/&gt;

&lt;x-ui::alert-info
    title="업데이트 알림"
    message="새로운 버전이 사용 가능합니다. 업데이트를 권장합니다."
    :dismissible="true"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-info
                        title="새로운 기능"
                        message="새로운 분석 도구가 추가되었습니다. 더 정확한 인사이트를 얻을 수 있습니다."
                    />

                    <x-ui::alert-info
                        title="업데이트 알림"
                        message="새로운 버전이 사용 가능합니다. 업데이트를 권장합니다."
                        :dismissible="true"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- 아이콘 없는 알림 -->
    <section id="no-icon-alerts" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">아이콘 없는 알림</h2>
        <p class="text-gray-700 mb-6">아이콘을 숨겨서 더 간단한 형태의 알림을 만들 수 있습니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-error
    title="간단한 오류"
    message="간단한 오류 메시지입니다."
    :showIcon="false"
/&gt;

&lt;x-ui::alert-info
    title="간단한 정보"
    message="간단한 정보 메시지입니다."
    :showIcon="false"
    :dismissible="true"
/&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-error
                        title="간단한 오류"
                        message="간단한 오류 메시지입니다."
                        :showIcon="false"
                    />

                    <x-ui::alert-info
                        title="간단한 정보"
                        message="간단한 정보 메시지입니다."
                        :showIcon="false"
                        :dismissible="true"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- 커스텀 내용 -->
    <section id="custom-content" class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">커스텀 내용</h2>
        <p class="text-gray-700 mb-6">슬롯을 사용하여 알림에 커스텀 내용을 추가할 수 있습니다.</p>

        <!-- 예시 코드 -->
        <div class="mb-6">
            <div class="flex items-center justify-between mb-2">
                <h4 class="text-sm font-medium text-gray-900">예시 코드</h4>
                <button class="text-xs text-blue-600 hover:text-blue-800">Edit on GitHub</button>
            </div>
            <pre class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto text-sm"><code>&lt;x-ui::alert-info title="커스텀 알림"&gt;
    &lt;div class="mt-2 text-sm text-blue-700"&gt;
        &lt;p&gt;슬롯을 사용하여 커스텀 내용을 추가할 수 있습니다.&lt;/p&gt;
        &lt;div class="mt-2 flex space-x-2"&gt;
            &lt;button class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700"&gt;자세히 보기&lt;/button&gt;
            &lt;button class="bg-gray-600 text-white px-3 py-1 rounded text-xs hover:bg-gray-700"&gt;나중에&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-ui::alert-info&gt;</code></pre>
        </div>

        <!-- 출력 결과 -->
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-900 mb-2">출력 결과</h4>
            <div class="border border-gray-200 rounded-lg p-6 bg-white">
                <div class="space-y-4">
                    <x-ui::alert-info title="커스텀 알림">
                        <div class="mt-2 text-sm text-blue-700">
                            <p>슬롯을 사용하여 커스텀 내용을 추가할 수 있습니다.</p>
                            <div class="mt-2 flex space-x-2">
                                <button class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700">자세히 보기</button>
                                <button class="bg-gray-600 text-white px-3 py-1 rounded text-xs hover:bg-gray-700">나중에</button>
                            </div>
                        </div>
                    </x-ui::alert-info>

                    <x-ui::alert-warning title="다중 액션 알림">
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>여러 액션 버튼이 포함된 알림입니다.</p>
                            <div class="mt-2 flex space-x-2">
                                <button class="bg-yellow-600 text-white px-3 py-1 rounded text-xs hover:bg-yellow-700">확인</button>
                                <button class="bg-gray-600 text-white px-3 py-1 rounded text-xs hover:bg-gray-700">취소</button>
                            </div>
                        </div>
                    </x-ui::alert-warning>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">title</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">알림의 제목</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">message</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">string</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                        <td class="px-6 py-4 text-sm text-gray-500">알림의 메시지</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">dismissible</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">false</td>
                        <td class="px-6 py-4 text-sm text-gray-500">닫기 버튼 표시 여부</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">showIcon</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">boolean</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">true</td>
                        <td class="px-6 py-4 text-sm text-gray-500">아이콘 표시 여부</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('toc')
    <a href="#success-alerts" class="block text-sm text-gray-600 hover:text-gray-900 py-1">성공 알림</a>
    <a href="#warning-alerts" class="block text-sm text-gray-600 hover:text-gray-900 py-1">경고 알림</a>
    <a href="#error-alerts" class="block text-sm text-gray-600 hover:text-gray-900 py-1">오류 알림</a>
    <a href="#info-alerts" class="block text-sm text-gray-600 hover:text-gray-900 py-1">정보 알림</a>
    <a href="#no-icon-alerts" class="block text-sm text-gray-600 hover:text-gray-900 py-1">아이콘 없는 알림</a>
    <a href="#custom-content" class="block text-sm text-gray-600 hover:text-gray-900 py-1">커스텀 내용</a>
    <a href="#attributes" class="block text-sm text-gray-600 hover:text-gray-900 py-1">속성 참조</a>
@endsection
