<?php

require_once "koneksi.php";


// =========================
// AMBIL ID PROJECT
// =========================

$id = isset($_GET['id'])
    ? intval($_GET['id'])
    : 0;


// =========================
// AMBIL DATA PROJECT
// =========================

$query = mysqli_prepare(
    $koneksi,
    "SELECT * FROM projects WHERE id = ?"
);

mysqli_stmt_bind_param(
    $query,
    "i",
    $id
);

mysqli_stmt_execute($query);

$result = mysqli_stmt_get_result($query);

$project = mysqli_fetch_assoc($result);


// =========================
// JIKA PROJECT TIDAK ADA
// =========================

if (!$project) {

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Project Tidak Ditemukan</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: Arial, sans-serif;

            background: #f5fbfc;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

        }


        .error-box {

            width: 90%;

            max-width: 500px;

            padding: 50px;

            text-align: center;

            background: white;

            border-radius: 25px;

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, 0.08);

        }


        h1 {

            color: #1595a8;

            margin-bottom: 15px;

        }


        p {

            color: #68787d;

        }


        a {

            display: inline-block;

            margin-top: 25px;

            padding: 13px 25px;

            border-radius: 30px;

            background: #1595a8;

            color: white;

            text-decoration: none;

            font-weight: bold;

        }

    </style>

</head>


<body>


    <div class="error-box">

        <h1>
            Project Tidak Ditemukan 😢
        </h1>

        <p>
            Project yang kamu cari tidak tersedia.
        </p>

        <a href="index.php#project">
            ← Kembali
        </a>

    </div>


</body>

</html>

<?php

exit;

}

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

        <?php

        echo htmlspecialchars(
            $project['nama_project']
        );

        ?>

        - Sumiati

    </title>



    <style>


        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }


        html {

            scroll-behavior: smooth;

        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: #263238;

            background:
                linear-gradient(
                    135deg,
                    #f9ffff,
                    #e4f9fb
                );

            line-height: 1.7;

            min-height: 100vh;

        }



        /* =========================
           NAVBAR
        ========================= */

        .navbar {

            height: 75px;

            padding: 0 8%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.97
                );

            box-shadow:
                0 2px 15px
                rgba(
                    0,
                    0,
                    0,
                    0.06
                );

        }


        .logo {

            color: #1595a8;

            font-size: 28px;

            font-weight: bold;

        }


        .back {

            color: #1595a8;

            text-decoration: none;

            font-weight: bold;

        }


        .back:hover {

            text-decoration: underline;

        }



        /* =========================
           CONTAINER
        ========================= */

        .container {

            max-width: 900px;

            margin: 70px auto;

            padding: 0 20px;

        }



        /* =========================
           PROJECT
        ========================= */

        .project-detail {

            background: white;

            padding: 50px;

            border-radius: 30px;

            box-shadow:
                0 20px 50px
                rgba(
                    21,
                    149,
                    168,
                    0.12
                );

        }


        .project-icon {

            width: 90px;

            height: 90px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 25px;

            border-radius: 25px;

            background: #e8f9fb;

            font-size: 45px;

        }


        .label {

            color: #1595a8;

            font-size: 13px;

            font-weight: bold;

            letter-spacing: 3px;

            margin-bottom: 8px;

        }


        h1 {

            color: #263238;

            font-size: 42px;

            line-height: 1.2;

            margin-bottom: 20px;

        }


        .short-description {

            color: #68787d;

            font-size: 18px;

            margin-bottom: 35px;

        }


        .line {

            width: 100%;

            height: 1px;

            background: #edf3f4;

            margin: 30px 0;

        }


        h2 {

            color: #1595a8;

            font-size: 24px;

            margin-bottom: 12px;

        }


        .detail {

            color: #59696e;

            font-size: 16px;

            margin-bottom: 35px;

        }



        /* =========================
           TEKNOLOGI
        ========================= */

        .technology {

            display: flex;

            flex-wrap: wrap;

            gap: 10px;

        }


        .technology span {

            padding: 8px 15px;

            border-radius: 20px;

            background: #e7f9fb;

            color: #1595a8;

            font-size: 14px;

            font-weight: bold;

        }



        /* =========================
           TOMBOL
        ========================= */

        .back-button {

            display: inline-block;

            margin-top: 40px;

            padding: 13px 25px;

            border-radius: 30px;

            background: #1595a8;

            color: white;

            text-decoration: none;

            font-weight: bold;

            transition: 0.3s;

        }


        .back-button:hover {

            background: #107d8e;

            transform: translateY(-3px);

        }



        /* =========================
           FOOTER
        ========================= */

        footer {

            padding: 35px 8%;

            text-align: center;

            background: #113f48;

            color: white;

        }


        footer p {

            color: #b8d2d6;

            font-size: 14px;

        }



        /* =========================
           HP
        ========================= */

        @media (max-width: 600px) {


            .navbar {

                height: auto;

                padding: 18px 5%;

            }


            .container {

                margin: 40px auto;

                padding: 0 15px;

            }


            .project-detail {

                padding: 30px 25px;

            }


            h1 {

                font-size: 32px;

            }


            h2 {

                font-size: 21px;

            }


            .short-description {

                font-size: 16px;

            }

        }

    </style>


</head>



<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">


    <div class="logo">

        Sumiati

    </div>


    <a
        href="index.php#project"
        class="back"
    >

        ← Kembali

    </a>


</nav>



<!-- =========================
     DETAIL PROJECT
========================= -->

<div class="container">


    <div class="project-detail">


        <!-- ICON -->

        <div class="project-icon">

            <?php

            echo htmlspecialchars(
                $project['icon']
            );

            ?>

        </div>



        <!-- LABEL -->

        <div class="label">

            PROJECT SAYA

        </div>



        <!-- JUDUL -->

        <h1>

            <?php

            echo htmlspecialchars(
                $project['nama_project']
            );

            ?>

        </h1>



        <!-- DESKRIPSI -->

        <p class="short-description">

            <?php

            echo htmlspecialchars(
                $project['deskripsi']
            );

            ?>

        </p>



        <div class="line"></div>



        <!-- DETAIL -->

        <h2>

            Tentang Project

        </h2>


        <p class="detail">

            <?php

            echo nl2br(
                htmlspecialchars(
                    $project['detail']
                )
            );

            ?>

        </p>



        <!-- TEKNOLOGI -->

        <h2>

            Teknologi yang Digunakan

        </h2>


        <div class="technology">


            <?php

            $teknologi = explode(
                ",",
                $project['teknologi']
            );


            foreach (
                $teknologi as $tech
            ):

            ?>


                <span>

                    <?php

                    echo htmlspecialchars(
                        trim($tech)
                    );

                    ?>

                </span>


            <?php

            endforeach;

            ?>


        </div>



        <!-- TOMBOL -->

        <a
            href="index.php#project"
            class="back-button"
        >

            ← Kembali ke Semua Project

        </a>


    </div>


</div>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>

        Dibuat dengan 💙 menggunakan
        PHP, MySQL, HTML & CSS.

    </p>


    <p>

        © 2026 Sumiati |
        Website Portfolio

    </p>

</footer>


</body>

</html>