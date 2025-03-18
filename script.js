<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 10px; }
        input, button { width: 100%; padding: 10px; margin-bottom: 10px; }
        .book { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; background: #fff; border-radius: 5px; }
        .dark-mode { background-color: #333; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perpustakaan Digital</h1>
        <button onclick="toggleDarkMode()">Toggle Dark Mode</button>
        <input type="text" id="search" placeholder="Cari buku..." onkeyup="searchBook()">
        <div id="book-list">
            <div class="book" data-title="Belajar HTML">Belajar HTML</div>
            <div class="book" data-title="Dasar-dasar JavaScript">Dasar-dasar JavaScript</div>
            <div class="book" data-title="Pemrograman Python">Pemrograman Python</div>
        </div>
        <h2>Hubungi Kami</h2>
        <form id="contact-form">
            <input type="text" id="name" placeholder="Nama Anda" required>
            <input type="email" id="email" placeholder="Email Anda" required>
            <textarea id="message" placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        function searchBook() {
            let query = document.getElementById('search').value.toLowerCase();
            let books = document.querySelectorAll('.book');
            books.forEach(book => {
                let title = book.getAttribute('data-title').toLowerCase();
                book.style.display = title.includes(query) ? 'block' : 'none';
            });
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Pesan telah dikirim!');
        });
    </script>
</body>
</html>
alert("Script berhasil dimuat!");
