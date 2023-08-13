<a href="{{route('mapel.create')}}">tambah</a>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Nama Mata Pelajaran</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($mapel as $no => $data)
        <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->nama}}</td>
            <td>
                <form action="{{route('mapel.destroy', $data->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('mapel.edit', $data->id)}}">Edit</a>
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>