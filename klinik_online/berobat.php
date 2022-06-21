<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        body{
            min-height: 95vh;
            background-image: linear-gradient(-20deg,#ff2846 0%, #6944ff 100%);
            background: url(gambar_klinik.jpg)no-repeat;
            background-size: cover;
            font-family: quicsand;
        }
        table{
            text-align: center;
        }
        h1{
            color: lightpink; text-align: center; font-size: 40px; font-style: bold; font-family: georgia;
        }
        table,tr,td {
            border: solid 1px lightsteelblue;
            border-collapse: collapse;
            padding: 10px 15px;
            font-family: georgia;
            font-size: 18px;
        }
        thead {
            background-color: #ffb6c1;
        }
        }    </style>
    <style>
        font,tr,td {
            font-color: #ff1493;
        }
    </style>
</head>
<body>
    <h1 style>Clinik Anggun Information</h1>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>id_berobat</td>
                <td>id_pasien</td>  
                <td>id_dokter</td>
                <td>tgl_berobat</td>
                <td>keluhan_pasien</td>
                <td>hasil_diagnosa</td>
                <td>penatalaksanaan</td>   
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr style="background-color: aliceblue;">
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['tgl_berobat'] ?></td>
                <td><?php echo $data['keluhan_pasien'] ?></td>
                <td><?php echo $data['hasil_diagnosa'] ?></td>
                <td><?php echo $data['penatalaksanaan'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>