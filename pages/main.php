<div class="body-all">
    <div class="body-main">
        <?php
        include("sidebar/sidebar.php");

        ?>
        <?php
        if (isset($_GET["quanly"])) {
            $tam = $_GET["quanly"];
        } else {
            $tam = "";
        }
        if ($tam == "banxe") {
            include("main/ban-xe.php");
        } else if ($tam == "gioithieu") {
            include("main/gioi-thieu.php");
        } else if ($tam == "tintuc") {
            include("main/tin-tuc.php");
        } else if ($tam == "dangtin") {
            include("main/dang-tin.php");
        } else if ($tam == "lienhe") {
            include("main/lien-he.php");
        } else {
            include("main/index.php");
        }

        ?>

    </div>

</div>