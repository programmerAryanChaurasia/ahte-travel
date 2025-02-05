<header role="banner">
    <h1>Aryan Chaurasia</h1>
    <ul class="utilities">
        <br>
        <li class="users"><a href="#">My Account</a></li>

        <li class="logout warn"><a class="logout warn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <!-- <li class="logout warn"><a href="">Log Out</a></li> -->
    </ul>
</header>
