<form action="{{route('ruang.update', $ruang->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="">Nama Ruangan Kelas</label>
    <input type="text" name="nama" value="{{$ruang->nama}}">
    <button type="submit">Ubah</button>
</form>