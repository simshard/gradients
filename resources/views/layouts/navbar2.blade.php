<header class="section">
        <div  class="container">
          <div class="header-top">
           <a href="{{ url('/') }}">
             <h1>Gradients</h1>
           </a>

        @guest

            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif

        @else


            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
               <span class="text-muted">
                {{ Auth::user()->name }}
               </span> &nbsp;{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <nav>
            <a href="/">Gradients</a>
            <a href="/gradient">Create New</a>
            <a href="/home">Dashboard</a>
        </nav>
    @endguest
        </div>
</header>
