
<header class="mb-3">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href=" {{url('/')}}" target="_blank">
                <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw44a8db04/images/carrefour-logomark.svg" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
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

          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

       </div>
    </div>
  </nav>
</header>