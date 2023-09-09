<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm.info</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to Farm.info</h1>
        <nav>
            <ul>
                <li><a href="marketplace.php">Marketplace</a></li>
                <li><a href="wiki.php">Wiki</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <!-- Dynamic content will be loaded here using PHP -->
        <?php include('content.php'); ?>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>Contact us at: contact@farm.info</p>
    </footer>
</body>

</html>
