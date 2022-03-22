@extends('layouts.main')
@section('container')
<div id="clara">
    <h1>Biodata Mahasiswa</h1>
    <table>
        <tr>
            <td><img src="img/about.jpg" alt="foto profil" width="140px"></td>
            <td>Nama Panggilan</td>
            <td>:</td>
            <td>{{ $np }}</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $nama }}</td> 
        </tr>
        <tr>
            <td><abbr title="Tempat,Tanggal Lahir">TTL</abbr></td>
            <td>:</td>
            <td>{{ $ttl }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $jk }}</td>
        </tr>
        <tr>
            <td>TinggiBadan</td>
            <td>:</td>
            <td>{{ $tb }}<small>cm</small></td>
        </tr>
        <tr>
            <td>BeratBadan</td>
            <td>:</td>
            <td>{{ $bb }}<small>kg</small></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $agama }}</td>
        </tr>
        <tr>
            <td>Nomor Telp/Hp</td>
            <td>:</td>
            <td><b>{{ $telp }}</b></td>
        </tr>
        <tr>
            <td>Email/Sosmed</td>
            <td>:</td>
            <td><a href="clara.adrianaorc@gmail.com" target="_blank">{{ $email }}</a></td>
    
        </tr>
        <tr>
            <td>Golongan Darah</td>
            <td>:</td>
            <td>{{ $goldar }}</td>
        </tr>
        <tr>
            <td>Riwayat Pendidikan</td>
            <td>:</td>
            <td>
                <ul>
                    <li>SD(2008-2014)</li>
                    <li>SMP(2014-2017)</li>
                    <li>SMA(2017-2020)</li>
                    <li>Kuliah(Sekarang)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>:</td>
            <td>
                <ol>
                    <li>Menyanyi</li>
                    <li>Badminton</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td>Prestasi</td>
            <td>:</td>
            <td>
                <dd>- Juara 1 Cerdas Cermat Alkitab(2019)</dd>
                <dd>- Juara 1 Menyanyi(2019)</dd>
                <dd>- Juara 2 Sidi Gereja (2020)</dd>
            </td>
        </tr>
        <tr>
            <td>Alamat Sekarang</td>
            <td>:</td>
            <td><u>{{ $alamat }}</u></td>
        </tr>
        <tr>
            <td>Kata Motivasi</td>
            <td>:</td>
            <td><q><strong>{{ $motivasi }}</strong></q></td>
        </tr>
    </table>
</div>
    

@endsection