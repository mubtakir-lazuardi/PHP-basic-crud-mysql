<html>
    <form action="insert.php" method="post">
        <label>Nama</label><br/>
        <input type="text" name="nama"/>
        <br/><br/>

        <label>Alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10"/></textarea>
        <br/><br/>

        <label>Umur</label><br/>
        <input type="text" name="umur"/>
        <br/><br/>

        <label>Jenis Kelamin</label><br/>
        <select name="jk">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wnita</option>
        </select>
        <br>

        <button type="submit">Tambah</button>
    </form>
</html>