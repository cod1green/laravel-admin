@section('title', trans('project.profile.title_singular'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-id-card"></i> @lang('project.profile.title_singular')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home"></i> @lang('project.home.title')
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-id-card"></i> @lang('project.profile.title_singular')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @include('components.alerts')

            <div class="row">
                <div class="col-md-3">
                    <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @if($user->avatar)
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="{{ $user->avatar->getUrl('thumb') }}" width="88" height="88"
                                         alt="{{ $user->name }}">
                                @else
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="{{ asset('img/no-user.png') }}" width="88" height="88" alt="">
                                @endif
                            </div>

                            <h3 class="profile-username text-center">{{ $user->name }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data"
                                  wire:submit.prevent="submit">
                                @csrf

                                <div class="form-group {{ $errors->has('user.name') ? 'invalid' : '' }}">
                                    <label for="name">
                                        <span class="text-danger">*</span>@lang('project.user.fields.name')
                                    </label>
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
                                    <label for="email">
                                        <span class="text-danger">*</span>@lang('project.user.fields.email')
                                    </label>
                                    <input class="form-control" type="email" name="email" id="email"
                                           wire:model.defer="user.email">
                                    <div class="validation-message">
                                        {{ $errors->first('user.email') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.user.fields.email_helper') }}
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('current_password') ? 'invalid' : '' }}">
                                    <label for="current_password">@lang('project.user.fields.current_password')</label>
                                    <input class="form-control" type="password" name="current_password"
                                           id="current_password" wire:model.defer="current_password">
                                    <div class="validation-message">
                                        {{ $errors->first('current_password') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.user.fields.current_password_helper') }}
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? 'invalid' : '' }}">
                                    <label for="password">@lang('project.user.fields.new_password')</label>
                                    <input class="form-control" type="password" name="password" id="password"
                                           wire:model.defer="password">
                                    <div class="validation-message">
                                        {{ $errors->first('password') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.user.fields.password_helper') }}
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password_confirmation') ? 'invalid' : '' }}">
                                    <label for="password_confirmation">
                                        @lang('project.user.fields.password_confirmation')
                                    </label>
                                    <input class="form-control" type="password" name="password_confirmation"
                                           id="password_confirmation" wire:model.defer="password_confirmation">
                                    <div class="validation-message">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                    <div class="help-block">
                                        {{ trans('project.user.fields.password_confirmation_helper') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">@lang('project.user.fields.photo')</label>
                                    <input type="file" class="form-control" name="photo" id="photo" wire:model="photo">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i> @lang('global.save')
                                    </button>

                                    <a href="{{ route('home') }}" class="btn btn-default">
                                        <i class="fa fa-undo"></i> @lang('global.cancel')
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            @if( !is_null($user->getMedia('avatar')->first() ) )
                <div class="row row-cols-1 row-cols-md-4">
                    @foreach ($user->getMedia('avatar') as $avatar)
                        <div class="col mb-4">
                            <!-- <div class="card h-100"> -->
                            <div class="card">
                                <img src="{{ $avatar->getUrl() }}" class="card-img-top" alt="...">

                                <div class="card-footer">
                                    <a class="btn btn-app float-left"
                                       wire:click.prevent="selectePhoto({{ $avatar->id }})">
                                        <i class="fa fa-check"></i> @lang('global.apply')
                                    </a>

                                    <a class="btn btn-app float-right mr-3"
                                       wire:click.prevent="removePhoto({{ $avatar->id }})">
                                        <i class="fa fa-trash"></i> @lang('global.remove')
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</div>

@push('styles')
    <style>
        .nav-tabs-custom > .nav-tabs > li.active {
            border-top-color: #d2d6de;
        }

        .thumbnail {
            margin-bottom: 0px;
            border-radius: 50%;
        }
    </style>
@endpush
