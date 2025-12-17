<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tastyc - Modern Restaurant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700;900&display=swap"
        rel="stylesheet" />

    <style>
        :root {
            --orange: #f7941d;
            --dark-bg: #0f0f0f;
            --text-light: #ddd;
            --text-dark: #333;
            --heading: #fff;
        }

        body {
            font-family: 'Josefin Sans', sans-serif;
            background-color: var(--dark-bg);
            background-image: url('https://www.transparenttextures.com/patterns/dark-mosaic.png');
            background-attachment: fixed;
            color: var(--text-light);
            line-height: 1.7;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--heading);
        }

        a {
            transition: all 0.3s ease;
        }

        /* General containers */
        .container {
            max-width: 1100px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .suptitle {
            color: var(--orange);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 0.85rem;
            margin-bottom: 15px;
            display: block;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .text-desc {
            font-size: 1rem;
            color: #ccc;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            padding: 1.5rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin: 0 15px;
            text-transform: capitalize;
        }

        .nav-link:hover {
            color: var(--orange) !important;
        }

        .btn-reservation {
            background-color: var(--orange);
            color: #fff;
            padding: 10px 30px;
            border-radius: 4px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .btn-reservation:hover {
            background-color: #d07e16;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url('https://tastyc.bslthemes.com/wp-content/webp-express/webp-images/uploads/2021/04/home-slide-1.jpg.webp') center center/cover no-repeat;
            color: #fff;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
        }

        .hero-content .suptitle {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 30px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        .btn-primary-custom {
            background-color: var(--orange);
            color: #fff;
            padding: 14px 40px;
            font-weight: 600;
            border-radius: 4px;
            margin-right: 20px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .btn-outline-custom {
            color: #fff;
            border: 2px solid #fff;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background-color: #d07e16;
        }

        .btn-outline-custom:hover {
            background-color: #fff;
            color: #111;
        }

        /* About Section */
        .about-section {
            padding: 100px 0;
        }

        .about-text {
            max-width: 500px;
        }

        .about-video-wrapper {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .about-video-wrapper img {
            width: 100%;
            display: block;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background-color: rgba(247, 148, 29, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(247, 148, 29, 0.7);
        }

        .play-btn::before {
            content: '';
            border-style: solid;
            border-width: 16px 0 16px 28px;
            border-color: transparent transparent transparent #fff;
            margin-left: 8px;
        }

        .play-btn:hover {
            background-color: #d07e16;
        }

        /* Features */
        .feature-item {
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
        }

        .feature-icon img {
            width: 100px;
            margin-bottom: 30px;
        }

        .feature-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #fff;
        }

        /* Working Hours Banner */
        .working-hours-banner {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .wh-info {
            flex: 1 1 400px;
            padding: 60px;
            background: url('https://tastyc.bslthemes.com/wp-content/webp-express/webp-images/uploads/2021/04/gallery-i-1.jpg.webp') center/cover;
            position: relative;
            color: #fff;
        }

        .wh-info::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(247, 148, 29, 0.9);
            mix-blend-mode: multiply;
        }

        .wh-info>* {
            position: relative;
            z-index: 1;
        }

        .wh-schedule {
            flex: 1 1 300px;
            background: #fff;
            padding: 50px;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .wh-schedule h5 {
            color: var(--orange);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 20px;
        }

        .wh-time {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
        }

        /* Stats */
        .stats-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            margin: 80px 0;
            color: var(--text-light);
        }

        .stat-item strong {
            display: block;
            font-size: 3rem;
            color: var(--orange);
            font-weight: 900;
        }

        /* Testimonials */
        .testimonial-card {
            background: #fff;
            color: #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            max-width: 380px;
            margin: 0 auto;
        }

        .testimonial-card .quote {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 4rem;
            color: var(--orange);
            opacity: 0.2;
        }

        /* Blog Cards */
        .blog-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-content {
            padding: 25px;
            color: #333;
        }

        .blog-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* Newsletter */
        .newsletter-section {
            background: #1c1c1c;
            padding: 80px 0;
            text-align: center;
        }

        .newsletter-form input {
            background: transparent;
            border: 2px solid #444;
            color: #fff;
            padding: 15px 25px;
            border-radius: 4px;
            width: 400px;
            max-width: 100%;
        }

        .newsletter-form button {
            background: var(--orange);
            color: #fff;
            border: none;
            padding: 15px 40px;
            margin-left: 10px;
            border-radius: 4px;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background: #111;
            color: #888;
            padding: 80px 0 40px;
        }

        footer h5 {
            color: var(--orange);
            margin-bottom: 25px;
        }

        footer a {
            color: #888;
        }

        footer a:hover {
            color: var(--orange);
        }

        .footer-gallery img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            margin: 5px;
        }

        .back-to-top {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
        }

        .back-to-top a {
            color: #555;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Tastyc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <span class="suptitle">Hello, new friend!</span>
                <h1>Welcome Back<br>to Tastyc</h1>
                <p>Quaerat debitis, vel, sapiente dicta sequi labore porro pariatur harum expedita.</p>
                <div>
                    <a href="#" class="btn-primary-custom">Reservation</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Blog -->
    <section class="section-padding text-center">
        <div class="container">
            <span class="suptitle">Our Menu</span>
            <h3 class="section-title">Discover our dishes</h3>

            <!-- Category Filter -->
            <div class="text-center mb-4">
                @foreach ($categories as $category)
                    <a href="{{ route('category.filter', $category->id) }}" class="btn btn-outline-dark m-1">
                        {{ $category->name }}
                    </a>
                @endforeach

                <a href="{{ route('home') }}" class="btn btn-outline-secondary m-1">
                    Show All
                </a>
            </div>

            <div class="row">
                @forelse($meals as $meal)
                    <div class="col-md-4">
                        <div class="blog-card mb-4">

                            @if ($meal->image)
                                <img src="{{ asset('storage/' . $meal->image) }}" alt="{{ $meal->name }}">
                            @endif

                            <div class="blog-content">
                                <h5 class="blog-title">{{ $meal->name }}</h5>

                                <p class="blog-excerpt">
                                    {{ Str::limit($meal->description, 80) }}
                                </p>

                                <p class="fw-bold mb-2">
                                    ${{ number_format($meal->price, 2) }}
                                </p>

                                <a href="#" class="btn-primary-custom btn-sm">
                                    Order Now
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <p class="text-center">No items found.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-video-wrapper">
                        <img src="https://tastyc.bslthemes.com/wp-content/webp-express/webp-images/uploads/2021/04/about-950x713.jpg.webp"
                            alt="Restaurant">
                        <div class="play-btn"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text ps-lg-5">
                        <span class="suptitle">About us</span>
                        <h2 class="section-title">We invite you to<br>visit our restaurant</h2>
                        <p>Assumenda possimus eaque illo iste, autem. Porro eveniet, autem ipsam vitae amet repellat
                            repudiandae tenetur, quod corrupti consectetur cum? Repudiandae dignissimos fugiat sit nam.
                        </p>
                        <a href="#" class="btn-primary-custom mt-3">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section-padding text-center">
        <div class="container">
            <span class="suptitle">Features</span>
            <h3 class="section-title">Why people choose us?</h3>
            <p class="text-desc">Porro eveniet, autem ipsam vitae consequatur!</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon"><img
                                src="https://tastyc.bslthemes.com/wp-content/uploads/2021/04/icon-serv-1-256x256.png"
                                alt=""></div>
                        <h4 class="feature-title">Menu for every taste</h4>
                        <p>Dolor sit amet, consectetur adipisicing elit et molestias possimus</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon"><img
                                src="https://tastyc.bslthemes.com/wp-content/uploads/2021/04/icon-serv-2-256x256.png"
                                alt=""></div>
                        <h4 class="feature-title">Always fresh ingredients</h4>
                        <p>Assumenda possimus eaque illo iste, autem. Porro eveniet autem</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon"><img
                                src="https://tastyc.bslthemes.com/wp-content/uploads/2021/04/icon-serv-3-256x256.png"
                                alt=""></div>
                        <h4 class="feature-title">Experienced chefs</h4>
                        <p>Rolorem, beatae dolorum, praesentium itaque et quam quaerat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Hours -->
    <section class="container mb-5">
        <div class="working-hours-banner">
            <div class="wh-info">
                <span class="suptitle">About us</span>
                <h4>Working hours</h4>
                <p>Rolorem, beatae dolorum, praesentium itaque et quam quaerat.</p>
                <a href="#" class="btn-primary-custom">Reservation</a>
            </div>
            <div class="wh-schedule">
                <div>
                    <h5>Sunday to Tuesday</h5>
                    <div class="wh-time">09:00 – 22:00</div>
                </div>
                <div class="mt-4">
                    <h5>Friday to Saturday</h5>
                    <div class="wh-time">11:00 – 19:00</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats-section">
        <div class="stat-item">
            <strong>200+</strong> Visitors daily
        </div>
        <div class="stat-item">
            <strong>400+</strong> Deliveries monthly
        </div>
        <div class="stat-item">
            <strong>100%</strong> Positive feedback
        </div>
        <div class="stat-item">
            <strong>40+</strong> Awards and honors
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding text-center">
        <div class="container">
            <span class="suptitle">Testimonials</span>
            <h3 class="section-title">What Our visitors say</h3>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="quote">“</div>
                        <h5 class="mb-3">It was very delicious!</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi dolorem?
                            Voluptates rem magnam nesciunt ullam hic error sed.</p>
                        <div class="mt-4"><strong>Emma Newman</strong><br><small>02.02.21</small></div>
                    </div>
                </div>
                <!-- Add more as needed -->
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-section">
        <div class="container">
            <span class="suptitle">Newsletter</span>
            <h4>Subscribe our newsletter</h4>
            <p>Rolorem, beatae dolorum, praesentium itaque et quam quaerat.</p>
            <form class="d-inline-flex mt-4">
                <input type="email" placeholder="Your email">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5>About us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae neque illum
                        aspernatur fugiat maiores id magni.</p>
                </div>
                <div class="col-lg-3">
                    <h5>Contact info</h5>
                    <p>Call: +76 (094) 754 43 7I<br>Email: your.email.inbox@here.com<br>Find us: Canada, Toronto, Avenue
                        31B</p>
                </div>
                <div class="col-lg-3">
                    <h5>Gallery</h5>
                    <div class="footer-gallery">
                        <img src="https://tastyc.bslthemes.com/wp-content/webp-express/webp-images/uploads/2021/04/gallery-i-1-140x140.jpg.webp"
                            alt="">
                        <!-- More images -->
                    </div>
                </div>
            </div>
            <div class="back-to-top">
                © Tastyc 2025. All rights reserved. Design by bslthemes Team
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
