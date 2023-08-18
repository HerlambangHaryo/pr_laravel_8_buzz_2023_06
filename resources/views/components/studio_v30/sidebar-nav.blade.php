<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Nav</div>

            <div class="menu-item @if($title == 'Dashboard') active @endif">
                <a href="{{ route('Dashboard.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span class="menu-text">
                        Dashboard
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'AboutApp') active @endif">
                <a href="{{ route('AboutApp.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-id-card "></i>
                    </span>
                    <span class="menu-text">
                        AboutApp
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Rapidapi') active @endif">
                <a href="{{ route('Rapidapi.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-fire"></i>
                    </span>
                    <span class="menu-text">
                        Rapid Api
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Countries') active @endif">
                <a href="{{ route('Countries.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-globe"></i>
                    </span>
                    <span class="menu-text">
                        Country
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Leagues') active @endif">
                <a href="{{ route('Leagues.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-trophy"></i>
                    </span>
                    <span class="menu-text">
                        League
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Today') active @endif">
                <a href="{{ route('Today.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-play-circle"></i>
                    </span>
                    <span class="menu-text">
                        Today
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Forecasts') active @endif">
                <a href="{{ route('Forecasts.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-hat-wizard"></i>
                    </span>
                    <span class="menu-text">
                        Forecasts
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Tomorrow') active @endif">
                <a href="{{ route('Tomorrow.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-fast-forward"></i>
                    </span>
                    <span class="menu-text">
                        Tomorrow
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Favorites') active @endif">
                <a href="{{ route('Favorites.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-star"></i>
                    </span>
                    <span class="menu-text">
                        Favorites
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Oneye') active @endif">
                <a href="{{ route('Oneye.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="far fa-eye"></i>
                    </span>
                    <span class="menu-text">
                        Oneye
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'One') active @endif">
                <a href="{{ route('One.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-bullseye"></i>
                    </span>
                    <span class="menu-text">
                        One
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Matchdone') active @endif">
                <a href="{{ route('Matchdone.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="far fa-calendar-check"></i>
                    </span>
                    <span class="menu-text">
                        Match Done
                    </span>
                </a>
            </div>

            <div class="menu-item @if($title == 'Matchfinished') active @endif">
                <a href="{{ route('Matchfinished.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-flag-checkered"></i>
                    </span>
                    <span class="menu-text">
                        Match Finished
                    </span>
                </a>
            </div>


            <div class="menu-item @if($title == 'Ultimate') active @endif">
                <a href="{{ route('Ultimate.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-chess-queen"></i>
                    </span>
                    <span class="menu-text">
                        Ultimate
                    </span>
                </a>
            </div>

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->

    <!-- BEGIN mobile-sidebar-backdrop -->
    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
    <!-- END mobile-sidebar-backdrop -->
</div>
<!-- END #sidebar -->
