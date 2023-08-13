<form action="{{route('kelas.update', $kelas->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nama" value="{{$kelas->nama}}">
    <button type="submit">Ubah</button>
</form>