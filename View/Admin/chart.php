
<div class='dashboard-app'>
        <header class='dashboard-toolbar '>
            <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i></a>
        </header>
        <section>
      <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Tổng Doanh Thu</h2>
                                   <p class="font-bold text-3xl"><?php echo currency_format($total_revenue, ' VND'); ?> <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Số Lượng Người Dùng</h2>
                                    <p class="font-bold text-3xl"><?=$total_user?> </p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Người Dùng Mới</h2>
                                    <p class="font-bold text-3xl"><?=$total_new_user?> <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Số Lượng Sản Phẩm</h2>
                                    <p class="font-bold text-3xl"><?=$total_products?><span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Số Lượng Đơn Hàng (ĐÃ HOÀN THÀNH)</h2>
                                    <p class="font-bold text-3xl"><?=$total_bill?><span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Tương Tác</h2>
                                    <p class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </div>


                <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h class="font-bold uppercase text-gray-600">Doanh thu từng tháng</h>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": <?php echo json_encode($list_months_in_months_diagram); ?>,
                                        "datasets": [{
                                            "label": "Tháng",
                                            "data": <?php echo json_encode($list_value_in_months_diagram); ?>,
                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h2 class="font-bold uppercase text-gray-600">Doanh thu theo tuần </h2>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": <?php echo json_encode($list_weeks_in_weeks_diagram); ?>,
                                        "datasets": [{
                                            "label": "Tuần (01-11 -> 30-11-2023)",
                                            "data": <?php echo json_encode($list_value_in_weeks_diagram); ?>,
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>
                
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-black-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h2 class="font-bold uppercase text-gray-600">Doanh thu theo ngày</h2>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": <?php echo json_encode($list_days_in_day_diagram); ?>,
                                        "datasets": [{
                                            "label": "Doanh Thu",
                                            "data": <?php echo json_encode($list_value_in_day_diagram); ?>,
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

        

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Graph Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h5 class="font-bold uppercase text-gray-600">Danh mục sản phẩm (theo số lượng sp)</h5>
                        </div>
                        <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": <?php echo json_encode($list_name_categories); ?>, 
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": <?php echo json_encode($list_count_categories); ?>,
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Table Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                <h2 class="font-bold uppercase text-gray-600">Top Khách Hàng </h2>
                            </div>
                            
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col" style="text-align: center">Tên </th>
      <th scope="col" style="text-align: center">Số đơn hàng</th>
      <th scope="col" style="text-align: center">Tổng giá trị</th>
    </tr>
  </thead>
  <tbody>
                <?php $stt = 0; ?>
                <?php  foreach($list_data_top_user as $value): ?>
                    <?php extract($value); ?>
            <tr>
                <th scope="row"><?php echo ($stt = $stt + 1); ?></th>
                <td style="text-align: center"><?=$full_name?></td>
                <td style="text-align: center"><?=$number_of_purchases?></td>
                <td style="text-align: center"><?php echo currency_format($total_spent, 'VND'); ?></td>
            </tr>

            <?php endforeach; ?>
    
  </tbody>
</table>
</div>

                        </div>
                        <!--/table Card-->
                    </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Advert Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                            <h2 class="font-bold uppercase text-gray-600">Advert</h2>
                        </div>
                    </div>
                    <!--/Advert Card-->
                </div>


                </div>
            </div>
                            </section>
</div>

