<?php
// index.php - Landing page
session_start();

// retrieve previous form values / errors (if any)
$old = $_SESSION['old'] ?? [];
$errors = $_SESSION['errors'] ?? [];
// clear after reading
unset($_SESSION['old'], $_SESSION['errors']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>FoodPanda — Delivering Happiness | Landing</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="light-mode">
    
    <div id="signup-modal" class="modal-wrap">
        <div class="modal-content">
            <button class="modal-close-btn">&times;</button>
            <div class="modal-header">
                <h2>Join FoodPanda Partner Hub</h2>
                <p>Register now to start accepting orders from millions of customers.</p>
            </div>
            <form>
                <label>Restaurant Name <input type="text" placeholder="e.g., The Golden Wok" required></label>
                <label>Email <input type="email" placeholder="restaurant@example.com" required></label>
                <label>Password <input type="password" required></label>
                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>
            <p class="modal-footer-text">Already a partner? <a href="#">Log In</a></p>
        </div>
    </div>

    <header class="nav-wrap">
        <div class="container nav">
            <div class="logo">Food<span class="accent">Panda</span></div>
            <nav class="menu">
                <button id="dark-mode-toggle" class="btn btn-ghost" title="Toggle Dark Mode">
                    <span id="mode-icon">🌙</span>
                </button>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
                <a class="btn" id="open-signup-btn" href="#">Sign Up</a>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="container hero-grid">
            <div class="hero-text">
                <h1>The fastest way to get food delivered</h1>
                <p class="lead">Partner with FoodPanda to reach more customers. Track orders, get real-time analytics, and scale easily.</p>
                <div class="hero-ctas">
                    <a class="btn btn-primary" href="#contact">Get Started for Free</a>
                    <a class="btn btn-ghost" href="#features">Learn More</a>
                </div>
                <ul class="highlights">
                    <li>✅ Live order tracking</li>
                    <li>✅ Powerful analytics dashboard</li>
                    <li>✅ Seamless integration with POS</li>
                </ul>
            </div>
            <div class="hero-mockup js-mockup-rotate">
                <img src="foodp.png" alt="Food delivery system tablet mockup" class="mockup-img-fixed">
            </div>
        </div>
    </section>

</body>
</html>