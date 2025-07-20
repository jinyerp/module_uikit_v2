<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Radio - UIkit 컴포넌트</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Form Radio</h1>
                        <p class="mt-1 text-sm text-gray-500">라디오 버튼 컴포넌트 샘플</p>
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

                <!-- 기본 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">기본 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio name="notification" label="알림 설정">
                                <x-ui::form-radio-item name="notification" value="email" label="이메일 알림" />
                                <x-ui::form-radio-item name="notification" value="sms" label="SMS 알림" />
                                <x-ui::form-radio-item name="notification" value="push" label="푸시 알림" />
                            </x-ui::form-radio>
                        </div>
                    </div>
                </div>

                <!-- 설명이 있는 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">설명이 있는 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio name="plan" label="플랜 선택" description="사용 목적에 맞는 플랜을 선택하세요">
                                <x-ui::form-radio-item
                                    name="plan"
                                    value="basic"
                                    label="기본 플랜"
                                    description="개인 사용자를 위한 기본 기능"
                                />
                                <x-ui::form-radio-item
                                    name="plan"
                                    value="pro"
                                    label="프로 플랜"
                                    description="팀과 협업하기 위한 고급 기능"
                                />
                                <x-ui::form-radio-item
                                    name="plan"
                                    value="enterprise"
                                    label="엔터프라이즈 플랜"
                                    description="대규모 조직을 위한 맞춤형 솔루션"
                                />
                            </x-ui::form-radio>
                        </div>
                    </div>
                </div>

                <!-- 필수 라디오 -->
                <div class="bg-white overflow-hidden shadow rounded-lg mb-8">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">필수 라디오</h3>
                        <div class="space-y-4">
                            <x-ui::form-radio name="terms" label="이용약관 동의" :required="true">
                                <x-ui::form-radio-item name="terms" value="agree" label="동의합니다" />
                                <x-ui::form-radio-item name="terms" value="disagree" label="동의하지 않습니다" />
                            </x-ui::form-radio>
                        </div>
                    </div>
                </div>

                <!-- 실제 사용 예시 -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">실제 사용 예시</h3>
                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">배송 방법</h4>
                                <x-ui::form-radio name="shipping" label="배송 방법 선택">
                                    <x-ui::form-radio-item
                                        name="shipping"
                                        value="standard"
                                        label="일반 배송"
                                        description="3-5일 소요"
                                    />
                                    <x-ui::form-radio-item
                                        name="shipping"
                                        value="express"
                                        label="빠른 배송"
                                        description="1-2일 소요"
                                    />
                                    <x-ui::form-radio-item
                                        name="shipping"
                                        value="overnight"
                                        label="당일 배송"
                                        description="24시간 이내"
                                    />
                                </x-ui::form-radio>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-900 mb-3">결제 방법</h4>
                                <x-ui::form-radio name="payment" label="결제 방법 선택">
                                    <x-ui::form-radio-item
                                        name="payment"
                                        value="card"
                                        label="신용카드"
                                        description="Visa, MasterCard, American Express"
                                    />
                                    <x-ui::form-radio-item
                                        name="payment"
                                        value="bank"
                                        label="계좌이체"
                                        description="실시간 계좌이체"
                                    />
                                    <x-ui::form-radio-item
                                        name="payment"
                                        value="paypal"
                                        label="PayPal"
                                        description="PayPal 계정으로 결제"
                                    />
                                </x-ui::form-radio>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
