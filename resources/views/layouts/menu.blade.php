   <style>
    #header {
    background-color: #fff; /* add a background color */
    box-shadow: 0 0 10px rgba(0,0,0,.3); /* add a box shadow */
}

.navbar-brand {
    font-size: 24px; /* change the font size */
    font-weight: bold; /* change the font weight */
}

.navbar-nav li a {
    font-size: 18px; /* change the font size */
    font-weight: 600; /* change the font weight */
    color: #333; /* change the font color */
    padding: 10px 15px; /* add some padding */
    transition: color .3s ease; /* add a hover transition */
}

.navbar-nav li a:hover {
    color: #f00; /* change the font color on hover */
    background-color: #eee; /* add a background color on hover */
}

.dropdown-menu {
    background-color: #fff; /* add a background color to the dropdown menu */
    border: none; /* remove the border */
    box-shadow: 0 5px 10px rgba(0,0,0,.3); /* add a box shadow */
}

.dropdown-menu li a {
    font-size: 16px; /* change the font size */
    font-weight: 500; /* change the font weight */
    color: #333; /* change the font color */
    padding: 8px 15px; /* add some padding */
    transition: color .3s ease; /* add a hover transition */
}

.dropdown-menu li a:hover {
    color: #f00; /* change the font color on hover */
    background-color: #eee; /* add a background color on hover */
}

.active {
    color: #f00; /* change the font color for the active menu item */
    font-weight: 700; /* change the font weight for the active menu item */
}

.logo {
    max-width: 120px; /* set a max width for the logo */
    margin-right: 20px; /* add some margin */
}

   </style>
   
   <header id="header" class="position-absolute" style="top: 0; left:0; right:0; z-index:500; height:90px">
        <nav class="navbar navbar-expand-lg navbar-light" style="height: 100%">
            <div class="container" style="height: 100%">
                @if ($option['logo'] == 1)
                    <a class="navbar-brand" href="{{ url('/') }}">Mahfuz<b></b></a>
                @else
                    <a class="navbar-brand" style="height: 100%" href="{{ url('/') }}"><img
                            style="max-height: 100%"
                            src="{{ App\Models\File::find($option['logo'])->getMedia()->first()->getUrl('thumb') }}"
                            alt="Süper Doktorlar"></a>
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav ml-auto">
                        @foreach (App\Models\Menu::orderBy('order', 'asc')->where('position', '=', 1)->get()
                            as $menuItem)

                            @if ($menuItem->parent == null && $menuItem->title != null)
                                <li {{ $menuItem->children->isEmpty() ? '' : 'class=dropdown' }}
                                    style="margin: 0 40px 0 0">
                                    <a href="{{ $menuItem->children->isEmpty() ? url('/', $menuItem->link) : '#' }}"
                                        {{ $menuItem->children->isEmpty() ? '' : 'class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false' }}>
                                        {{ $menuItem->title }}
                                    </a>
                            @endif

                            @if (!$menuItem->children->isEmpty())
                                <ul class="dropdown-menu" role="menu">
                                    @foreach ($menuItem->children as $subMenuItem)
                                        <li><a style="display: block"
                                                href="{{ url('/', $subMenuItem->link) }}">{{ $subMenuItem->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            </li>

                        @endforeach
                        @if (Illuminate\Support\Facades\Auth::user())
                            @php
                                $user = Illuminate\Support\Facades\Auth::user();
                            @endphp
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    {{ $user->name }} {{ $user->surname }}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @if ($user->role == 'admin')
                                        <li><a style="display: block"
                                                href="{{ route('admin.home') }}">{{ __('main.Dashboard') }}</a></li>
                                    @endif
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a href="{{ route('logout') }}" style="display: block"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="nav-icon fas fa-power-off"></i>
                                                {{ __('main.Logout') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">{{ __('main.Login') }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
