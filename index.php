<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profil - <?php echo "Raihan"; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <?php 
        // Simulasi data dari database (nanti bisa diganti dengan koneksi MySQL)
        $nama = "Raihan Ramadhan";
        $role = "Web Developer & Student";
    ?>

    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="profile-photo-container">
                <img src="fto.jpeg" alt="Foto Profil" id="profile-display" class="profile-circle">
                <label for="photo-input" class="upload-badge">
                    <i class="fas fa-camera"></i>
                </label>
                <input type="file" id="photo-input" accept="image/*">
            </div>

            <h2 id="user-name"><?php echo $nama; ?></h2>
            <p id="user-role"><?php echo $role; ?></p>
            
            <nav>
                <ul>
                    <li class="active"><i class="fas fa-home"></i> Dashboard</li>
                    <li><i class="fas fa-project-diagram"></i> Proyek</li>
                    <li><i class="fas fa-cog"></i> Pengaturan</li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header>
                <h1>Ringkasan Profil (PHP Version)</h1>
                <div class="header-actions">
                    <span class="date"><?php echo date('d F Y'); ?></span>
                    <button id="edit-btn">Edit Nama</button>
                </div>
            </header>

            <section class="stats-grid">
                <div class="card">
                    <h3><i class="fas fa-code"></i> Keahlian</h3>
                    <ul>
                        <?php 
                            $skills = ["Python", "Android Studio", "Laragon", "PHP"];
                            foreach ($skills as $skill) {
                                echo "<li>$skill</li>";
                            }
                        ?>
                    </ul>
                </div>

                <div class="card">
                    <h3><i class="fas fa-envelope"></i> Kontak</h3>
                    <p>Email: raihan@domain.com</p>
                    <p>Server: <?php echo $_SERVER['SERVER_NAME']; ?></p>
                </div>

                <div class="card">
                    <h3><i class="fas fa-info-circle"></i> Info System</h3>
                    <p>PHP Version: <?php echo phpversion(); ?></p>
                    <p>Status: <span style="color: green;">Online</span></p>
                </div>
            </section>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>