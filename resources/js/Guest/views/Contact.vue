<template>
    <div class="">
        <div class="hero-section" style='background-image: url("http://uploads.webflow.com/566ded60394cebc21a1286aa/566ded60394cebc21a1286b3_laptop-desk.jpg");'>
            <div class="nav w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
                <div class="w-container">
                    <router-link class="w-nav-brand" to="/">
                        <div class="logo-text">MEDIA <strong data-new-link="true">HEAD</strong></div>
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

            <h1>Contact</h1>
            <div class="hero-overlay"></div>
        </div>

        <div class="section">
            <div class="w-container">
                <div class="form-wrapper">
                    <div class="contact-heading" style="color: black;">Get in Touch</div>
                    <div class="small-divider"></div>
                    <div class="contact-text" style="color: black;">Thank you for your interest! Please fill out the form below if you would like to work together.</div>
                    <div class="w-form">
                        <form data-name="Email Form" id="email-form" name="email-form">
                            <input class="text-field w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" type="text">
                            <input class="text-field w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
                            <textarea class="text-area text-field w-input" data-name="Project details" id="Project-details" maxlength="5000" name="Project-details" placeholder="What are your project details..."></textarea>
                            <input class="submit-button w-button" data-wait="Please wait..." type="submit" value="Send">
                        </form>

                        <div class="success-message w-form-done">
                            <p class="success-text">Thank you! Your submission has been received!</p>
                        </div>

                        <div class="w-form-fail">
                            <p>Oops! Something went wrong while submitting the form</p>
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
