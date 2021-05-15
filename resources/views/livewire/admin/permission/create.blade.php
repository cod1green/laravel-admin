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
