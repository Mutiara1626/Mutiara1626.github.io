<?php
include 'header.php'; // memanggil file layout/header.php
?>
<?php
$nama = $_POST["nama"];
$whatsapp = $_POST["whatsapp"];
$item = $_POST["item"];
$price = $_POST["price"];
?>
<!--My CSS  -->
<title>Antar Jemput</title>
  <body id="home">
    <!-- jumbotron -->
    <section class="jumbotron text-center">
      <h1 class="display-4">Rincian Pemesanan</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L6.2,256C12.3,256,25,256,37,256C49.2,256,62,256,74,256C86.2,256,98,256,111,245.3C123.1,235,135,213,148,186.7C160,160,172,128,185,144C196.9,160,209,224,222,213.3C233.8,203,246,117,258,90.7C270.8,64,283,96,295,138.7C307.7,181,320,235,332,256C344.6,277,357,267,369,250.7C381.5,235,394,213,406,208C418.5,203,431,213,443,181.3C455.4,149,468,75,480,58.7C492.3,43,505,85,517,85.3C529.2,85,542,43,554,64C566.2,85,578,171,591,186.7C603.1,203,615,149,628,149.3C640,149,652,203,665,208C676.9,213,689,171,702,138.7C713.8,107,726,85,738,101.3C750.8,117,763,171,775,181.3C787.7,192,800,160,812,149.3C824.6,139,837,149,849,144C861.5,139,874,117,886,122.7C898.5,128,911,160,923,186.7C935.4,213,948,235,960,208C972.3,181,985,107,997,112C1009.2,117,1022,203,1034,208C1046.2,213,1058,139,1071,101.3C1083.1,64,1095,64,1108,53.3C1120,43,1132,21,1145,42.7C1156.9,64,1169,128,1182,170.7C1193.8,213,1206,235,1218,229.3C1230.8,224,1243,192,1255,176C1267.7,160,1280,160,1292,160C1304.6,160,1317,160,1329,165.3C1341.5,171,1354,181,1366,197.3C1378.5,213,1391,235,1403,250.7C1415.4,267,1428,277,1434,282.7L1440,288L1440,320L1433.8,320C1427.7,320,1415,320,1403,320C1390.8,320,1378,320,1366,320C1353.8,320,1342,320,1329,320C1316.9,320,1305,320,1292,320C1280,320,1268,320,1255,320C1243.1,320,1231,320,1218,320C1206.2,320,1194,320,1182,320C1169.2,320,1157,320,1145,320C1132.3,320,1120,320,1108,320C1095.4,320,1083,320,1071,320C1058.5,320,1046,320,1034,320C1021.5,320,1009,320,997,320C984.6,320,972,320,960,320C947.7,320,935,320,923,320C910.8,320,898,320,886,320C873.8,320,862,320,849,320C836.9,320,825,320,812,320C800,320,788,320,775,320C763.1,320,751,320,738,320C726.2,320,714,320,702,320C689.2,320,677,320,665,320C652.3,320,640,320,628,320C615.4,320,603,320,591,320C578.5,320,566,320,554,320C541.5,320,529,320,517,320C504.6,320,492,320,480,320C467.7,320,455,320,443,320C430.8,320,418,320,406,320C393.8,320,382,320,369,320C356.9,320,345,320,332,320C320,320,308,320,295,320C283.1,320,271,320,258,320C246.2,320,234,320,222,320C209.2,320,197,320,185,320C172.3,320,160,320,148,320C135.4,320,123,320,111,320C98.5,320,86,320,74,320C61.5,320,49,320,37,320C24.6,320,12,320,6,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- jumbotron akhir -->
    <table class="table container shadow-lg rounded">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">NO WhatsApp</th>
      <th scope="col">Rute</th>
      <th scope="col">Harga</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo $nama; ?></td>
      <td><?php echo $whatsapp; ?></td>
      <td><?php echo $item; ?></td>
      <td><?php echo $price; ?></td>
    </tr>
    <tr>
    
     
  </tbody>
</table>
<a style="padding-left:55rem" href="https://wa.me/6285158301157?text=<?php echo urlencode( "Pesanan AnJem Atas Nama" ." ". $nama ." ". "ke" ." ". $item ); ?>" target="_blank"><button class="btn btn-primary btn-lg "  >kirim</button></a>