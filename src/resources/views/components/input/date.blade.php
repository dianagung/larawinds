<div class="my-3">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $name }}">{{ $label }}</label>
    <div class="border border-slate-300 rounded-md w-full flex items-center divide-x px-3 py-1">
        <div class="pl-1 pr-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="w-5 h-5 text-slate-400">
                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="grow">
            <input type="text" class="px-3 py-2 w-full focus:outline-none" id="{{ $name }}" name="{{ $name }}" data-type="datepicker" placeholder="{{ $placeholder }}" value="{{ $value }}" readonly />
        </div>
    </div>
</div>