<table border="1px" class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{ ++$no}}</td>
                <td>{{ $buku->judul}}</td>
                <td>{{ $buku->penulis}}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y')}}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                        @csrf
                        <button onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                    </form>

                    <button><a href="{{ route('buku.edit', $buku->id) }}">Update</a></button>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>jumlah data = {{$jumlahData}}</p>
<p>total harga = {{$totalHarga}}</p>
<button>
<p align="left"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
</button>