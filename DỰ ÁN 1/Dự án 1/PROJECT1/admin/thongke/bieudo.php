<div class="main">
  <div class="main-content project">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="linegraphchart" style="width:95%; height:500px;margin-top:10px;margin-left:2.4%;clear:both;">

      <script>
        google.charts.load('current', {
          packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          // Set Data
          var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $tk) {
              extract($tk);
              if ($i == $tongdm) $dauphay = "";
              else $dauphay = ",";
              echo "['" . $tk['tendm'] . "', " . $tk['countsp'] . "]" . $dauphay;
              $i += 1;
            }

            ?>
          ]);
          // Set Options
          var options = {
            title: 'Thống kê sản phẩm theo danh mục',
            hAxis: {
              title: 'Tên danh mục'
            },
            vAxis: {
              title: 'Số lượng sản phẩm'
            },
            legend: 'none'
          };
          // Draw
          var chart = new google.visualization.LineChart(document.getElementById('linegraphchart'));
          chart.draw(data, options);
        }
      </script>
    </div>
    <a href="index.php?act=thongke"><button type="button" style="clear: both;">Thống kê dạng bảng</button></a>
  </div>
</div>