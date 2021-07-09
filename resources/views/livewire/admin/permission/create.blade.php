@section('title', trans('project.permission.create'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-unlock-alt'></i> @lang('project.permission.create')</h1>
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
                            <i class='fa fa-unlock-alt'></i> @lang('project.permission.create')
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
                                <div class="form-group {{ $errors->has('permission.name') ? 'invalid' : '' }}">
                                    <label class="form-label" for="name">
                                        {{ trans('project.permission.fields.name') }}
                                    </label>
                                    <input class="form-control" type="text" name="name" id="name"
                                           wire:model.defer="permission.name">
                                    <div class="validation-message">
                                        {{ $errors->first('permission.name') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.permission.fields.name_helper') }}
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('roles') ? 'invalid' : '' }}">
                                    <label class="form-label" for="roles">
                                        {{ trans('project.permission.fields.roles') }}
                                    </label>
                                    <x-select-list
                                        data-dropdown-css-class="select2-green"
                                        id="roles"
                                        name="roles"
                                        multiple
                                        wire:model="roles"
                                        :options="$this->listsForFields['roles']"/>
                                    <div class="validation-message">
                                        {{ $errors->first('roles') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.permission.fields.roles_helper') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success mr-2" type="submit">
                                        <i class="fa fa-save"></i> @lang('global.save')
                                    </button>
                                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">
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
