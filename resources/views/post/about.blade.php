<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <title>About Us</title> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Navbar -->


    <section class="about-section">
        <div class="container text-center">
            <h1 class="about-title">Hakkımızda</h1>
            <p class="about-text">
                Sitemize hoş geldiniz! Yüksek kaliteli içerik ve hizmetler sunarak izleyicilerimize ilham vermeyi ve onları güçlendirmeyi amaçlıyoruz. Ekibimiz, size en son güncellemeleri ve anlamlı bilgileri sunmak için yorulmadan çalışıyor.            </p>
            <br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card about-card">
                        <i class="fas fa-lightbulb card-icon"></i>
                        <h3>Misyonumuz</h3>
                        <p>Bilgi ve fikirleri paylaşarak ziyaretçilere ilham vermek ve onları bilgilendirmek.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card about-card">
                        <i class="fas fa-users card-icon"></i>
                        <h3>Takımımız</h3>
                        <p>Mükemmeliğe ulaşmak için tutkulu çalışan bir ekip.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card about-card">
                        <i class="fas fa-handshake card-icon"></i>
                        <h3>Değerlerimiz</h3>
                        <p>Dürüstlük, yenilikçilik ve kapsayıcılık yaptığımız her işte bize rehberlik eder.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <div class="footer">
        <p>&copy; 2024. Designed by <a href="https://github.com/yemresener">yemresener</a>.</p>
    </div>
</body>
</html>
