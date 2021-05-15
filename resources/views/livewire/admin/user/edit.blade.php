<div class="card card-success">
    <div class="card-header">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                    class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                    class="fas fa-expand"></i></button>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="submit" class="pt-3">
            <div class="form-group {{ $errors->has('user.name') ? 'invalid' : '' }}">
                <label class="form-label"
                       for="name">{{ trans('project.user.fields.name') }}</label>
                <input class="form-control" type="text" name="name" id="name"
                       wire:model.defer="user.name">
                <div class="validation-message">
                    {{ $errors->first('user.name') }}
                </div>
                <div class="help-block">
                    {{ trans('project.user.fields.name_helper') }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('user.email') ? 'invalid' : '' }}">
                <label class="form-label"
                       for="email">{{ trans('project.user.fields.email') }}</label>
                <input class="form-control" type="email" name="email" id="email"
                       wire:model.defer="user.email">
                <div class="validation-message">
                    {{ $errors->first('user.email') }}
                </div>
                <div class="help-block">
                    {{ trans('project.user.fields.email_helper') }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? 'invalid' : '' }}">
                <label class="form-label" for="password">@lang('project.user.fields.password')</label>
                <input class="form-control" type="password" name="password" id="password"
                       wire:model.defer="password">
                <div class="validation-message">
                    {{ $errors->first('user.password') }}
                </div>
                <div class="help-block">
                    {{ trans('project.user.fields.password_helper') }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('roles') ? 'invalid' : '' }}">
                <label class="form-label"
                       for="roles">{{ trans('project.user.fields.roles') }}</label>
                <x-select-list data-dropdown-css-class="select2-green" id="roles" name="roles"
                               multiple wire:model="roles"
                               :options="$this->listsForFields['roles']"/>
                <div class="validation-message">
                    {{ $errors->first('roles') }}
                </div>
                <div class="help-block">
                    {{ trans('project.user.fields.roles_helper') }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('permissions') ? 'invalid' : '' }}">
                <label class="form-label"
                       for="roles">{{ trans('project.user.fields.permissions') }}</label>
                <x-select-list data-dropdown-css-class="select2-green" id="permissions"
                               name="permissions"
                               multiple wire:model="permissions"
                               :options="$this->listsForFields['permissions']"/>
                <div class="validation-message">
                    {{ $errors->first('permissions') }}
                </div>
                <div class="help-block">
                    {{ trans('project.user.fields.permissions_helper') }}
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-success mr-2" type="submit">
                    <i class="fa fa-save"></i> @lang('global.save')
                </button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-default">
                    <i class="fa fa-undo"></i> @lang('global.cancel')
                </a>
            </div>
        </form>
    </div>
</div>
