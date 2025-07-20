<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Radio Inline - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Radio Inline</h1>
                        <p class="mt-1 text-sm text-gray-500">인라인 라디오 버튼 컴포넌트 샘플</p>
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

                <!-- 기본 인라인 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 인라인 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio-inline name="gender" label="성별">
                                <x-ui::form-radio-item name="gender" value="male" label="남성" />
                                <x-ui::form-radio-item name="gender" value="female" label="여성" />
                                <x-ui::form-radio-item name="gender" value="other" label="기타" />
                            </x-ui::form-radio-inline>
                        </div>
                    </div>
                </div>

                <!-- 설명이 있는 인라인 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">설명이 있는 인라인 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio-inline name="experience" label="경험 수준" description="개발 경험을 선택하세요">
                                <x-ui::form-radio-item
                                    name="experience"
                                    value="beginner"
                                    label="초보자"
                                    description="1년 미만"
                                />
                                <x-ui::form-radio-item
                                    name="experience"
                                    value="intermediate"
                                    label="중급자"
                                    description="1-3년"
                                />
                                <x-ui::form-radio-item
                                    name="experience"
                                    value="expert"
                                    label="전문가"
                                    description="3년 이상"
                                />
                            </x-ui::form-radio-inline>
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">선호도 조사</h4>
                                <x-ui::form-radio-inline name="preference" label="선호하는 색상">
                                    <x-ui::form-radio-item name="preference" value="red" label="빨강" />
                                    <x-ui::form-radio-item name="preference" value="blue" label="파랑" />
                                    <x-ui::form-radio-item name="preference" value="green" label="초록" />
                                    <x-ui::form-radio-item name="preference" value="yellow" label="노랑" />
                                </x-ui::form-radio-inline>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">알림 빈도</h4>
                                <x-ui::form-radio-inline name="frequency" label="알림 빈도">
                                    <x-ui::form-radio-item name="frequency" value="daily" label="매일" />
                                    <x-ui::form-radio-item name="frequency" value="weekly" label="주간" />
                                    <x-ui::form-radio-item name="frequency" value="monthly" label="월간" />
                                </x-ui::form-radio-inline>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
