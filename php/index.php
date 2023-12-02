<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web1 Semester 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>Tugas Web1 Semester 5</nav>

    <div class="dashboard-container" id="dashboard-container">
        <?php
        // Load existing cards data from the server
        $cardsData = json_decode(file_get_contents('loadcards.php'), true);

        // Display existing cards
        foreach ($cardsData as $card) {
            echo '<div class="dashboard-card" onclick="goTo(\'' . $card['path'] . '\')">';
            echo '<a href="' . $card['path'] . '">';
            echo '<div class="dashboard-card-content">' . $card['name'] . '</div>';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </div>

    <button onclick="addNewCard()">Tambah Card</button>

    <script>
        function goTo(path) {
            window.location.href = path;
        }

        function addNewCard() {
            // Redirect to addcard.php with data
            window.location.href = 'addcard.php?name=' + encodeURIComponent(prompt("Masukkan nama card:")) + '&path=' + encodeURIComponent(prompt("Masukkan path card (contoh: /tugas4/index.html):"));
        }
    </script>

</body>
</html>
