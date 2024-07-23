<div id="kt_app_content" class="app-content  flex-column-fluid ">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">

        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div>
                    <div>
                        <!--begin::CHART DISINI-->
                        <script>
                            // Bar chart
                            const ctx = document.getElementById('myChart');
                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Red', 'Blue', 'Yellow'],
                                    datasets: [{
                                        label: '5000 votes',
                                        data: [1142, 1912, 1300],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>

                    <div>
                        <canvas id="myChartd" width="400" height="400"></canvas>
                        <script>
                            // Pie chart
                            const dataPie = {
                                labels: ['Red', 'Orange', 'Yellow'],
                                datasets: [{
                                    label: 'Dataset 1',
                                    data: [1213, 2314, 2213],
                                    backgroundColor: ['#FF6384', '#FF9F40', '#FFCD56']
                                }]
                            };

                            const configPie = {
                                type: 'pie',
                                data: dataPie,
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: {
                                            position: 'top',
                                        },
                                        title: {
                                            display: true,
                                            text: 'TOTAL SUARA'
                                        }
                                    }
                                },
                            };

                            const ctxPie = document.getElementById('myChartd').getContext('2d');
                            new Chart(ctxPie, configPie);
                        </script>
                    </div>
                    <br>
                    <div>
                        <canvas id="myChartBar"></canvas>
                        <script>
                            // Bar chart with multiple datasets
                            const dataBar = {
                                labels: ['Wonosari', 'Nglipar', 'Playen', 'Patuk', 'Paliyan', 'Panggang',
                                     'Tepus','Semanu','Karangmojo','Ponjong','Rongkop','Semin','Ngawen','Gedangsari',
                                     'Saptosari','Girisubo','Tanjungsari','Purwosari',],
                                datasets: [{
                                    label: 'Dataset 1',
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1,
                                    data: [12, 12, 23, 4, 65, 16, 67,8,9,0,11,12,13,114,15,16,17,18],
                                }, {
                                    label: 'Dataset 2',
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1,
                                    data: [31, 2, 53, 4, 45, 46, 74,8,29,10,11,12,3,14,151,16,17,18],
                                }, {
                                    label: 'Dataset 2',
                                    backgroundColor: 'rgba(60, 179, 113, 0.2)',
                                    borderColor: 'rgba(60, 179, 113, 1)',
                                    borderWidth: 1,
                                    data: [51, 2, 23, 24, 5, 36, 37,8,9,0,11,2,13,4,151,16,17,18],
                                },]
                            };

                            const configBarKec = {
                                type: 'bar',
                                data: dataBar,
                                options: {
                                    plugins: {
                                        legend: {
                                            position: 'top',
                                        },
                                        title: {
                                            display: true,
                                            text: 'KECAMATAN'
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            };
                            const ctxBar = document.getElementById('myChartBar').getContext('2d');
                            new Chart(ctxBar, configBarKec);
                        </script>
                    </div>
                    <div>
                        <canvas id="myChartBarDes"></canvas>
                        <script>
                            // Bar chart with multiple datasets
                            const dataBarDes = {
                                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                datasets: [{
                                    label: 'Dataset 1',
                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                    borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1,
                                    data: [1, 2, 3, 4, 5, 6, 7],
                                }, {
                                    label: 'Dataset 2',
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1,
                                    data: [7, 6, 5, 4, 3, 2, 1],
                                }, {
                                    label: 'Dataset 2',
                                    backgroundColor: 'rgba(60, 179, 113, 0.2)',
                                    borderColor: 'rgba(60, 179, 113, 1)',
                                    borderWidth: 1,
                                    data: [5, 2, 1, 4, 15, 7, 2],
                                },]
                            };

                            const configBarDes = {
                                type: 'bar',
                                data: dataBarDes,
                                options: {
                                    plugins: {
                                        legend: {
                                            position: 'top',
                                        },
                                        title: {
                                            display: true,
                                            text: 'Kecamatan Terpilih '
                                        }
                                    },
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            };
                            const ctxBarDes = document.getElementById('myChartBarDes').getContext('2d');
                            new Chart(ctxBarDes, configBarDes);
                        </script>
                    </div>
                </div>
                <!--end::Details-->
            </div>
        </div>
        <!--end::Navbar-->
    </div>
    <!--end::Content container-->
</div>