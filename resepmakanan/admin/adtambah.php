<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #fd0c0c;
        }
        .font-high-tower {
            font-family: "High Tower Text", sans-serif;
        }
        body {
            background-image: url('burger.jpg');
            background-size: cover;
        }
        .container {
            padding-top: 5px;
        }
        .white-text {
            color: white;
        }
    </style>
    <title>Tambah Resep Makanan</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active font-high-tower" href="adMenuSarapan.php">Makanan Berat~ &#127835;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-high-tower" href="adCemilan.php">Cemilan~ &#127839;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-high-tower" href="#">Minuman~ &#127865;</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h3 class="font-high-tower">TAMBAH RESEP</h3>
        <form method="post" action="addd.php">
            <table>
                <tr>
                    <td class="font-high-tower white-text">Id_Resep :</td>
                    <td><input type="text" name="Id_Resep"></td>
                </tr>
                <tr>
                    <td class="font-high-tower white-text">Nama :</td>
                    <td><input type="text" name="Nama"></td>
                </tr>
                <tr>
                    <td class="font-high-tower white-text">Kategori :</td>
                    <td>
                        <select name="Kategori">
                            <option value="makanan_berat">Makanan Berat</option>
                            <option value="cemilan">Cemilan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="font-high-tower white-text">Langkah :</td>
                    <td><input type="text" name="Langkah"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="SIMPAN" class="font-high-tower white-text"></td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        function showNotification(message) {
            const notification = document.createElement("div");
            notification.className = "notification";
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(function() {
                document.body.removeChild(notification);
            }, 4000);
        }
    </script>
</body>
</html>
