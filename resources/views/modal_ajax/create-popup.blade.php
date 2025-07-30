@php
$size = $size ?? ($attributes['size'] ?? 'md');
$title = $title ?? ($attributes['title'] ?? 'Modal Title');
$sizeClass = [
    'xs' => 'max-w-xs',
    'sm' => 'max-w-sm',
    'md' => 'max-w-md',
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    '2xl' => 'max-w-2xl',
    '3xl' => 'max-w-3xl',
    'full' => 'max-w-full',
];
$modalSize = $modalSize ?? ($sizeClass[$size] ?? 'max-w-md');
@endphp

<div id="modal-ajax-backdrop" style="display:none; position:fixed; z-index:50; left:0; top:0; width:100vw; height:100vh; background:rgba(55,55,55,0.4);">
    <div style="position:absolute; left:50%; top:50%; transform:translate(-50%,-50%); min-width:320px;">
        <div id="modal-ajax-layer" class="bg-white rounded-xl shadow-2xl p-8 border border-gray-200 w-full {{ $modalSize }}" style="width:100%;">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-900">{{ $title }}</h3>
                <button type="button" onclick="closeModalAjax()" class="text-gray-400 hover:text-gray-600 focus:outline-none ml-2" aria-label="닫기">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

<script>
function openModalAjax() {
    document.getElementById('modal-ajax-backdrop').style.display = 'block';
}
function closeModalAjax() {
    document.getElementById('modal-ajax-backdrop').style.display = 'none';
}
</script>
