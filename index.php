<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gokul Agency</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; color: #333; }
        header {
            background: #2e7d32;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 { font-size: 24px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 16px; }
        nav a:hover { text-decoration: underline; }
        .hero { background: #388e3c; color: white; text-align: center; padding: 80px 20px; }
        .hero h2 { font-size: 36px; margin-bottom: 10px; }
        .hero p { font-size: 18px; }
        .about { padding: 50px 30px; text-align: center; background: #f9f9f9; }
        .about h2 { font-size: 28px; margin-bottom: 15px; color: #2e7d32; }
        .about p { font-size: 16px; max-width: 600px; margin: auto; }
        .products { padding: 50px 30px; text-align: center; }
        .products h2 { font-size: 28px; margin-bottom: 30px; color: #2e7d32; }
        .product-grid { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; }
        .box { border: 1px solid #ddd; border-radius: 10px; padding: 20px; width: 220px; box-shadow: 2px 2px 8px rgba(0,0,0,0.1); }
        .box img { width: 180px; height: 180px; object-fit: cover; border-radius: 8px; }
        .box h3 { margin-top: 12px; font-size: 16px; }
        .box p { color: #2e7d32; font-weight: bold; margin-top: 8px; }
        .contact { padding: 50px 30px; background: #f9f9f9; text-align: center; }
        .contact h2 { font-size: 28px; margin-bottom: 20px; color: #2e7d32; }
        .contact form { display: flex; flex-direction: column; max-width: 500px; margin: auto; gap: 12px; }
        .contact input, .contact textarea { padding: 10px; font-size: 15px; border: 1px solid #ccc; border-radius: 6px; }
        .contact textarea { height: 120px; resize: vertical; }
        .contact button { padding: 12px; background: #2e7d32; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; }
        .contact button:hover { background: #1b5e20; }
        .whatsapp { position: fixed; bottom: 30px; right: 30px; background: #25d366; color: white; border-radius: 50%; width: 55px; height: 55px; font-size: 28px; display: flex; align-items: center; justify-content: center; text-decoration: none; }
        footer { background: #2e7d32; color: white; text-align: center; padding: 15px; font-size: 14px; }
    </style>
</head>

<body>

<header>
    <h1>Gokul Agency</h1>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section id="home" class="hero">
    <h2>Welcome To Gokul Agency</h2>
    <p>Best Quality Products & Services</p>
</section>

<section id="about" class="about">
    <h2>About Us</h2>
    <p>We are a trusted agency providing quality products and customer services.</p>
</section>

<section id="products" class="products">
    <h2>Our Products</h2>
    <div class="product-grid">

        <div class="box">
            <img src="images/product2.jpeg" alt="Kaccho Mango">
            <h3>Kaccho Mango</h3>
        </div>

        <div class="box">
            <img src="images/product3.jpeg" alt="Babu">
            <h3>Babu</h3>
        </div>

        <div class="box">
            <img src="images/product1.jpeg" alt="Wafer Biscuit">
            <h3>Wafer Biscuit</h3>
        </div>

    </div>
</section>

<section id="contact" class="contact">
    <h2>Contact Us</h2>
    <form action="contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<a class="whatsapp" href="https://wa.me/919898121219" target="_blank">💬</a>

<footer>
    <p>© 2026 Gokul Agency. All Rights Reserved.</p>
</footer>

</body>
</html>