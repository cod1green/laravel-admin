@section('title', trans('project.user.list'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-users"></i> @lang('project.user.list')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>
                        <li class="breadcrumb-item active"><i class="fas fa-users"></i> @lang('project.user.list')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @can('user-create')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-start mb-2">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-success">
                                <i class="fa fa-user-plus"></i> @lang('project.user.create')
                            </a>
                        </div>
                    </div>
                </div>
            @endcan

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @include('components.loading')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="pr-2">
                                            <label>{{ trans('global.per_page') }}</label>
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
                                        <th></th>
                                        <th class="w-10">
                                            @include('components.table.sort', [
                                                'label' => trans('project.user.fields.id'),
                                                'field' => 'id',
                                            ])
                                        </th>
                                        <th class="w-20">
                                            @include('components.table.sort', [
                                                'label' => trans('project.user.fields.name'),
                                                'field' => 'name',

                                            ])
                                        </th>
                                        <th class="w-15">
                                            @include('components.table.sort', [
                                                'label' => trans('project.user.fields.email'),
                                                'field' => 'email',
                                            ])
                                        </th>
                                        <th class="w-15">
                                            @include('components.table.sort', [
                                                'label' => trans('global.verified'),
                                                'field' => 'email_verified_at',
                                            ])
                                        </th>
                                        <th class="w-10">
                                            {{ trans('project.user.fields.roles') }}
                                        </th>
                                        <th class="w-10">
                                            @include('components.table.sort', ['label' => __('Active'), 'field' => 'active'])
                                        </th>
                                        <th class="w-15"></th>
                                    </tr>
                                    </thead>
                                    <tbody wire:loading.class="text-muted">
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="{{ $user->id }}" wire:model="selected">
                                            </td>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                <a class="link-light-blue" href="mailto:{{ $user->email }}">
                                                    {{ $user->email }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $user->email_verified_at }}
                                            </td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    <span class="badge badge-dark">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                @livewire('components.toggle-button', [
                                                'model' => $user,
                                                'field' => 'active',
                                                'name' => $user->id
                                                ], key($user->id))
                                            </td>
                                            <td>
                                                @can('user-read')
                                                    <a class="btn btn-sm btn-info"
                                                       href="{{ route('admin.users.show', $user) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endcan
                                                @can('user-update')
                                                    <a class="btn btn-sm btn-warning"
                                                       href="{{ route('admin.users.edit', $user) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('user-delete')
                                                    <button class="btn btn-sm btn-danger" type="button"
                                                            wire:click="confirm('delete', {{ $user->id }})"
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

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex">
                                        <div class="ml-auto">
                                            {{ $users->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
