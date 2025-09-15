<style>
    .app-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030; 
    background: #fff; 
    height: 70px; 
}

body {
    padding-top: 70px; 
}

</style>

<!-- App header starts -->
			<div class="app-header d-flex align-items-center fixed-top shadow-sm">

				<!-- Toggle buttons start -->
				<div class="d-flex">
					<button class="toggle-sidebar" id="toggle-sidebar">
						<i class="bi bi-list lh-1"></i>
					</button>
					<button class="pin-sidebar" id="pin-sidebar">
						<i class="bi bi-list lh-1"></i>
					</button>
				</div>
				<!-- Toggle buttons end -->

				<!-- App brand starts -->
				<div class="app-brand py-2 ms-3">
					<a href="index.html" class="d-sm-block d-none">
						<img src="assets/images/fix/logodis.png" class="logo" />
					</a>
				</div>
				<!-- App brand ends -->

				<!-- App header actions start -->
				<div class="header-actions col">
					<div class="d-lg-flex d-none">
						<div class="dropdown border-start">
							<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-bell fs-4 lh-1 text-secondary"></i>
								<span class="count-label warning"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end shadow-lg">
								<h5 class="fw-semibold px-3 py-2 text-primary">Notifications</h5>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-success rounded-circle me-3">
											<span class="fw-bold text-white">DS</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Douglass Shaw</h6>
											<p class="mb-1">
												Membership has been ended.
											</p>
											<p class="small m-0 text-secondary">Today, 07:30pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2 border-bottom">
										<div class="icon-box md bg-danger rounded-circle me-3">
											<span class="fw-bold text-white">WG</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Willie Garrison</h6>
											<p class="mb-1">
												Congratulate, James for new job.
											</p>
											<p class="small m-0 text-secondary">Today, 08:00pm</p>
										</div>
									</div>
								</div>
								<div class="dropdown-item">
									<div class="d-flex py-2">
										<div class="icon-box md bg-warning rounded-circle me-3">
											<span class="fw-bold text-white">TJ</span>
										</div>
										<div class="m-0">
											<h6 class="mb-1 fw-semibold">Terry Jenkins</h6>
											<p class="mb-1">
												Lewis added new schedule release.
											</p>
											<p class="small m-0 text-secondary">Today, 09:30pm</p>
										</div>
									</div>
								</div>
								<div class="d-grid mx-3 my-1">
									<a href="javascript:void(0)" class="btn btn-primary">View all</a>
								</div>
							</div>
						</div>
						<div class="dropdown border-start">
						</div>
					</div>
					<div class="dropdown ms-2">
						<a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
							role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/user.png" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
							<span class="ms-2 text-truncate d-lg-block d-none">Anne Santiago</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow-lg">
							<div class="header-action-links mx-3 gap-2">
								<a class="dropdown-item" href="profile.html"><i class="bi bi-person text-primary"></i>Profile</a>
								<a class="dropdown-item" href="settings.html"><i class="bi bi-gear text-danger"></i>Settings</a>
							</div>
							<div class="mx-3 mt-2 d-grid">
								<a href="login.html" class="btn btn-primary btn-sm">Logout</a>
							</div>
						</div>
					</div>
				</div>
				<!-- App header actions end -->

			</div>
			<!-- App header ends -->