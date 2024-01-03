<div class="my-3">
    <label class="uppercase px-2 text-xs text-slate-500 font-semibold block mb-2" for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="{{ $name }} px-3 py-3 border border-slate-300 rounded-md w-full appearance-none" autocomplete="true">
        <option value="" {{ $key === '' ? 'selected' : ''}}>&mdash; {{ $text }} &mdash;</option>
        @foreach($collect as $k => $v)
        <option value="{{ $k }}" {{ $key == $k ? 'selected' : ''}} @selected(old($name) == $k)>{{ $v }}</option>
        @endforeach
    </select>
</div>