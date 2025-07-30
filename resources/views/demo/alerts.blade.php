@extends('jiny-uikit::layouts.sidebar.main')

@section('title', 'Alert Components Demo')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Alert Components Demo</h1>
                <p class="text-gray-600">UIKit에서 제공하는 다양한 Alert 컴포넌트들을 확인해보세요.</p>
            </div>
            <div class="flex space-x-2">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Light Theme</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Dark Theme</button>
            </div>
        </div>
    </div>

    <div class="space-y-8">
        <!-- Alert Description -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Alert Description</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Alert Description</h3>
                    <x-ui::alert-description>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam quo totam eius aperiam dolorum.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">커스텀 메시지</h3>
                    <x-ui::alert-description title="중요한 알림">
                        이것은 사용자 정의 메시지입니다. 중요한 정보를 전달할 때 사용됩니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">긴 메시지</h3>
                    <x-ui::alert-description title="상세한 설명">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam quo totam eius aperiam dolorum. Aspernatur, voluptatibus. Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                    </x-ui::alert-description>
                </div>
            </div>
        </div>

        <!-- Alert With Link -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Alert With Link</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Alert With Link</h3>
                    <x-ui::alert-with-link />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">커스텀 메시지와 링크</h3>
                    <x-ui::alert-with-link
                        title="계정 업그레이드가 필요합니다."
                        linkText="지금 업그레이드하세요."
                        linkUrl="/upgrade" />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">다른 링크 예시</h3>
                    <x-ui::alert-with-link
                        title="새로운 기능이 추가되었습니다."
                        linkText="자세히 보기"
                        linkUrl="/features" />
                </div>
            </div>
        </div>

        <!-- Alert With List -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Alert With List</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">기본 Alert With List</h3>
                    <x-ui::alert-with-list />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">커스텀 에러 리스트</h3>
                    <x-ui::alert-with-list
                        title="폼 제출 중 오류가 발생했습니다."
                        :items="['이메일 주소가 유효하지 않습니다.', '비밀번호는 최소 8자 이상이어야 합니다.', '이름을 입력해주세요.']" />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">성공 메시지 리스트</h3>
                    <x-ui::alert-with-list
                        title="계정이 성공적으로 생성되었습니다."
                        :items="['이메일 인증이 완료되었습니다.', '프로필 정보가 저장되었습니다.', '환영 메시지가 전송되었습니다.']"
                        type="success" />
                </div>
            </div>
        </div>

        <!-- 다양한 Type 데모 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">다양한 Type 데모</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Primary Type</h3>
                    <x-ui::alert-description title="Primary Alert" type="primary">
                        이것은 primary 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Secondary Type</h3>
                    <x-ui::alert-description title="Secondary Alert" type="secondary">
                        이것은 secondary 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Danger Type</h3>
                    <x-ui::alert-description title="Danger Alert" type="danger">
                        이것은 danger 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Warning Type</h3>
                    <x-ui::alert-description title="Warning Alert" type="warning">
                        이것은 warning 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Info Type</h3>
                    <x-ui::alert-description title="Info Alert" type="info">
                        이것은 info 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Dark Type</h3>
                    <x-ui::alert-description title="Dark Alert" type="dark">
                        이것은 dark 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Light Type</h3>
                    <x-ui::alert-description title="Light Alert" type="light">
                        이것은 light 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Success Type</h3>
                    <x-ui::alert-description title="Success Alert" type="success">
                        이것은 success 타입의 alert입니다.
                    </x-ui::alert-description>
                </div>
            </div>
        </div>

        <!-- Alert With Link 다양한 Type -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Alert With Link 다양한 Type</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Success Type</h3>
                    <x-ui::alert-with-link
                        title="계정이 성공적으로 업그레이드되었습니다."
                        linkText="새로운 기능 확인하기"
                        linkUrl="/features"
                        type="success" />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Info Type</h3>
                    <x-ui::alert-with-link
                        title="새로운 업데이트가 있습니다."
                        linkText="업데이트 내용 보기"
                        linkUrl="/updates"
                        type="info" />
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Danger Type</h3>
                    <x-ui::alert-with-link
                        title="계정이 일시 중지되었습니다."
                        linkText="지원팀에 문의하기"
                        linkUrl="/support"
                        type="danger" />
                </div>
            </div>
        </div>

        <!-- 사용법 예시 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">사용법</h2>
            <div class="bg-gray-100 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-700 mb-2">기본 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-description&gt;
    메시지 내용을 여기에 작성합니다.
&lt;/x-ui::alert-description&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">커스텀 제목</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-description title="커스텀 제목"&gt;
    메시지 내용을 여기에 작성합니다.
&lt;/x-ui::alert-description&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">Alert With Link 기본 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-with-link /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">Alert With Link 커스텀 속성</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-with-link
    title="커스텀 메시지"
    linkText="링크 텍스트"
    linkUrl="/custom-url" /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">Alert With List 기본 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-with-list /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">Alert With List 커스텀 속성</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-with-list
    title="커스텀 제목"
    :items="['항목 1', '항목 2', '항목 3']"
    type="success" /&gt;</code></pre>

                <h3 class="text-lg font-medium text-gray-700 mb-2 mt-4">Type 속성 사용법</h3>
                <pre class="bg-gray-800 text-green-400 p-4 rounded overflow-x-auto"><code>&lt;x-ui::alert-description type="success"&gt;
    성공 메시지
&lt;/x-ui::alert-description&gt;</code></pre>
            </div>
        </div>

        <!-- 컴포넌트 정보 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">컴포넌트 정보</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">속성</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>title</strong> - Alert의 제목 (기본값: "Attention needed")</li>
                        <li><strong>slot</strong> - Alert의 메시지 내용 (태그 사이에 작성)</li>
                        <li><strong>type</strong> - Alert의 타입 (기본값: "warning")</li>
                        <li><strong>linkText</strong> - 링크 텍스트 (Alert With Link 컴포넌트)</li>
                        <li><strong>linkUrl</strong> - 링크 URL (기본값: "#")</li>
                        <li><strong>items</strong> - 리스트 항목들 (Alert With List 컴포넌트)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">지원하는 Type</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li><strong>primary</strong> - 빨간색 테마</li>
                        <li><strong>secondary</strong> - 회색 테마</li>
                        <li><strong>danger</strong> - 빨간색 테마 (에러)</li>
                        <li><strong>warning</strong> - 노란색 테마 (경고)</li>
                        <li><strong>info</strong> - 파란색 테마 (정보)</li>
                        <li><strong>dark</strong> - 어두운 테마</li>
                        <li><strong>light</strong> - 밝은 테마</li>
                        <li><strong>success</strong> - 초록색 테마 (성공)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-2">특징</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-600">
                        <li>Tailwind CSS 기반의 반응형 디자인</li>
                        <li>아이콘과 함께 표시되는 직관적인 UI</li>
                        <li>커스터마이징 가능한 제목과 메시지</li>
                        <li>접근성을 고려한 시맨틱 마크업</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
