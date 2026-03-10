function updateStats() {
    fetch('api.php')
        .then(response => response.json())
        .then(data => {
            // Update CPU
            document.getElementById('cpu-text').innerText = data.cpu + '%';
            document.getElementById('cpu-bar').style.width = data.cpu + '%';

            // Update RAM
            document.getElementById('ram-text').innerText = data.ram + '%';
            document.getElementById('ram-bar').style.width = data.ram + '%';
        })
        .catch(error => console.error('Error fetching data:', error));
}

// Update setiap 2 detik
setInterval(updateStats, 2000);
updateStats();
