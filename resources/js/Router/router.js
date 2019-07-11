import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import AppLogin from '../components/Login/AppLogin.vue'
const routes = [
    {
        path: '/login',
        component: AppLogin
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router