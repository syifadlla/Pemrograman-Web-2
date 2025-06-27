<div class="card-body">
                    <h1 class="my-4">Daftar Paramedik</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kategori</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>ID Unit Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_paramedik as $paramedik)
                                <tr>
                                    <td>{{ $paramedik->id }}</td>
                                    <td>{{ $paramedik->nama }}</td>
                                    <td>{{ $paramedik->gender }}</td>
                                    <td>{{ $paramedik->tmp_lahir }}</td>
                                    <td>{{ $paramedik->tgl_lahir }}</td>
                                    <td>{{ $paramedik->kategori }}</td>
                                    <td>{{ $paramedik->telpon }}</td>
                                    <td>{{ $paramedik->unit_kerja_id }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="view_paramedik.php?id=<?= $paramedik['id'] ?>">View</a>
                                        <a class="btn btn-primary" href="form_paramedik.php?idedit=<?= $paramedik['id'] ?>">Edit</a>
                                        <a class="btn btn-primary" href="delete_paramedik.php?iddel=<?= $paramedik['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $paramedik['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->