if(isset($_POST['tambahproduk'])){
    //deskripsi initial variable

    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stock'];

    $insert_produk = mysqli_query($koneksi,"INSERT INTO produk (nama_produk,deskripsi,harga,stock) VALUE('$nama_produk','$deskripsi','$harga','$stok')");
    if($insert_produk){
        header('location:stock.php');

    }else
    echo'
        <script>