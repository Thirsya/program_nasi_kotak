<?php
include('pages/koneksi.php');
require_once("vendor/autoload.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from siswa");
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
	 <th>No</th>
	 <th>Nama</th>
	 <th>Alamat</th>
	 <th>Asal Sekolah</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama_siswa']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['asal_sekolah']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('laporan_siswa.pdf');
?>