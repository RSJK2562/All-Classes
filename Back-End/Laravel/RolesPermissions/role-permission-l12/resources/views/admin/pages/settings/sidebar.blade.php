    <div class="col-xl-3 col-lg-12 theiaStickySidebar">

        <div class="card mb-3 mb-xl-0">
            <div class="card-body">
                <div class="settings-sidebar">
                    <h5 class="mb-3 fs-17">General Settings</h5>
                    <div class="list-group list-group-flush settings-sidebar">
                        <a href="{{ route('profile.edit') }}"
                            class="d-block p-2 fw-medium {{ request()->routeIs('profile.edit') ? 'active' : '' }}">Profile</a>
                        <a href="{{ route('profile.security') }}"
                            class="d-block p-2 fw-medium {{ request()->routeIs('profile.security') ? 'active' : '' }}">Security</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
