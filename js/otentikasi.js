function validateLogin() {

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    if (username === 'admin123' & password === 'admin1234') {
      
        alert('Login berhasil');
        window.location.href = '../index.php'; 
    } else {
       
        alert('Login Gagal. Periksa kembali username dan password.');
    }
}