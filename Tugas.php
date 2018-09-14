<html>
    <head><title>Sistem Raport Sederhana</title></head>
    <body>
        <FORM ACTION="progass.php" METHOD="POST">
        <center><h2>Sistem Raport Sederhana</h2></center>
        <center>
        <table border="0" width="75%">
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" size=40/>
                </td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <input type="number" name="nis" size=50/>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" cols="50" rows="10"></textarea>
                </td>
            </tr>

            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">
                    <label >Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" value="perempuan">
                    <label >perempuan</label>
                </td>
            </tr>

            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="Agama">
                <option value="Islam">Islam</option>
                <option value="kristen">kristen</option>
                <option value="Budha">Budha</option>
                <option value="Katolik">Katolik</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Asal sekolah</td>
                <td>:</td>
                <td>
                    <input type="text" name="asal_sekolah" size=40/>
                </td>
            </tr>

            <tr>
                <td>Nama Orang Tua/Wali</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_ortu" size=40/>
                </td>
            </tr>

            <tr>
                <td>Mata pelajaran yang disukai</td>
                <td> </td>
                <td>
                    <input type="checkbox" name="mapel" value="Matematika">Matematika
                    <input type="checkbox" name="mapel" value="Ilmu pengetahuan alam">Ilmu pengetahuan alam 
                    <input type="checkbox" name="mapel" value="Ilmu pengetahuan sosial">Ilmu pengetahuan sosial <br>
                    <input type="checkbox" name="mapel" value="Pendidikan agama islam">Pendidikan agama islam
                    <input type="checkbox" name="mapel" value="Bahasa Indonesia">Bahasa Indonesia
                </td>
            </tr>

            <tr>
                <td>Total Nilai Ijasah SD</td>
                <td>:</td>
                <td>
                    <input type="text" name="total" size=40/>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" size=40/>
                </td>
            </tr>

            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>
                    <input type="submit" value="Input Data" name="input">
                </td>
            </tr>
                </table>
            </center>
        </FORM>
    </body>
</html>