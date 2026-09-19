<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap');

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
            min-height: 100vh;
            margin: 0;
            padding: 40px 24px;
            box-sizing: border-box;
            color: #f3e8ff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navigation Bar Container - Aligns buttons horizontally */
        .nav-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
            width: 100%;
            max-width: 950px;
        }

        .btn-nav {
            display: inline-block;
            padding: 10px 20px;
            background: rgba(15, 10, 25, 0.85);
            border: 1px solid rgba(168, 85, 247, 0.3);
            border-radius: 8px;
            color: #e9d5ff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-nav:hover {
            border-color: #c084fc;
            background: rgba(35, 20, 56, 0.9);
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.25);
            color: #ffffff;
        }

        /* Logout Accent */
        .btn-logout {
            background: rgba(225, 29, 72, 0.15);
            border-color: rgba(225, 29, 72, 0.3);
            color: #fda4af;
        }

        .btn-logout:hover {
            border-color: #f43f5e;
            background: rgba(225, 29, 72, 0.25);
            box-shadow: 0 0 15px rgba(225, 29, 72, 0.3);
            color: #ffffff;
        }

        /* Luxury Table Outer Styling */
        table {
            width: 100%;
            max-width: 950px;
            border-collapse: collapse;
            background: rgba(15, 10, 25, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(168, 85, 247, 0.25) !important;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.6),
                0 0 30px rgba(147, 51, 234, 0.15);
        }

        /* Table Header */
        thead {
            background: rgba(30, 16, 48, 0.9);
        }

        th {
            padding: 16px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #c084fc;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(168, 85, 247, 0.3) !important;
            border-right: none !important;
            border-left: none !important;
        }

        /* Table Cells */
        td {
            padding: 14px 16px;
            font-size: 14px;
            color: #e9d5ff;
            border-bottom: 1px solid rgba(168, 85, 247, 0.1) !important;
            border-right: none !important;
            border-left: none !important;
            vertical-align: middle;
        }

        tr:hover td {
            background: rgba(168, 85, 247, 0.08);
        }

        /* Table Images */
        td img {
            width: 100px !important;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid rgba(168, 85, 247, 0.2);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

include "action/connect.php";
$sql = "SELECT * FROM product";
$result = mysqli_query($con, $sql);
?>

    <div class="nav-bar">
        <a href="manage_product.php" class="btn-nav">หน้าการจัดการ</a>
        <a href="logout.php" class="btn-nav btn-logout">ล็อคเอ้าท์</a>
    </div>

    <table border=1>
        <thead>
            <th>รหัสสินค้า</th>
            <th>ชื่อเครื่องแบบ</th>
            <th>ขนาด</th>
            <th>ราคา</th>
            <th>รูป</th>
        </thead>

        <?php
            foreach($result as $order){
                ?>
                <tr>
                    <td><?= $order["p_id"] ?></td>
                    <td><?= $order["p_name"] ?></td>
                    <td><?= $order["p_size"] ?></td>
                    <td><?= $order["p_price"] ?></td>
                    <td>
                        <img 
                            src="<?= $order["p_image"] ?>"
                        >
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>