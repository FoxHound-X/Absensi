<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h2>Admin<span>School</span></h2>
        <button class="close-btn" onclick="closeSidebar()">✕</button>
    </div>
    <ul class="nav-links">
        <li class="active" onclick="switchTab(event,'dashboard')">
            <i class="fas fa-home"></i> <span>Dashboard</span>
        </li>
        <li onclick="switchTab(event,'guru')">
            <i class="fas fa-chalkboard-teacher"></i> <span>Guru</span>
        </li>
        <li onclick="switchTab(event,'siswa')">
            <i class="fas fa-user-graduate"></i> <span>Siswa</span>
        </li>
        <li onclick="switchTab(event,'pegawai')">
            <i class="fas fa-user-tie"></i> <span>Pegawai</span>
        </li>
        <li onclick="switchTab(event,'jurusan')">
            <i class="fas fa-book"></i> <span>Jurusan</span>
        </li>
    </ul>
</div>

<div class="main">
    <div class="header">
        <div class="header-left">
            <button class="toggle-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
            <h3 id="title">Dashboard</h3>
        </div>
        <div class="user-info">
            <span>{{ $nama }}</span>
            <div class="avatar"></div>
        </div>
    </div>

    <div class="section active" id="dashboard">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue"><i class="fas fa-users"></i></div>
                <div class="stat-info">
                    <h4>Total Guru</h4>
                    <h2>12</h2>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon orange"><i class="fas fa-user-graduate"></i></div>
                <div class="stat-info">
                    <h4>Total Siswa</h4>
                    <h2>120</h2>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon green"><i class="fas fa-briefcase"></i></div>
                <div class="stat-info">
                    <h4>Pegawai</h4>
                    <h2>8</h2>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon purple"><i class="fas fa-chart-line"></i></div>
                <div class="stat-info">
                    <h4>Aktivitas</h4>
                    <h2>23</h2>
                </div>
            </div>
        </div>

        <div class="welcome-card">
            <div class="welcome-text">
                <h3>Selamat Datang, {{ $nama }}! 👋</h3>
                <p>Kelola data sekolah Anda dengan lebih efisien dan cepat melalui panel kontrol ini.</p>
            </div>
            <img src="https://illustrations.popsy.co/gray/dashboard.svg" alt="welcome" class="welcome-img">
        </div>
    </div>

    <div class="section" id="guru">
        <div class="content-card">
            <div class="card-header">
                <h3>Daftar Guru</h3>
                <button class="btn btn-add"><i class="fas fa-plus"></i> Tambah Guru</button>
            </div>
            <div class="table-container">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Mata Pelajaran</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pak Budi Santoso</td>
                            <td>19820301...</td>
                            <td><span class="badge">Matematika</span></td>
                            <td class="text-right">
                                <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="section" id="siswa">
        <div class="content-card">
            <div class="card-header">
                <h3>Daftar Siswa</h3>
                <button class="btn btn-add"><i class="fas fa-plus"></i> Tambah Siswa</button>
            </div>
            <div class="table-container">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andi Wijaya</td>
                            <td>00567812</td>
                            <td>XII RPL 1</td>
                            <td class="text-right">
                                <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="section" id="pegawai">
        <div class="content-card">
            <div class="card-header">
                <h3>Daftar Pegawai</h3>
                <button class="btn btn-add"><i class="fas fa-plus"></i> Tambah Pegawai</button>
            </div>
            <div class="table-container">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bu Sari Kartika</td>
                            <td>Administrasi</td>
                            <td class="text-right">
                                <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="section" id="jurusan">
        <div class="content-card">
            <div class="card-header">
                <h3>Daftar Jurusan</h3>
                <button class="btn btn-add"><i class="fas fa-plus"></i> Tambah Jurusan</button>
            </div>
            <div class="table-container">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Nama Jurusan</th>
                            <th>Kode</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td><span class="badge purple">RPL</span></td>
                            <td class="text-right">
                                <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Teknik Komputer Jaringan</td>
                            <td><span class="badge blue">TKJ</span></td>
                            <td class="text-right">
                                <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('active');
}

function closeSidebar(){
    document.getElementById('sidebar').classList.remove('active');
}

function switchTab(event, id){
    // Hide all sections
    document.querySelectorAll('.section').forEach(sec => sec.classList.remove('active'));
    // Remove active class from menu
    document.querySelectorAll('.nav-links li').forEach(li => li.classList.remove('active'));

    // Show selected section
    document.getElementById(id).classList.add('active');
    // Add active class to clicked menu
    event.currentTarget.classList.add('active');
    
    // Update Title
    const titles = {
        'dashboard': 'Dashboard Overview',
        'guru': 'Manajemen Data Guru',
        'siswa': 'Manajemen Data Siswa',
        'pegawai': 'Manajemen Data Pegawai',
        'jurusan': 'Manajemen Data Jurusan'
    };
    document.getElementById('title').innerText = titles[id];

    if(window.innerWidth <= 768){
        closeSidebar();
    }
}
</script>

<style>
:root {
    --primary: #4f46e5;
    --primary-dark: #3730a3;
    --secondary: #64748b;
    --success: #10b981;
    --danger: #ef4444;
    --warning: #f59e0b;
    --background: #f8fafc;
    --sidebar-bg: #0f172a;
    --white: #ffffff;
    --text-main: #1e293b;
    --text-muted: #64748b;
}

* { margin:0; padding:0; box-sizing:border-box; font-family: 'Inter', sans-serif; }

body { background: var(--background); color: var(--text-main); display: flex; }

/* Sidebar */
.sidebar {
    width: 260px;
    background: var(--sidebar-bg);
    color: #fff;
    position: fixed;
    height: 100vh;
    transition: 0.3s;
    z-index: 1000;
}

.sidebar-header {
    padding: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.sidebar-header h2 { font-size: 22px; letter-spacing: 1px; }
.sidebar-header h2 span { color: var(--primary); }

.nav-links { list-style: none; padding: 0 15px; }
.nav-links li {
    padding: 12px 15px;
    margin: 5px 0;
    border-radius: 8px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 12px;
    color: #94a3b8;
    transition: 0.3s;
}

.nav-links li i { width: 20px; font-size: 18px; }
.nav-links li:hover, .nav-links li.active {
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
}
.nav-links li.active { background: var(--primary); }

/* Main Content */
.main { margin-left: 260px; width: 100%; padding: 30px; transition: 0.3s; }

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.header-left { display: flex; align-items: center; gap: 15px; }
.toggle-btn { 
    display: none; border: none; background: var(--white); 
    padding: 8px 12px; border-radius: 8px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.user-info { display: flex; align-items: center; gap: 12px; font-weight: 500; }
.avatar { width: 35px; height: 35px; background: #ddd; border-radius: 50%; background-image: url('https://ui-avatars.com/api/?name=Admin'); background-size: cover; }

/* Dashboard Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
}

.stat-card {
    background: var(--white);
    padding: 20px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.stat-icon.blue { background: #e0e7ff; color: #4338ca; }
.stat-icon.orange { background: #ffedd5; color: #c2410c; }
.stat-icon.green { background: #dcfce7; color: #15803d; }
.stat-icon.purple { background: #f3e8ff; color: #7e22ce; }

.stat-info h4 { font-size: 14px; color: var(--text-muted); }

.welcome-card {
    background: linear-gradient(135deg, #4f46e5, #818cf8);
    border-radius: 16px;
    padding: 30px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    position: relative;
}

.welcome-img { width: 150px; }

/* Content Cards (Tables) */
.content-card {
    background: var(--white);
    border-radius: 16px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    padding: 20px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f1f5f9;
}

.table-container { padding: 10px 25px 25px 25px; overflow-x: auto; }

.modern-table { width: 100%; border-collapse: collapse; text-align: left; }
.modern-table th { padding: 15px 10px; color: var(--text-muted); font-weight: 600; font-size: 14px; border-bottom: 2px solid #f1f5f9; }
.modern-table td { padding: 15px 10px; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
.modern-table tr:hover { background: #f8fafc; }

/* Components */
.btn {
    padding: 10px 18px;
    border-radius: 8px;
    border: none;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: 0.2s;
}

.btn-add { background: var(--primary); color: white; }
.btn-add:hover { background: var(--primary-dark); }

.btn-icon {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    margin-left: 5px;
    transition: 0.2s;
}

.btn-edit { background: #e0e7ff; color: #4338ca; }
.btn-delete { background: #fee2e2; color: #dc2626; }
.btn-icon:hover { opacity: 0.8; transform: scale(1.05); }

.badge {
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    background: #f1f5f9;
}
.badge.purple { background: #f3e8ff; color: #7e22ce; }
.badge.blue { background: #e0e7ff; color: #4338ca; }

.text-right { text-align: right; }
.section { display: none; animation: fadeIn 0.3s ease-in; }
.section.active { display: block; }

@keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

/* Mobile Responsive */
@media (max-width: 768px) {
    .sidebar { left: -260px; }
    .sidebar.active { left: 0; }
    .main { margin-left: 0; padding: 20px; }
    .toggle-btn { display: block; }
    .welcome-img { display: none; }
}
</style>
</html>