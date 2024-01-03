<div class="my-3">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $name }}">{{ $label }}</label>
    <input type="text" placeholder="{{ $required ? $placeholder . ' * ' : $placeholder }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->class([
        'px-3 py-3 border border-slate-300 rounded-md w-full',
        $name
    ]) }} {{ $required ? 'required' : '' }} />
    @if($hint)
    <div>
        <small class="text-gray-800/40">{{ $hint }}</small>
    </div>
    @endif
</div>