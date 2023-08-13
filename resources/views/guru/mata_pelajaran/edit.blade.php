<form action="{{route('mapel.update', $mapel->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="nama" value="{{$mapel->nama}}">
    <button type="submit">Ubah</button>
</form>