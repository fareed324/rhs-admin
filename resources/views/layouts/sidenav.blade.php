 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Main</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('add_doctor') }}">Add</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>

                    <li class="nav-label">All List</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-list menu-icon"></i> <span class="nav-text">List</span>
                        </a>
                        @foreach (\App\Models\add_doctor::get() as $row)
                        <ul>
                            <li>
                                <a href="{{ url('doctor',$row->id) }}"> {{ $row->name }}</a>
                            </li>
                        </ul>
                        @endforeach

                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
