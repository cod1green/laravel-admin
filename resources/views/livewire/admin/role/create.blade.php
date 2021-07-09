@section('title', trans('project.role.create'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-briefcase'></i> @lang('project.role.create')</h1>
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
                            <i class='fa fa-briefcase'></i> @lang('project.role.create')
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
                            <form wire:submit.prevent="submit" class="pt-3">
                                <div class="form-group {{ $errors->has('role.name') ? 'invalid' : '' }}">
                                    <label class="form-label" for="name">
                                        {{ trans('project.role.fields.name') }}
                                    </label>
                                    <input class="form-control" type="text" name="name" id="name"
                                           wire:model.defer="role.name">
                                    <div class="validation-message">
                                        {{ $errors->first('role.name') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.role.fields.name_helper') }}
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('permissions') ? 'invalid' : '' }}">
                                    <label class="form-label" for="permissions">
                                        {{ trans('project.role.fields.permissions') }}
                                    </label>
                                    <x-select-list data-dropdown-css-class="select2-green"
                                                   id="permissions"
                                                   name="permissions"
                                                   multiple
                                                   wire:model="permissions"
                                                   :options="$this->listsForFields['permissions']"/>
                                    <div class="validation-message">
                                        {{ $errors->first('permissions') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.role.fields.permissions_helper') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success mr-2" type="submit">
                                        <i class="fa fa-save"></i> @lang('global.save')
                                    </button>
                                    <a href="{{ route('admin.roles.index') }}" class="btn btn-default">
                                        <i class="fa fa-undo"></i> @lang('global.cancel')
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
