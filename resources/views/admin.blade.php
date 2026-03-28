<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Inter', sans-serif;}
body{display:flex;min-height:100vh;background:#eef2f7;}

/* Sidebar */
.sidebar{width:260px;background:linear-gradient(180deg,#0f172a,#1e293b);color:#fff;position:fixed;height:100vh;padding:20px 10px;transition:0.3s;}
.sidebar h2{text-align:center;margin-bottom:30px;font-weight:600;}
.sidebar ul{list-style:none;}
.sidebar ul li{padding:12px 18px;margin:8px 0;border-radius:10px;cursor:pointer;transition:0.3s;}
.sidebar ul li:hover,.sidebar ul li.active{background:rgba(255,255,255,0.1);} 

/* Main */
.main{margin-left:260px;padding:25px;width:100%;}
.header{display:flex;align-items:center;justify-content:space-between;background:#fff;padding:15px 20px;border-radius:12px;margin-bottom:20px;box-shadow:0 4px 10px rgba(0,0,0,0.05);} 
.header button{border:none;background:#e2e8f0;padding:8px 12px;border-radius:8px;cursor:pointer;}

.card{background:#fff;padding:20px;border-radius:12px;box-shadow:0 6px 15px rgba(0,0,0,0.05);animation:fadeIn 0.4s ease;}

/* Stats */
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:15px;margin-bottom:20px;}
.stat-card{background:#fff;padding:18px;border-radius:12px;box-shadow:0 6px 15px rgba(0,0,0,0.05);}
.stat-card h4{font-size:14px;color:#64748b;margin-bottom:5px;}
.stat-card h2{font-size:22px;}

@keyframes fadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}

.table{width:100%;border-collapse:collapse;margin-top:15px;}
.table th,.table td{padding:12px;border-bottom:1px solid #e5e7eb;}
.table th{background:#f8fafc;font-weight:500;}
.table th:last-child,.table td:last-child{text-align:right;} 

.btn{padding:7px 12px;border:none;border-radius:6px;cursor:pointer;font-size:13px;}
.btn-add{background:#22c55e;color:#fff;}
.btn-edit{background:#3b82f6;color:#fff;}
.btn-delete{background:#ef4444;color:#fff;}

.section{display:none;}
.section.active{display:block;}

/* Responsive */
@media(max-width:768px){.sidebar{left:-260px;} .sidebar.active{left:0;} .main{margin-left:0;}}
</style>
</head>
<body>

<div class="sidebar" id="sidebar">
  <h2>Admin</h2>
  <ul>
    <li class="active" onclick="switchTab(event,'dashboard')">Dashboard</li>
    <li onclick="switchTab(event,'guru')">Guru</li>
    <li onclick="switchTab(event,'siswa')">Siswa</li>
    <li onclick="switchTab(event,'pegawai')">Pegawai</li>
  </ul>
</div>

<div class="main">
  <div class="header">
    <button onclick="toggleSidebar()">☰</button>
    <h3 id="title">Dashboard</h3>
  </div>

  <!-- Dashboard -->
  <div class="section active" id="dashboard">
    <div class="stats">
      <div class="stat-card"><h4>Total Guru</h4><h2>12</h2></div>
      <div class="stat-card"><h4>Total Siswa</h4><h2>120</h2></div>
      <div class="stat-card"><h4>Total Pegawai</h4><h2>8</h2></div>
      <div class="stat-card"><h4>Aktivitas Hari Ini</h4><h2>23</h2></div>
    </div>
    <div class="card">
      <h3>Welcome Admin 👋</h3>
      <p>Ini dashboard statistik sederhana biar keliatan profesional.</p>
    </div>
  </div>

  <!-- Guru -->
  <div class="card section" id="guru">
    <h3>Data Guru</h3>
    <button class="btn btn-add">+ Tambah Guru</button>
    <table class="table">
      <tr><th>Nama</th><th>Aksi</th></tr>
      <tr><td>Pak Budi</td><td>
        <button class="btn btn-edit">Edit</button>
        <button class="btn btn-delete">Delete</button>
      </td></tr>
    </table>
  </div>

  <!-- Siswa -->
  <div class="card section" id="siswa">
    <h3>Data Siswa</h3>
    <button class="btn btn-add">+ Tambah Siswa</button>
    <table class="table">
      <tr><th>Nama</th><th>Aksi</th></tr>
      <tr><td>Andi</td><td>
        <button class="btn btn-edit">Edit</button>
        <button class="btn btn-delete">Delete</button>
      </td></tr>
    </table>
  </div>

  <!-- Pegawai -->
  <div class="card section" id="pegawai">
    <h3>Data Pegawai</h3>
    <button class="btn btn-add">+ Tambah Pegawai</button>
    <table class="table">
      <tr><th>Nama</th><th>Aksi</th></tr>
      <tr><td>Bu Sari</td><td>
        <button class="btn btn-edit">Edit</button>
        <button class="btn btn-delete">Delete</button>
      </td></tr>
    </table>
  </div>

</div>

<script>
function toggleSidebar(){
  document.getElementById('sidebar').classList.toggle('active');
}

function switchTab(event,id){
  document.querySelectorAll('.section').forEach(sec=>sec.classList.remove('active'));
  document.querySelectorAll('.sidebar ul li').forEach(li=>li.classList.remove('active'));

  document.getElementById(id).classList.add('active');
  event.currentTarget.classList.add('active');
  document.getElementById('title').innerText = id.charAt(0).toUpperCase()+id.slice(1);
}
</script>

</body>
</html>
