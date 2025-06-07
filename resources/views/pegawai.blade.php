<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #7e7777;
    }
</style>
<h1>Data Pegawai</h1>
<a href="pegawai/buat">
    <p><button class="w3-button w3-teal">Tambah +</button></p>
</a>
<table class="w3-table w3-striped w3-border">
    <tr class="w3-teal">
        <th>Nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Nama Dept</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pegawai as $item)
        <tr class="w3-hover-green">
            <td>{{ $item->nip }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->departemen->nama_dept }}</td>
            <td>
                <div class="w3-bar">
                    <a href="/pegawai/edit/{{ $item->nip }}"><button
                            class="w3-bar-item w3-button w3-blue fas fa-edit"
                            style="font-size:22px;color:blue"></button></a>
                    <a href="/pegawai/hapus/{{ $item->nip }}"><button
                            class="w3-bar-item w3-button w3-red material-icons"
                            style ="font-size:22px;color:red">delete</button></a>
                </div>
            </td>
        </tr>
    @endforeach
</table>

