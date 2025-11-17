<?php
require_once 'fungsi.php';
require_login();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['csrf_token'];

$contacts = get_contacts();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Manajemen Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        
        <div class="header-nav">
            <span>
                Selamat Datang, 
                <b><?php echo htmlspecialchars($_SESSION['username']); ?>!</b>
            </span>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <h1>Dashboard Manajemen Kontak</h1>
        
        <a href="tambah.php" class="btn" style="margin-bottom: 20px;">
            + Tambah Kontak Baru
        </a>

        <h2>Daftar Kontak Anda</h2>
        
        <table class="contact-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($contacts)): ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">
                            Belum ada kontak. Silakan tambah kontak baru.
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($contacts as $index => $contact): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($contact['nama']); ?></td>
                            <td><?php echo htmlspecialchars($contact['email']); ?></td>
                            <td><?php echo htmlspecialchars($contact['telepon']); ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $index; ?>" class="btn btn-secondary">Edit</a>
                                <a href="hapus.php?id=<?php echo $index; ?>&token=<?php echo $token; ?>" 
                                   class="btn btn-danger" 
                                   onclick="return confirm('Yakin ingin menghapus kontak ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <hr style="margin-top: 30px; border: 0; border-top: 1px solid #e0f2f1;">
        
        <h3 style="color: #00695c; margin-bottom: 10px;">
            Debug: Tampilan Data Session
        </h3>
        
        <a class="btn-toggle" 
           onclick="var data = document.getElementById('sessionData'); data.style.display = (data.style.display === 'none' ? 'block' : 'none');">
            Tampilkan/Sembunyikan Data Mentah
        </a>
        
        <div class="debug-data" id="sessionData" style="display:none;">
            <pre><?php print_r($_SESSION); ?></pre>
        </div>
        </div>

</body>
</html>