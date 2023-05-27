<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
    <div class="box-bieudo">
            <div class="title">
                <h1>BIỂU ĐỒ THỐNG KÊ</h1>
            </div>
        <div class="box-content">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            <form action="./index.php?act=bieudo">
            <script>
            var xValues = ["Quần bò nam", "Áo nữ", "Giày thời trang", "Quần áo trẻ con", "Phụ kiện"];
            var yValues = [55, 49, 44, 24, 15];
            var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
            ];

            new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Tỉ lệ hàng hóa"
                }
            }
            });
            </script>
        </div>
    </div>
</form>
</body>
</html>