<ul> 
    @foreach($items as $menu_item) 
        <li class="li_class"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li> 
    @endforeach 
</ul> 
