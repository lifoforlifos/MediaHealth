<template>
    <div class="">
        <div class="hero-section" style='background-image: url("/images/mediahealth.jpg");'>
            <div class="nav w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
                <div class="w-container">
                    <router-link class="w-nav-brand" to="/">
                        <div class="logo-text">Media<strong data-new-link="true">Health</strong></div>
                    </router-link>
                    <nav class="nav-menu w-nav-menu w-preserve-3d" role="navigation">
                        <router-link class="nav-link w-nav-link" to="/">Home</router-link>
                        <router-link class="nav-link w-nav-link" to="/about">About</router-link>
                        <router-link class="nav-link w-nav-link" to="/portfolio">Portfolio</router-link>
                        <router-link class="nav-link w-nav-link" to="/blog">Blog</router-link>
                        <router-link class="nav-link w-nav-link" to="/contact">Contact</router-link>
                    </nav>

                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>

            <div class="hero-overlay"></div>
        </div>

        <div class="home-page section" style="margin-top: 50px;">
            <div class="hero-container w-container">
                <div class="w-clearfix">
                    <div class="_60block" data-ix="tile-1">
                        <router-link class="hero-tile w-inline-block" to="/about">
                            <div class="tile-text">About<br>The company.</div>
                            <div class="tile-image">
                                <div class="tile-overlay"></div>
                            </div>
                        </router-link>
                    </div>

                    <div class="_40block" data-ix="tile-3">
                        <div class="hero-tile w-dyn-list">
                            <div class="w-dyn-items">
                                <div class="w-dyn-item">
                                    <router-link class="tile-link w-inline-block" to="/portfolio">
                                        <div class="tile-text">Our<br>Portfolio.</div>
                                        <div class="tile-image" style="background-image: url('/images/objectif.png');">
                                            <div class="tile-overlay"></div>
                                        </div>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="_33block" data-ix="tile-3">
                        <div class="hero-tile">
                            <div class="w-dyn-list">
                                <div class="w-dyn-items">
                                    <div class="w-dyn-item">
                                        <router-link class="tile-link w-inline-block" to="/blog">
                                            <div class="tile-text">Our<br>Blog.</div>
                                            <div class="tile-image" style="background-image: url('images/objectif.png');">
                                                <div class="tile-overlay"></div>
                                            </div>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="_33block" data-ix="tile-2">
                        <router-link class="hero-tile w-inline-block" data-ix="show-contact-overlay" to="/contact">
                            <div class="tile-text">Contact<br>Us.</div>
                            <div class="hire tile-image">
                                <div class="tile-overlay"></div>
                            </div>
                        </router-link>
                    </div>

                    <div class="_33block" data-ix="tile-4">
                        <div class="w-clearfix">
                            <a class="social-block w-inline-block" href="#"></a>
                            <a class="facebook social-block w-inline-block" href="#"></a>
                            <a class="pinterest social-block w-inline-block" href="#"></a>
                            <a class="dribbble social-block w-inline-block" href="#"></a>
                        </div>
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
