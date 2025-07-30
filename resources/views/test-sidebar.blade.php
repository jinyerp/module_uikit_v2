<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- 사이드바 -->
        <div class="w-64 bg-white shadow-lg">
            <x-jiny-uikit::layouts.sidebar
                theme="light"
                :menuPath="__DIR__ . '/../menus/sidebar-with-dropdown.json'"
            />
        </div>

        <!-- 메인 콘텐츠 -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">사이드바 테스트</h1>
            <p class="text-gray-600">왼쪽 사이드바를 확인해보세요.</p>
        </div>
    </div>
</body>
</html>
