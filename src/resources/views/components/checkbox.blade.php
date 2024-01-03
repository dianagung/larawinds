<div class="flex md:flex-row flex-col md:items-center md:my-5 my-10 px-2 gap-4">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="md:w-6 md:h-6 w-5 h-5 border border-slate-200 accent-orange-700" {{ $checked === "1" || $checked === 'true' ? 'checked' : '' }} />
    <label for="{{ $name }}" class="select-none text-md text-slate-500">
        <div class="flex flex-col">
            <div class="font-semibold text-orange-800">{{ $title }}</div>
            <div class="text-sm text-slate-500">{{ $text }}</div>
        </div>
    </label>
</div>