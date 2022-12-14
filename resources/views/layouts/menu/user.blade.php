<div class="sticky" style="margin-bottom: -55px; float: right">
    <div class="horizontal-main hor-menu clearfix">
        <div class="horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix">
                <div class="horizontal-overlapbg"></div>
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                        <a href="#" class="sub-icon"><i class="fe fe-user"></i>MY ACCOUNT<i class="fa fa-angle-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            @if(auth()->check())
                                <li aria-haspopup="true"><a href="#">MANAGE ASSETS</a></li>
                                <li aria-haspopup="true"><a href="{{route('user.transaction.index')}}">MY TRANSACTIONS</a></li>
                                <li aria-haspopup="true"><a href="{{route('user.profile.index')}}">PROFILE</a></li>
                                <li aria-haspopup="true"><a href="{{route('logout')}}">LOGOUT</a></li>
                            @else
                                <li aria-haspopup="true"><a href="{{route('login')}}">LOGIN</a></li>
                                <li aria-haspopup="true"><a href="{{route('register')}}">REGISTER</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
<div class="jumps-prevent" style="padding-top: 55px;"></div>
