<ul class="nav navbar-nav c-theme-nav">
    @foreach($items as $menu_item)
        <li class="c-menu-type-classic">
            @if($menu_item->url)
                <a href="{{ url($menu_item->url) }}" class="c-link dropdown-toggle">{{ $menu_item->title }}<span class="c-arrow c-toggler"></span></a>
            @else
                <a href="javascript:;" class="c-link dropdown-toggle">{{ $menu_item->title }}<span class="c-arrow c-toggler"></span></a>
            @endif
            @if(count($menu_item->children) > 0)
                <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                    @foreach($menu_item->children as $child)
                        <li>
                            <a href="{{ url($child->url) }}">{{ $child->title }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
