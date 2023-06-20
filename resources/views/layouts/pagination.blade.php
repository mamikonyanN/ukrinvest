@if ($paginator->hasPages())
<nav class="d-flex justify-items-center justify-content-center">

  <div class="d-flex justify-content-between d-sm-none">
    <ul class="pagination gap-2">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
      <li class="disabled" aria-disabled="true">
        <span class="icon icon-xl icon-previous-page icon-center"></span>
      </li>
      @else
      <li>
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
          <span class="icon icon-xl icon-previous-page icon-center"></span>
        </a>
      </li>
      @endif

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
      <li>
        <a href="{{ $paginator->nextPageUrl() }}" rel="next">
          <span class="icon icon-xl icon-next-page icon-center"></span>
        </a>
      </li>
      @else
      <li class="disabled" aria-disabled="true">
        <span class="icon icon-xl icon-next-page icon-center"></span>
      </li>
      @endif
    </ul>
  </div>

  <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-center">
    <div>
      <ul class="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="px-2 disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
          <span class="icon icon-xl icon-previous-page icon-center"></span>
        </li>
        @else
        <li class="px-2">
          <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
            <span class="icon icon-xl icon-previous-page icon-center"></span>
          </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="p-2" aria-disabled="true"><span class="fw-bold text-body">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="p-2" aria-current="page"><span class="fw-bold text-primary">{{ $page }}</span></li>
        @else
        <li class="p-2"><a class="fw-bold text-decoration-none text-body" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif

        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="px-2">
          <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
            <span class="icon icon-xl icon-next-page icon-center"></span>
          </a>
        </li>
        @else
        <li class="px-2 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
          <span class="icon icon-xl icon-next-page icon-center"></span>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
@endif
