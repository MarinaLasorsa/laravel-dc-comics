<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="d-flex align-items-center justify-content-between py-2">
                <img class="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}"/>
                <ul class="d-flex gap-4">
                    <li><a href="{{route('comics.index')}}">HOME</a></li>
                </ul>
                <input type="text" name="search" placeholder="Search"/>
            </div>
        </div>
    </div>
</header>