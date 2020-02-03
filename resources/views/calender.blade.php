@extends('layouts.app')

@section('content')
@if (session('status'))
{{ session('status') }}                        
@endif
    <div class="container">
    <?php
        $hari	= date("d");
        $bulan	= date ("m");
        $tahun	= date("Y");
        $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
    ?>
<h2 class="text-center text-dark alert alert-light shadow-sm">{{date('M')}}</h2>
    <table class="table">
    <tr class="bg-dark">
        <td class="text text-center text-danger">minggu</td>
        <td class="text text-center text-light">Senin</td>
        <td class="text text-center text-light">Selasa</td>
        <td class="text text-center text-light">Rabu</td>
        <td class="text text-center text-light">Kamis</td>
        <td class="text text-center text-light">Jumat</td>
        <td class="text text-center text-light">Sabtu</td>
        </tr>
  <?php
    $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
 
for ($ds=1;$ds<=$s;$ds++) {
    echo "<td></td>";
}
 
    for ($d=1;$d<=$jumlahhari;$d++) {
 
	    if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
        		echo "<tr>"; 
            }
        $warna="#000000"; // warna default
 
        if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
            echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
        if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
    }
echo '</table>'; 
?> </div>




@endsection
