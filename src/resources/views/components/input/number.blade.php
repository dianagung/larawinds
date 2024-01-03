<div class="my-3">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $name }}">{{ $label }}</label>
    <div class="border border-slate-300 rounded-md w-full flex items-center divide-x @if($prefix) px-3 @endif py-1">
        @if($prefix)
        <div class="pl-1 pr-3 uppercase font-semibold text-slate-400 cursor-default select-none">
            {{ $prefix }}
        </div>
        @endif
        <div class="grow">
            <input type="hidden" name="{{ $name }}" value="{{ $value }}" maxlength="{{ $maxlength }}" />
            <input type="text" id="{{ $name }}" class="px-3 py-2 w-full focus:outline-none" data-type="number" placeholder="{{ $placeholder }}" value="{{ $value }}" onclick="this.select()" maxlength="{{ $maxlength }}" autocomplete="off" />
        </div>
        @if($suffix)
        <div class="pl-3 pr-1 font-semibold text-slate-400 cursor-default select-none">
            {{ $suffix }}
        </div>
        @endif
    </div>
</div>