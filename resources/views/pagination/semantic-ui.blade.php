<ul class="menu attached right bottom">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <div class="item disabled">@lang('support::pagination.previous')</div>
    @else
        <a class="item" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('support::pagination.previous')</a>
    @endif

<!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <div class="item disabled"><span>{{ $element }}</span></div>
        @endif

    <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="item active">{{ $page }}</a>
                @else
                    <a class="item" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

<!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <a class="item" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('support::pagination.next')</a>
    @else
        <div class="item disabled">@lang('support::pagination.next')</div>
    @endif
</ul>
