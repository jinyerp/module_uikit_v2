@extends('jiny-auth::layouts.admin.main')

@section('title', '관리자 회원 정보 상세')
@section('description', '관리자 회원의 상세 정보를 확인하세요.')

@section('content')
    <div class="pt-2 pb-4">
        @csrf

        @yield('heading')

        <!-- 메시지 -->
        @includeIf('jiny-admin::layouts.crud.message')

        <!-- 에러 메시지 -->
        @includeIf('jiny-admin::layouts.crud.errors')

        @yield('show')

        <div class="mt-6">
            @yield('control')
        </div>

    </div>

@endsection

@push('scripts')
    @if(Route::has($route.'edit'))
    <script>
    function setShowEditFlagAndGoEdit() {
        localStorage.setItem('adminUserFromShow', '1');
        window.location.href = '{{ route($route.'edit', $item->id) }}';
    }
    </script>
    @endif
@endpush



