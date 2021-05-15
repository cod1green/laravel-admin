@section('title', trans('project.role.list'))

<x-layout-admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-list"></i> @lang('project.role.list')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>
                        <li class="breadcrumb-item active"><i class="fas fa-list"></i> @lang('project.role.list')</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @can('role-create')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-start mb-2">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-success">
                                <i class="fa fa-plus"></i> @lang('project.role.create')
                            </a>
                        </div>
                    </div>
                </div>
            @endcan

            <div class="row">
                <div class="col-12">
                    @livewire('admin.role.index')
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
