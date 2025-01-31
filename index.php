<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omarthobe Indonesia</title>
    <link rel="icon" href="logo_omarthobe2.png" type="image/x-icon">
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* ... existing styles ... */

        :root {
            --primary-color: #2C3E50;
            /* Abu gelap */
            --primary-color-dark: #1a252f;
            /* Abu lebih gelap dari primary color */
            --secondary-color: #E74C3C;
            /* Merah */
            --secondary-color-inverse: #18B3C3;
            /* Warna komplementer dari merah */
            --text-color: #FFFFFF;
            /* Putih */
            --gradient-1: linear-gradient(135deg, #E74C3C, #c0392b);
            --gradient-2: linear-gradient(45deg, rgba(44, 62, 80, 0.9), rgba(26, 37, 47, 0.9));
        }

        body {
            background: linear-gradient(135deg, var(--primary-color-dark), #2c3e50);
            color: var(--text-color);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: var(--gradient-2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeIn 1s ease-out;
        }

        .link {
            background: var(--gradient-1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            padding: 20px 20px;
            border-radius: 5px;
            /* Radius 5 sesuai permintaan */
            text-decoration: none;
            color: var(--text-color);
            /* Warna font putih */
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
            /* Spacing antar link */
        }

        .link:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.2),
                    transparent);
            transition: 0.5s;
        }

        .link:hover::before {
            left: 100%;
        }

        /* Update warna icon menjadi putih */
        .fa-instagram,
        .fa-twitter,
        .fa-facebook,
        .fa-shopping-bag,
        .fa-store {
            color: var(--text-color);
        }

        /* Tambahan CSS untuk responsive */
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .container {
                width: 100%;
                padding: 10px;
            }

            .profile h1 {
                font-size: 24px;
            }

            .link {
                padding: 12px 15px;
                font-size: 14px;
            }
        }

        /* Styling untuk profile section */
        .profile {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile img {
            width: 100%;
            max-width: 240px;
            height: auto;
            filter: invert(1);
            border: 3px solid var(--secondary-color-inverse);
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
        }

        .profile h1 {
            font-family: 'Poppins', sans-serif;
            /* Font yang lebih modern */
            font-size: 28px;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, var(--text-color), #ecf0f1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-top: 15px;
        }

        /* Box container untuk links */
        .links {
            background: rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Update media query untuk responsif */
        @media (max-width: 480px) {
            .profile img {
                max-width: 180px;
            }

            .links {
                padding: 30px;
                gap: 15px;
            }
        }

        /* Animasi untuk icon */
        .link i {
            transition: transform 0.3s ease;
        }

        .link:hover i {
            transform: scale(1.2);
        }

        /* Tambahkan animasi fade-in saat halaman dimuat */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="logo_omarthobe.png" alt="Profile Picture">
            <h1>Omarthobe Indonesia</h1>
        </div>

        <div class="links">
            <a href="https://wa.me/6285187269943" target="_blank" class="link">
                <i class="fab fa-whatsapp"></i>
                WhatsApp
            </a>
            <a href="https://instagram.com/omarthobe.id?igsh=MXN6cnY2bDczcGRsaA==" target="_blank" class="link">
                <i class="fab fa-instagram"></i>
                Instagram
            </a>
            <a href="https://id.shp.ee/z8sx6SJ" target="_blank" class="link">
                <i class="fas fa-shopping-bag"></i>
                Shopee
            </a>
            <a href="https://www.tiktok.com/@omarthobe.id?is_copy_url=1&is_from_webapp=v1" target="_blank" class="link">
                <i class="fab fa-tiktok"></i>
                TikTok
            </a>
        </div>
    </div>
</body>

</html>