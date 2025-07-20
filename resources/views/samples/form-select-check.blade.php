<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Select Check - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Select Check</h1>
                        <p class="mt-1 text-sm text-gray-500">체크마크가 있는 셀렉트 컴포넌트 샘플</p>
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

                <!-- 기본 셀렉트 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 셀렉트</h3>
                        <div class="space-y-4">
                            <x-ui::form-select-check
                                name="country"
                                label="국가 선택"
                                placeholder="국가를 선택하세요"
                            >
                                <option value="kr">대한민국</option>
                                <option value="us">미국</option>
                                <option value="jp">일본</option>
                                <option value="cn">중국</option>
                                <option value="uk">영국</option>
                            </x-ui::form-select-check>
                        </div>
                    </div>
                </div>

                <!-- 다중 선택 셀렉트 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">다중 선택 셀렉트</h3>
                        <div class="space-y-4">
                            <x-ui::form-select-check
                                name="languages"
                                label="사용 가능한 언어"
                                placeholder="언어를 선택하세요"
                                multiple
                            >
                                <option value="ko">한국어</option>
                                <option value="en">영어</option>
                                <option value="ja">일본어</option>
                                <option value="zh">중국어</option>
                                <option value="es">스페인어</option>
                                <option value="fr">프랑스어</option>
                                <option value="de">독일어</option>
                            </x-ui::form-select-check>
                        </div>
                    </div>
                </div>

                <!-- 상태별 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">상태별 예시</h3>
                        <div class="space-y-4">
                            <x-ui::form-select-check
                                name="required"
                                label="필수 선택"
                                placeholder="필수로 선택해야 합니다"
                                :required="true"
                            >
                                <option value="option1">옵션 1</option>
                                <option value="option2">옵션 2</option>
                                <option value="option3">옵션 3</option>
                            </x-ui::form-select-check>

                            <x-ui::form-select-check
                                name="disabled"
                                label="비활성화"
                                placeholder="이 셀렉트는 비활성화되었습니다"
                                :disabled="true"
                            >
                                <option value="disabled1">비활성화된 옵션 1</option>
                                <option value="disabled2">비활성화된 옵션 2</option>
                            </x-ui::form-select-check>

                            <x-ui::form-select-check
                                name="with_value"
                                label="기본값"
                                placeholder="기본값이 설정된 셀렉트"
                            >
                                <option value="default" selected>기본 선택됨</option>
                                <option value="option1">옵션 1</option>
                                <option value="option2">옵션 2</option>
                            </x-ui::form-select-check>
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">배송 지역</h4>
                                <x-ui::form-select-check
                                    name="shipping_region"
                                    label="배송 지역 선택"
                                    placeholder="배송받을 지역을 선택하세요"
                                >
                                    <option value="seoul">서울특별시</option>
                                    <option value="busan">부산광역시</option>
                                    <option value="daegu">대구광역시</option>
                                    <option value="incheon">인천광역시</option>
                                    <option value="gwangju">광주광역시</option>
                                    <option value="daejeon">대전광역시</option>
                                    <option value="ulsan">울산광역시</option>
                                    <option value="sejong">세종특별자치시</option>
                                </x-ui::form-select-check>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">관심 분야</h4>
                                <x-ui::form-select-check
                                    name="interests"
                                    label="관심 분야 선택"
                                    placeholder="관심 있는 분야를 선택하세요"
                                    multiple
                                >
                                    <option value="technology">기술</option>
                                    <option value="business">비즈니스</option>
                                    <option value="health">건강</option>
                                    <option value="education">교육</option>
                                    <option value="entertainment">엔터테인먼트</option>
                                    <option value="sports">스포츠</option>
                                    <option value="travel">여행</option>
                                    <option value="food">음식</option>
                                </x-ui::form-select-check>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
