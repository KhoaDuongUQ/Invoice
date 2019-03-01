@if ($paginator->hasPages())
  <nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <a class="pagination-previous" disabled>Previous</a>
    @else
      <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Previous</a>
    @endif
    {{-- Pagination Elements --}}
    <ul class="pagination-list">
      @foreach ($elements as $element)
          {{-- Array Of Links --}}
          @if (is_array($element))
              @foreach ($element as $page => $url)
                  {{--  Use three dots when current page is greater than 2.  --}}
                  @if ($paginator->currentPage() > 2 && $page == 2)
                      <li><a class="pagination-link" disabled>...</a></li>
                  @endif

                  @if ($page == $paginator->currentPage())
                    <li><a class="pagination-link is-current"> {{ $page }} </a></li>
                  @else
                    <li><a class="pagination-link" href="{{ $url }}"> {{ $page }} </a></li>
                  @endif

                  {{--  Use three dots when current page is awasy from end.  --}}
                   @if ($paginator->currentPage() < $paginator->count() - 2 && $page == $paginator->count() - 1)
                       <li><a class="pagination-link" disabled>...</a></li>
                   @endif
              @endforeach
          @endif
      @endforeach
    </ul>
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}"> Next page </a>
    @else
      <a class="pagination-previous" disabled> Next page </a>
    @endif
  </nav>
@endif
