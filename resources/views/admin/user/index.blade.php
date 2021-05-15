@section('title', trans('project.user.list'))

<x-layout-admin>
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
                    @livewire('admin.user.index')
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
