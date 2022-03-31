<div id="sidebar-collapse" class="sidebar-admin">
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="@yield('home')">
                <a href="/" style="text-decoration: none;">                    
                    <p><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</p>
                </a>
            </li>
            <li class="@yield('users')">
                <a href="{{ route('users.index') }}" style="text-decoration: none;">                    
                    <p><i class="fa fa-user" aria-hidden="true"></i> {{__('User')}} </p>
                </a>
            </li>
            <li class="@yield('orders')">
                <a href="{{ route('orders.index') }}" style="text-decoration: none;">                   
                    <p><i class="fa fa-book" aria-hidden="true"></i> {{__('Orders List')}}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
