<div class="card card-success">
    @include('components.loading')

    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex mb-3">
                    <div class="pr-2">
                        <label>Per page</label>
                    </div>
                    <div class="pr-2">
                        <select wire:model="perPage" class="form-control">
                            @foreach($paginationOptions as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-danger" type="button"
                                wire:click="confirm('deleteSelected')"
                                wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                            {{ __('Delete Selected') }}
                            @if($this->selectedCount)
                                <span
                                    class="badge badge-pill badge-light">{{ $this->selectedCount }}</span>
                            @endif
                        </button>
                    </div>
                    <div class="ml-auto">
                        <input type="search" class="form-control" placeholder="Search"
                               wire:model.debounce.300ms="search"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-sm">
                <thead>
                <tr>
                    <th class="w-9">
                    </th>
                    <th class="w-28">
                        @include('components.table.sort', [
                            'label' => trans('project.permission.fields.id'),
                            'field' => 'id',
                        ])
                    </th>
                    <th>
                        @include('components.table.sort', [
                            'label' => trans('project.permission.fields.name'),
                            'field' => 'name',
                        ])
                    </th>
                    <th class="w-50">
                        {{ trans('project.permission.fields.roles') }}
                    </th>
                    <th style="width: 120px;"></th>
                </tr>
                </thead>
                <tbody wire:loading.class="text-muted">
                @forelse($permissions as $permission)
                    <tr>
                        <td>
                            <input type="checkbox" value="{{ $permission->id }}" wire:model="selected">
                        </td>
                        <td>
                            {{ $permission->id }}
                        </td>
                        <td>
                            {{ $permission->name }}
                        </td>
                        <td>
                            @foreach($permission->roles as $role)
                                <span
                                    class="badge badge-dark">{{ $role->name }}
                                </span>
                            @endforeach
                        </td>
                        <td>
                            @can('permission-read')
                                <a class="btn btn-sm btn-info"
                                   href="{{ route('admin.permissions.show', $permission) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @endcan

                            @can('permission-update')
                                <a class="btn btn-sm btn-warning"
                                   href="{{ route('admin.permissions.edit', $permission) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            @endcan

                            @can('permission-delete')
                                <button class="btn btn-sm btn-danger" type="button"
                                        wire:click="confirm('delete', {{ $permission->id }})"
                                        wire:loading.attr="disabled">
                                    <i class="fas fa-trash"></i>
                                </button>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="10">
                            <img
                                src="{{ asset('svg/empty.svg') }}"
                                alt="No results found">
                            <p class="mt-2">No results found</p>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer d-flex justify-content-end">
        {{ $permissions->links() }}
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
            if (!confirm("{{ trans('global.areYouSure') }}")) {
                return
            }
        @this
            [e.callback](...e.argv)
        })
    </script>
@endpush
