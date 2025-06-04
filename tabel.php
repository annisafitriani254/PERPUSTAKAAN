<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tabel Perkalian</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fefefe;
      color: #333;
    }

    header {
      background-color: #3366ff;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      margin-top: 10px;
    }

    .button {
      background-color: #f0f8ff;
      color: #3366ff;
      padding: 10px 16px;
      text-decoration: none;
      border-radius: 6px;
      margin: 5px;
      display: inline-block;
    }

    main {
      padding: 30px;
      max-width: 900px;
      margin: auto;
    }

    h2, caption {
      color: #3366ff;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    table {
      margin: auto;
      border-collapse: collapse;
      width: 100%;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #3366ff;
      color: white;
    }

    .back-link {
      display: inline-block;
      margin-top: 30px;
      background-color: #3366ff;
      color: white;
      padding: 10px 16px;
      border-radius: 6px;
      text-decoration: none;
    }

    .back-link:hover {
      background-color: #254eda;
    }

    footer {
      background-color: #1e2a38;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>PERPUSTAKAAN ANNISA</h1>
    <nav>
      <a href="index.php" class="button">Beranda</a>
      <a href="about.php" class="button">Tentang Saya</a>
      <a href="formulir.php" class="button">Formulir</a>
    </nav>
  </header>

  <main>
    <section>
      <h2>Tabel Perkalian 1–10</h2>
      <table>
        <caption>Tabel Perkalian</caption>
        <tr>
          <th>x</th>
          <?php for ($i = 1; $i <= 10; $i++) echo "<th>$i</th>"; ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
          echo "<tr><th>$i</th>";
          for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
          }
          echo "</tr>";
        }
        ?>
      </table>

      <a href="index.php" class="back-link">Kembali ke Beranda</a>
    </section>
  </main>

  <footer>
    <p>© Annisa Fitriani 2025</p>
  </footer>
</body>
</html>


