<div class="card my-4 w-full">
    <div class="rounded-md px-4 py-3 border">
        <div class="card-header text-lg font-semibold border-b pb-3">{{ $title }} 
            <span class="text-md text-slate-300">{{ $methodTitle }}</span>
        </div>
        <div class="card-body pt-3">
            <form action="" method="POST">
                @csrf
                @if($method !== 'POST')
                @method($method)
                @endif
                {{ $slot }}
                <div class="card-footer mt-10 border-t pt-3">
                    <x-button.primary type="submit" text="{{ $btext }}" />
                </div>
            </form>
        </div>
    </div>
</div>