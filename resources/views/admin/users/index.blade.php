@extends('layouts.admin.app')
@section('title', trans('admin.users.list'))

@section('content')
    @include('includes.alerts')

    <!-- breadcrumb -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-users"></i> @lang('admin.users.list')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active"><i class="fas fa-users"></i> @lang('admin.users.list')</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @can('user_create')
                <div class="row">
                    <div class="col-12 mb-2">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success"><i
                                class="fa fa-user-plus"></i>
                            @lang('admin.users.create')</a>
                    </div>
                </div>
            @endcan
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <!-- <h3 class="card-title">All together</h3> -->

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>@lang('admin.name')</th>
                                    <th>@lang('admin.email')</th>
                                    <th>@lang('admin.created_at')</th>
                                    <th>@lang('admin.user.roles.assign')</th>
                                    <th>@lang('admin.user.permissions.assign')</th>
                                    @canany(['user_edit', 'user_delete'])
                                        <th>@lang('admin.operations')</th>
                                    @endcanany
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                        {{-- Retrieve array of roles associated to a user and convert to string --}}
                                        <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                                        <td>{{ $user->permissions->pluck('name')->implode(', ') }}</td>
                                        @canany(['user_edit', 'user_delete'])
                                            <td>
                                                <div class="btn-group">
                                                    @can('user_edit')
                                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                                           class="btn btn-sm btn-warning">
                                                            <i class="fas fa-user-edit"></i> @lang('admin.edit')
                                                        </a>
                                                    @endcan

                                                    @can('user_delete')
                                                        <a class="btn btn-sm btn-danger" onclick="
                                                            if(confirm(`{{ trans('admin.confirm') }}`)){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $user->id }}').submit();
                                                            } else {
                                                            event.preventDefault();
                                                            }">
                                                            <i class="fas fa-user-times"></i> @lang("admin.delete")
                                                        </a>

                                                        <form id="delete-form-{{ $user->id }}"
                                                              action="{{ route('admin.users.destroy', $user->id) }}"
                                                              method="POST"
                                                              style="display: none;">
                                                            @csrf
                                                            @method("DELETE")
                                                        </form>
                                                    @endcan
                                                </div>
                                            </td>
                                        @endcanany
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
