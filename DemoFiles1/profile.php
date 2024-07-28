<?php
$profile = [
    'name' => 'Mendoza Ian',
    'hobbies' => ['Playing Genshin Impact', 'Playing Chess'],
    'dream' => 'To become like Elon Musk'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile of Mendoza Ian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-card {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 350px;
            width: 100%;
            color: white;
        }
        .profile-card h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .profile-card p {
            margin: 15px 0;
            font-size: 18px;
        }
        .profile-card ul {
            list-style-type: none;
            padding: 0;
        }
        .profile-card ul li {
            background: rgba(255, 255, 255, 0.2);
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1><?php echo $profile['name']; ?></h1>
        <p><strong>Hobbies:</strong></p>
        <ul>
            <?php foreach ($profile['hobbies'] as $hobby): ?>
                <li><?php echo $hobby; ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Dream:</strong></p>
        <p><?php echo $profile['dream']; ?></p>
    </div>
</body>
</html>
