<!DOCTYPE html>
<html>

<head>
    <title>Data Guru</title>
</head>

<body>
    <br>
    <table>
        <tr>
            <th>NO</th>
            <th>Nama Guru</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>No Telpon</th>
            <th>Email</th>

        </tr>
        <?php
        $no = 1;
        foreach ($guru as $sis) : ?>
            <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $sis->nama ?></td>
                <td><?php echo $sis->nip ?></td>
                <td><?php echo $sis->alamat ?></td>
                <td><?php echo $sis->tgl_lahir ?></td>
                <td><?php echo $sis->no_telp ?></td>
                <td><?php echo $sis->email ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>