<div class="flex gap-2 items-end">
    <h1 {{ $attributes->class([
            'text-gray-800',
            'text-5xl font-bold' => $for == "h1",
            'text-4xl font-bold' => $for == "h2",
            'text-3xl font-bold' => $for == "h3",
            'text-2xl font-bold' => $for == "h4",
            'text-xl' => $for == "h5",
            'text-lg' => $for == "h6",
            'text-md' => $for == ""
        ]) }}>
        {{ $text }} 
    </h1>
    <span class="text-md text-gray-800/60">
        {{ $subtext }}
    </span>
</div>