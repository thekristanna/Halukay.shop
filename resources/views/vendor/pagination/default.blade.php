<style>
    nav {
        display: flex;
        justify-content: center; /* This centers the children (ul) horizontally */
        margin: 0 auto;
    }
    ul.pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }
    li {
        margin: 10px;
        height: 20px;
        width: 20px;
        padding: 15px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 13px;
        display: flex;
        justify-content: center;
        align-items: center; /* This vertically centers the text or link inside the li */
    }
    li:hover {
        background:  #774123;
        color: white;
    }
    a {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        color: inherit; 
        text-decoration: none; 
    }
    .disabled {
        pointer-events: none;
        opacity: 0.5;
    }
    .active {
        font-weight: bold; 
    }
    style {
        display: none;
    }
</style>


@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
