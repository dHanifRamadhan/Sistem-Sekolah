<a href="{{route('ruang.create')}}">tambah</a>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Ruang Kelas</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($ruang as $no => $data)
        <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->nama}}</td>
            <td>
                <form action="{{route('ruang.destroy', $data->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('ruang.edit', $data->id)}}">Edit</a>
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>