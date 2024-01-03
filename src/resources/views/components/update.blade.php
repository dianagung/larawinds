<div class="my-3">
    <form action="{{ $action }}" method="POST" data-type="update" data-confirm-title="{{ $confirmTitle }}" data-confirm-text="{{ $confirmText }}" data-confirm-yes="{{ $confirmYes }}" data-confirm-no="{{ $confirmNo }}">
    @csrf
    @method('PUT')
    <button class="border border-blue-700 hover:bg-blue-600 transition duration-300 text-blue-700 hover:text-blue-50 px-3 py-2 rounded-md text-sm">
        @if($text)
        <div>{{ $text }}</div>
        @endif
    </button>
    </form>
</div>