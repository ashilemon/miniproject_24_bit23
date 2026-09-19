<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    min-height: 100vh;
    margin: 0;
    padding: 40px 24px;
    box-sizing: border-box;
    color: #f3e8ff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Back Link Button */
body > a {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: 24px;
    background: rgba(15, 10, 25, 0.85);
    border: 1px solid rgba(168, 85, 247, 0.3);
    border-radius: 8px;
    color: #e9d5ff;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
}

body > a:hover {
    border-color: #c084fc;
    background: rgba(35, 20, 56, 0.9);
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.25);
    color: #ffffff;
}

/* Glass & Velvet Obsidian Form Container */
form {
    background: rgba(15, 10, 25, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(168, 85, 247, 0.25);
    border-radius: 16px;
    padding: 40px 36px;
    width: 100%;
    max-width: 380px;
    box-sizing: border-box;
    box-shadow: 
        0 20px 50px rgba(0, 0, 0, 0.6),
        0 0 30px rgba(147, 51, 234, 0.15);
}

/* Luxury Form Title Header */
form::before {
    content: "PRODUCT EDIT";
    display: block;
    font-family: 'Cinzel', serif;
    font-weight: 700;
    font-size: 18px;
    letter-spacing: 3px;
    color: #e9d5ff;
    text-align: center;
    margin-bottom: 28px;
    border-bottom: 1px solid rgba(168, 85, 247, 0.2);
    padding-bottom: 14px;
    text-shadow: 0 0 10px rgba(168, 85, 247, 0.3);
}

/* Field Labels */
label {
    display: block;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1.5px;
    color: #c084fc;
    text-transform: uppercase;
    margin-bottom: 8px;
}

/* Input Fields */
input[type="text"],
input[type="number"],
input[type="password"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 20px;
    border: 1px solid rgba(168, 85, 247, 0.25);
    border-radius: 10px;
    box-sizing: border-box;
    font-family: inherit;
    font-size: 14px;
    color: #ffffff;
    background-color: rgba(24, 15, 38, 0.7);
    transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #c084fc;
    background-color: rgba(35, 20, 56, 0.9);
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
}

/* Primary Purple Gradient Save Button */
button {
    width: 100%;
    padding: 14px;
    margin-top: 10px;
    background: linear-gradient(135deg, #7e22ce 0%, #581c87 100%);
    color: #ffffff;
    border: 1px solid rgba(192, 132, 252, 0.4);
    border-radius: 10px;
    font-family: inherit;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(126, 34, 206, 0.4);
    transition: all 0.3s ease;
}

button:hover {
    background: linear-gradient(135deg, #9333ea 0%, #6b21a8 100%);
    box-shadow: 0 6px 25px rgba(168, 85, 247, 0.6);
    transform: translateY(-2px);
}

button:active {
    transform: translateY(0);
}
    </style>
</head>
<body>

    <?php
        $id = $_GET["id"];

        include "action/connect.php";

        $sql = "SELECT * FROM product WHERE p_id = '$id' ";

        $result = mysqli_query($con, $sql);

        $order = mysqli_fetch_assoc($result);
    ?>

    <a href="manage_product.php">หน้าจัดการ</a>
    
    <form action="action/update_product.php" method="post">
   
        <label for="">ชื่อเครื่องแบบ</label>
        <input type="text" name="p_name"  value="<?= $order["p_name"] ?>"> <br>

        <label for="">ขนาด</label>
        <input type="text" name="p_size" value="<?= $order["p_size"] ?>"> <br>

        <label for="">ราคา</label>
        <input type="text" name="p_price" value="<?= $order["p_price"] ?>"> <br>

        <label for="">รูปภาพตัวอย่าง</label>
        <input type="text" name="p_image" value="<?= $order["p_image"] ?>"> <br>

        <input type="hidden" name="p_id" value="<?= $order['p_id'] ?>">

        <br>
        <button>บันทึก</button>

    </form>

</body>
</html>