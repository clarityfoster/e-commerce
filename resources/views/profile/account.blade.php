Welcome to profile page, {{ $user->name }}!

<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
