<h1>TXT Dosyasından Okunan Kişiler</h1>

<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td> ADI </td>
    <td> SOYADI </td>
    <td> ŞEHİR </td>
  </tr>

<?php
$dosya = "kisiler.txt";
$arrSatirlar = file($dosya);
sort($arrSatirlar);

foreach ($arrSatirlar as $key => $value) {
  $Kisi    = $value;
  list($AD, $SOYAD, $SEHIR) = explode(";", $Kisi);
  echo
    "<tr>
      <td>$AD</td>
      <td>$SOYAD</td>
      <td>$SEHIR</td>
    </tr>";
}
?>

</table>
