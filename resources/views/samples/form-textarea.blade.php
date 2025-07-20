<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Textarea - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Textarea</h1>
                        <p class="mt-1 text-sm text-gray-500">텍스트 영역 컴포넌트 샘플</p>
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

                <!-- 기본 텍스트 영역 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 텍스트 영역</h3>
                        <div class="space-y-4">
                            <x-ui::form-textarea
                                name="description"
                                label="설명"
                                placeholder="상세한 설명을 입력하세요"
                            />
                        </div>
                    </div>
                </div>

                <!-- 크기별 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">크기별 예시</h3>
                        <div class="space-y-4">
                            <x-ui::form-textarea
                                name="small"
                                label="작은 크기"
                                placeholder="짧은 메모"
                                rows="3"
                            />
                            <x-ui::form-textarea
                                name="medium"
                                label="중간 크기"
                                placeholder="일반적인 설명"
                                rows="5"
                            />
                            <x-ui::form-textarea
                                name="large"
                                label="큰 크기"
                                placeholder="긴 내용을 입력하세요"
                                rows="10"
                            />
                        </div>
                    </div>
                </div>

                <!-- 상태별 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">상태별 예시</h3>
                        <div class="space-y-4">
                            <x-ui::form-textarea
                                name="required"
                                label="필수 필드"
                                placeholder="이 필드는 필수입니다"
                                :required="true"
                            />
                            <x-ui::form-textarea
                                name="disabled"
                                label="비활성화"
                                placeholder="이 필드는 비활성화되었습니다"
                                :disabled="true"
                            />
                            <x-ui::form-textarea
                                name="with_value"
                                label="기본값"
                                value="이미 입력된 텍스트가 있습니다."
                            />
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">고객 피드백</h4>
                                <x-ui::form-textarea
                                    name="feedback"
                                    label="서비스 피드백"
                                    placeholder="서비스에 대한 의견을 자유롭게 작성해주세요"
                                    rows="6"
                                />
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">프로젝트 설명</h4>
                                <x-ui::form-textarea
                                    name="project_description"
                                    label="프로젝트 상세 설명"
                                    placeholder="프로젝트의 목적, 범위, 기술 스택 등을 상세히 설명해주세요"
                                    rows="8"
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
