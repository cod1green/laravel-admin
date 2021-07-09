@section('title', trans('project.permission.show'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-briefcase'></i> @lang('project.permission.show')
                        : @lang('project.permission.fields.id') {{ $permission->id }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.permissions.index') }}">
                                <i class="fas fa-list"></i> @lang('project.permission.list')
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            <i class='fa fa-briefcase'></i> @lang('project.permission.show')
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
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-view">
                                <tbody class="bg-white">
                                <tr>
                                    <th>@lang('project.permission.fields.id')</th>
                                    <td>{{ $permission->id }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.permission.fields.name')</th>
                                    <td>{{ $permission->name }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.permission.fields.roles')</th>
                                    <td>
                                        @foreach($permission->roles as $role)
                                            <span class="badge badge-dark">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">
                                    <i class="fa fa-undo"></i> @lang('global.back')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
