@if ($paginator->hasPages())
<div class="middle">
    <div class="pagination">
        <ul>
             {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a href="#"></a></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}"></a></li>
            @endif
            
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#"></a></li>
                        @else
                            <li><a href="{{ $url }}"></a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}"></a></li>
            @else
                <li class="disabled"><a href="#"></a></li>
            @endif
        </ul>
    </div>
  </div>
@endif
