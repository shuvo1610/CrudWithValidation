<div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('dashboard')}}">Stisla</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <a href="{{route('dashboard')}}" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="{{route('dashboard')}}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Employee</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('teacher.create')}}">Add Employee</a></li>
                    <li><a class="nav-link" href="{{route('teacher.index')}}">Employee List</a></li>
                </ul>
            </li>
    </aside>
</div>
