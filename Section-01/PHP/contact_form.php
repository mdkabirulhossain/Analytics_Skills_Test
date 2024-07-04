<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contact Form</h1>
    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
        <p class="confirm">Message Submit Successfully</p>
    <?php endif; ?>
    <?php if (isset($_GET['errors'])): ?>
        <?php $errors = unserialize(urldecode($_GET['errors'])); ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="process.php" method="post" class="form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>