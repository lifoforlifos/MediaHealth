<!DOCTYPE html>
<html data-wf-domain="tile-design-template.webflow.io" data-wf-page="568e91ab2fa9e9750fa590c3" data-wf-site="566ded60394cebc21a1286aa">
    <head>
        <meta charset="utf-8">
        <title>About</title>
        <meta content="About" property="og:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script type="text/javascript">
            WebFont.load({
              google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
              }
            });
        </script>
    </head>

    <body>
        <div class="about-page hero-section">
            <div class="nav w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
                <div class="w-container">
                    <a class="w-nav-brand" href="/w">
                        <div class="logo-text">TILE<strong data-new-link="true">DESIGN</strong></div>
                    </a>
                    <nav class="nav-menu w-nav-menu w-preserve-3d" role="navigation">
                        <a class="nav-link w-nav-link" href="/w">Home</a>
                        <a class="nav-link w-nav-link" href="/wabout">About</a>
                        <a class="nav-link w-nav-link" href="/wportfolio">Portfolio</a>
                        <a class="nav-link w-nav-link" href="/wblog">Blog</a>
                        <a class="nav-link w-nav-link" href="/wcontact">Contact</a>
                    </nav>

                    <div class="menu-button w-nav-button">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                </div>
            </div>

            <h1>Contact Me</h1>
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

        <div class="footer-section">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-3">
                        <a class="logo-footer w-nav-brand" href="/w">
                            <div class="footer-logo logo-text">TILE<strong data-new-link="true">DESIGN</strong>
                            </div>
                        </a>
                    </div>

                    <div class="footer-link-col w-clearfix w-col w-col-9">
                        <a class="footer-link nav-link" href="/wcontact">Contact</a>
                        <a class="footer-link nav-link" href="/wblog">Blog</a>
                        <a class="footer-link nav-link" href="/wportfolio">Portfolio</a>
                        <a class="footer-link nav-link" href="/wabout">About</a>
                        <a class="footer-link nav-link" href="/w">Home</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
        <!--<script src="{{ asset('js/my.js') }}" charset="utf-8"></script>-->
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>
