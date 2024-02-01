<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-trophy"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Boxrec <sup>br</sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.dashboard') }}">
  
      <span>Home</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.boxers') }}">
      
      <span>Boxers</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.records') }}">
     
      <span>Records</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.stats') }}">
    
      <span>Stats</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.rates') }}">
    
      <span>Rates</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.heavydivisons') }}">
    
      <span>Heavy Divisions</span></a>
  </li>

   <li class="nav-item">
    <a class="nav-link" href="{{ route('guests.welters') }}">
    
      <span>Welters Divisions</span></a>

  </li><li class="nav-item">
    <a class="nav-link" href="{{ route('guests.superbantams') }}">
    
      <span>superbantams Divisions</span></a>
  </li>
  
  <!-- <li class="nav-item">
    <a class="nav-link" href="/profile">
    <i class="fas fa-fw fa-user"></i>
      <span>Profile</span></a>
  </li>  -->
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>