<?php

// =========================
// KONEKSI DATABASE
// =========================

require_once "koneksi.php";


// =========================
// AMBIL DATA PROFIL
// =========================

$queryProfil = mysqli_query(
    $koneksi,
    "SELECT * FROM profil LIMIT 1"
);

$profil = mysqli_fetch_assoc($queryProfil);


// =========================
// AMBIL DATA SKILL
// =========================

$querySkill = mysqli_query(
    $koneksi,
    "SELECT * FROM skills ORDER BY id ASC"
);


// =========================
// AMBIL DATA PROJECT
// =========================

$queryProject = mysqli_query(
    $koneksi,
    "SELECT * FROM projects ORDER BY id ASC"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Website <?php echo htmlspecialchars($profil['nama']); ?>
    </title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        <?php echo htmlspecialchars($profil['nama']); ?>
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
            <?php echo htmlspecialchars($profil['nama']); ?>
        </h1>

        <h2>
            <?php echo htmlspecialchars($profil['status']); ?>
        </h2>

        <p class="hero-description">
            <?php echo htmlspecialchars($profil['deskripsi']); ?>
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
            <?php echo htmlspecialchars($profil['nama']); ?>
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

        <?php

        $nomor = 1;

        while ($skill = mysqli_fetch_assoc($querySkill)):

        ?>

            <div class="skill">

                <div class="skill-number">

                    <?php

                    echo str_pad(
                        $nomor,
                        2,
                        "0",
                        STR_PAD_LEFT
                    );

                    ?>

                </div>


                <div class="icon">

                    <?php
                    echo htmlspecialchars(
                        $skill['icon']
                    );
                    ?>

                </div>


                <h3>

                    <?php
                    echo htmlspecialchars(
                        $skill['nama_skill']
                    );
                    ?>

                </h3>


                <p>

                    <?php
                    echo htmlspecialchars(
                        $skill['deskripsi']
                    );
                    ?>

                </p>

            </div>

        <?php

        $nomor++;

        endwhile;

        ?>

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


        <?php while ($project = mysqli_fetch_assoc($queryProject)): ?>

            <div class="project">

                <div class="project-icon">

                    <?php
                    echo htmlspecialchars(
                        $project['icon']
                    );
                    ?>

                </div>


                <h3>

                    <?php
                    echo htmlspecialchars(
                        $project['nama_project']
                    );
                    ?>

                </h3>


                <p>

                    <?php
                    echo htmlspecialchars(
                        $project['deskripsi']
                    );
                    ?>

                </p>


                <a
                    href="#kontak"
                    class="project-button"
                >
                    Lihat Project →
                </a>

            </div>

        <?php endwhile; ?>


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


        <!-- EMAIL -->

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


        <!-- WHATSAPP -->

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


        <!-- GITHUB -->

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

        <?php
        echo htmlspecialchars(
            $profil['nama']
        );
        ?>

    </div>


    <p>
        Dibuat dengan 💙 menggunakan PHP, MySQL, HTML & CSS.
    </p>


    <p class="copyright">

        © 2026

        <?php
        echo htmlspecialchars(
            $profil['nama']
        );
        ?>

        | Website Portfolio

    </p>

</footer>


</body>

</html>