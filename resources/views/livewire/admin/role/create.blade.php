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
