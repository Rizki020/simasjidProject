function updateTime() {
    const options = { timeZone: 'Asia/Jakarta', hour: '2-digit', minute: '2-digit', second: '2-digit' };
    const waktuSaatIni = new Date().toLocaleTimeString('id-ID', options);
    
    // Menampilkan waktu saat ini di elemen 'waktu'
    document.getElementById('waktu').innerText = `Waktu Sekitar Medan: ${waktuSaatIni}`;
  }
  
  // Memperbarui waktu setiap detik
  setInterval(updateTime, 1000);
  
  // Menjalankan fungsi updateTime saat halaman pertama kali dimuat
  document.addEventListener('DOMContentLoaded', updateTime);
  