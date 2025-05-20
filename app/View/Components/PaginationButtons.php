<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginationButtons extends Component
{
   
    public LengthAwarePaginator $paginator;

       public function __construct(LengthAwarePaginator $paginator)
    {
        $this->paginator = $paginator;
    }

    public function render()
    {
        return view('components.pagination-buttons');
    }
}
