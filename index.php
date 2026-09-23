<?php

$nama = "Sumiati";

$status = "Mahasiswa Teknologi Informasi";

$deskripsi = "Saya sedang belajar pemrograman, website, dan teknologi informasi.";

$skills = [
    "HTML",
    "CSS",
    "PHP",
    "Python"
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Sumiati</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        Sumiati
    </div>

    <div class="menu">

        <a href="#home">Home</a>

        <a href="#tentang">Tentang</a>

        <a href="#skill">Skill</a>

        <a href="#project">Project</a>

        <a href="#kontak">Kontak</a>

    </div>

</nav>


<!-- ================= HOME ================= -->

<section id="home" class="hero">

    <div class="hero-content">

        <div class="welcome">
            ✨ Selamat datang di website saya
        </div>

        <p class="small">
            HALO, SAYA
        </p>

        <h1>
            <?php echo $nama; ?>
        </h1>

        <h2>
            <?php echo $status; ?>
        </h2>

        <p class="hero-description">
            <?php echo $deskripsi; ?>
        </p>

        <div class="hero-buttons">

            <a href="#tentang" class="button primary">
                Tentang Saya
            </a>

            <a href="#project" class="button secondary">
                Lihat Project
            </a>

        </div>

    </div>


    <!-- FOTO PROFIL -->

    <div class="hero-card">

        <div class="profile-icon">

            <img
                src="sumiati.jpeg"
                alt="Foto Sumiati"
            >

        </div>

        <h3>
            <?php echo $nama; ?>
        </h3>

        <p>
            Teknologi Informasi
        </p>

        <div class="status">

            <span></span>

            Sedang belajar & berkembang

        </div>

    </div>

</section>


<!-- ================= TENTANG ================= -->

<section id="tentang" class="section">

    <div class="section-title">

        <p>
            TENTANG SAYA
        </p>

        <h2>
            Kenalan lebih dekat 👋
        </h2>

    </div>


    <div class="about">

        <div class="card">

            <div class="card-icon">
                👩‍💻
            </div>

            <h3>
                Profil Saya
            </h3>

            <p>
                Saya adalah mahasiswa Teknologi Informasi
                yang sedang belajar membuat website dan
                mempelajari berbagai teknologi pemrograman.
            </p>

        </div>


        <div class="card">

            <div class="card-icon">
                🎯
            </div>

            <h3>
                Tujuan Saya
            </h3>

            <p>
                Saya ingin meningkatkan kemampuan dalam
                pemrograman dan membuat berbagai project
                untuk menambah pengalaman.
            </p>

        </div>

    </div>

</section>


<!-- ================= SKILL ================= -->

<section id="skill" class="section skill-section">

    <div class="section-title">

        <p>
            KEMAMPUAN
        </p>

        <h2>
            Skill Saya 💻
        </h2>

    </div>


    <div class="skills">

        <?php foreach ($skills as $index => $skill): ?>

            <div class="skill">

                <div class="skill-number">
                    0<?php echo $index + 1; ?>
                </div>

                <div class="icon">

                    <?php

                    if ($skill == "HTML") {

                        echo "🌐";

                    } elseif ($skill == "CSS") {

                        echo "🎨";

                    } elseif ($skill == "PHP") {

                        echo "🐘";

                    } elseif ($skill == "Python") {

                        echo "🐍";

                    }

                    ?>

                </div>

                <h3>
                    <?php echo $skill; ?>
                </h3>

                <p>
                    Kemampuan yang sedang saya pelajari.
                </p>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- ================= PROJECT ================= -->

<section id="project" class="section">

    <div class="section-title">

        <p>
            PROJECT
        </p>

        <h2>
            Project Saya 🚀
        </h2>

    </div>


    <div class="projects">

        <div class="project">

            <div class="project-icon">
                🌐
            </div>

            <h3>
                Website Portfolio
            </h3>

            <p>
                Website portfolio sederhana
                menggunakan PHP, HTML dan CSS.
            </p>

            <a href="#kontak" class="project-button">
                Lihat Project →
            </a>

        </div>


        <div class="project">

            <div class="project-icon">
                🛒
            </div>

            <h3>
                Program Kasir
            </h3>

            <p>
                Program kasir sederhana menggunakan
                bahasa pemrograman Python.
            </p>

            <a href="#kontak" class="project-button">
                Lihat Project →
            </a>

        </div>


        <div class="project">

            <div class="project-icon">
                🏥
            </div>

            <h3>
                Sistem Antrian
            </h3>

            <p>
                Program sederhana untuk mengelola
                sistem antrian.
            </p>

            <a href="#kontak" class="project-button">
                Lihat Project →
            </a>

        </div>

    </div>

</section>


<!-- ================= KONTAK ================= -->

<section id="kontak" class="kontak">

    <div class="section-title">

        <p>
            KONTAK
        </p>

        <h2>
            Kontak Saya 🤍
        </h2>

    </div>

    <p class="contact-text">
        Kamu bisa menghubungi saya melalui:
    </p>


    <div class="kontak-box">

        <a
            href="mailto:sumiati@gmail.com"
            class="contact-item"
        >

            <div class="contact-icon">
                📧
            </div>

            <div>

                <small>
                    Email
                </small>

                <strong>
                    sumiati@gmail.com
                </strong>

            </div>

            <span>
                →
            </span>

        </a>


        <a
            href="https://wa.me/6281216727165"
            target="_blank"
            class="contact-item"
        >

            <div class="contact-icon">
                📱
            </div>

            <div>

                <small>
                    WhatsApp
                </small>

                <strong>
                    081216727165
                </strong>

            </div>

            <span>
                →
            </span>

        </a>


        <a
            href="https://github.com/cumiaa/website-sumiati1"
            target="_blank"
            class="contact-item"
        >

            <div class="contact-icon">
                🐙
            </div>

            <div>

                <small>
                    GitHub
                </small>

                <strong>
                    cumiaa/website-sumiati1
                </strong>

            </div>

            <span>
                →
            </span>

        </a>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-logo">
        Sumiati
    </div>

    <p>
        Dibuat dengan 💙 menggunakan PHP, HTML & CSS.
    </p>

    <p class="copyright">
        © 2026 Sumiati | Website Portfolio
    </p>

</footer>


</body>

</html>