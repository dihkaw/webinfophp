<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Monitor - Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen p-8">

    <div class="max-w-4xl mx-auto space-y-6">
        <!-- Header & Data Diri -->
        <div class="bg-slate-800 p-6 rounded-2xl shadow-xl border border-slate-700">
            <h1 class="text-2xl font-bold mb-4 text-blue-400">Profil Siswa</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-3 bg-slate-700/50 rounded-lg">
                    <p class="text-xs text-slate-400 uppercase">Nama</p>
                     // GANTI BAGIAN DI BAWAH INI 
                    <p class="font-semibold text-lg">Nama Lengkap Siswa</p>
                </div>
                <div class="p-3 bg-slate-700/50 rounded-lg">
                    <p class="text-xs text-slate-400 uppercase">Absen</p>
                    // GANTI BAGIAN DI BAWAH INI 
                    <p class="font-semibold text-lg">01</p>
                </div>
                <div class="p-3 bg-slate-700/50 rounded-lg">
                    <p class="text-xs text-slate-400 uppercase">Kelas</p>
                    // GANTI BAGIAN DI BAWAH INI 
                    <p class="font-semibold text-lg">XII Teknik Komputer Jaringan</p>
                </div>
            </div>
        </div>

        <!-- Spesifikasi Server (Statis) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                <h2 class="text-xl font-bold mb-4 text-emerald-400 text-center">Network Info</h2>
                <ul class="space-y-3">
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-400">Private IP:Port</span>
                        <span class="font-mono"><?php echo $_SERVER['SERVER_ADDR'] . ":" . $_SERVER['SERVER_PORT']; ?></span>
                    </li>
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-400">Public IP</span>
                        <span class="font-mono text-yellow-300"><?php echo file_get_contents('https://api.ipify.org'); ?></span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-slate-400">Hostname</span>
                        <span class="font-mono"><?php echo gethostname(); ?></span>
                    </li>
                </ul>
            </div>

            <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
                <h2 class="text-xl font-bold mb-4 text-purple-400 text-center">System OS</h2>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-400">OS</span>
                        <span>Ubuntu 24.04 (Noble Numbat)</span>
                    </li>
                    <li class="flex justify-between border-b border-slate-700 pb-2">
                        <span class="text-slate-400">Kernel</span>
                        <span><?php echo php_uname('r'); ?></span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-slate-400">PHP Version</span>
                        <span><?php echo phpversion(); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Monitoring Realtime -->
        <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
            <h2 class="text-xl font-bold mb-6 text-center">Resource Monitor (Realtime)</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- CPU -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span>CPU Usage</span>
                        <span id="cpu-text">0%</span>
                    </div>
                    <div class="w-full bg-slate-700 rounded-full h-4">
                        <div id="cpu-bar" class="bg-blue-500 h-4 rounded-full transition-all duration-500" style="width: 0%"></div>
                    </div>
                </div>
                <!-- RAM -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span>RAM Usage</span>
                        <span id="ram-text">0%</span>
                    </div>
                    <div class="w-full bg-slate-700 rounded-full h-4">
                        <div id="ram-bar" class="bg-emerald-500 h-4 rounded-full transition-all duration-500" style="width: 0%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
