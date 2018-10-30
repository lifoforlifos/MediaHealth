<template>
    <div class="">
        <router-view :key="$router.fullPath"></router-view>

        <div class="footer-section">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-3">
                        <router-link class="logo-footer w-nav-brand" to="/">
                            <div class="footer-logo logo-text">Media<strong data-new-link="true">Health</strong></div>
                        </router-link>
                    </div>

                    <div class="footer-link-col w-clearfix w-col w-col-9">
                        <router-link class="footer-link nav-link" to="/contact">Contact</router-link>
                        <router-link class="footer-link nav-link" to="/blog">Blog</router-link>
                        <router-link class="footer-link nav-link" to="/portfolio">Portfolio</router-link>
                        <router-link class="footer-link nav-link" to="/about">About</router-link>
                        <router-link class="footer-link nav-link" to="/">Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
