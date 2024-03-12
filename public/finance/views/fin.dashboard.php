<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="./../src/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
</head>

<body>
    <!-- Start: Sidebar -->
    <?php include "components/sidebar.php" ?>
    <!-- End: Sidebar -->

    <!-- Start: Dashboard -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 min-h-screen transition-all main font-sans">


        <!-- Start: Header -->

        <div class="py-2 px-6 bg-white flex items-center shadow-md sticky top-0 left-0 z-30">

            <!-- Start: Active Menu -->

            <button type="button" class="text-lg sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="flex items-center text-md ml-4">

                <li class="mr-2">
                    <p class="text-black font-medium">Dashboard</p>
                </li>

            </ul>

            <!-- End: Active Menu -->

            <!-- Start: Profile -->

            <ul class="ml-auto flex items-center">
                <div class="text-black font-medium">Sample User</div>
                <li class="dropdown ml-3">
                    <i class="ri-arrow-down-s-line"></i>
                </li>
            </ul>

            <!-- End: Profile -->

        </div>

        <!-- End: Header -->

        <!-- Start: Inner Dashboard Analytics-->
        <div class="w-full h-1/4 p-6 bg-white">
            <!-- Start: Top Section -->
            <div class=" mb-6">
                <!-- Start: Top Left-Side Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6 ">
                    <div
                        class="col-span-1 border-solid border-gray-400 shadow-md rounded-xl px-5 py-10 bg-wave bg-cover bg-[center_top_2rem] bg-no-repeat
                            
                        ">
                        <!-- Start: Welcome Message -->
                      <div class="flex justify-between mb-5">
                         <div>

                           <h1 class="font-sans font-bold  text-5xl">Hello, Sample User!</h1>
                           <p class=" w-3/4 text wrap mt-3 font-sans text-md text-gray-400 ">Welcome back! Ready to gear
                               up for another productive day?</p>
                           <!-- End: Welcome Message -->
                       </div>

                                
                        <div class="text-right">
                            <p class="font-sans font-bold text-xl text-gray-400">Today,</p>
                            <p class="font-sans font-bold text-xl text-gray-400">March 04, 2024</p>
                        </div>
                      </div>
                        
                        <!-- End: Welcome Message -->
                        <!-- Start: Mini-Dashboard Analytics -->
                        <div id="mini-dashboard" class="mt-10 grid grid-cols-1  md:grid-cols-2  gap-4">
                            <!-- Start: Dashboard Analytics: Total Sales -->
                            <div class="bg-white rounded-md border border-gray-300 p-4 shadow-lg">
                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex items-center mb-1">
                                            <div class="text-2xl font-semibold">0</div>
                                        </div>
                                        <div class="text-sm font-medium text-gray-400">Total Sales</div>
                                    </div>
                                    <div>
                                        <!-- <i class="ri-file-text-line mr-3 text-4xl"></i> -->
                                        <i class="ri-funds-box-line text-4xl"></i>
                                        <!-- <img src="Profit.jpg" alt="Profit.png"> -->
                                    </div>
                                </div>
                            </div>
                            <!-- End: Dashboard Analytics: Total Sales -->
                            <!-- Start: Dashboard Analytics: Total Expense -->
                            <div class="bg-white rounded-md border border-gray-300 p-4 shadow-lg">
                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex items-center mb-1">
                                            <div class="text-2xl font-semibold">0</div>
                                        </div>
                                        <div class="text-sm font-medium text-gray-400">Total Expense</div>
                                    </div>
                                    <div>
                                        <i class="ri-exchange-funds-line text-4xl"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Dashboard Analytics: Total Expense -->
                        </div>
                        <!-- End: Mini-Dashboard Analytics -->
                    </div>

                    <div class=" col-span-1 bg-gradient-to-b from-[#F8B721] to-[#FBCF68] rounded-xl drop-shadow-md">
                        <div class="mx-5 my-5 py-3 px-3 text-white">
                            <h1 class="text-3xl font-bold">Total Balance</h1>
                            <p class="mt-5 text-3xl font-medium">0</p>
                            <p class="mt-5 text-md font-bold">Summary</p>
                        </div>
                    </div>



                </div>
                <!-- End: Top Left-Side Section -->

                <!-- Start: Top Right-Side Section -->

                <!-- End: Top Right-Side Section -->
            </div>
            <!-- End: Top Section -->

            <!-- Start: Fifth Section -->
            <div class="mt-10  grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Start: Request -->
                <div class="px-5 border-2 border-solid border-gray-300 shadow-lg">
                    <!-- Start: Header -->
                    <div class="flex justify-between mt-5 ">
                        <div>
                            <h1 class="font-sans text-xl font-bold">
                                Request
                                <span class="text-white bg-[#F8B721] inline-flex items-center rounded-full px-2 py-1">99+</span>
                            </h1>
                            
                        </div>
                        <div>
                            <a href="#" class="text-sm font-sans font-semibold">
                                <i class="ri-more-line text-3xl text-[#F8B721]"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End: Header -->
                    <!-- Start: Tab -->
                    <div class="flex justify-stretch">
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-[#F8B721] border-b-2 border-[#F8B721] focus:outline-none">All</button>
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-black border-b-2 border-slate-300  hover:text-[#F8B721] hover:border-[#F8B721] focus:outline-none">HR</button>
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-black border-b-2 border-slate-300  hover:text-[#F8B721] hover:border-[#F8B721] focus:outline-none">Sales</button>
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-black border-b-2 border-slate-300  hover:text-[#F8B721] hover:border-[#F8B721] focus:outline-none">PO</button>
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-black border-b-2 border-slate-300  hover:text-[#F8B721] hover:border-[#F8B721] focus:outline-none">Delivery</button>
                        <button class="flex-grow px-10 py-2 font-xl font-semibold text-black border-b-2 border-slate-300  hover:text-[#F8B721] hover:border-[#F8B721] focus:outline-none">Inventory</button>
                    </div>
                    <!-- End: Tab -->

                    <!-- Start: Table -->
                    <div>
                        <table class="table-fixed my-5 w-full" id="table_request">
                            <tr class="flex justify-between py-5 font-medium text-xl">
                                <td class="mr-4 text-xl">
                                    <p class="font-semibold">Sample User</p>
                                    <p>HR Dept</p>
                                </td>

                                <td class="mr-4 line-clamp-2">
                                    <p>Salary Request</p>
                                </td>

                                <td class="mr-4 line-clamp-2">
                                    <p>March 4, 2024</p>
                                </td>
                                <td class="mr-4">
                                    <button class="bg-[#F8B721] rounded-lg px-8 py-3 shadow-md shadow-black-300">
                                        <p class="text-white text-lg font-bold ">View</p>
                                    </button>
                                </td>
                            </tr>
                           
                        </table>

                        <script>
                            let table_request = document.getElementById('table_request');
                            
                            for (let index = 0; index < 2; index++) {
                                table_request.innerHTML += `
                                <tr class="flex justify-between py-5 font-medium text-xl">
                                <td class="mr-4 text-xl">
                                    <p class="font-semibold">Sample User</p>
                                    <p>HR Dept</p>
                                </td>

                                <td class="mr-4 line-clamp-2">
                                    <p>Salary Request</p>
                                </td>

                                <td class="mr-4 line-clamp-2">
                                    <p>March 4, 2024</p>
                                </td>
                                <td class="mr-4">
                                    <button class="bg-[#F8B721] rounded-lg px-8 py-3 shadow-md shadow-black-300">
                                        <p class="text-white text-lg font-bold ">View</p>
                                    </button>
                                </td>
                            </tr>
                                `;
                                
                            }
                        </script>
                    </div>
                    <!-- End: Table -->
                </div>
                <!-- End: Request -->

                <!-- Start: Salary Request -->
                <div class="px-5 border-2 border-solid border-gray-300 shadow-lg">
                    <!-- Start: Header -->
                    <div class="flex justify-between mt-5 ">
                        <div>
                            <h1 class="font-sans text-xl font-bold">
                                Salary Request
                            </h1>
                        </div>
                        <div>
                            <a href="#" class="text-sm font-sans font-semibold">View All</a>
                        </div>
                    </div>
                    <!-- End: Header -->
                    <!-- Start: Search Bar -->
                    <form action="#" method="get">
                        <div
                            class="mt-5 px-5 flex justify-between border-2 border-gray-200 bg-gray-200 rounded-xl transition-colors text-black">
                            <input type="text" name="search"
                                class="w-full pl-3 pr-10 py-2 text-black focus:outline-none bg-transparent transition-colors"
                                placeholder="Search by ID...">
                            <button class="block text-center text-xl">
                                <!-- Search -->
                                <i class="ri-search-line"></i>
                            </button>

                            <!-- <i class="ri-search-line">sdasd</i> -->
                        </div>
                    </form>
                    <!-- End: Search Bar -->
                    <br><br><br><br>
                    <br><br><br><br>
                    <br><br><br><br>
                </div>
                <!-- End: Salary Request -->

            </div>
            <!-- End: Fifth Section -->

            <!-- Start: Second Section -->
            <div class="mt-10  h-2/4">
                <!-- Start: Header Report -->
                <div class="my-10 flex justify-between">
                    <h1 class="font-sans font-bold text-3xl">Report</h1>
                    <div class="font-bold  border-none ">
                        <select name="" id="" class="bg-white border-collapse text-xl">
                            <option value="year" selected>Year</option>
                            <option value="month">Month</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="px-3 pt-5 border-solid border-2 border-gray-200 shadow-md">

                        <div class="flex justify-between">
                            <h2 class="font-sans font-bold text-xl">Income Statement</h2>
                            <a href="#" class="text-sm text-gray-900 font-semibold ">View Details</a>

                        </div>
                        <p class="text-gray-600 my-3">Net Sales 0</p>
                        <canvas id="incomeBarChart"></canvas>

                    </div>
                    <div class="px-5 pt-5 border-solid border-2 border-gray-200 shadow-md">
                        <div class="flex justify-between">
                            <h2 class="font-sans font-bold text-xl">Balance</h2>
                            <a href="#" class="text-sm text-gray-900 font-semibold ">View Details</a>

                        </div>
                        <!-- Balance Sheet in Pie Graph -->
                        <div class="w-full h-3/4 flex justify-center">

                            <canvas id="balancePie" class="px-3 py-3"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Include Chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    // get the canvas id of incomeBarChart
                    var incomeBar = document.getElementById('incomeBarChart').getContext('2d');

                    // Configure the chart
                    var myChart = new Chart(incomeBar, {
                        type: 'bar',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            datasets: [{
                                label: 'Income',
                                data: [12000, 19000, 3000, 5000, 2000, 3000, 7000, 8000, 9000, 10000, 11000, 12000], // Replace with your income data
                                backgroundColor: ' #F8B721',
                                borderColor: 'rgba(255, 165, 0, 1)',
                                // rgba(255, 165, 0, 0.2),
                                //F8B721 orange
                                // F6D95D pale orange
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }
                    });

                    // Get the context of the canvas element we want to select
                    var balancePie = document.getElementById('balancePie').getContext('2d');

                    var myPieChart = new Chart(balancePie, {
                        type: 'pie',
                        data: {
                            labels: ['Asstes', 'Liabilities'],
                            datasets: [{
                                data: [20, 30],
                                backgroundColor: ['rgb(255, 165, 0)', 'rgb(255, 205, 86)']
                            }]
                        },
                        options: {
                            responsive: true,

                            plugins: {
                                legend: {
                                    position: 'bottom'
                                }
                            }
                        }

                    });


                </script>



            </div>
            <!-- End: Second Section -->

            <!-- Start: Third Section -->
            <div class=" mt-10">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-1 px-3 pt-5 border-solid border-2 border-gray-200 shadow-md">
                    <div class="flex justify-between">
                            <h2 class="font-sans font-bold text-xl">Equity</h2>
                            <a href="#" class="text-sm text-gray-900 font-semibold ">View Details</a>

                        </div>
                        <!-- Donut Chart for Equity -->
                        <div class="flex justify-center w-3/4">
                            <canvas id="equityDonutChart"></canvas>
                        </div>
                    </div>
                    <div class="col-span-2 px-3 pt-5 border-solid border-2 border-gray-200 shadow-md">

                        <h2 class="mt-5  font-sans  font-bold text-xl">Cash Flow</h2>
                        <!-- Create a canvas element -->
                        <canvas id="salesGrowthChart"></canvas>
                    </div>
                </div>

                <script>

                    // Donut Chart Equity
                    var equityDonut = document.getElementById('equityDonutChart').getContext('2d');

                    var myChart = new Chart(equityDonut, {
                        type: 'doughnut',
                        data: {
                            labels: ['Equity1', 'Equity2', 'Equity3'],
                            datasets: [{
                                data: [10, 20, 30], // Replace with your equity data
                                backgroundColor: ['rgba(255, 165, 0, 0.5)', 'rgba(255, 165, 0, 0.7)', 'rgba(255, 165, 0, 0.9)']
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: true,

                            plugins: {
                                legend: {
                                    position: 'left'
                                }
                            }
                        }
                    });

                    // Initialize a new Chart.js instance
                    var ctx = document.getElementById('salesGrowthChart').getContext('2d');

                    // Configure the chart
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            datasets: [{
                                label: 'Sales Growth',
                                data: [12, 19, 3, 5, 2, 3, 7], // Replace with your data
                                backgroundColor: 'rgba(255, 165, 0, 0.7)',
                                fill: true,
                                borderColor: 'rgba(255, 165, 0, 1)',
                                borderWidth: 1

                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                            
                        }
                    });
                </script>

            </div>
            <!-- End: Third Section -->

            <!-- Start: Fourth Section -->
            <div class="mt-10 mb-10">

                <h1 class="font-sans font-bold text-xl">Recent Transaction</h1>

                <!-- Start: Table -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                    <table class="table-auto border-collapse border-slate-50 w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Amount
                                </th>
                                <th class="px-6 py-3 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white" id="recent-table">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    John Doe
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    01/01/2024
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    $1000
                                </td>
                            </tr>
                    </table>
                    <script>
                        var recent_table = document.getElementById('recent-table');

                        for (let index = 0; index < 5; index++) {

                            recent_table.innerHTML += `
                        <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    1
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    John Doe
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    01/01/2024
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    $1000
                                </td> 
                            </tr>
                        `;
                        }
                    </script>
                </div>
                <!-- End: Table -->
            </div>
            <!-- End: Fourth Section -->

            
        </div>
        <!-- End: Inner Dashboard Analytics-->


    </main>
    <!-- End: Dashboard -->
    <script  src="./../src/route.js"></script>
</body>

</html>