        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="dashboard.php" class="logo logo-small">
                    <img src="assets/img/logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
              <!-- Mobile Menu Toggle -->
              <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

             <!-- Header Right Menu -->
             <ul class="nav user-menu">
                <li  class="nav-item dropdown has-arrow">
                <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li>
             </ul>
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"> 
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span>DASHBOARD</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="dashboard.php">HOME</a></li>
                                <li><a href="fd.php">NEW OUTPATIENT ENTRY</a></li>
                                <li><a href="search.php">IN PATIENT REGISTRATION</a></li>
                                <li><a href="patient_bdetails.php">PATIENT DETAILS</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-address-book"></i> <span>BILLING ACTIVITY</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="search-ip.php">IN PATIENT BILLING ACTIVITY</a></li>
                                <!-- <li><a href="search-eop.php">OUT PATIENT BILLING ENTRY</a></li> -->
                                <li><a href="search-aop.php">OUT PATIENT BILLING ACTIVITY</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-address-book"></i> <span>BILLS</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="search-ipb.php">IN PATIENT VIEW BILLS</a></li>
                                <li><a href="search-sopb.php">OUT PATIENT VIEW BILLS</a></li>
                                <li><a href="iosearch.php">IN PATIENT BILLS</a></li>
                                <li><a href="searchfop.php">OUT PATIENT BILLS</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-filter"></i><span>FILTERS</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="edd.php">EDD</a></li>
                            <li><a href="patient_list.php">Patient List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">

                            <a href="#"><i class="fa fa-list-alt"></i><span>DISCHARGE SUMMARY</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="search-discharge.php">Discharge Summary</a></li>
                            </ul>

                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book"></i> <span>Booking</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="prebooking.php">Booking</a></li>
                                <li><a href="prebooking_list.php">Today Booking List</a></li>
                            </ul>
                        </li>

                        <li class="submenu">

                            <a href="#"><i class="fas fa-user"></i><span>PROFILE</span> <span class="menu-arrow"></span></a>
                            <ul>
                                 <li><a href="dashboard.php"><i class="fas fa-home fa-lx"></i>HOME</a></li>
                                <li><a href="logout.php"><i class="fas fa-power-off fa-lx"></i> LOG OUT</a></li>
                            </ul>

                        </li>
                       
                        <li class="submenu">
                            <a href="#"><i class="fas fa-cogs"></i> <span>SETTINGS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="patient_details.php">Update Patient Profile</a></li>
                                <li><a href="search-usf.php">Update Surgery Profiles</a></li>
                                <li><a href="search-upf.php">Update Pregnancy Profiles</a></li>
                                <!-- <li><a href="fees.php">Charges update</a></li> -->
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->