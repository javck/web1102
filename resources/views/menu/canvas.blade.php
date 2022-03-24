<nav class="primary-menu d-block d-lg-none">
    <ul class="menu-container">
        @foreach ($items as $menu_item)
            <li class="menu-item"><a class="menu-link h-text-warning" href="{{ $menu_item->link() }}"><div{{ $menu_item->title }}</div></a></li>
        @endforeach
    </ul>
</nav>