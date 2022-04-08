<div id="sidebar-collapse" class="sidebar-admin">
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="@yield('home')">
                <a href="/" style="text-decoration: none;">
                    <p><i class="fa fa-home" aria-hidden="true"></i> {{__('Home')}}</p>
                </a>
            </li>
            <li class="">
                <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" style=" text-decoration: none; color: #666;">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    {{ __('Dashboard') }}
                </a>
            </li>
            <li class="@yield('users')">
                <a href="{{ route('users.index') }}" style="text-decoration: none;">
                    <p><i class="fa fa-user" aria-hidden="true"></i> {{__('Users')}} </p>
                </a>
            </li>
            <li class="@yield('orders')">
                <a href="{{ route('orders.index') }}" style="text-decoration: none;">
                    <p><i class="fa fa-book" aria-hidden="true"></i> {{__('Orders')}}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
