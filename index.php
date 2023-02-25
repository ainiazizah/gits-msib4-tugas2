<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,500;1,700;1,800&display=swap" rel="stylesheet"><title>Personal Web</title>
    <link rel="stylesheet" href="style.css">
    <!-- Icons feather -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="" class="navbar-logo">'Ainiazizah</a>        
        
        <div class="navbar-nav">
            <a href="#">Home</a>    
            <a href="#about">About</a>    
            <a href="#contact">Contact</a>    
        </div>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"> <i data-feather="menu"></i> </a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Start -->
    <section class="home" id="home">
        <div class="row">
            <main class="content">
                <h2>Welcome to</h2>
                <p> My Personal Website. </p>
                <a href="https://www.instagram.com/ainiazizahhh_/" target="blank" class="cta">Follow me !</a>
            </main>
            <div class="home-img">
    <img src="images/ft.png" alt="">
</div>
        </div>
    </section>
    <!-- Home End -->

    <!-- About Start -->
    <section class="about" id="about">
        <div class="row">
            <main class="content">
                <h2>Nama saya Nur 'Aini Azizah</span></h2>
                <p>Kelahiran 01 Maret 2002 di kota Jepara, lulusan dari SMK Negeri 1 Jepara jurusan Teknik Komputer dan Jaringan, sekarang sedang menyelesaikan S1 Sistem Informasi di Universitas Muhammadiyah Kudus.</p>
            </main>
            <div class="about-img">
                <img src="images/pw.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Contact Start -->
    <section class="contact" id="contact">
        <h2>Hubungi saya</h2>

        <div class="row">
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="No Telp">
                </div>
                <button type="submit" class="btn">Kirim</button>
            </form>
        </div>

    </section>
    <!-- Contact End -->

    <!-- Footer Start -->
    <Footer>
        <div class="social">
            <a href="mailto:nurainiazizah838@gmail.com" target="_blank"><i data-feather="mail"></i></a>
            <a href="https://www.instagram.com/ainiazizahhh_/" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://t.me/matchlattea" target="_blank"><i data-feather="send"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a href="">'Ainiazizah</a>. | &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script>
        feather.replace()
    </script>
    <script src="js/script.js"></script>
</body>
</html>