<nav class="nav nav-pills nav-justified dashboard-menu">
    <a class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}" href="/admin/home">Dashboard</a>
    <a class="nav-link {{ request()->is('admin/posts/create') ? 'active' : '' }}" href="/admin/posts/create">New Post</a>
    <a class="nav-link {{ request()->is('admin/posts/all') ? 'active' : '' }}" href="/admin/posts/all">View Posts</a>
</nav>