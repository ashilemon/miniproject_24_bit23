<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Sole Studio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

        /* Dark Luxury Atmosphere */
        html {
            min-height: 100vh;
            background-color: #09060e;
            background-image: 
                radial-gradient(at 0% 0%, rgba(88, 28, 135, 0.25) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(126, 34, 206, 0.15) 0px, transparent 50%);
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 24px;
            box-sizing: border-box;
            color: #f3e8ff;
        }

        /* Compact Luxury Card Box */
        .card {
            background: rgba(15, 10, 25, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(168, 85, 247, 0.25);
            border-radius: 16px;
            padding: 40px 32px;
            width: 100%;
            max-width: 340px; /* Controls exact card width */
            text-align: center;
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.6),
                0 0 30px rgba(147, 51, 234, 0.15);
            box-sizing: border-box;
        }

        /* Greeting Text Styling */
        .greeting {
            font-size: 20px;
            font-weight: 600;
            color: #f3e8ff;
            line-height: 1.5;
        }

        .username {
            color: #c084fc;
            font-weight: 700;
        }

        /* Royal Purple Accent Link Button */
        .card > a {
            display: inline-block;
            width: 100%;
            padding: 12px 0;
            margin-top: 24px;
            background: linear-gradient(135deg, #7e22ce 0%, #581c87 100%);
            color: #ffffff;
            border: 1px solid rgba(192, 132, 252, 0.4);
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(126, 34, 206, 0.4);
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .card > a:hover {
            background: linear-gradient(135deg, #9333ea 0%, #6b21a8 100%);
            box-shadow: 0 6px 25px rgba(168, 85, 247, 0.6);
            transform: translateY(-2px);
        }

        .card > a:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <?php
        session_start();
        
        if(!isset($_SESSION["username"])){
            header("location: login.php");
            exit;
        }
    ?>

    <div class="card">
        <div class="greeting">
            สวัสดี คุณ <span class="username"><?= htmlspecialchars($_SESSION["username"]) ?></span>
        </div>
        <a href="index.php">หน้าหลัก</a>
    </div>

</body>
</html>