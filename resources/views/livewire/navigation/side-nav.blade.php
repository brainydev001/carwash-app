{{-- sidenav --}}
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- logo -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        {{-- sale terminal --}}
        <a href="{{ url('sale-terminal') }}" class="btn btn-success w-100 mb-3">
            <i class="fe fe-user"></i>
            Sale terminal
        </a>

        {{-- check if sections has items --}}
        @if (count($sections) > 0)

            {{-- loop through sections --}}
            @foreach ($sections as $section)
                {{-- add section title if not null --}}
                @if ($section['title'] != null)
                    {{-- section title --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span>{{ $section['title'] }}</span>
                    </p>
                @endif

                {{-- check if section has menu items --}}
                @if (count($section['menuItems']) > 0)
                    {{-- parent ul element --}}
                    <ul class="navbar-nav flex-fill w-100 mb-2">

                        {{-- loop through section's menu items --}}
                        @foreach ($section['menuItems'] as $menuItem)
                            <li class="nav-item w-100">
                                <a href="{{ $menuItem['url'] }}" class="nav-link">
                                    <i class="fe {{ $menuItem['icon'] }} fe-16"></i>
                                    <span class="ml-3 item-text">{{ $menuItem['name'] }}</span>

                                    {{-- add notification badge to item --}}
                                    @if (array_key_exists('badge', $menuItem) && $menuItem['badge'] > 0)
                                        <span class="badge badge-pill p-1 badge-primary">
                                            {{ $menuItem['badge'] }}
                                        </span>
                                    @endif

                                </a>
                            </li>
                        @endforeach

                    </ul>
                @endif
            @endforeach

        @endif

    </nav>
</aside>
