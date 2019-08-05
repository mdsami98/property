@if ($paginator->hasPages())
    <div class="pagination">


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                        <a class='real-btn current' >{{ $page }}</a>
                    @else


                        <a href='{{ $url }}' class='real-btn' >{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach


    </div>
@endif
