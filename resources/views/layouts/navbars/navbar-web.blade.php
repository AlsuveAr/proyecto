@auth()
    @include('layouts.navbars.navs-web.auth')
@endauth
    
@guest()
    @include('layouts.navbars.navs-web.guest')
@endguest