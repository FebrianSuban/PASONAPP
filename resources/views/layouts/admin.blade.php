<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiLaundry Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: white;
        }

        .sidebar h2 {
            background-color: #E572B7;
            color: white;
            padding: 1rem;
            margin: 0;
            font-size: 1.6rem;
        }

        .profile-icon {
            width: 90px;
            height: 90px;
            background-color: #e9ecef;
            border-radius: 50%;
            margin: 1rem auto;
        }

        .nav-link {
            color: #495057;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #dee2e6;
        }

        .nav-link:hover, .nav-link.active {
            background-color: #e9ecef;
            color: #F691CD;
        }

        .main-content {
            flex-grow: 1;
        }

        .header {
            background-color: #F691CD;
            color: white;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .btn-pink {
            background-color: #F691CD;
            color: white;
            border: none;
            padding: 0.25rem 0.75rem;
            font-size: 0.9rem;
        }

        .sub-header {
            background-color: #FBCCE7;
            color: white;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sub-header h3 {
            margin: 0;
            font-size: 2rem;
        }

        .sub-header button {
            margin: 0;
            float: right;
        }


        .content {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .search-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .table th, .table td {
            vertical-align: middle;
            padding: 0.5rem;
            font-size: 0.9rem;
            border: 1px solid #dee2e6;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: normal;
        }

        .btn-edit {
            background-color: #ffc107;
            border: none;
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }

        .pagination {
            justify-content: flex-end;
        }

        .pagination .page-link {
            color: #495057;
            border: none;
            font-size: 0.9rem;
        }

        .page-info {
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
            }
            .search-container {
                flex-direction: column;
                align-items: flex-start;
            }
            .search-container > div {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>SiLaundry Admin</h2>
            <div class="profile-icon"></div>
            <nav class="nav flex-column">
                <a class="nav-link" href="resources/views/admin/dashboard.blade.php">Dashboard</a>
                <a class="nav-link active" href="#">Kelola Pesanan</a>
                <a class="nav-link" href="#">Kelola User</a>
                <a class="nav-link" href="#">Kelola Member</a>
                <a class="nav-link" href="#">Kelola Stok Barang</a>
                <a class="nav-link" href="#">Kelola Laporan</a>
            </nav>
        </div>
        <div class="main-content">
            <div class="header">

            </div>
            <div class="sub-header">
            <h3>Kelola Pesanan</h3>
            <button class="btn btn-pink">+ Tambah Pesanan Baru</button>
            </div>
            <div class="content">
            <h5>Pesanan Terbaru</h5>
                <div class="search-container">
                    <div>
                        Tampilkan
                        <select>
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                        data
                    </div>
                    <div>
                        ID
                        <select>
                            <option>001</option>
                            <option>002</option>
                            <option>003</option>
                        </select>
                        <label for="search">Cari:</label>
                        <input type="text" id="search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pesanan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal Ambil</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>OR-01</td>
                                <td>Adinda</td>
                                <td>Jln. Merdeka...</td>
                                <td>21-01-2024</td>
                                <td>23-01-2024</td>
                                <td>Rp. 45.000</td>
                                <td>Selesai</td>
                                <td><button class="btn btn-edit">Edit</button></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="page-info">Tampil 1 - 5 / 20 data</p>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
