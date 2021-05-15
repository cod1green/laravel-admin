@if(in_array($field, $orderable))
    @if($sortBy !== $field)
        <span wire:click="sortBy('{{ $field }}')" class="cursor-pointer">
            {{ $label }} <i class="fa fa-fw fa-sort cursor-pointer" aria-hidden="true"></i>
        </span>

    @elseif($sortBy === $field && $sortDirection === 'desc')
        <span wire:click="sortBy('{{ $field }}')" class="cursor-pointer">
            {{ $label }} <i class="fa fa-fw fa-sort-down cursor-pointer" aria-hidden="true"></i>
        </span>
    @else
        <span wire:click="sortBy('{{ $field }}')" class="cursor-pointer">
            {{ $label }} <i class="fa fa-fw fa-sort-up" aria-hidden="true"></i>
        </span>
    @endif
@endif
