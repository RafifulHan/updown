@extends('template.home')

<header>
    <div class="bg-center">
        <div class="head-content">
            <div class="logo">
                <h2>SHMusic</h2>
            </div>

            <div class="social-media">
                <img src="img/icon/ic_gb.png" alt="" class="ic-gb"> 
                <img src="img/icon/ic_ig.png" alt="" class="ic-ig">
                <img src="img/icon/ic_fb.png" alt="" class="ic-fb">
            </div>

            <div class="search">
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Find Music..." autocomplete="off">
                    <button type="submit" name="submit-btn"><img src="img/icon/ic_search.png" alt=""></button>
                </form>
            </div>
        </div>

        <div style="clear: both;"></div>   

        <div class="relog">
            <form action="" method="post">
                <h1>Play your music now!!!
                <br>Register and Login To Upload and Download music here</h1>
                <button type="submit" name="login">Login</button>
                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
    
</header>

@section('content')

    <div class="top-music">
            <div class="content-title">
                <h1>Top Music</h1>
            </div>

            {{-- @foreach ($audios as $audio) --}}
            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-img">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-image">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>

            <div class="box">
                <div class="list-music">
                    <div class="music-img">
                        <img src="/img/music-img/mena.jpg" alt="">
                    </div>
                    <li>A Whole New World - Mena Massoud and Naomi Scout</li>
                    {{-- <li>{{ $audio->id }}</li> --}}
                    {{-- <li><a href="">{{ $audio->title }}</a></li> --}}
                </div>
            </div>
    </div>


@endsection

</body>
</html>