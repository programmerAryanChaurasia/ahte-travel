<nav role='navigation'>
    <label class="sidebar-label" style=" margin-left: 15px;"></label>
    <ul class="main">

        <li class="dashboard"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        <li class="edit"><a href="{{route('admin.post.index')}}">Create Post</a></li>
        <li class="write"><a href="{{route('admin.category.index')}}">Category</a></li>
        <li class="comments"><a href="{{route('admin.sub-category.index')}}">Sub Category</a></li>
        <li class="edit"><a href="{{route('admin.tag.index')}}">Tags</a></li>
        <li class="comments"><a href="{{route('admin.comment.index')}}">Comments</a></li>

        <li class="comments"><a href="{{route('admin.plan-your-trips.index')}}">Plan Your Trip</a></li>
        {{-- <li class="comments"><a href="{{route('admin.comment.index')}}">Comments</a></li>
        <li class="comments"><a href="{{route('admin.comment.index')}}">Comments</a></li>
        <li class="comments"><a href="{{route('admin.comment.index')}}">Comments</a></li> --}}

        <li class="users"><a href="{{route('admin.user.index')}}">Users</a></li>


    </ul>
</nav>
