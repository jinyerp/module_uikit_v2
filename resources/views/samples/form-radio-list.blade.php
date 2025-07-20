<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Radio List - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Radio List</h1>
                        <p class="mt-1 text-sm text-gray-500">리스트 스타일 라디오 버튼 컴포넌트 샘플</p>
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

                <!-- 기본 리스트 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 리스트 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio-list name="category" label="카테고리 선택">
                                <x-ui::form-radio-item name="category" value="technology" label="기술" />
                                <x-ui::form-radio-item name="category" value="business" label="비즈니스" />
                                <x-ui::form-radio-item name="category" value="lifestyle" label="라이프스타일" />
                                <x-ui::form-radio-item name="category" value="sports" label="스포츠" />
                            </x-ui::form-radio-list>
                        </div>
                    </div>
                </div>

                <!-- 설명이 있는 리스트 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">설명이 있는 리스트 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio-list name="subscription" label="구독 플랜" description="사용 목적에 맞는 플랜을 선택하세요">
                                <x-ui::form-radio-item
                                    name="subscription"
                                    value="free"
                                    label="무료 플랜"
                                    description="기본 기능만 사용 가능"
                                />
                                <x-ui::form-radio-item
                                    name="subscription"
                                    value="basic"
                                    label="기본 플랜"
                                    description="월 $9.99, 모든 기본 기능"
                                />
                                <x-ui::form-radio-item
                                    name="subscription"
                                    value="premium"
                                    label="프리미엄 플랜"
                                    description="월 $19.99, 모든 기능 + 우선 지원"
                                />
                            </x-ui::form-radio-list>
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">배송 옵션</h4>
                                <x-ui::form-radio-list name="delivery" label="배송 옵션 선택">
                                    <x-ui::form-radio-item
                                        name="delivery"
                                        value="standard"
                                        label="일반 배송"
                                        description="3-5일 소요, 무료"
                                    />
                                    <x-ui::form-radio-item
                                        name="delivery"
                                        value="express"
                                        label="빠른 배송"
                                        description="1-2일 소요, $5.99"
                                    />
                                    <x-ui::form-radio-item
                                        name="delivery"
                                        value="overnight"
                                        label="당일 배송"
                                        description="24시간 이내, $15.99"
                                    />
                                </x-ui::form-radio-list>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">결제 방법</h4>
                                <x-ui::form-radio-list name="payment_method" label="결제 방법 선택">
                                    <x-ui::form-radio-item
                                        name="payment_method"
                                        value="credit_card"
                                        label="신용카드"
                                        description="Visa, MasterCard, American Express"
                                    />
                                    <x-ui::form-radio-item
                                        name="payment_method"
                                        value="bank_transfer"
                                        label="계좌이체"
                                        description="실시간 계좌이체"
                                    />
                                    <x-ui::form-radio-item
                                        name="payment_method"
                                        value="paypal"
                                        label="PayPal"
                                        description="PayPal 계정으로 결제"
                                    />
                                </x-ui::form-radio-list>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
