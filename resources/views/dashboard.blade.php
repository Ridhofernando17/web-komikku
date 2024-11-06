<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!--box icon link-->
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
    href="style.css">
    <!--remix icon link-->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    font-family: "Poppins", sans-serif;
}
:root{
    --bg-color:#ffffff;
    --text-color: #000000;
    --main-color: #f0f0f0;
    --other-color: #ffc633;
    --second-color: #616060;

    --h1-font: 5.5rem;
    --h2-font: 3.5rem;
    --p-font: 1rem;
}
body{
    background: var(--bg-color);
    color: var(--text-color);
}
header{
    position: fixed;
    top: 0;
    right: 0;
    width: 100%;
    z-index: 1000;
    background: var(--bg-color);
    box-shadow: 0 1px 6px 0 rgb(32 33 36 /5%);
    padding: 18px 14%;
    display: flex;
    align-items: center;
    justify-content:space-between ;
    transition: all .6s;
}
.logo{
    font-size: 33px;
    font-weight: 800;
    text-transform: uppercase;
    color: var(--text-color);
}
.navlist{
    display: flex;
}
.navlist a{
    display: inline-block;
    margin: 0 30px;
    font-size: var(--p-font);
    font-weight: 500;
    color: var(--text-color);
    transition: all .6s;
}
.navlist a:hover{
    transform: translateY(-4px);
    color: var(--second-color);
}
.nav-right{
    display: flex;
    align-items: center;
}
.nav-right a{
    display: inline-block;
    font-size: 22px;
    color: var(--text-color);
    margin: 0 20px;
    transition: all .6s;
}
.nav-right a:hover{
    transform: translateY(-5px) scale(1, 1);
}
section{
    padding: 100px 14% 70px;
}
.home {
    position: relative;
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: none; /* Hapus background gambar jika ada */
}

.home::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        135deg,
        rgba(255, 255, 0, 0.5),    /* Kuning dominan dengan transparansi */
        rgba(0, 128, 0, 0.3),      /* Hijau lembut dengan transparansi */
        rgba(0, 128, 255, 0.2)     /* Biru halus dengan transparansi */
    );
    filter: blur(8px); /* Efek blur */
    z-index: -1;
}

.home-text{
    padding-top: 60px;
}
.home-text h1{
    font-size: var(--h1-font);
    font-weight: 700;
    line-height: 1.1;
    margin-bottom: 20px;
}
.home-text h6{
    font-size: 15px;
    font-weight: 500;
    color: var(--second-color);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.home-text p{
    width: 100%;
    max-width: 560px;
    font-size: var(--p-font);
    font-weight: 400;
    color: var(--second-color);
    line-height:33px ;
    margin-bottom: 35px;
}

.btn{
    display: inline-block;
    padding: 14px 42px;
    background: var(--text-color);
    color: var(--bg-color);
    font-size: 15px;
    font-weight: 400;
    border: 2px solid transparent;
    transition: all .6s;
}
.btn:hover{
    transform: scale(0.9) translateY(-6px);
    border: 2px solid var(--text-color);
    background: transparent;
    color: var(--text-color);
}
.btn i{
    margin-left: 9px;
}
.group{
    padding: 30px 14%;
    /* background: var(--text-color); */
}
.main-group{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
}
.group-c img{
    height: auto;
    width: 100%;
}
.center-text{
    text-align: center;
}
.center-text h2{
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 30px;
}
.n-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    align-items: center;
    gap: 1.5rem;
    margin-top: 4rem;
}
.row-img{
    overflow: hidden;
    border-radius: 28px;
    margin-bottom: 15px;
}
.row-img img{
    display:block;
    width: 100%;
    transition: transform 0.5s;
    cursor: pointer;
}
.row-img:hover img{
    transform: scale(1.1);
}
.row h3{
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 5px;
}
.stars a{
    font-size: 16px;
    color: var(--other-color);
    margin-right: 5px;
}
.row-in{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 5px;
}
.row-left h5{
   font-size: 19px;
   font-weight: 600;
   color: var(--second-color);
}
.n-btn{
    text-align: center;
    margin-top: 4rem;
}
.btn2{
    display: inline-block;
    padding: 14px 42px;
    background: transparent;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 500;
    border: 1px solid var(--second-color);
    border-radius: 30px;
    transition: all .6s;
}
.btn2:hover{
    background: var(--text-color);
    border: 1px solid var(--text-color);
    color: var(--bg-color);
    transform: scale(0.9) translateY(-6px);
}
.feature{
    padding: 10px 14% 10px;
}
.feature-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, auto));
    align-items: center;
    gap: 2.5rem;
}
.box{
    padding: 15px 15px 15px 30px;
    border-left: 4px solid var(--second-color);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    gap: 30px;
    transition: all .6s;
    
}
.f-icon i{
    font-size: 23px;
}
.f-text h3{
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
}
.f-text p{
    font-size: 15px;
    font-weight: 400;
    color: var(--second-color);
    line-height: 33px;
}
.box:hover{
    transform: translateY(-4px) scale(1.02);
    border-left: 4px solid var(--text-color);
    cursor: pointer;
}
.selling-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, auto));
    align-items: center;
    gap: 2.5rem;
    margin-top: 4rem;
}
.col{
    position: relative;
    transition: all .6s;
}
.col-img{
    overflow: hidden;
    border-radius: 28px;
}
.col-img img{
    display: block;
    width: 100%;
    transition: transform 0.5s;
    cursor: pointer;
}
.col-img:hover img{
    transform: scale(1.05);
}
.col-icon{
    position: absolute;
    bottom: 20px;
    right: 30px;
}
.col-icon a{
    display: block;
}
.col-icon i{
    margin-bottom: 10px;
    width: 30px;
    height: 30px;
    background: var(--text-color);
    color: var(--bg-color);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    opacity: 0;
    transition: all .6s;
}
.col:hover .col-icon i{
    opacity: 1;
    transform: rotate3d(0, 0, 1, 360deg) scale(1.03);
}
.footer{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(20px, auto));
    gap: 2rem;
    background: var(--text-color);
    color: var(--bg-color);
}
.footer-box{
    display: flex;
    flex-direction: column;
}
.footer-box h3{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
}
.footer-box a{
    color: var(--bg-color);
    margin-bottom: 0.8rem;
    transition: all .50s ease;
}
.footer-box a:hover{
    transform: translateY(-5px);
    color: var(--second-color);
}
.social a{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 40px;
    width: 40px;
    background: var(--bg-color);
    color: var(--text-color);
    font-size: 17px;
    border-radius: 10px;
    margin-right: 14px;
    transform: transform 0.6s;
}
.social a:hover{
    transform: rotate3d(0, 0, 1, 360deg) scale(1.06);
    color: var(--text-color);
}
.end-text{
    background: var(--text-color);
    color: var(--bg-color);
    text-align: center;
    padding: 20px 14% 20px;
}
@media(max-width: 1610px){
    header{
        padding: 15px 7%;
    }
    section{
        padding: 70px 7% 80px;
    }
    .group{
        padding: 20px 7%;
    }
    .feature{
        padding: 10px 7% 10px;
    }
}
@media(max-width: 1500px){
    .home{
        height: 90vh;
    }
    :root{
        --h1-font: 4.8rem;
        --h2-font: 2.8rem;
        --p-font: 15px;
    }
}

    </style>
</head>
<body>
    <header>
        <a href="#" class="logo"><div>Komikku</div></a>
        <ul class="navlist">
            <li><a href="index.html">Original</a></li>
            <li><a href="product.html">Genre</a></li>
            <li><a href="kontak.html">Popular</a></li>
        </ul>
        <div class="nav-right">
            <button class="telegram-button" onclick="redirectToTelegram()">Chat</button>
            <a href="../Web-Teori/login register/welcome.php"><i class="ri-user-3-line"></i></a>
        </div>
    </header>
<!-- Home Section -->
<section class="home">
    <div class="home-overlay"></div>
    <div class="home-text" data-aos="fade-up">
        <h6>Komikku</h6>
        <h1>Dunia Komik di Ujung</h1>
        <h1>Jari Anda</h1>
        <p>Selamat datang di website Komikku! <br>Dari genre aksi hingga romansa, kami punya semuanya. Beli e-book favorit Anda dan nikmati cerita seru tanpa batas.</p>
        <a href="product.html" class="btn">
            Shop Now
            <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</section>
    <!--all product-->
    <section class="n-product">
        <div class="center-text" data-aos="fade-down">
            <h2>All Product</h2>
        </div>

        <div class="n-content" data-aos="zoom-in">
            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k3.jpg">
                </div>
                <h3>Dandadan<br>Yukinobu Tatsu</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.9/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 173</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k4.jpg">
                </div>
                <h3>Blooming Love<br>Daichi Kawada</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.8/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 38</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k5.jpg">
                </div>
                <h3>Red Cat Ramen<br> Angyaman</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.7/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 122</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k6.jpg">
                </div>
                <h3>The Elusive Samurai<br> Yusei Matsui</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.8/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 179</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k7.jpg">
                </div>
                <h3>Akane-banashi <br> Yuki Suenaga </h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.6/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 133</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k9.jpg">
                </div>
                <h3>Itchi The Wtich <br> Osamu Nishi</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.8/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 009</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k8.jpg">
                </div>
                <h3>Sakamoto Days <br> Yuto Suzuki</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.8/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 188</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="/assets/product/k10.jpg">
                </div>
                <h3>Undead Unluck <br> Yoshifumi Tozuka</h3>
                <div class="stars">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-half-fill"></i></a>
                    <a href="#">4.8/5</a>
                </div>

                <div class="row-in">
                    <div class="row-left">
                        <h5>Chapter: 229</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="n-btn" data-aos="zoom-in">
            <a href="#" class="btn2">View All</a>
        </div> 
    </section>

    <!--feature-->
    <section class="feature">
        <div class="feature-content" data-aos="fade-down">
            <div class="box">
                <div class="f-icon">
                    <i class="ri-thumb-up-fill"></i>
                </div>
                <div class="f-text">
                    <h3>Jaminan Kepuasan</h3>
                    <p>Kualitas dan Layanan Yang Terbaik</p>
                </div>
            </div>

            <div class="box">
                <div class="f-icon">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div class="f-text">
                    <h3>Layanan 24/7</h3>
                    <p>melayani selama 24 jam</p>
                </div>
            </div>

            <div class="box">
                <div class="f-icon">
                    <i class="ri-truck-fill"></i>
                </div>
                <div class="f-text">
                    <h3>Gratis Ongkos Kirim</h3>
                    <p>Khusus Untuk Wilayah Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <!--Best Selling-->
    <section class="Selling">
        <div class="center-text" data-aos="fade-up">
            <h2>POPULAR</h2>
        </div>

        <div class="selling-content" data-aos="zoom-in-up">
            <div class="col">
                <div class="col-img">
                    <img style="width: 100; height: 200;" src="/assets/product/k3.jpg">
                </div>
                <div class="col-icon">
                    <a href="#"><i class="ri-heart-line"></i></a>
                    <a href="#"><i class="ri-eye-line"></i></a>
                </div>
            </div>

            <div class="col">
                <div class="col-img">
                    <img style="width: 100; height: 200;" src="/assets/product/k4.jpg">
                </div>
                <div class="col-icon">
                    <a href="#"><i class="ri-heart-line"></i></a>
                    <a href="#"><i class="ri-eye-line"></i></a>
                </div>
            </div>

            <div class="col">
                <div class="col-img">
                    <img style="width: 100; height: 200;" src="/assets/product/k5.jpg">
                </div>
                <div class="col-icon">
                    <a href="#"><i class="ri-heart-line"></i></a>
                    <a href="#"><i class="ri-eye-line"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <section class="footer">
        <div class="footer-box" data-aos="fade-down">
            <h3>KOMIKKU</h3>
            <p><i class="ri-mail-line"></i> : komikku@gmail.com</p>
            <p><i class="ri-phone-line"></i> : 082217051078</p>
            <p><i class="ri-map-pin-line"></i> : Jl. Prof. Dr. Sumantri Brojonegoro No.1, <br>Kota Bandar Lampung</p>
        </div>

        <div class="footer-box"  data-aos="fade-down">
            <h3>FAQ</h3>
            <a href="#">About</a>
            <a href="product.html">Product</a>
            <a href="#">Account</a>
            <a href="kontak.html">Contact</a>
        </div>

        <div class="footer-box"  data-aos="fade-down">
            <h3>Social Media</h3>
            <div class="social">
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-youtube-line"></i></a>
                <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>
        </div>
    </section>

    <!--CP-->
    <div class="end-text">
        <p>Copyright 2024 By Komikku</p>
    </div>

<script src="ks/script.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 300,
    duration: 1450,
  });
</script>
<script>
    function redirectToTelegram() {
        window.location.href = "https://t.me/euphorisakstore";
    }
</script>
</body>
</html>