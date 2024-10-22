   <nav class="nav--blue navbar navbar-expand-md shadow-sm  navbar-dark">
            <div class="container ">
            <div class="col-3 py-0 my-0">
                <a class="navbar-brand py-0 my-0" href="{{ url('/') }}">
                   <img src="{{ asset('img/Logo.png') }}" width="100%" class="" alt="...">
                </a>
                </div>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <nav class="navbar nav--blue ">
                                    <form class="form-inline" method="GET" action="{{ route('publications.index') }}">
                                      <input name="search" class="form-control mr-sm-2" type="search" placeholder=@lang('content.Search') aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('content.Search')</button>
                                    </form>
                                  </nav>
                        <!-- Authentication Links -->
                        @guest
                      

                            <li class="nav-item navbar-dark">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>                         
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else    
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                     <a class="" href="{{ route('user.show', Auth::user()) }}">{{ Auth::user()->name }}  </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>  
                            </li>

                           

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>