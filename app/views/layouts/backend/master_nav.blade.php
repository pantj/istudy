<div class="am-collapse am-topbar-collapse" id="collapse-head">
  @if (Auth::check())
    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right">
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> {{{ Auth::user()->name }}} <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="{{ URL::to('mlogout') }}"><span class="am-icon-power-off"></span> Logout</a></li>
        </ul>
      </li>
    </ul>
  @else
	<div class="am-topbar-right">
        <a href="{{ URL::to('register') }}" class="am-btn am-btn-secondary am-topbar-btn am-btn-sm topbar-link-btn"><span class="am-icon-pencil"></span> Register</a>
    </div>
	
    <div class="am-topbar-right">
        <a href="{{ URL::to('mlogin') }}" class="am-btn am-btn-primary am-topbar-btn am-btn-sm topbar-link-btn"><span class="am-icon-user"></span> Login</a>
    </div>
  @endif
</div>