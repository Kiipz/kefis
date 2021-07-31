<nav class="navbar navbar-expand-md">
    <div class="container">
      <a class="navbar-brand" href="#">Kefis Off-site Warehouse</a>
      <span class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">   
        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
      </span>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" aria-current="page" href="{{ asset('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('warehouse/orders*')) ? 'active' : '' }}" href="{{ asset('warehouse/orders') }}">Orders</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-bell"></i>
              <?php $message = 0; $condition=true; ?>
              @if ($condition)
                <i class="fas fa-dot-circle" style="color: #00cc66; font-size: 6px;"></i>
              @endif
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ asset('orders') }}">Message here</a></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('signout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>