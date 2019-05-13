<sidebar class="sidebar">
    <div class="sb-container">
        <p class="sb-brand">
            <a href="{{route('admin.dashboard')}}">
                <img class="img-fluid" src="../img/logo-white.png" alt="IVF1 Logo"> <span
                        class="title"><span>IVF1</span>Match</span>
            </a>
        </p>
        <ul class="sb-main-nav">
            <li class="sb-profile-container">
                <a href="#">
                <span class="sb-profile">
                    <img src="../img/avatar.png" alt="profile pic" class="img-fluid">
                </span>
                    <span id="full-name">{{ $user->fullName }}</span>
                </a>
                {{--Todd B Cutick</a>--}}
                <ul class="sb-sub-nav">
                    <li><a href="{{route('admin.user.profile')}}"><span class="initials">EP</span>Edit Profile</a></li>
                    <li><a href="{{route('admin.user.password.edit')}}"><span class="initials">EP</span>Change Password</a>
                    </li>
                </ul>
            </li>
            @role('Admin')
            <li class="dropdown">
                <a href="#">
                    <i class="fa fa-industry" aria-hidden="true"></i>DASHBOARD
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="{{route('admin.dashboard')}}"><span class="initials">O</span>Overview</a></li>
                    {{--<li><a href="dashboard.html"><span class="initials">S</span>Stats</a></li>--}}
                </ul>
            </li>
            @endrole
            @hasanyrole('admin|recipient')
            <li>
                <a href="#">
                    <i class="fa fa-code-fork" aria-hidden="true"></i>DONORS

                </a>
                <ul class="sb-sub-nav">
                    <li><a href="{{route('admin.donors.index')}}"><span class="initials">VA</span>View All</a></li>
                    <li><a href="donor.html"><span class="initials">AD</span>Active Donors</a></li>
                    <li><a href="donor.html"><span class="initials">ID</span>Inactive Donors</a></li>
                </ul>
            </li>
            @endhasanyrole()
            @role('Admin')
            <li>
                <a href="#">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>RECIPIENTS
                </a>
                <ul class="sb-sub-nav">
                    {{--<li><a href="recipient.html"><span class="initials">AN</span>Add New</a></li>--}}
                    <li><a href="{{route('admin.recipients.index')}}"><span class="initials">VA</span>View All</a></li>
                    <li><a href="{{route('admin.recipients.index')}}"><span class="initials">VA</span>Active</a></li>
                    <li><a href="{{route('admin.recipients.index')}}"><span class="initials">VA</span>InActive</a></li>
                </ul>
            </li>
            @endrole
            @hasanyrole('Admin|Recipient|Donor')
            <li>
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>MESSAGES
                    <span class="badge badge-danger">{{ sprintf('%01d', $message_count->unread)}}</span>
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="{{route('admin.messages.index')}}"><span class="initials">VA</span>View All</a></li>
                    <li><a href="{{route('admin.messages.index', ['filter' => 'read'])}}">
                            <span class="initials">VA</span>Read</a></li>
                    <li><a href="{{route('admin.messages.index', ['filter' => 'unread'])}}">
                            <span class="initials">VA</span>Unread</a></li>
                </ul>
            </li>
            @endhasanyrole
            @role('Admin')
            <li>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>USERS
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="{{route('admin.users.index')}}"><span class="initials">VA</span>View All</a></li>
                </ul>
            </li>
            @endrole
        </ul>
    </div>
</sidebar>