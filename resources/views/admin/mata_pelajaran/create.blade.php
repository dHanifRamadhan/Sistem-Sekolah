<form action="{{route('mapel.store')}}" method="post">
    @csrf
    <label for="">Nama Mata Pelajaran : </label>
    <input type="text" name="nama">
    <br>
    <button type="submit">Tambah</button>
</form>