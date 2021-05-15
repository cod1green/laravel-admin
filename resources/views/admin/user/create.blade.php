@section('title', trans('project.user.create'))

<x-layout-admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-user-plus'></i> @lang('project.user.create')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.users.index') }}">
                                <i class="fas fa-users"></i> @lang('project.user.list')
                            </a>
                        </li>

                        <li class="breadcrumb-item active"><i
                                class='fa fa-user-plus'></i> @lang('project.user.create')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @livewire('admin.user.create')
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
