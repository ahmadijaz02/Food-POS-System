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

    <section id="features" class="features">
        <div class="container">
            <h2>Key Features</h2>
            <p class="sub">Everything restaurants need to run faster and serve customers better.</p>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">📦</div>
                    <h3>Order Management</h3>
                    <p>Accept, track and update orders in real-time with an intuitive interface.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Sales Analytics</h3>
                    <p>Daily and weekly sales, peak hour reports and menu performance insights.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔗</div>
                    <h3 class="feature-header">Easy Integration</h3>
                    <p>Integrates with your existing POS, accounting and third-party delivery platforms.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚙️</div>
                    <h3 class="feature-header">Inventory Alerts</h3>
                    <p>Low-stock alerts and usage patterns to reduce shortages and waste.</p>
                </div>
            </div>
        </div>
    </section>

 
</body>
</html>