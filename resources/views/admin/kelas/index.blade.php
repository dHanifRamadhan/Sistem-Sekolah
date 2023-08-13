<a href="{{route('kelas.create')}}">tambah</a>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Nama Kelas</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $no => $data)
        <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->nama}}</td>
            <td>
                <form action="{{route('kelas.destroy', $data->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('kelas.edit', $data->id)}}">Edit</a>
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>