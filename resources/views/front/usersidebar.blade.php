
<div id="sidebar" class="span3">
    <div class="well well-small">   
        @if(Auth::check())
        {{Auth::user()->name}}
        <ul class="nav nav-list">
            <li><a href="{{url('/')}}/user/profil/{{Auth::user()->ID}}"><span class="icon-chevron-right"></span>User Profile</a></li>
            <li><a href="{{url('/')}}/user/siparis/{{Auth::user()->ID}}"><span class="icon-chevron-right"></span>User Siparişi</a></li>
            <li><a href="{{url('/')}}/user/comments/{{Auth::user()->ID}}"><span class="icon-chevron-right"></span>User Comments</a></li>
            <li><a href="{{url('/')}}/user/favori/{{Auth::user()->ID}}"><span class="icon-chevron-right"></span>User Favoriler</a></li>
            <li><a href="{{url('/')}}/logout"><span class="icon-chevron-right"></span>Logout</a></li>
           
        </ul>
        @endif
    </div>
</div>

  

