<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="width: 260px !important;">
        <li class="nav-item" style="font-size: 1.3rem; margin-left: 1rem;color: #FFFFFF;margin-bottom: 1rem;margin-top: 1rem">
            <i class="fas fa-fw fa-tachometer-alt" style="margin-right: 1rem"></i>
            <span><a href="#">Dashboard</a></span>
        </li>
        <li class="nav-item" style="font-size: 1.3rem; margin-left: 1rem;color: #FFFFFF;margin-bottom: 1rem">
            <i class="fas fa-fw fa-pager" style="margin-right: 1rem"></i>
            <span><a href="{{route('page.index')}}">View All Page</a></span>
        </li>
        <li class="nav-item dropdown" style="font-size: 1.3rem; margin-left: 1rem;color: #FFFFFF">
            <i class="fas fa-fw fa-paper-plane" style="margin-right: 1rem"></i>
            <span><a href="{{route('page.create')}}">Create Page</a></span>
        </li>

        <li class="nav-item" style="font-size: 1.3rem; margin-left: 1rem;color: #FFFFFF;margin-bottom: 1rem;margin-top: 1rem">
            <i class="fas fa-fw fa-table" style="margin-right: 1rem"></i>
            <span><a href="{{route('content.index')}}">View Contents</a></span>
        </li>
        <li class="nav-item dropdown" style="font-size: 1.2rem; margin-left: 1rem;color: #FFFFFF">
            <i class="fas fa-fw fa-pencil-ruler" style="margin-right: 1rem"></i>
            <span><a href="{{route('content.create')}}">Create Content</a></span>
        </li>
    </ul>
