// --- BAGIAN 1: MENANGANI FOTO PROFIL ---

const photoInput = document.getElementById('photo-input');
const profileDisplay = document.getElementById('profile-display');

// Event listener saat user memilih file baru
photoInput.addEventListener('change', function(event) {
    const file = event.target.files[0]; // Ambil file yang dipilih

    if (file) {
        // Gunakan FileReader untuk membaca file sebagai data URL (base64)
        const reader = new FileReader();

        reader.onload = function(e) {
            // Perbarui sumber gambar profil dengan hasil bacaan
            profileDisplay.src = e.target.result;
            alert("Foto profil berhasil diperbarui secara lokal!");
        };

        reader.readAsDataURL(file); // Mulai membaca file
    }
});


// --- BAGIAN 2: MENANGANI EDIT NAMA (Sama) ---

document.getElementById('edit-btn').addEventListener('click', function() {
    const newName = prompt("Masukkan nama baru Anda:");
    if (newName) {
        document.getElementById('user-name').innerText = newName;
        alert("Nama berhasil diperbarui!");
    }
});