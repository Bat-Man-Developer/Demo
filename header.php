<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Salon</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #4ecdc4;
            --accent-color: #feca57;
            --text-color: #333;
            --background-color: #f7f7f7;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
            transition: background-color 0.3s ease;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                var(--primary-color),
                var(--primary-color) 10px,
                var(--secondary-color) 10px,
                var(--secondary-color) 20px
            );
            animation: moveStripes 20s linear infinite;
            opacity: 0.1;
            z-index: 0;
        }

        @keyframes moveStripes {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        nav {
            position: relative;
            z-index: 1;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        nav ul li a:hover::after {
            transform: scaleX(1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1, h2 {
            color: var(--primary-color);
            transition: color 0.3s ease;
        }

        h1:hover, h2:hover {
            color: var(--secondary-color);
        }

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .whatsapp-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            animation: slideIn 1s ease;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--primary-color);
        }

        th {
            background-color: var(--primary-color);
            color: white;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 107, 107, 0.1);
        }

        tr:hover {
            background-color: rgba(255, 107, 107, 0.2);
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="women.php">Women's Services</a></li>
                <li><a href="men.php">Men's Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">