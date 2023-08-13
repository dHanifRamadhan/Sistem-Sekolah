<form action="{{route('ruang.store')}}" method="post">
    @csrf
    <label for="">Nama Ruangan Kelas : </label>
    <input type="text" name="nama">
    <br>
    <button type="submit">Tambah</button>
</form>