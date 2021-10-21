<aside class="main-sidebar sidebar-{{ config('admin.sidebar_theme') }}-{{ config('admin.color') }} elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
        <img src="{{ asset(config('admin.logo_img'))}}" alt="Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{!! config('admin.logo') !!}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar User -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <a href="{{ route('profile') }}" class="d-inline-flex align-items-center" title="{{ __('Profile') }}">
                <div class="image">
                    @if(auth()->user()->avatar)
                        <img src="{{ auth()->user()->avatar->getUrl() }}" class="img-circle elevation-2"
                             style="width: 35px;height: 35px;">
                    @else
                        <img src="{{ asset('img/no-user.png') }}" class="img-circle elevation-2"
                             style="width: 35px;height: 35px;">
                    @endif
                </div>
                <div class="info">{{ auth()->user()->name }}</div>
            </a>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>@lang('project.home.title')</p>
                    </a>
                </li>

                @can('dashboard')
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}"
                           class="nav-link {{ request()->is(config('admin.prefix')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tv"></i>
                            <p>@lang('project.dashboard.title_singular')</p>
                        </a>
                    </li>
                @endcan

                @canany(['user-read', 'role-read', 'permission-read', 'debug', 'command'])
                    @php
                        $menuOpen = request()->is(
                            config('admin.prefix') . '/users*',
                            config('admin.prefix') . '/roles*',
                            config('admin.prefix') . '/permissions*',
                            config('admin.prefix') . '/backups*',
                            config('admin.prefix') . '/debug*',
                        ) ? true : false;
                    @endphp
                    <li class="nav-item has-treeview {{ $menuOpen ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ $menuOpen ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                @lang('project.administration.title')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user-read')
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link {{
                                        request()->is(config('admin.prefix') . '/users*') ? 'active' : ''
                                    }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>@lang('project.user.title')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('role-read')
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.index') }}" class="nav-link {{
                                        request()->is(config('admin.prefix') . '/roles*') ? 'active' : ''
                                    }}">
                                        <i class="nav-icon fas fa-briefcase"></i>
                                        <p>@lang('project.role.title')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('permission-read')
                                <li class="nav-item">
                                    <a href="{{ route('admin.permissions.index') }}" class="nav-link {{
                                        request()->is(config('admin.prefix') . '/permissions*') ? 'active' : ''
                                    }}">
                                        <i class="nav-icon fas fa-unlock-alt"></i>
                                        <p>@lang('project.permission.title')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('debug')
                                <li class="nav-item">
                                    <a href="{{ url(config('admin.prefix') . '/debug') }}" class="nav-link{{
                                            request()->is(config('admin.prefix') . '/debug*') ? 'active' : ''
                                    }}">
                                        <i class="nav-icon fas fa-bug"></i>
                                        <p>@lang('project.debug.title')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('backup')
                                <li class="nav-item">
                                    <a href="{{ route('admin.backups') }}" class="nav-link {{
                                        request()->is(config('admin.prefix') . '/backups*') ? 'active' : ''
                                    }}">
                                        <i class="nav-icon fas fa-hdd"></i>
                                        <p>Backups</p>
                                    </a>
                                </li>
                            @endcan

                            @can('command')
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0)" class="nav-link">
                                        <i class="nav-icon fas fa-terminal"></i>
                                        <p>
                                            @lang('project.command.title')
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.optimize.cache') }}" class="nav-link">
                                                <i class="nav-icon fas fa-boxes"></i>
                                                <p>Optimize cache</p>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('admin.optimize.clear') }}" class="nav-link">
                                                <i class="nav-icon far fa-trash-alt"></i>
                                                <p>Optimize clear</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
