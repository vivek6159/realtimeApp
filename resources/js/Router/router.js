import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import AppLogin from '../components/Login/AppLogin.vue'
import AppLogout from '../components/Login/AppLogout.vue'
import AppSignup from '../components/Login/AppSignup.vue'
import AppForum from '../components/forum/AppForum.vue'
const routes = [
    {
        path: '/login',
        component: AppLogin
    },
    {
        path: '/logout',
        component: AppLogout
    },
    {
        path: '/signup',
        component: AppSignup
    },
    {
        path: '/forum',
        component: AppForum,
        name: 'forum'
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router