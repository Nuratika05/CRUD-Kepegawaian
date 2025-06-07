<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-card-4">
  <div class="w3-container w3-teal">
    <h2>Edit Data Pegawai</h2>
  </div>
  <form class="w3-container" action="/pegawai/edit/{{ $pegawai->nip }}" method="post">
    @csrf
    <label class="w3-text-teal" for="text">Nip:</label><br>
    <input class="w3-input w3-border w3-sand" type="text" name='nip' value="{{ $pegawai->nip }}"><br>
    <label class="w3-text-teal" for="text">Nama:</label><br>
    <input class="w3-input w3-border w3-sand" type="text" name='nama' value="{{ $pegawai->nama }}"><br>
    <label class="w3-text-teal" for="text">Alamat:</label><br>
    <input class="w3-input w3-border w3-sand" type="text"name='alamat' value="{{ $pegawai->alamat }}"><br>
    <label class="w3-text-teal" for="text">Nama Dept:</label>
    <select class="w3-input w3-border w3-sand" name='kode_dept'>
    @foreach ($departemen as $item )
        @if ($item->kode_dept == $pegawai->kode_dept)
            <option class="w3-input w3-border w3-sand" value="{{ $item->kode_dept }}" selected>{{ $item->nama_dept }}</option>
        @else
            <option value="{{ $item->kode_dept }}">{{ $item->nama_dept }}</option>
        @endif
    @endforeach
    </select>
    <p><button class="w3-btn w3-teal">Simpan</button></p>
</form


