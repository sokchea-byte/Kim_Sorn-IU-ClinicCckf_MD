<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="bi bi-heart-pulse"></i>
                <span>Admin Doctor</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="bi bi-capsule"></i>
                <span>Medicine Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('subcategory.index') }}">
                <i class="bi bi-capsule-pill"></i>
                <span>Medicine SubCategory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.index') }}">
                <i class="bi bi-journal-medical"></i>
                <span>Articles Post</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="bi bi-journal-medical"></i>
                <span>User</span>
            </a>
        </li>
    </ul>
</aside>
