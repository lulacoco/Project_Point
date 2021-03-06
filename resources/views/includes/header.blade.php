<nav class="navbar" role="navigation" aria-label="dropdown navigation">

    <div class="navbar-menu">
        <div class="dropdown">
            <div id="dropdown-trigger">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                       <span id="icon-wrapper">
                            <i class="fas fa-bars"></i>
                        </span>
                </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                    <a href="/" class="dropdown-item is-active">
                        Strona Główna
                    </a>
                    <a href="events" class="dropdown-item is-active">
                        Grafik
                    </a>
                    <a href="groups" class="dropdown-item is-active">
                        Grupy
                    </a>
                    <a href="workshops" class="dropdown-item is-active">
                        Wydarzenia
                    </a>
                    <a href="about" class="dropdown-item is-active">
                        Instruktorzy
                    </a>
                    <a href="contact" class="dropdown-item is-active">
                        Kontakt
                    </a>
                    <hr class="dropdown-divider">
                    @if (Auth::user() !== null)
                        <a href="calendar" class="dropdown-item is-active">
                            Twój kalendarz
                        </a>
                        <a href="logout" class="dropdown-item is-active">
                            Wyloguj się
                        </a>
                    @else
                        <a href="login" class="dropdown-item is-active">
                            Zaloguj się
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-name">
        <div id="navbar-name">
            Point Dance Studio
        </div>
    </div>

    <div class="navbar-logo">
        @if (Auth::user() !== null)
            <div class="dropdown">
                <div id="pic-frame">

                    @foreach($headerData as $fieldName)
                         {{--@if((mysql_num_rows($fieldName) !=0 ) && (!empty($row['src'])))--}}
                                {{--<img src="http://electronics-lab.com/community/uploads/monthly_2017_07/M.png.94343130a0013c7107d988d82c20ddfa.png"--}}
                                     {{--class="inner-pic">--}}
                            {{--@else--}}
                                <img src="{{$fieldName->src}}" class="inner-pic">
                            {{--@endif--}}
                    @endforeach

                        {{--<img src="https://scontent-frt3-1.xx.fbcdn.net/v/t1.0-0/p206x206/23844898_10213239778101532_7247512557113780518_n.jpg?_nc_cat=0&oh=79e5868ba0193451bff9d92046267e6f&oe=5BC7C47E"--}}
                         {{--class="inner-pic">--}}
                    <img src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/39878917_2427403967284642_3022746254338686976_n.jpg?_nc_cat=0&oh=c2bd966db3fd550cac705f2cded2c878&oe=5BF06218"
                         class="outer-pic">
                </div>
                <div class="dropdown-menu" id="dropdown-logo-menu" role="menu">
                    <div class="dropdown-content" id="dropdown-logo-content">
                        @if (Auth::user() !== null)
                            <a href="profile" class="dropdown-item is-active">
                                Twój profil
                            </a>
                            <hr class="dropdown-divider">
                            <a href="logout" class="dropdown-item is-active">
                                Wyloguj się
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <a href="/" class="navbar-logo">
                <img src="https://scontent.fpoz2-1.fna.fbcdn.net/v/t1.0-9/39878917_2427403967284642_3022746254338686976_n.jpg?_nc_cat=0&oh=c2bd966db3fd550cac705f2cded2c878&oe=5BF06218">
            </a>
        @endif
    </div>
</nav>

