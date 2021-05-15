@section('title', trans('project.role.show'))

<x-layout-admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-briefcase'></i> @lang('project.role.show')
                        : @lang('project.role.fields.id') {{ $role->id }}</h1>
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
                                <i class="fas fa-users"></i> @lang('project.role.list')
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            <i class='fa fa-briefcase'></i> @lang('project.role.show')
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
                    <div class="card card-success">
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
                            <table class="table table-view">
                                <tbody class="bg-white">
                                <tr>
                                    <th>@lang('project.role.fields.id')</th>
                                    <td>{{ $role->id }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.role.fields.name')</th>
                                    <td>{{ $role->name }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.role.fields.permissions')</th>
                                    <td>
                                        @foreach($role->permissions as $permission)
                                            <span class="badge badge-dark">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-default">
                                    <i class="fa fa-undo"></i> @lang('global.back')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-admin>
