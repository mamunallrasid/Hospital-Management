<div class="sidebar-wrapper" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
    <div class="sidebar-header">
        <div>
            <img src="{{url('vertical/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">HMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bx bx-arrow-back"></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="index.html"><i class="bx bx-radio-circle"></i>Hospitals</a>
                </li>
                <li> <a href="#.html"><i class="bx bx-radio-circle"></i>Medicine Hub</a>
                </li>
                <li> <a href="#.html"><i class="bx bx-radio-circle"></i>Medicine Stores</a>
                </li>
                <li> <a href="#.html"><i class="bx bx-radio-circle"></i>Pathology</a>
                </li>
            </ul>
        </li>
            <li class="menu-label">Hospitals</li>

        @if(getLogInUserPermission('admin.patient.create') ||
         getLogInUserPermission('admin.patient.view') ||
         getLogInUserPermission('admin.patient.discharge') ||
         getLogInUserPermission('admin.patient.followup'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Patient Manage</div>
            </a>
            <ul class="mm-collapse">
                <ul class="menu-sub">
                    @if(getLogInUserPermission('admin.patient.create'))
                    <li class="menu-item add-user">
                        <a href="{{ route('admin.patient.create') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>Add Patient
                        </a>
                    </li>
                    @endif
                    @if(getLogInUserPermission('admin.patient.view'))
                    <li class="menu-item view-user">
                        <a href="{{ route('admin.patient.view') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>View Patient
                        </a>
                    </li>
                    @endif
                    @if(getLogInUserPermission('admin.patient.discharge'))
                    <li class="menu-item view-user">
                        <a href="{{ route('admin.patient.discharge') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>List Of Upcoming Discharges
                        </a>
                    </li>
                    @endif
                    @if(getLogInUserPermission('admin.patient.followup'))
                    <li class="menu-item view-user">
                        <a href="{{ route('admin.patient.followup') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>Follow-up Patient
                        </a>
                    </li>
                    @endif

                </ul>
            </ul>
        </li>
        {{-- Service-moduel Side Bar --}}
        @endif
        @if(getLogInUserPermission('admin.service.create') ||
        getLogInUserPermission('admin.service.view'))
       <li>
           <a class="has-arrow" href="javascript:;">
               <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
               </div>
               <div class="menu-title">Services Manage</div>
           </a>
           <ul class="mm-collapse">
               <ul class="menu-sub">
                   @if(getLogInUserPermission('admin.service.create'))
                   <li class="menu-item add-user">
                       <a href="{{ route('admin.service.create') }}" class="menu-link">
                           <i class="bx bx-radio-circle"></i>Add Service
                       </a>
                   </li>
                   @endif
                   @if(getLogInUserPermission('admin.patient.view'))
                   <li class="menu-item view-user">
                       <a href="{{ route('admin.service.view') }}" class="menu-link">
                           <i class="bx bx-radio-circle"></i>View Service
                       </a>
                   </li>
                   @endif
               </ul>
           </ul>
       </li>
       @endif
        <li class="menu-label">Medicines</li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bx bx-cookie"></i>
                </div>
                <div class="menu-title">Medicines Hub</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bx bx-cookie"></i>
                </div>
                <div class="menu-title">Medicines Stores</div>
            </a>
        </li>


        <li class="menu-label">Pathology</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Add Tests</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 1</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 2</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 3</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 3</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 4</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Test Category 5</a>
                </li>

            </ul>
        </li>

        <li class="menu-label">Payroll</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Payroll</div>
            </a>
        </li>

        <li class="menu-label">Mastar Accounts</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Manage Accounts</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Add Bank Balance</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i> Add Cash Balance</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Category</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Patient Payments</a>
                </li>


            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Transaction</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Patient Transaction</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Patient Payment</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Bank Transaction</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Cash Transaction</a>
                </li>
            </ul>
        </li>










        <li class="menu-label">Settings</li>

        @if(getLogInUserPermission('admin.user.create') || getLogInUserPermission('admin.user.view'))
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Manage Users</div>
            </a>
            <ul class="mm-collapse">
                <ul class="menu-sub">
                    @if(getLogInUserPermission('admin.user.create'))
                    <li class="menu-item add-user">
                        <a href="{{ route('admin.user.create') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>Add User
                        </a>
                    </li>
                    @endif
                    @if(getLogInUserPermission('admin.user.view'))
                    <li class="menu-item view-user">
                        <a href="{{ route('admin.user.view') }}" class="menu-link">
                            <i class="bx bx-radio-circle"></i>View User
                        </a>
                    </li>
                    @endif

                </ul>
            </ul>
        </li>
        @endif
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-message-square-edit"></i>
                </div>
                <div class="menu-title">Manage Stock</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Add Stock </a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Patient Payment</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Bank Transaction</a>
                </li>
                <li> <a href="#"><i class="bx bx-radio-circle"></i>Cash Transaction</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Authentication</div>
            </a>
            <ul class="mm-collapse">
                @if(getLogInUserPermission('admin.role.create') || getLogInUserPermission('admin.role.view'))
                <li>
                    <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Role Manage</a>
                    <ul class="mm-collapse">
                        @if(getLogInUserPermission('admin.role.create'))
                        <li class="menu-item add-role">
                            <a href="{{ route('admin.role.create') }}" class="menu-link">
                                <i class="bx bx-radio-circle"></i>Add Role
                            </a>
                        </li>
                        @endif
                        @if(getLogInUserPermission('admin.role.view'))
                        <li class="menu-item view-role">
                            <a href="{{ route('admin.role.view') }}" class="menu-link">
                                <i class="bx bx-radio-circle"></i>View Role
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if(getLogInUserPermission('admin.permission.create') || getLogInUserPermission('admin.permission.view'))
                <li>
                    <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Permission Manage</a>
                    <ul class="mm-collapse">
                        @if(getLogInUserPermission('admin.permission.create'))
                            <li class="menu-item add-permission">
                                <a href="{{ route('admin.permission.create') }}" class="menu-link">
                                    <i class="bx bx-radio-circle"></i>Add Permission
                                </a>
                            </li>
                            @endif
                            @if(getLogInUserPermission('admin.permission.view'))
                            <li class="menu-item view-permission">
                                <a href="{{ route('admin.permission.view') }}" class="menu-link">
                                    <i class="bx bx-radio-circle"></i>View Permission
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                @endif

            </ul>
        </li>
        <li>
            <a href="##user-profile.html">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>

        <li class="menu-label">Charts &amp; Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#charts-apex-chart.html"><i class="bx bx-radio-circle"></i>Apex</a>
                </li>
                <li> <a href="#charts-chartjs.html"><i class="bx bx-radio-circle"></i>Chartjs</a>
                </li>
                <li> <a href="#charts-highcharts.html"><i class="bx bx-radio-circle"></i>Highcharts</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-map-alt"></i>
                </div>
                <div class="menu-title">Maps</div>
            </a>
            <ul class="mm-collapse">
                <li> <a href="#map-google-maps.html"><i class="bx bx-radio-circle"></i>Google Maps</a>
                </li>
                <li> <a href="#map-vector-maps.html"><i class="bx bx-radio-circle"></i>Vector Maps</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
            </a>
            <ul class="mm-collapse">
                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Level One</a>
                    <ul class="mm-collapse">
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-radio-circle"></i>Level Two</a>
                            <ul class="mm-collapse">
                                <li> <a href="javascript:;"><i class="bx bx-radio-circle"></i>Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--<li>-->
        <!--	<a href="javascript:;">-->
        <!--		<div class="parent-icon"><i class="bx bx-folder"></i>-->
        <!--		</div>-->
        <!--		<div class="menu-title">Documentation</div>-->
        <!--	</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--	<a href="https://themeforest.net/user/codervent" target="_blank">-->
        <!--		<div class="parent-icon"><i class="bx bx-support"></i>-->
        <!--		</div>-->
        <!--		<div class="menu-title">Support</div>-->
        <!--	</a>-->
        <!--</li>-->
    </ul>
    <!--end navigation-->
</div>
</div>
</div>
</div>
<div class="simplebar-placeholder" style="width: auto; height: 1114px;"></div>
</div>
<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
    <div class="simplebar-scrollbar" style="width: 0px; display: none;">
    </div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;">
        <div class="simplebar-scrollbar" style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;">
        </div>
    </div>
</div>
