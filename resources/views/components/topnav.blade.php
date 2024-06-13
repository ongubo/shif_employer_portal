<div class="d-flex align-items-center flex-wrap gap-2 mb-2">
    <ul class="nav nav-pills arrow-navtabs nav-primary gap-2 flex-grow-1 order-2 order-lg-1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}" href='#' role="tab"
                aria-selected="true">
                Overview
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  {{ Route::currentRouteName() === 'employee.index' ? 'active' : '' }}" href='#'
                role="tab" aria-selected="false" tabindex="-1">
                Members
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  {{ Route::currentRouteName() === 'submissions.index' ? 'active' : '' }}" href='#'
                role="tab" aria-selected="false" tabindex="-1">
                Submissions
            </a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link  {{ Route::currentRouteName() === 'transactions.index' ? 'active' : '' }}" href='#'
                role="tab" aria-selected="false" tabindex="-1">
                Transaction History
            </a>
        </li>
    </ul>
    <!-- <div class="flex-shrink-0 ms-auto order-1 order-lg-2">
        <a href="#" class="btn btn-secondary"><i class="bi bi-pencil-square align-baseline me-1"></i>Generate e-Slip</a>
    </div> -->
</div>