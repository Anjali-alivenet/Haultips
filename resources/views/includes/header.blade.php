<header>
        <div class="container">
            <div>
                <aside class="logo pull-left"><a href="{{url('home')}}"> <img src="{{ asset('public/assets/img/problam1.png')}}" alt=""> </a></aside>
                <nav class="menuicon">
                    <ul class="list-inline">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="serch-icon"></span>
                            </a>
                            <div class="dropdown-menu right menusearch">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Search" />
                                    <span class="input-group-btn">
                                    <input type="submit" class="btn btn-info" value="Go">
                                </span>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="cart-icon"></span>
                            </a>
                            <ul class="dropdown-menu right cartmenu">
                                <li>My Cart</li>
                                <li>$ 0.00</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--
                            <nav class="navbar pull-right">
                                <ul class="list-inline">
                                    <li><a href="#" class="active">BECOME A CLEANER</a> </li>
                                    <li><a href="#">HOW IT WORKS</a> </li>
                                    <li><a href="#">HELP</a> </li>
                                    <li><a href="#">SIGN IN</a></li>
                                </ul>
                            </nav>
                -->

                <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle menutoggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

                <div class="navbar-inverse side-collapse in pull-right menuside">
                    <nav class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="active">BECOME A CLEANER</a> </li>
                            <li><a href="#">HOW IT WORKS</a> </li>
                            <li><a href="{{url('help')}}">HELP</a> </li>
                            <?php
                            $session = Session::get('user_id');
                            ?>
                            @if(!Session::has('user_id'))
                            <li><a href="javascript:void(0);" id="showpopup" >SIGN IN</a></li>
                                @else
                                <?php
                                    $user=\App\tbl_user::where('id',Session::get('user_id'))->first();
                                ?>
                                <li><a href="{{url('logout')}}">{{$user->first_name}}(LOG OUT)</a></li>
                                @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>