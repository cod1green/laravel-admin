@inject('request', 'Illuminate\Http\Request')

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('vendor/admin-lte/dist/img/AdminLTELogo.png')}}" alt="..."
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{!! config('admin.logo', '<b>Cod1</b>green') !!}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar->getUrl('thumb') }}" class="img-circle elevation-2"
                         style="width: 35px;height: 35px;">
                @else
                    <img src="{{ asset('img/no-user.png') }}" class="img-circle elevation-2"
                         style="width: 35px;height: 35px;">
                @endif
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ request()->is(config('admin.prefix')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>@lang('admin.dashboard')</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('home') }}"
                       class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>@lang('admin.home_page')</p>
                    </a>
                </li>

            @canany(['user_access', 'role_access', 'permission_access', 'debug_access'])
                <!-- <li class="nav-item has-treeview menu-open"> -->
                    <li class="nav-item has-treeview">
                        <!-- <a href="#" class="nav-link active"> -->
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                @lang('admin.administration')
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('user_access')
                                <li class="nav-item">
                                    <!-- <a href="#" class="nav-link active"> -->
                                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>@lang('admin.users')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-briefcase"></i>
                                        <p>@lang('admin.roles')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                                        <i class="nav-icon fas fa-wrench"></i>
                                        <p>@lang('admin.permissions')</p>
                                    </a>
                                </li>
                            @endcan

                            @can('debug_access')
                                <li class="nav-item">
                                    <a href="{{ url(config('admin.prefix') . '/debug') }}" class="nav-link">
                                        <i class="nav-icon fas fa-bug"></i>
                                        <p>@lang('admin.debug')</p>
                                    </a>
                                </li>
                            @endcan

                            <li class="nav-item has-treeview">
                                <a href="javascript:void(0)" class="nav-link">
                                    <i class="nav-icon fas fa-broom"></i>
                                    <p>
                                        Otimizar e Limpar
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.optimize.cache') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Todos cache</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.optimize.clear') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Todos limpar</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.route.cache') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rotas cache</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.route.clear') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rotas limpar</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.view.cache') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Visão cache</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.view.clear') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Visão limpar</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.config.cache') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Configurações cache</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.config.clear') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Configurações limpar</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('admin.cache.clear') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Caches limpar</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endcanany

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
