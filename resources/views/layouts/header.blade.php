<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Right navbar links -->
    <a class="navbar-brand" style="margin-left: 50px;" href="#"><span>Adminitrator </span></a>
    <ul class="navbar-nav ml-auto" style="margin-left: 50%;">
        <li style="margin-left: 30px;">
            <div class=" bg-white dark:bg-gray-800 sm:rounded-lg">
                <a href="{!! route('language', ['en']) !!}" style="text-decoration: none; margin-right: 30px;"> {{__('English')}}</a>
                <a href="{!! route('language', ['vi']) !!}" style="text-decoration: none;"> {{__('Vietnamese')}}</a>
            </div>
        </li>
        <li style="margin-left: 30px;">
            <a href="">
                <p><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->email }}</p>
            </a>
        </li>
        <li class="nav-item" style="margin-left: 30px;">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <button class="btn btn-primary">{{ __('Log Out') }} </button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>