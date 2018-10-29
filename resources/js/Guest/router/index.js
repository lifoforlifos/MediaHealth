import Vue from 'vue'
import VueRouter from 'vue-router'

import Index from '../views/Index.vue'
import Blog from '../views/Blog.vue'
import About from '../views/About.vue'
import Portfolio from '../views/Portfolio.vue'
import Contact from '../views/Contact.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Index },
        { path: '/blog', component: Blog },
        { path: '/about', component: About },
        { path: '/portfolio', component: Portfolio },
        { path: '/contact', component: Contact },
    ]
})

router.beforeEach(function (to, from, next) {
	window.scrollTo(0, 0)
	next()
})

export default router
