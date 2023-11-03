<html>

<head>
    <title> Form Input Data Mahasiswa Dlemas</title>
</head>

<body>
    <center>
        <form action="<?= base_url('dlemas/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3"> Form Input Data Mahasiswa Dlemas</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td aligin="left">Nama Siswa</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td aligin="left">NIS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                        <?= form_error('nis', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <td aligin="left">Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                        <?= form_error('kelas', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                    </tr>
                <tr>
                    <td aligin="left">Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                        <?= form_error('tgl', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                    </tr>
                <tr>
                    <td aligin="left">Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="lhr" id="lhr">
                        <?= form_error('lhr', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                <tr>
                    <td aligin="left">Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                <tr>
                    <td aligin="left">Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="male">
                        <label for="male">Pria</label>
                        <input type="radio" name="gender" id="gender" value="female">
                        <label for="female">Perempuan</label>
                        <?= form_error('male', 'female', '<small class="text-danger-pl-3">', '</small>'); ?>
                    </td>
                <tr>
                    <td aligin="left">Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agm" id="agm">
                            <option value="">Pilih Agama</option>
                            <option value=""></option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen</option>
                            <option value="3">Katolik</option>
                            <option value="4">Budha</option>
                            <option value="5">Hindu</option>
                            <option value="6">Protestan</option>
                            <option value="7">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td aligin="center">
                        <td aligin="center">
                            <input type="submit" value="Submit">
</td>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>