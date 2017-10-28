<?php

$lang = Lang::locale();

?>
<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.html">Home</a>
					<ul>
						<li><a href="index.html">Home #1</a></li>
						<li><a href="index-2.html">Home #2</a></li>
						<li><a href="index-3.html">Home #3</a></li>
						<li><a href="index-4.html">Home #4</a></li>
						<li><a href="index-5.html">Home #5</a></li>
					</ul>
				</li>

				<li><a href="#">Pages</a>
					<ul>
						<li><a href="job-page.html">Job Page</a></li>
						<li><a href="job-page-alt.html">Job Page Alternative</a></li>
						<li><a href="resume-page.html">Resume Page</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
						<li><a href="icons.html">Icons</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</li>

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Jobs</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
						<li><a href="add-resume.html">Add Resume</a></li>
						<li><a href="manage-resumes.html">Manage Resumes</a></li>
						<li><a href="job-alerts.html">Job Alerts</a></li>
					</ul>
				</li>

				<li><a href="#">For Employers</a>
					<ul>
						<li><a href="add-job.html">Add Job</a></li>
						<li><a href="manage-jobs.html">Manage Jobs</a></li>
						<li><a href="manage-applications.html">Manage Applications</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
					</ul>
				</li>

				<li><a href="{{route('list-post',['language'=>$lang])}}" id="current">Blog</a></li>
			</ul>


			<ul class="responsive float-right">
				<li><a href="my-account.html#tab2"><i class="fa fa-user"></i> {{ __('main-page.nav_signup') }}</a></li>
				<li><a href="my-account.html"><i class="fa fa-lock"></i> {{ __('main-page.nav_login')}}</a></li>
			</ul>

		</nav>