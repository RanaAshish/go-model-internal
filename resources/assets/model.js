import Vue from 'vue';
import VueRouter from 'vue-router';
import store from './store.js';
import Model from './Model';

Vue.use(VueRouter)

var routes = [{
    path: '/',
    component: resolve => require(['./model_layout.vue'], resolve),
    children: [
        {
            path: '',
            component: resolve => require(['./components/model/social.vue'], resolve),
            meta: {
                title: "Social",
                breadcrumb: `<li><a href="/"><i class="ti-world"></i> Social</a></li>`
            }
        }, {
            path: 'profile',
            component: resolve => require(['./components/model/profile.vue'], resolve),
            meta: {
                title: "Mein Konto",
                breadcrumb: `<li><a href="#/profile"><i class="ti-user"></i> Mein Konto</a></li>`
            }
        }, {
            path: 'resume',
            component: resolve => require(['./components/model/resume.vue'], resolve),
            meta: {
                title: "Mein Model Profile",
                breadcrumb: `<li><a href="#/resume"><i class="ti-archive"></i> Mein Model Profile</a></li>`
            }
        }, {
            path: 'portfolio',
            component: resolve => require(['./components/model/portfolio.vue'], resolve),
            meta: {
                title: "Mein Beautiful Photos",
                breadcrumb: `<li><a href="#/portfolio"><i class="ti-gallery"></i> Mein Beautiful Photos</a></li>`
            }
        }, {
            path: 'shortlisted_jobs',
            component: resolve => require(['./components/model/shortlisted_jobs.vue'], resolve),
            meta: {
                title: "Jobs In The Selection List",
                breadcrumb: `<li><a href="#/shortlisted_jobs"><i class="ti-heart"></i> Jobs In The Selection List</a></li>`
            }
        }, {
            path: 'applied_jobs',
            component: resolve => require(['./components/model/applied_jobs.vue'], resolve),
            meta: {
                title: "Jobs Applications",
                breadcrumb: `<li><a href="#/applied_jobs"><i class="ti-briefcase"></i> Jobs Applications</a></li>`
            }
        }, {
            path: 'job_alerts',
            component: resolve => require(['./components/model/job_alerts.vue'], resolve),
            meta: {
                title: "Job Alarms",
                breadcrumb: `<li><a href="#/job_alerts"><i class="ti-bell"></i> Job Alarms</a></li>`
            }
        }, {
            path: 'cv',
            component: resolve => require(['./components/model/cv.vue'], resolve),
            meta: {
                title: "Mein Online Portfolio",
                breadcrumb: `<li><a href="#/cv"><i class="ti-notepad"></i> Mein Online Portfolio</a></li>`
            }
        }, {
            path: 'change_password',
            component: resolve => require(['./components/model/change_password.vue'], resolve),
            meta: {
                title: "Change Password",
                breadcrumb: `<li><a href="#/change_password"><i class="ti-key"></i> Change Password</a></li>`
            }
        }]
}, {
    path: '/500',
    component: resolve => require(['./components/model/500.vue'], resolve),
    meta: {
        title: "500",
        breadcrumb: ``
    }
}, {
    path: '/login',
    component: resolve => require(['./components/model/login.vue'], resolve),
    meta: {
        title: "Login",
        breadcrumb: ``
    }
}, {
    path: '/register',
    component: resolve => require(['./components/model/register.vue'], resolve),
    meta: {
        title: "Register",
        breadcrumb: ``
    }
}, {
    path: '/lockscreen',
    component: resolve => require(['./components/model/lockscreen.vue'], resolve),
    meta: {
        title: "Lockscreen",
        breadcrumb: ``
    }
}, {
    path: '/reset_password',
    component: resolve => require(['./components/model/reset_pass.vue'], resolve),
    meta: {
        title: "Reset Password",
        breadcrumb: ``
    }
}, {
    path: '*',
    component: resolve => require(['./components/model/404.vue'], resolve),
    meta: {
        title: "404",
        breadcrumb: ``
    }
}];


const router = new VueRouter({
    routes,
    linkActiveClass: "active"
});
router.beforeEach((to, from, next) => {
    $('.preloader img').fadeIn("fast");
    $('.preloader').fadeIn("fast");
    $("#menu .sub-menu").addClass("hidden");
    $("#menu").find("ul,li").removeClass("active collapse in").css("height", "auto");
    $("#menu a").off("click");
    next()
})

router.afterEach((to, from) => {
    document.title = to.meta.title;
    //scroll to top when changing pages
    $('body,html').animate({
        scrollTop: 0
    }, 300);
    $('.row-offcanvas').removeClass('active').removeClass("relative");
    $('.left-side').removeClass("collapse-left");
    $(".right-side").removeClass("strech");
    setTimeout(function () {
        $("#menu").find("li.active").parents("li").addClass("active");
        $("#menu .sub-menu").removeClass("hidden");
        $("#menu").metisMenu();
        $('.preloader img').fadeOut("slow");
        $('.preloader').fadeOut("slow");
    }, 0);
});
new Vue({
    router,
    store,
    template: '<Model/>',
    components: {Model}
}).$mount('#app');
