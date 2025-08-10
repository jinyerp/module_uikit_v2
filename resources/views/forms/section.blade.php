@props(['title', 'description'])

<section class="mt-6">
    {{--
        그리드 레이아웃 구성:
        - 모바일: 1열 그리드 (grid-cols-1)
        - 태블릿: 1:1 비율 2열 그리드 (md:grid-cols-2)
        - 데스크톱: 1:2 비율 2열 그리드 (lg:grid-cols-3, 첫 번째 열은 1/3, 두 번째 열은 2/3)
        - 열 간격: 2rem (gap-x-8)
        - 행 간격: 2.5rem (gap-y-10)
        - 하단 경계선: 회색 10% 투명도 (border-b border-gray-900/10)
        - 하단 여백: 3rem (pb-12)
    --}}
    <article class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-2 lg:grid-cols-3">
        <aside class="md:col-span-1 lg:col-span-1">
            <h2 class="text-base/7 font-semibold text-gray-900">
                {{ $title }}
            </h2>
            <p class="mt-1 text-sm/6 text-gray-600">
                {{ $description }}
            </p>
        </aside>

        <div class="md:col-span-1 lg:col-span-2">
            {{ $slot }}
        </div>
    </article>
</section>

