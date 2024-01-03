@if($type === 'button')
<a href="{{ $to }}" class="py-3 px-4 rounded-md bg-slate-800 hover:bg-slate-600 transition duration-300 text-slate-50">{{ $text }}</a>
@else
<a href="{{ $to }}" class="text-orange-700 hover:text-orange-600 hover:underline font-semibold">{{ $text }}</a>
@endif