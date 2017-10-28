@if ($paginator->hasPages())
<div class="pagination-container">
					<nav class="pagination">

						<ul>

						


				        {{-- Pagination Elements --}}
				        @foreach ($elements as $element)
				            {{-- "Three Dots" Separator --}}
				            @if (is_string($element))
				               
				                <li><a href="" class="disabled">{{ $element }}</a></li>
				            @endif

				            {{-- Array Of Links --}}
				            @if (is_array($element))
				                @foreach ($element as $page => $url)
				                    @if ($page == $paginator->currentPage())
				                       
				                        <li><a href="" class="current-page">{{ $page }}</a></li>
				                    @else
				                       
				                        <li><a href="{{ $url }}">{{ $page }}</a></li>
				                    @endif
				                @endforeach
				            @endif
				        @endforeach
						
						
						</ul>
					</nav>

					<nav class="pagination-next-prev">
						<ul>
							{{-- Previous Page Link --}}
					        @if ($paginator->onFirstPage())
					        	<li><a  class="disabled prev">Previous</a></li> 
					        @else
					        	<li><a href="{{ $paginator->previousPageUrl() }}" class="prev">Previous</a></li>
					        @endif



							{{-- Next Page Link --}}
					        @if ($paginator->hasMorePages())
					        	<li><a href="{{ $paginator->nextPageUrl() }}" class="next">Next</a></li>
					        @else
					            <li><a class="disabled next">Next</a></li>
					        @endif
							
							
						</ul>
					</nav>
				</div>

@endif