<div class="my-5 flex items-center gap-2">
   @foreach($dataArray as $val)
    @php
        $v = explode('|', $val);
    @endphp
    <div class="flex">
        <input type="radio" name="{{ $name }}" class="peer/radio hidden w-6 h-6 accent-orange-700 appearance-none bg-slate-300 rounded-full checked:bg-orange-700" id="{{ $v[2] }}" value="{{ $v[2] }}" {{ $key === $v[2] ? 'checked' : '' }} />
        <label for="{{ $v[2] }}" class="border border-slate-300 peer-checked/radio:border-orange-700 rounded-md px-3 py-2 focus:outline-none">
            <div class="flex items-center gap-3">
                <div class="flex flex-col">
                    <div class="font-semibold text-slate-800">{{ $v[0] }}</div>
                    <div class="text-xs text-slate-500">{{ $v[1] }}</div>
                </div>
            </div>
        </label>
    </div>
   @endforeach
</div>