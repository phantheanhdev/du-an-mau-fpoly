<?php include_once "views/admin/layout/header.php" ?>

<div class="article_admin_bieu_do text-center">
    <div id="myChart" style="width:100%; height:500px;">
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Thống kê hàng hóa'],
                <?php foreach ($thong_ke_theo_loai as $item) : ?>["<?= $item['tenloai'] ?>", <?= $item['soluong'] ?>],
                <?php endforeach ?>
            ]);

            var options = {
                title: 'Thống kê sản phẩm'
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <?php include_once "views/admin/layout/footer.php" ?>