
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div> 
    
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>Primary!</strong> A simple primary alert check it out! 
        <button type="button" class="btn btn-xs btn-close" data-bs-dismiss="alert"></button>
    </div> 
@elseif (session('saved_data'))  
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <i class="fas fa-check-circle"></i>
        <strong>Success.</strong> {{ session('saved_data') }}
        <button type="button" class="btn btn-xs btn-close" data-bs-dismiss="alert"></button>
    </div>
@elseif (session('logout'))  
    <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
        <i class="fas fa-info-circle"></i>
        <strong>Info.</strong> {{ session('logout') }}
        <button type="button" class="btn btn-xs btn-close" data-bs-dismiss="alert"></button>
    </div>
@elseif (session('login'))  
    <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
        <i class="fas fa-smile"></i>
        {{ session('login') }} 
        <button type="button" class="btn btn-xs btn-close" data-bs-dismiss="alert"></button>
    </div>
@elseif (session('no_permission'))  
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <i class="fas fa-exclamation-triangle"></i>
        {{ session('no_permission') }} 
        <button type="button" class="btn btn-xs btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif