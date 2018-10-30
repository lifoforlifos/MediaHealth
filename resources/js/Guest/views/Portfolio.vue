<template>
    <div class="">
        <div class="hero-section" style='background-image: url("/images/objectif.png");'>
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

        <div class="section">
            <div class="w-container">
                <div class="w-dyn-list">
                    <div class="w-clearfix w-dyn-items w-row">
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/awesome-company-logo-design">
                                <div class="project-image" style="background-image: url('/images/mediahealth.jpg');"></div>
                                <div class="project-tag" style="background-color: #b058da;">Health</div>
                                <div class="project-title">Awesome</div>
                            </a>
                        </div>
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/sketch-designs">
                                <div class="project-image" style="background-image: url('/images/objectif.png');"></div>
                                <div class="project-tag" style="background-color: #2fcc94;">Health</div>
                                <div class="project-title">Sketch</div>
                            </a>
                        </div>
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/awesome-company-logo-design">
                                <div class="project-image" style="background-image: url('/images/contact.jpg');"></div>
                                <div class="project-tag" style="background-color: #b058da;">Health</div>
                                <div class="project-title">Awesome</div>
                            </a>
                        </div>
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/sketch-designs">
                                <div class="project-image" style="background-image: url('/images/mediahealth.jpg');"></div>
                                <div class="project-tag" style="background-color: #2fcc94;">Health</div>
                                <div class="project-title">Sketch</div>
                            </a>
                        </div>
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/awesome-company-logo-design">
                                <div class="project-image" style="background-image: url('/images/objectif.png');"></div>
                                <div class="project-tag" style="background-color: #b058da;">Health</div>
                                <div class="project-title">Awesome</div>
                            </a>
                        </div>
                        <div class="project-block w-col w-col-4 w-dyn-item">
                            <a class="project-link w-inline-block" href="/projects/sketch-designs">
                                <div class="project-image" style="background-image: url('/images/contact.jpg');"></div>
                                <div class="project-tag" style="background-color: #2fcc94;">Health</div>
                                <div class="project-title">Sketch</div>
                            </a>
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
