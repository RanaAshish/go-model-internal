<template>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="javascript:void(0)">
                            <img :src="this.$store.state.user.picture" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading user_name_max" v-text="this.$store.state.user.name"></h4>
                            <ul class="icon-list">
                                <li>
                                    <router-link to="/profile" title="Profile" exact>
                                        <i class="ti-user"></i>
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/lockscreen" title="Lock" exact>
                                        <i class="ti-lock"></i>
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/edit_user" title="Settings" exact>
                                        <i class="ti-settings"></i>
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/logout" title="Logout" exact>
                                        <i class="ti-shift-right"></i>
                                    </router-link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <router-link to="/" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-world"></i><span class="mm-text">Social</span></a>
                    </router-link>
                    <router-link to="/profile" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-user"></i><span class="mm-text">Mein Konto</span></a>
                    </router-link>
                    <router-link to="/resume" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-archive"></i><span class="mm-text">Mein Model Profile</span></a>
                    </router-link>
                    <router-link to="/portfolio" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-gallery"></i><span class="mm-text">Mein Beautiful Photos</span></a>
                    </router-link>
                    <router-link to="/shortlisted_jobs" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-heart"></i><span class="mm-text">Jobs In The Selection List</span></a>
                    </router-link>
                    <router-link to="/applied_jobs" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-briefcase"></i><span class="mm-text">Jobs Applications</span></a>
                    </router-link>
                    <router-link to="/job_alerts" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-bell"></i><span class="mm-text">Job Alarms</span></a>
                    </router-link>
                    <router-link to="/cv" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-notepad"></i><span class="mm-text">Mein Online Portfolio</span></a>
                    </router-link>
                    <router-link to="/change_password" tag="li" exact>
                        <a class="logo"><i class="menu-icon ti-key"></i><span class="mm-key">Change Password</span></a>
                    </router-link>
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
    export default {
        name: "left-side"
    }
</script>