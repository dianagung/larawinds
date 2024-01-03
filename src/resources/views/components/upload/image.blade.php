@php
$random = $name . '-' . strtolower(Str::random(8));
@endphp
<div class="my-10">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $random }}">{{ $label }}</label>
    <div class="flex items-center justify-center border-dashed border-2 border-slate-300 p-10 rounded-md">
        <div class="flex flex-col gap-1 justify-center items-center">
            <div class="md:w-2/6 w-5/6 relative">
                <span id="remove__{{ $random }}" class="hidden absolute right-1 top-1 cursor-pointer text-red-50 hover:text-red-500 transition duration-300 text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-8 h-8">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" />
                    </svg>
                </span>
                <img id="preview__{{ $random }}" />
            </div>
            <div id="action__{{ $random }}" class="flex flex-col gap-1 justify-center items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-14 h-14 text-slate-300">
                        <path fill-rule="evenodd" d="M10.5 3.75a6 6 0 0 0-5.98 6.496A5.25 5.25 0 0 0 6.75 20.25H18a4.5 4.5 0 0 0 2.206-8.423 3.75 3.75 0 0 0-4.133-4.303A6.001 6.001 0 0 0 10.5 3.75Zm2.03 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v4.94a.75.75 0 0 0 1.5 0v-4.94l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <label>
                        <input type="file" id="{{ $random }}" name="" class="hidden" accept="{{ $formatFileAccept }}" />
                        <div class="cursor-pointer font-semibold underline text-xl">Click to upload</div>
                    </label>
                </div>
                <div class="text-sm flex gap-3 mt-1">
                    <div class="text-center">Accept: <strong>{{ $accept }}</strong></div>
                    <div class="text-center">Max. Size: <strong>{!! $maxsize == null ? 'Unlimit' : $maxsize !!}</strong></div>
                </div>
            </div>
            <div id="fileinfo__{{ $random }}" class="mt-3 hidden items-center gap-2">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="w-5 h-5 text-slate-300">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>