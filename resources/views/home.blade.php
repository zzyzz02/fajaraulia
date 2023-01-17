@extends('main')
@section('body')
    <!-- navbar -->

    <section id="hero" class="container-fluid">
        <div class="content">
            <div class="hero-text">
                <h2>HELLO!</h2>
                <p>I am <span class="hero-name"></span></p>
            </div>
            <div class="hero-logo">
                <img src="/assets/hero.svg" alt="" />
            </div>
            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
            <script>
                var options = {
                    strings: ["Fajar", "Programmer"],
                    typeSpeed: 100,
                    backSpeed: 100,
                    loop: true,
                    showCursor: false
                };

                var typed = new Typed(".hero-name", options);
            </script>

    </section>

    <section id="about" class="reveal fade-bottom container-fluid d-flex-column">

        <span class="text-center heading">ABOUT ME</span>
        <h2>Know Me More</h2>
        <div class="content">
            <div class="text">
                <p>I am an IT Student that looking an
                    opportunity to growth and starting career in <span>Web </span>and <span>App
                    </span><span>Development</span>.</p><br>
                <p>I found my passion for code during high school when i started
                    designing blogs, and haven't
                    look
                    backed since.</p>
            </div>
            <div class="image">
                <img class="img1" src="/assets/about2.svg" alt="">
                <img class="img2" src="/assets/about1.svg" alt="">
            </div>
        </div>

    </section>
    <section id="skills" class="reveal fade-bottom container-fluid d-flex-column">

        <span class="text-center heading">Skills</span>
        <h2>What Can I Do?</h2>
        <div class="content">
            <div class="card d-flex-column">
                <h3 class="text-center">Programming Language</h3>
                <div class="my-auto">
                    <p>PHP</p>
                    <div class="bar">
                        <div class="bar-green" style="width:70%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>Dart</p>
                    <div class="bar">
                        <div class="bar-blue" style="width:75%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>HTML</p>
                    <div class="bar">
                        <div class="bar-red" style="width:80%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <P>CSS</P>
                    <div class="bar">
                        <div class="bar-orange" style="width:80%"></div>
                    </div>
                </div>
            </div>
            <div class="card d-flex-column">
                <h3 class="text-center">Framework</h3>
                <div class="my-auto">
                    <p>Laravel</p>
                    <div class="bar">
                        <div class="bar-green" style="width:70%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>Flutter</p>
                    <div class="bar">
                        <div class="bar-blue" style="width:75%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>Bootstrap</p>
                    <div class="bar">
                        <div class="bar-red" style="width:75%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>ReactJs</p>
                    <div class="bar">
                        <div class="bar-orange" style="width:65%"></div>
                    </div>
                </div>
            </div>
            <div class="card d-flex-column">
                <h3 class="text-center">Others</h3>
                <div class="my-auto">
                    <p>Figma</p>
                    <div class="bar">
                        <div class="bar-green" style="width:80%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>MySQL</p>
                    <div class="bar">
                        <div class="bar-blue" style="width:70%"></div>
                    </div>
                </div>
                <div class="my-auto">
                    <p>Excel Formula</p>
                    <div class="bar">
                        <div class="bar-red" style="width:90%"></div>
                    </div>
                </div>
            </div>

        </div>
        <button id="12" class="button display-left" onclick="scrollLft()">&#10094;</button>
        <button id="13" class="button display-right" onclick="scrollRight()">&#10095;</button>

    </section>
    <section id="portfolio" class="reveal fade-bottom container-fluid d-flex-column">

        <span class="text-center; heading">Portfolio</span>
        <h2>My Recent Work</h2>
        <div class="content">

        </div>

    </section>
    <section id="contact" class="reveal fade-bottom container-fluid d-flex-column">

        <span class="text-center heading">Contact</span>
        <h2>Get In Touch</h2>
        <div class="content d-flex-column align-items-center">
            <p class="text-center">If you feel interested at my profile, Feel free to contact me at</p>
            <div class="d-flex social">
                <a href="https://wa.me/6281268888199">
                    <div class="d-flex-column text-color-green">
                        <i class="bi bi-phone"></i>
                        <p>+62 812 6888 8199</p>
                    </div>
                </a>
                <a href="mailto: fajaarauliiaa@gmail.com">
                    <div class="d-flex-column text-color-red">
                        <i class="bi bi-envelope-at"></i>
                        <p>fajaarauliiaa@gmail.com</p>
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/fajarauliaanugrah/">
                    <div class="d-flex-column text-color-blue">
                        <i class="bi bi-linkedin"></i>
                        <p>LinkedIn</p>
                    </div>
                </a>

            </div>
            <form action="">
                <input type="text" id="name" name="name" placeholder="Your name.."><br>
                <input type="email" id="email" name="email" placeholder="Your email..."><br>
                <input type="text" id="message" name="message" placeholder="Your Message.."><br>
                <input class="bg-secondary" type="submit" value="Send Message">
            </form>
        </div>

    </section>
    <script src="https://kit.fontawesome.com/15bd4f9bea.js" crossorigin="anonymous"></script>
@endsection
