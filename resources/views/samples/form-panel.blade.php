<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Panel - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Panel</h1>
                        <p class="mt-1 text-sm text-gray-500">정보 패널 컴포넌트 샘플</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('uikit.index') }}" class="text-blue-600 hover:text-blue-800">← 목록으로</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- 메인 콘텐츠 -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">

                <!-- 기본 패널 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 패널</h3>
                        <div class="space-y-4">
                            <x-ui::form-panel
                                title="Need more bandwidth?"
                                description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium tenetur pariatur."
                                buttonText="Contact sales"
                            />
                        </div>
                    </div>
                </div>

                <!-- 변형별 패널 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">변형별 패널</h3>
                        <div class="space-y-4">
                            <x-ui::form-panel
                                title="업그레이드 완료!"
                                description="프리미엄 플랜으로 성공적으로 업그레이드되었습니다."
                                buttonText="새로운 기능 확인"
                                variant="success"
                            />

                            <x-ui::form-panel
                                title="저장 공간 부족"
                                description="저장 공간이 90% 이상 사용되었습니다. 불필요한 파일을 정리해주세요."
                                buttonText="정리 도구 실행"
                                variant="warning"
                            />

                            <x-ui::form-panel
                                title="연결 오류"
                                description="서버에 연결할 수 없습니다. 인터넷 연결을 확인해주세요."
                                buttonText="다시 시도"
                                variant="error"
                            />

                            <x-ui::form-panel
                                title="새로운 기능"
                                description="새로운 분석 도구가 추가되었습니다. 더 정확한 인사이트를 얻을 수 있습니다."
                                buttonText="자세히 보기"
                                variant="info"
                            />
                        </div>
                    </div>
                </div>

                <!-- 슬롯을 사용한 커스텀 패널 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">커스텀 내용</h3>
                        <div class="space-y-4">
                            <x-ui::form-panel title="커스텀 패널">
                                <div class="mt-4">
                                    <p class="text-sm text-gray-600">슬롯을 사용하여 커스텀 내용을 추가할 수 있습니다.</p>
                                    <div class="mt-3 flex space-x-3">
                                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700">액션 1</button>
                                        <button class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm hover:bg-gray-700">액션 2</button>
                                    </div>
                                </div>
                            </x-ui::form-panel>

                            <x-ui::form-panel title="다중 액션 패널" variant="info">
                                <div class="mt-4">
                                    <p class="text-sm text-blue-700">여러 액션 버튼이 포함된 패널입니다.</p>
                                    <div class="mt-3 flex space-x-3">
                                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700">확인</button>
                                        <button class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm hover:bg-gray-700">취소</button>
                                        <button class="bg-green-600 text-white px-4 py-2 rounded-md text-sm hover:bg-green-700">저장</button>
                                    </div>
                                </div>
                            </x-ui::form-panel>
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <x-ui::form-panel
                                    title="시스템 상태"
                                    description="모든 시스템이 정상 작동 중입니다."
                                    buttonText="상세 보기"
                                    variant="success"
                                />

                                <x-ui::form-panel
                                    title="업데이트 알림"
                                    description="새로운 버전이 사용 가능합니다."
                                    buttonText="업데이트"
                                    variant="info"
                                />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <x-ui::form-panel
                                    title="백업 필요"
                                    description="마지막 백업이 7일 전입니다."
                                    buttonText="백업 실행"
                                    variant="warning"
                                />

                                <x-ui::form-panel
                                    title="보안 경고"
                                    description="로그인 시도가 감지되었습니다."
                                    buttonText="확인"
                                    variant="error"
                                />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
