<h3>{{ $judul }}</h3>

<table border="1" width="100%" class= "tables">
<thead>
    <th>No</th><th>Kode Prodi</th><th>Nama Prodi</th><th>Kepala Prodi</th>
</thead>
<tbody>
    <?php $count = 1 ?>
    @foreach($ar_prodi as $p)
        <tr>
            <td>{{ $count }}</td>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->kaprodi }}</td>
        </tr>
    <?php $count++ ?>
    @endforeach
</tbody>
</table>