
<header class="mb-3">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href=" {{ route('admin.food.index')}}">
            <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw44a8db04/images/carrefour-logomark.svg" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
              <li class="nav-item fs-4
              @if (Request::route()->getName() == 'admin.food.index') active @endif">
                  <a class="nav-link" aria-current="page" href="{{ route('admin.food.index')}}">Products Archive</a>
              </li>

              <li class="nav-item fs-4
              @if (Request::route()->getName() == 'admin.food.create') active @endif">
                  <a class="nav-link" href="{{ route('admin.food.create')}}">Add Product</a>
              </li>
          </ul>
       </div>
    </div>
  </nav>
</header>