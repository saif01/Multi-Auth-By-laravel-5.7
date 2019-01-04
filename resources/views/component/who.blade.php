
@if(Auth::guard('web')->check())
<p class="text-success">
	You Are Loged In As_User
</p>
@else
<p class="text-danger">
	You Are Loged Out As_User
</p>
@endif


@if(Auth::guard('admin')->check())
<p class="text-success">
	You Are Loged In As_Admin
</p>
@else
<p class="text-danger">
	You Are Loged Out As_Admin
</p>
@endif