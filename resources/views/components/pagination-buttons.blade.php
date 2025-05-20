<div class="my-10">
    <div class="flex justify-center space-x-2 mt-6">
        @if ($paginator->onFirstPage())
            <button disabled class="px-3 py-1 bg-gray-300 rounded">&laquo;</button>
            <button disabled class="px-3 py-1 bg-gray-300 rounded">&lt;</button>
        @else
            <button onclick="goToPage(1)" class="px-3 py-1 bg-green-900 text-white rounded">&laquo;</button>
            <button onclick="goToPage({{ $paginator->currentPage() - 1 }})" class="px-3 py-1 bg-green-900 text-white rounded">&lt;</button>
        @endif
    
        @foreach ($paginator->getUrlRange(max(1, $paginator->currentPage() - 2), min($paginator->lastPage(), $paginator->currentPage() + 2)) as $page => $url)
            @if ($page == $paginator->currentPage())
                <button disabled class="px-3 py-1 bg-green-700 text-white rounded">{{ $page }}</button>
            @else
                <button onclick="goToPage({{ $page }})" class="px-3 py-1 bg-green-900 text-white rounded">{{ $page }}</button>
            @endif
        @endforeach
    
        @if ($paginator->hasMorePages())
            <button onclick="goToPage({{ $paginator->currentPage() + 1 }})" class="px-3 py-1 bg-green-900 text-white rounded">&gt;</button>
            <button onclick="goToPage({{ $paginator->lastPage() }})" class="px-3 py-1 bg-green-900 text-white rounded">&raquo;</button>
        @else
            <button disabled class="px-3 py-1 bg-gray-300 rounded">&gt;</button>
            <button disabled class="px-3 py-1 bg-gray-300 rounded">&raquo;</button>
        @endif
    </div>
    
    <script>
        function goToPage(page) {
            const searchInput = document.getElementById('search');
            const faunaList = document.getElementById('fauna-list');
    
            const query = searchInput.value;
    
            fetch(`/fauna?page=${page}&search=${encodeURIComponent(query)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                faunaList.innerHTML = html;
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
    
</div>