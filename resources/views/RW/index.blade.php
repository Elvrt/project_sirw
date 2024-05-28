<!doctype html>
<html>

<head>
  @extends('./layout/rw')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @vite('resources/css/table.css')
</head>

<body>
  <div class="justify-center flex sm:block">
    <div class="p-4 sm:ml-64 ">
      <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Dashboard</p>
      <div class="bg-putih drop-shadow-md mx-2 px-10 p-4">
        <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">35</span>
              <span class="block text-gray-500">Jumlah Kepala Keluarga</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">140</span>
              <span class="block text-gray-500">Jumlah Warga</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
            </div>
            <div>
              <span class="block text-2xl font-bold">14</span>
              <span class="block text-gray-500">Jumlah Permintaan Surat</span>
            </div>
          </div>
          <div class="flex items-center p-8 bg-white shadow rounded-lg">
            <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
              <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
            </div>
            <div>
              <span class="inline-block text-2xl font-bold">9</span>
              <span class="block text-gray-500">Jumlah Pengaduan</span>
            </div>
          </div>
        </section>
        <div class="mt-10">
          <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
            <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
              <div class="px-6 py-5 font-semibold border-b border-gray-100">Data Warga Berdasarkan Jenis Kelamin</div>
              <div class="p-4 flex-grow">
                <div class="shadow-lg rounded-lg overflow-hidden">
                  <div class="py-3 px-5 bg-gray-50 text-center">Data Warga</div>
                  <canvas class="p-1 ml-40 mr-40" id="chartPie"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart pie -->
                <script>
                  const dataPie = {
                    labels: ["Laki - Laki", "Perempuan", ],
                    datasets: [{
                      label: "Data Warga",
                      data: [80, 60],
                      backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                      ],
                      hoverOffset: 4,
                    }, ],
                  };

                  const configPie = {
                    type: "pie",
                    data: dataPie,
                    options: {},
                  };

                  var chartBar = new Chart(document.getElementById("chartPie"), configPie);
                </script>
              </div>
            </div>
            <div class="flex flex-col row-span-2 col-span-2 bg-white shadow rounded-lg">
              <div class="px-6 py-5 font-semibold border-b border-gray-100">Jumlah Iuran Warga</div>
              <div class="p-4 flex-grow">
                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                  <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
                    <dl>
                      <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Jumlah</dt>
                      <dd class="leading-none text-3xl font-bold text-gray-900 dark:text-white">Rp 20.000.000</dd>
                    </dl>
                  </div>

                  <div class="grid grid-cols-2 py-3">
                    <dl>
                      <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Bulan November</dt>
                      <dd class="leading-none text-xl font-bold text-green-500 dark:text-green-400">Rp 350.000</dd>
                    </dl>
                  </div>

                  <div id="bar-chart"></div>
                  <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="flex justify-between items-center pt-5">
                    </div>
                  </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script>
                  const options = {
                    series: [{
                        name: "Income",
                        color: "#31C48D",
                        data: ["350000", "350000", "350000", "350000", "350000", "350000", "350000"],
                      },
                      // {
                      //   name: "Expense",
                      //   data: ["788", "810", "866", "788", "1100", "1200"],
                      //   color: "#F05252",
                      // }
                    ],
                    chart: {
                      sparkline: {
                        enabled: false,
                      },
                      type: "bar",
                      width: "100%",
                      height: 400,
                      toolbar: {
                        show: false,
                      }
                    },
                    fill: {
                      opacity: 1,
                    },
                    plotOptions: {
                      bar: {
                        horizontal: true,
                        columnWidth: "100%",
                        borderRadiusApplication: "end",
                        borderRadius: 6,
                        dataLabels: {
                          position: "top",
                        },
                      },
                    },
                    legend: {
                      show: true,
                      position: "bottom",
                    },
                    dataLabels: {
                      enabled: false,
                    },
                    tooltip: {
                      shared: true,
                      intersect: false,
                      formatter: function(value) {
                        return "$" + value
                      }
                    },
                    xaxis: {
                      labels: {
                        show: true,
                        style: {
                          fontFamily: "Inter, sans-serif",
                          cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        },
                        formatter: function(value) {
                          return "$" + value
                        }
                      },
                      categories: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                      axisTicks: {
                        show: false,
                      },
                      axisBorder: {
                        show: false,
                      },
                    },
                    yaxis: {
                      labels: {
                        show: true,
                        style: {
                          fontFamily: "Inter, sans-serif",
                          cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                      }
                    },
                    grid: {
                      show: true,
                      strokeDashArray: 4,
                      padding: {
                        left: 2,
                        right: 2,
                        top: -20
                      },
                    },
                    fill: {
                      opacity: 1,
                    }
                  }

                  if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.getElementById("bar-chart"), options);
                    chart.render();
                  }
                </script>

              </div>
            </div>
          </section>
        </div>
      </div>
</body>

</html>