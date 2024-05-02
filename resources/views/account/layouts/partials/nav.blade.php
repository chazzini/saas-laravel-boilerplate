<div class="list-group">
    <a href="{{route('account.index')}}" @class( request()->routeIs('account.index')?
["list-group-item","list-group-item-action", "active"] :
["list-group-item", "list-group-item-action"])>Account</a>
    <a href="{{route('account.profile.index')}}" @class( request()->routeIs('account.profile.index')?
["list-group-item","list-group-item-action", "active"] :
["list-group-item", "list-group-item-action"])>Profile</a>
    <a href="{{route('account.password.index')}}" @class( request()->routeIs('account.password.index')?
["list-group-item","list-group-item-action", "active"] :
["list-group-item", "list-group-item-action"])>Password</a>
</div>
