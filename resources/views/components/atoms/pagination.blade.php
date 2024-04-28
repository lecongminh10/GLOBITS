@if ($paginator->hasPages())
    <div class="mt-4">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link -->
                <x-pagination-item :url="$paginator->previousPageUrl()" :disabled="$paginator->onFirstPage()" label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </x-pagination-item>

                <!-- Pagination Elements -->
                {{ $elements }}

                <!-- Next Page Link -->
                <x-pagination-item :url="$paginator->nextPageUrl()" :disabled="!$paginator->hasMorePages()" label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </x-pagination-item>
            </ul>
        </nav>
    </div>
@endif
