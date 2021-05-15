@section('title', trans('project.role.edit'))

<x-layout-admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-briefcase'></i> @lang('project.role.edit')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.roles.index') }}">
                                <i class="fas fa-list"></i> @lang('project.role.list')
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            <i class='fa fa-briefcase'></i> @lang('project.role.edit')
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
                    @livewire('admin.role.edit', [$role])
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
