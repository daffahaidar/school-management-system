<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <table id="customers">
        <tr>
            <td>
                <h2>Your Brand</h2>
            </td>
            <td>
                <h2>Your ERP</h2>
                <p>School Address</p>
                <p>School Phones</p>
                <p>School Email</p>
            </td>
            <td>
                <h2>Your ERP</h2>
                <p>School Address</p>
                <p>School Phones</p>
                <p>School Email</p>
            </td>
        </tr>

    </table>

    <table id="customers">
        <tr>
            <th width="10%">No.</th>
            <th width="45%">Detail Siswa</th>
            <th width="45%">Data Siswa</th>
        </tr>
        <tr>
            <td>1</td>
            <td><b>Nama Siswa</b></td>
            <td>{{ $details['student']['name'] }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td><b>ID Siswa</b></td>
            <td>{{ $details['student']['id_no'] }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td><b>Kode Siswa</b></td>
            <td>{{ $details['student']['code'] }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td><b>Roll</b></td>
            <td>{{ $details->roll }}</td>
        </tr>
        <tr>
            <td>5</td>
            <td><b>Jenis Kelamin</b></td>
            <td>{{ $details['student']['gender'] }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td><b>Agama</b></td>
            <td>{{ $details['student']['religion'] }}</td>
        </tr>
        <tr>
            <td>7</td>
            <td><b>Tangga Lahir</b></td>
            <td>{{ $details['student']['birth'] }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td><b>Nama Ayah</b></td>
            <td>{{ $details['student']['father'] }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td><b>Nama Ibu</b></td>
            <td>{{ $details['student']['mother'] }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td><b>Telepon Siswa</b></td>
            <td>{{ $details['student']['mobile'] }}</td>
        </tr>

        <tr>
            <td>11</td>
            <td><b>Alamat Siswa</b></td>
            <td>{{ $details['student']['address'] }}</td>
        </tr>

        <tr>
            <td>12</td>
            <td><b>Kelas</b></td>
            <td>{{ $details['student_class']['name'] }}</td>
        </tr>

        <tr>
            <td>13</td>
            <td><b>Tahun Angkatan</b></td>
            <td>{{ $details['student_year']['name'] }}</td>
        </tr>

        <tr>
            <td>14</td>
            <td><b>Jurusan</b></td>
            <td>{{ $details['group']['name'] }}</td>
        </tr>

        <tr>
            <td>15</td>
            <td><b>Shift Siswa</b></td>
            <td>{{ $details['shift']['name'] }}</td>
        </tr>

        <tr>
            <td>16</td>
            <td><b>Potongan Biaya</b></td>
            <td>Rp. {{ $details['discount']['discount'] }}</td>
        </tr>

    </table>
    <br>
    <i style="font-size: 14px; float: right;">Dicetak Tanggal: {{ date('d M Y') }}</i>

</body>

</html>
