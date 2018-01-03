
<ul id="nav-top">
  <li class="nav-top-left"> <img style="width:60%;height:60%;margin:10px 50px 10px" src="uploads/logo.svg" alt=""> </li>
  <li class="nav-top-right"><a href="#"><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span><br>CONTACT</a></li>
  <li class="nav-top-right"><a href="#"><span><i class="fa fa-user-o" aria-hidden="true"></i></span><br>LOG IN</a></li>
    <li class="nav-top-right"><a href="#"><span><i class="fa fa-credit-card" aria-hidden="true"></i></span><br>CASH IN</a></li>

</ul>

<ul id="nav">
    <li class="{{ Request::is('home') ? 'active' : '' }} {{ Request::is('/') ? 'active' : '' }}"><a href="{{ URL::to('home') }}"> <span><i class="fa fa-home" aria-hidden="true"></i></span> <strong>HOME</strong></a></li>
    <li class="{{ Request::is('cocreate') ? 'active' : '' }}"><a href="{{ URL::to('cocreate') }}"><span><i class="fa fa-heartbeat" aria-hidden="true"></i></span> <strong>CO-CREATE</strong></a>
    </li>
      <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ URL::to('experience') }}"><span><i class="fa fa-mobile" aria-hidden="true"></i></span> <strong>EXPERIENCE</strong></a></li>
    <li class="{{ Request::is('lifehacks') ? 'active' : '' }}"><a href="{{ URL::to('lifehacks') }}"><span><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> </span><strong>LIFEHACKS</strong></a></li>
    <li class="{{ Request::is('express') ? 'active' : '' }}"><a href="{{ URL::to('express') }}"><span><i class="fa fa-comment" aria-hidden="true"></i></span> <strong>EXPRESS</strong></a></li>
</ul>
