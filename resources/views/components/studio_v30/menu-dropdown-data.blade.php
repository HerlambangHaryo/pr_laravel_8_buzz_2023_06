<div class="menu">
    <div class="menu-item dropdown">
        <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link"> 
            <div class="menu-text btn btn-sm btn-secondary">
                Actions 
                <i class="fa-solid fa-caret-down fa-fw ms-auto text-dark text-opacity-50"></i>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right me-lg-3">
            <a class="dropdown-item d-flex align-items-center" 
                href="{{ route($content.'.edit', $id) }}">
                Show 
                <i class="fa fa-eye fa-fw ms-auto text-dark text-opacity-50"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center" 
                href="{{ route($content.'.edit', $id) }}">
                Edit 
                <i class="far fa-edit fa-fw ms-auto text-dark text-opacity-50"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center" 
                href="{{ route($content.'.edit', $id) }}">
                Delete 
                <i class="fas fa-trash-alt fa-fw ms-auto text-dark text-opacity-50"></i>
            </a> 
        </div>
    </div>
</div>