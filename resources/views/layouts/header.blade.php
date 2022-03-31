<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Right navbar links -->
    <a class="navbar-brand" href="#"><span>Adminitrator </span></a>
    <ul class="navbar-nav ml-auto navbar-ul" style="margin-left: 50%;">
        <li>
            <div class=" bg-white dark:bg-gray-800 sm:rounded-lg">
                <a href="{!! route('language', ['en']) !!}"> {{__('English')}}</a>
                <a href="{!! route('language', ['vi']) !!}"> {{__('Vietnamese')}}</a>
            </div>
        </li>
        <li>
            <a href="">
                <p><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->email }}</p>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <button class="btn btn-primary">{{ __('Log Out') }} </button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
