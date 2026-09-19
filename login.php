<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap');

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

/* Glass & Velvet Obsidian Card */
form {
    background: rgba(15, 10, 25, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(168, 85, 247, 0.25);
    border-radius: 16px;
    padding: 48px 40px 40px;
    width: 100%;
    max-width: 360px;
    box-sizing: border-box;
    box-shadow: 
        0 20px 50px rgba(0, 0, 0, 0.6),
        0 0 30px rgba(147, 51, 234, 0.15);
}

/* Luxury Fashion Brand Header */
form::before {
    content: "LOGIN";
    display: block;
    font-family: 'Cinzel', serif;
    font-weight: 700;
    font-size: 22px;
    letter-spacing: 4px;
    color: #e9d5ff;
    text-align: center;
    margin-bottom: 32px;
    border-bottom: 1px solid rgba(168, 85, 247, 0.2);
    padding-bottom: 16px;
    text-shadow: 0 0 12px rgba(168, 85, 247, 0.4);
}

/* Form Labels */
label {
    display: block;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1.5px;
    color: #c084fc;
    text-transform: uppercase;
    margin-bottom: 8px;
}

/* Sleek Dark Purple Inputs */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 13px 16px;
    margin-bottom: 24px;
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
input[type="password"]:focus {
    outline: none;
    border-color: #c084fc;
    background-color: rgba(35, 20, 56, 0.9);
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
}

/* Deep Royal Purple Gradient Button */
button {
    width: 100%;
    padding: 14px;
    margin-top: 8px;
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
    </style>
</head>
<body>
    
        <form action="check_login.php" method="post">

        <label for="">ชื่อผู้ใช้</label>
        <input type="text" name="username"> <br>

        <label for="">รหัสผ่าน</label>
        <input type="text" name="password"> <br>

        <button>ล็อคอิน</button>
        
        </form>

</body>
</html>
