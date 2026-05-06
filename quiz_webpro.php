<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #667eea;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .result {
            background: #f0f4ff;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 5px solid #667eea;
        }
        
        .result h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 20px;
        }
        
        .result-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        
        .result-item:last-child {
            border-bottom: none;
        }
        
        .result-label {
            color: #555;
            font-weight: bold;
        }
        
        .result-value {
            color: #333;
        }
        
        .total-harga {
            background: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            color: #667eea;
        }
        
        .btn-back {
            background: #999;
            margin-top: 15px;
            display: inline-block;
            width: 100%;
            text-align: center;
            padding: 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            border: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .btn-back:hover {
            background: #777;
        }
        
        .error {
            color: #d32f2f;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Inisialisasi variabel
            $kode_barang = '';
            $nama_barang = '';
            $jumlah = '';
            $harga = '';
            $showForm = true;
            
            // Cek apakah ada data POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $kode_barang = isset($_POST['kode_barang']) ? htmlspecialchars($_POST['kode_barang']) : '';
                $nama_barang = isset($_POST['nama_barang']) ? htmlspecialchars($_POST['nama_barang']) : '';
                $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
                $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
                
                // Validasi input
                if (!empty($kode_barang) && !empty($nama_barang) && !empty($jumlah) && !empty($harga)) {
                    $showForm = false;
                }
            }
            
            // Tampilkan hasil jika ada data valid
            if (!$showForm && !empty($kode_barang)) {
                $jumlah_num = floatval($jumlah);
                $harga_num = floatval($harga);
                $total = $jumlah_num * $harga_num;
        ?>
            <div class="result">
                <h2>✓ Data Barang Berhasil Diproses</h2>
                <div class="result-item">
                    <span class="result-label">Kode Barang:</span>
                    <span class="result-value"><?php echo $kode_barang; ?></span>
                </div>
                <div class="result-item">
                    <span class="result-label">Nama Barang:</span>
                    <span class="result-value"><?php echo $nama_barang; ?></span>
                </div>
                <div class="result-item">
                    <span class="result-label">Jumlah:</span>
                    <span class="result-value"><?php echo $jumlah_num; ?> unit</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Harga Satuan:</span>
                    <span class="result-value">Rp. <?php echo number_format($harga_num, 2, ',', '.'); ?></span>
                </div>
                <div class="total-harga">
                    <span>Total Harga:</span>
                    <span>Rp. <?php echo number_format($total, 2, ',', '.'); ?></span>
                </div>
            </div>
            
            <form method="POST">
                <h1>Input Data Barang Baru</h1>
                <button type="submit" style="background: #667eea; margin-bottom: 20px;">Input Barang Lagi</button>
            </form>
        <?php
            } else {
        ?>
            <h1>📦 Form Input Barang</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <input type="text" id="kode_barang" name="kode_barang" required placeholder="Contoh: BR001">
                </div>
                
                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" id="nama_barang" name="nama_barang" required placeholder="Contoh: Laptop">
                </div>
                
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" id="jumlah" name="jumlah" required placeholder="Contoh: 5" min="1" step="0.01">
                </div>
                
                <div class="form-group">
                    <label for="harga">Harga (Rp):</label>
                    <input type="number" id="harga" name="harga" required placeholder="Contoh: 5000000" min="0" step="0.01">
                </div>
                
                <button type="submit">Kirim Data</button>
            </form>
        <?php
            }
        ?>
    </div>
</body>
</html>
