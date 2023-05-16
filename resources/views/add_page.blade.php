
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"> Tambah Data Barang </h1>
                <form action="{{ isset($barang) ? route('barang.update', $barang->id_brg) : route('barang.store') }}" method="post">
                    @csrf
                    {!! isset($barang) ? method_field('PUT') : '' !!}

                    <input type="hidden" name="id_brg" value="{{ isset($barang) ? $barang->id_brg : '' }}">

                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Barang</label>
                        <input type="text" name="nama_brg" id="nama_brg" class="form-control" placeholder="Nama Barang" value="{{ isset($barang) ? $barang->nama_brg : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_beli" class="control-label">Harga Beli</label>
                        <input type="text" name="harga_beli" id="harga_beli" class="form-control" placeholder="Harga Beli" value="{{ isset($barang) ? $barang->harga_beli : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual" class="control-label">Harga Jual</label>
                        <input type="text" name="harga_jual" id="harga_jual" class="form-control" placeholder="Harga Jual" value="{{ isset($barang) ? $barang->harga_jual : '' }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>