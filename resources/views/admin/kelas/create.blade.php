<form action="{{route('kelas.store')}}" method="post">
    @csrf
    <label for="">Nama Kelas : </label>
    <input type="text" name="nama">
    <br>
    <button type="submit">Tambah</button>
</form>