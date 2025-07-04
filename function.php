<?php
function sapa() {
    return "Halo, selamat datang!";
}


function sapaNama($nama) {
    return "Halo, $nama!";
}

function hitungLuasPersegi($sisi) {
    return $sisi * $sisi;
}

function sapaOrang($nama = "zami") {
    return "Halo, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fungsi PHP</title>
    <style>
        /* Reset margin body jadi 60px atas karena navbar fixed */
        body {
            margin: 60px 0 20px 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0e1a2b;
            color: #e0e0e0;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* Navbar fixed atas */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background: rgba(118, 75, 162, 0.9);
            box-shadow: 0 2px 8px rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            padding: 0 20px;
            z-index: 1000;
            font-weight: 600;
            font-size: 1.1rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffb703;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #8ecae6;
            text-shadow: 0 0 10px #8ecae6;
        }

        .box {
            background: rgba(255,255,255,0.1);
            border-radius: 12px;
            padding: 20px 30px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 0 15px rgba(142,202,230,0.3);
        }

        /* Animasi hujan */

        .raindrop {
            position: fixed;
            top: -10px;
            width: 2px;
            height: 15px;
            background: linear-gradient(to bottom, #8ecae6, #219ebc);
            opacity: 0.6;
            animation-name: fall;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @keyframes fall {
            to {
                transform: translateY(110vh);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.html" aria-label="Kembali ke halaman utama">← Kembali ke Index</a>
    </nav>

    <h1>Fungsi PHP </h1>

    <div class="box">
        <h2>Fungsi Tanpa Parameter</h2>
        <p><?php echo sapa(); ?></p>
    </div>

    <div class="box">
        <h2>Fungsi dengan Parameter</h2>
        <p><?php echo sapaNama("zami"); ?></p>
    </div>

    <div class="box">
        <h2>Fungsi dengan Return Value</h2>
        <p>Luas persegi dengan sisi 7 = <?php echo hitungLuasPersegi(7); ?></p>
    </div>

    <div class="box">
        <h2>Tipe Parameter Default</h2>
        <p><?php echo sapaOrang(); ?></p>
    </div>

    <script>
        // Buat animasi hujan dinamis
        const jumlahHujan = 100;

        for(let i=0; i < jumlahHujan; i++){
            let drop = document.createElement('div');
            drop.classList.add('raindrop');
            drop.style.left = Math.random() * 100 + 'vw';
            drop.style.animationDuration = (Math.random() * 1 + 0.7) + 's';
            drop.style.animationDelay = (Math.random() * 5) + 's';
            drop.style.height = (Math.random() * 20 + 10) + 'px';
            drop.style.width = '2px';
            document.body.appendChild(drop);
        }
    </script>
</body>
</html>
