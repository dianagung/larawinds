<div class="my-3">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $name }}">{{ $label }}</label>
    <div class="py-1 border border-slate-300 rounded-md w-full flex items-center">
        <div class="grow">
            <input type="password" data-type="password" placeholder="{{ $required ? $placeholder . ' * ' : $placeholder }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->class([
                'px-3 py-2 w-full focus:outline-none',
                $name
            ]) }} {{ $required ? 'required' : '' }} />
        </div>
        <div class="px-4 cursor-pointer select-none text-slate-400 text-sm font-semibold">
            <span class="showPassword">Show</span>
            <span class="hidePassword hidden">Hide</span>
        </div>
    </div>
    @if($hint)
    <div>
        <small class="text-gray-800/40">{{ $hint }}</small>
    </div>
    @endif
</div>