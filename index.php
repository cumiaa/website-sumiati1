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


    <!-- NAVBAR -->

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


    <!-- HOME -->

    <section id="home" class="hero">

        <div class="hero-content">

            <p class="small">
                HALO, SAYA
            </p>

            <h1>
                <?php echo $nama; ?>
          
            <h2>
                <?php echo $status; ?>
            </h2>

            <p>
                <?php echo $deskripsi; ?>
            </p>

            <a href="#tentang" class="button">
                Tentang Saya
            </a>

        </div>

    </section>


    <!-- TENTANG -->

    <section id="tentang">

        <h2 class="judul">
            Tentang Saya
        </h2>

        <div class="about">

            <div class="card">

                <h3>👩‍💻 Profil</h3>

                <p>
                    Saya adalah mahasiswa Teknologi Informasi
                    yang sedang belajar membuat website dan
                    mempelajari berbagai teknologi pemrograman.
                </p>

            </div>


            <div class="card">

                <h3>🎯 Tujuan</h3>

                <p>
                    Saya ingin meningkatkan kemampuan dalam
                    pemrograman dan membuat berbagai project
                    untuk menambah pengalaman.
                </p>

            </div>

        </div>

    </section>


    <!-- SKILL -->

    <section id="skill" class="abu">

        <h2 class="judul">
            Skill Saya
        </h2>

        <div class="skills">

    <?php foreach ($skills as $skill): ?>

        <div class="skill">

            <div class="icon">
                💻
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

                <div class="icon">
                    🌐
                </div>

                <h3>HTML</h3>

                <p>
                    Membuat struktur website.
                </p>

            </div>


            <div class="skill">

                <div class="icon">
                    🎨
                </div>

                <h3>CSS</h3>

                <p>
                    Membuat tampilan website.
                </p>

            </div>


            <div class="skill">

                <div class="icon">
                    🐘
                </div>

                <h3>PHP</h3>

                <p>
                    Membuat website dinamis.
                </p>

            </div>


            <div class="skill">

                <div class="icon">
                    🐍
                </div>

                <h3>Python</h3>

                <p>
                    Belajar pemrograman.
                </p>

            </div>

        </div>

    </section>


    <!-- PROJECT -->

    <section id="project">

        <h2 class="judul">
            Project Saya
        </h2>

        <div class="projects">


            <div class="project">

                <h3>
                    🌐 Website Portfolio
                </h3>

                <p>
                    Website portfolio sederhana
                    menggunakan PHP, HTML dan CSS.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>


            <div class="project">

                <h3>
                    🛒 Program Kasir
                </h3>

                <p>
                    Program kasir sederhana menggunakan
                    bahasa pemrograman Python.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>


            <div class="project">

                <h3>
                    🏥 Sistem Antrian
                </h3>

                <p>
                    Program sederhana untuk mengelola
                    sistem antrian.
                </p>

                <a href="#" class="project-button">
                    Lihat Project
                </a>

            </div>

        </div>

    </section>


    <!-- KONTAK -->

    <section id="kontak" class="kontak">

        <h2 class="judul">
            Kontak Saya
        </h2>

        <p>
            Kamu bisa menghubungi saya melalui:
        </p>

        <div class="kontak-box">

        <p>
        📧 Email :
        <a href="mailto:sumiati@gmail.com">
            sumiati@gmail.com
        </a>
        </p>

        <p>
        📱 WhatsApp :
        <a href="https://wa.me/6281216727165" target="_blank">
            081216727165
        </a>
        </p>

        <p>
        🐙 GitHub :
        <a href="https://github.com/USERNAME" target="_blank">
            GitHub Saya
        </a>
        </p>

        </div>
    </section>


    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 Sumiati | Website PHP
        </p>

    </footer>


</body>

</html>