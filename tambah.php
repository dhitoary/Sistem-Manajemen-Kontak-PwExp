<?php
require_once 'fungsi.php';
require_login();

$errors = [];
$data = [];
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nama"])) {
        $errors[] = "Nama harus diisi";
    } else {
        $data['nama'] = trim($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $data['nama'])) {
            $errors[] = "Nama hanya boleh mengandung huruf dan spasi";
        }
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email harus diisi";
    } else {
        $data['email'] = trim($_POST["email"]);
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Format email tidak valid";
        }
    }

    if (empty($_POST["telepon"])) {
        $errors[] = "Telepon harus diisi";
    } else {
        $data['telepon'] = trim($_POST["telepon"]);
        if (!preg_match("/^[0-9\+]+$/", $data['telepon'])) {
            $errors[] = "Nomor telepon hanya boleh mengandung angka dan tanda +";
        }
    }

    if (empty($errors)) {
        add_contact($data);
        $success_message = "Kontak berhasil ditambahkan!";
        $data = []; 
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontak Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>+ Tambah Kontak Baru</h1>
        <a href="dashboard.php" class="btn btn-secondary" style="margin-bottom: 20px;">
            &laquo; Kembali ke Dashboard
        </a>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <b>Error!</b>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="tambah.php">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" 
                       value="<?php echo htmlspecialchars($data['nama'] ?? ''); ?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       value="<?php echo htmlspecialchars($data['email'] ?? ''); ?>">
            </div>
            
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="tel" id="telepon" name="telepon" 
                       value="<?php echo htmlspecialchars($data['telepon'] ?? ''); ?>">
            </div>
            
            <button type="submit" class="btn">Simpan Kontak</button>
        </form>

    </div>

</body>
</html>