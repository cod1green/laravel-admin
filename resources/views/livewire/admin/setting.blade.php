@section('title',trans('project.setting.title'))

<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class='fa fa-cog'></i> @lang('project.setting.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-tv"></i> @lang('project.dashboard.title')
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            <i class='fa fa-cog'></i> @lang('project.setting.title')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <label for="siteName">Site Name</label>
                                    <input wire:model.defer="state.site_name" type="text" class="form-control"
                                           id="siteName" placeholder="Enter site name">
                                    <div class="validation-message">
                                        {{ $errors->first('state.site_name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="siteEmail">Site Email</label>
                                    <input wire:model.defer="state.site_email" type="email" class="form-control"
                                           id="siteEmail" placeholder="Enter site email">
                                    <div class="validation-message">
                                        {{ $errors->first('state.site_email') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="siteTitle">Site Title</label>
                                    <input wire:model.defer="state.site_title" type="text" class="form-control"
                                           id="siteTitle" placeholder="Enter site title">
                                    <div class="validation-message">
                                        {{ $errors->first('state.site_title') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="footerText">Footer Name</label>
                                    <input wire:model.defer="state.footer_name" type="text" class="form-control"
                                           id="footerText" placeholder="Enter footer name">
                                    <div class="validation-message">
                                        {{ $errors->first('state.footer_name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input wire:model.defer="state.sidebar_collapse" type="checkbox"
                                               class="custom-control-input" id="sidebarCollapse">
                                        <label class="custom-control-label cursor-pointer" for="sidebarCollapse">
                                            Sidebar Collapse
                                        </label>
                                    </div>
                                    <!-- <label for="sidebar_collapse">Sidebar Collapse</label><br>
                                    <input wire:model.defer="state.sidebar_collapse" type="checkbox" id="sidebar_collapse"> -->
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

@push('js')
    <script>
        $('#sidebarCollapse').on('change', function () {
            $('body').toggleClass('sidebar-collapse');
        })
    </script>
@endpush
