<div x-data="{ flashError: true }" x-show="flashError" class="flex items-center justify-between bg-red-50 text-red-800 font-semibold px-5 py-4 my-3 rounded-md border border-red-200">
    <div>{{ $text }}</div>
    <div @click="flashError = false" class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="w-5 h-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
        </svg>
    </div>
</div>