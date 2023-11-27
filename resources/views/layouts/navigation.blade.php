<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('img/logo-small.png') }}">
            </div>
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
            {{ trans('panel.site_title') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            @can('user_management_access')
            <li class="{{ request()->is('admin/permissions*') || request()->is('admin/roles*')  || request()->is('admin/users*') ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#user_management">
                    <i class="fa-fw fas fa-users"></i>
                    <p>
                        {{ trans('cruds.user_management.title') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="user_management">
                    <ul class="nav">
                        @can('permission_access')
                        <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.permissions.index") }}">
                                <span class="sidebar-mini-icon"><i class="fa-fw fas fa-unlock-alt"></i></span>
                                <span class="sidebar-normal">{{ trans('cruds.permission.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.roles.index") }}">
                                <span class="sidebar-mini-icon"><i class="fa-fw fas fa-briefcase"></i></span>
                                <span class="sidebar-normal">{{ trans('cruds.role.title') }}</span>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <a href="{{ route("admin.users.index") }}">
                                <span class="sidebar-mini-icon"><i class="fa-fw fas fa-user"></i></span>
                                <span class="sidebar-normal">{{ trans('cruds.user.title') }}</span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
            @endcan
        </ul>
    </div>
</div>