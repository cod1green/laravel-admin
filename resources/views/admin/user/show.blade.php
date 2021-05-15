@section('title', trans('project.user.show'))

<x-layout-admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-user'></i> @lang('project.user.show')
                        : @lang('project.user.fields.id') {{ $user->id }}</h1>
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

                        <li class="breadcrumb-item active">
                            <i class='fa fa-user'></i> @lang('project.user.show')
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
                                    <th>@lang('project.user.fields.id')</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.user.fields.name')</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.user.fields.email')</th>
                                    <td>
                                        <a class="link-light-blue" href="mailto:{{ $user->email }}">
                                            <i class="far fa-envelope fa-fw"></i>
                                            {{ $user->email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('project.user.fields.email_verified_at')</th>
                                    <td>{{ $user->email_verified_at }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('project.user.fields.roles')</th>
                                    <td>
                                        @foreach($user->roles as $role)
                                            <span class="badge badge-dark">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>@lang('project.user.fields.permissions')</th>
                                    <td>
                                        @foreach($user->permissions as $permission)
                                            <span class="badge badge-dark">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-default">
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
