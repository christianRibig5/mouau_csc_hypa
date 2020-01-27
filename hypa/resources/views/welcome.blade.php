@include('includes.header')

        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ asset('/../images/logos/mouau_logo.png') }}" width="300px">
                </div>

                <div class="links">
                     <a href="#">Welcome Hyper!</a>
                     <br/>Department of Computer Science
                   <!-- <br/>
                     <a href="{{ url('/students/register') }}">Sign up as Student</a> -->
                </div>
            </div>
        </div>

@include('includes.footer')