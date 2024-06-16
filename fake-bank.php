<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo Biến Động Số Dư</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            flex-direction: column;
        }
        .phone-screen {
            width: 380px; 
            height: 870px;  
            position: relative;
            border: 1px solid #ccc; 
            border-radius: 20px; 
            overflow: hidden;
        }
        .phone-screen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .notification {
            background: rgba(255, 255, 255, 0.7); 
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(100% - 40px);
            display: flex;
            align-items: center;
            position: absolute;
            top: 30%; 
            left: 50%;
            transform: translate(-50%, -30%); 
            backdrop-filter: blur(10px);
            overflow: hidden; 
        }
        .notification img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 10px;
        }
        .notification-content {
            flex-grow: 1;
        }
        .notification-content strong {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .notification-content p {
            margin: 0;
            font-size: 12px; 
        }
        .notification-time {
            font-size: 12px;
            position: absolute;
            top: 10px;
            right: 15px;
        }
        .hidden-button {
            width: 200px; 
            height: 200px; 
            display: block;
            margin: 20px auto;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            outline: none;
            opacity: 0; 
            position: absolute; 
            top: 80%; 
            left: 50%;
            transform: translate(-50%, -50%); 
        }
    </style>
</head>
<body>
    <div class="phone-screen">
        <img src="https://i.imgur.com/LsBYBSb.jpeg" alt="Phone Screen">
        <div class="notification">
            <img src="https://i.imgur.com/WoTh2Xk.jpeg" alt="Bank Logo">
            <div class="notification-content">
                <strong>Thông báo biến động số dư</strong>
                <?php
               
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Lấy dữ liệu từ form
                    $account = $_POST['account'];
                    $amount = $_POST['amount'];
                    $date = $_POST['date'];
                    $sodu = $_POST['sodu'];
                    $content = $_POST['content'];

                    
                    echo "<p>TK $account | GD: $amount VND $date<br>SD: $sodu VND | ND: $content</p>";
                }
                ?>
            </div>
            <div class="notification-time">
                <span>10:55</span>
            </div>
        </div>
    </div>
    <button id="printbtn" class="hidden-button" onclick="printPage()"></button>

    <script>
        
        function printPage() {
            window.print();
        }

       
        document.addEventListener("keydown", function (event) {
            if (event.ctrlKey && (event.keyCode === 80 || event.keyCode === 112)) { // Ctrl + P
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
