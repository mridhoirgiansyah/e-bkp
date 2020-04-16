<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
                        @if(auth()->user()->role == 'kesiswaan')
						<li><a href="/bkp/public/{{auth()->user()->role }}/dashboard" class="@yield('active-dashboard')"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/bkp/public/{{auth()->user()->role }}/reward" class="@yield('active-reward')"><i class="lnr lnr lnr-pencil"></i> <span>Reward</span></a></li>
						<li><a href="/bkp/public/{{auth()->user()->role }}/punishment" class="@yield('active-punishment')"><i class="lnr lnr lnr-pencil"></i> <span>Punishment</span></a></li>
                        <li><a href="/bkp/public/{{auth()->user()->role }}/datasiswa" class="@yield('active-data')"><i class="lnr lnr-chart-bars"></i> <span>Data Siswa</span></a></li>
                        @endif

                        @if(auth()->user()->role == 'pembimbing')
						<li><a href="/bkp/public/{{auth()->user()->role }}/dashboard" class="@yield('active-dashboard')"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/bkp/public/{{auth()->user()->role }}/reward" class="@yield('active-reward')"><i class="lnr  lnr-pencil"></i> <span>Reward</span></a></li>
						<li><a href="/bkp/public/{{auth()->user()->role }}/punishment" class="@yield('active-punishment')"><i class="lnr  lnr-pencil"></i> <span>Punishment</span></a></li>
                        @endif
						<!-- <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
