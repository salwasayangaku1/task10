<html>
    <form action="penjumlahan.php" method="get">
        <label for="">Angka 1</label>
        <input type="number" placeholder="angka 1" name="num1">
        <br>
        <label for="">Angka 2</label>
        <input type="number" placeholder="angka 2" name="num2">
        <button type="submit">Jumlahkan</button>
    </form>
</html>
        <?php 
        $angka1=$_GET['num1'];
        $angka2=$_GET['num2'];
        echo "Hasil : ", $angka1+$angka2;
        ?>