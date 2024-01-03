<tbody>
    <tr>
        @foreach($dataArray as $row)
        <td class="px-5 border-b @if(str_contains($row, 'Actions')) w-1/12 @endif">
            @if(str_contains($row, 'Actions'))
            <div class="flex gap-2 justify-center">
                @if($actionEdit)
                <x-edit action="{{ $actionEdit }}" confirm-title="{{ $confirmTitle }}" confirm-text="{{ $confirmText }}" confirm-yes="{{ $confirmYes }}" confirm-no="{{ $confirmNo }}" text="{{ $btextEdit }}" />
                @endif
                @if($actionDelete)
                <x-delete action="{{ $actionDelete }}" confirm-title="{{ $confirmTitle }}" confirm-text="{{ $confirmText }}" confirm-yes="{{ $confirmYes }}" confirm-no="{{ $confirmNo }}" text="{{ $btextDelete }}" />
                @endif
                @if($actionUpdate)
                <x-update action="{{ $actionUpdate }}" confirm-title="{{ $confirmTitle }}" confirm-text="{{ $confirmText }}" confirm-yes="{{ $confirmYes }}" confirm-no="{{ $confirmNo }}" text="{{ $btextUpdate }}" />
                @endif
            </div>
            @else
            {{ $row }}
            @endif

        </td>
        @endforeach
    </tr>
</tbody>