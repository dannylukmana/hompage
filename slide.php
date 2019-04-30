<html>

<head>
    <script language="javascript">
        <!--
        var image1 = new Image()
        image1.src = "img/d.jpeg"
        var image2 = new Image()
        image2.src = "img/b.jpeg"
        var image3 = new Image()
        image3.src = "img/c.jpeg"
        var image3 = new Image()
        image3.src = "img/a.jpeg"
        //-->
    </script>
</head>

<body>
    <left><img src="img/5.png" name="slide" class="img-fluid">
        <script>
            <!--
            //variable yang akan menaikan hitungan gambar
            var step = 1

            function slideit() {
                //jika browser tidak mendukung metode dokumen.image maka keluar.
                if (!document.images)
                    return
                document.images.slide.src = eval("image" + step + ".src")
                if (step < 3)
                    step++
                else
                    step = 1
                //memanggil function "slideit()" setiap 3 detik
                setTimeout("slideit()", 3000)
            }
            slideit()
            //-->
        </script>

</body>

</html>