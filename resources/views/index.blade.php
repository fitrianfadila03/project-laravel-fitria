<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleure store</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <h1>Toko Baju Wanita</h1>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Selamat Datang di Fleure store</h2>
            <p>Temukan koleksi terbaru baju wanita yang elegan dan stylish.</p>
            <a href="#products" class="cta-button">Lihat Koleksi</a>
        </div>
    </section>
    
    <section id="products" class="products">
        <div class="container">
            <h2>Koleksi Terbaru</h2>
            <div class="product-list">
                <div class="product-item">
                    <img src="assets/images/dress1.jpeg" alt="Dress Elegan">
                    <h3>Dress Elegan</h3>
                    <p>Rp 250.000</p>
                    <a href="#" class="cta-button">Beli Sekarang</a>
                </div>
                <div class="product-item">
                    <img src="assets/images/dress2.jpeg" alt="kemeja">
                    <h3>kemeja</h3>
                    <p>Rp 350.000</p>
                    <a href="#" class="cta-button">Beli Sekarang</a>
                </div>
                <div class="product-item">
                    <img src="assets/images/dress3.jpeg" alt="flower dress">
                    <h3>flower dress</h3>
                    <p>Rp 150.000</p>
                    <a href="#" class="cta-button">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami adalah toko baju wanita yang berdedikasi untuk memberikan produk berkualitas tinggi dan desain terkini. Dengan berbagai pilihan baju elegan, kami berkomitmen untuk membantu Anda tampil menawan di setiap kesempatan.</p>
        </div>
    </section>
    
    <section id="contact" class="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi kami melalui formulir di bawah ini atau email kami di <a href="mailto:info@tokobajuwanita.com">info@tokobajuwanita.com</a>.</p>
            <form action="#" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 fleure store.</p>
        </div>
    </footer>
</body>
</html>
