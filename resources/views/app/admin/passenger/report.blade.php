
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                <th>Nama Penumpang</th>
                <th>Alamat Penumpang</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($passenger as $data)
                <tr>
                    <td>{{ $data->nama_penumpang }}</td>
                    <td>{{ $data->alamat_penumpang }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->telepon }}</td>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
