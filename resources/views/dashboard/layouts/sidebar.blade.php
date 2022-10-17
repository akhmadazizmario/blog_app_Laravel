<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <!-- Fungsi Request untuk active halaman--->
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom text-white"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <!-- Fungsi Request untuk active halaman--->
                <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom text-white"></span>
                    My Post
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/posts">
                    <span data-feather="book" class="align-text-bottom text-white"></span>
                    My Website
                </a>
            </li>

            <hr class="text-white">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0">
                        Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
                </form>
            </li>

        </ul>


    </div>
</nav>
