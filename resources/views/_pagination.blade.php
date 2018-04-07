{{-- <div class="c-pagination">
    <ul class="c-content-pagination c-theme">
        <li class="c-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
        <li><a href="#">1</a></li>
        <li class="c-active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li class="c-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</div> --}}
@if ($paginator->hasPages())
<div class="c-pagination">
    <ul class="c-content-pagination c-theme">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled c-prev"><span><i class="fa fa-angle-left"></i></span></li>
        @else
            <li class="c-prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="c-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li class="disabled"><span><i class="fa fa-angle-right"></i></span></li>
        @endif
    </ul>
</div>
@endif
