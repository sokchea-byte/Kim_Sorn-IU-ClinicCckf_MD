@extends('admin.index')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card text-white" style="background-color: #1e88e5;">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots text-white"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Patient Visits <span>| Today</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="background-color: rgba(255,255,255,0.3); width:50px; height:50px;">
                                            <i class="bi bi-hospital text-white fs-4"></i>
                                        </div>
                                        <div class="ps-3">
                                           <h6 class="text-white">145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span>
                                            <span class="text-white small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card text-white" style="background-color: #43a047;">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots text-white"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Revenue <span>| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="background-color: rgba(255,255,255,0.3); width:50px; height:50px;">
                                            <i class="bi bi-currency-dollar text-white fs-4"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 class="text-white">$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span>
                                            <span class="text-white small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctors / Staff Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card staff-card text-dark" style="background-color: #fbc02d;">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots text-dark"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Doctors <span>| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="background-color: rgba(0,0,0,0.1); width:50px; height:50px;">
                                            <i class="bi bi-people-fill text-dark fs-4"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 class="text-dark">124</h6>
                                            <span class="text-success small pt-1 fw-bold">5%</span>
                                            <span class="text-dark small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter by Hospital</h6>
                                        </li>
                                        <li><a class="dropdown-item filter-chart" href="#" data-hospital="all">All
                                                Hospitals</a></li>
                                        <li><a class="dropdown-item filter-chart" href="#"
                                                data-hospital="Khmer-Soviet Friendship Hospital">Khmer-Soviet Friendship
                                                Hospital</a></li>
                                        <li><a class="dropdown-item filter-chart" href="#"
                                                data-hospital="National Children's Hospital">National Children's
                                                Hospital</a></li>
                                        <li><a class="dropdown-item filter-chart" href="#"
                                                data-hospital="Cambodia-China Friendship Hospital">Cambodia-China Friendship
                                                Hospital</a></li>
                                        <li><a class="dropdown-item filter-chart" href="#"
                                                data-hospital="Preah Kosom: Kalmet Hospital">Preah Kosom: Kalmet
                                                Hospital</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span id="chart-hospital">/ All Hospitals</span></h5>

                                    <div id="hospitalChart" style="min-height: 350px;"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            const chartOptions = {
                                                chart: { height: 350, type: 'area', toolbar: { show: false } },
                                                stroke: { curve: 'smooth', width: 3 },
                                                markers: { size: 5 },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.2, stops: [0, 90, 100] } },
                                                dataLabels: { enabled: false },
                                                xaxis: { type: 'datetime', categories: [] },
                                                tooltip: { x: { format: 'dd/MM/yy HH:mm' } },
                                                series: []
                                            };

                                            const chart = new ApexCharts(document.querySelector("#hospitalChart"), chartOptions);
                                            chart.render();

                                            // Sample data for hospitals
                                            const hospitalData = {
                                                "all": {
                                                    categories: ["2025-11-01T00:00:00Z", "2025-11-01T01:30:00Z", "2025-11-01T02:30:00Z", "2025-11-01T03:30:00Z"],
                                                    series: [
                                                        { name: 'Sales', data: [40, 55, 35, 70] },
                                                        { name: 'Revenue', data: [20, 35, 25, 50] }
                                                    ]
                                                },
                                                "Khmer-Soviet Friendship Hospital": {
                                                    categories: ["2025-11-01T00:00:00Z", "2025-11-01T01:30:00Z", "2025-11-01T02:30:00Z", "2025-11-01T03:30:00Z"],
                                                    series: [
                                                        { name: 'Sales', data: [10, 20, 15, 25] },
                                                        { name: 'Revenue', data: [5, 15, 10, 20] }
                                                    ]
                                                },
                                                "National Children's Hospital": {
                                                    categories: ["2025-11-01T00:00:00Z", "2025-11-01T01:30:00Z", "2025-11-01T02:30:00Z", "2025-11-01T03:30:00Z"],
                                                    series: [
                                                        { name: 'Sales', data: [15, 25, 20, 30] },
                                                        { name: 'Revenue', data: [10, 15, 12, 20] }
                                                    ]
                                                },
                                                "Cambodia-China Friendship Hospital": {
                                                    categories: ["2025-11-01T00:00:00Z", "2025-11-01T01:30:00Z", "2025-11-01T02:30:00Z", "2025-11-01T03:30:00Z"],
                                                    series: [
                                                        { name: 'Sales', data: [5, 10, 8, 12] },
                                                        { name: 'Revenue', data: [3, 6, 5, 8] }
                                                    ]
                                                },
                                                "Preah Kosom: Kalmet Hospital": {
                                                    categories: ["2025-11-01T00:00:00Z", "2025-11-01T01:30:00Z", "2025-11-01T02:30:00Z", "2025-11-01T03:30:00Z"],
                                                    series: [
                                                        { name: 'Sales', data: [10, 15, 12, 20] },
                                                        { name: 'Revenue', data: [7, 10, 8, 12] }
                                                    ]
                                                }
                                            };

                                            const updateChart = (hospital) => {
                                                chart.updateOptions({ xaxis: { categories: hospitalData[hospital].categories } });
                                                chart.updateSeries(hospitalData[hospital].series);
                                                document.getElementById("chart-hospital").textContent = `/ ${hospital}`;
                                            }

                                            document.querySelectorAll(".filter-chart").forEach(btn => {
                                                btn.addEventListener("click", e => {
                                                    e.preventDefault();
                                                    const hospital = btn.dataset.hospital;
                                                    updateChart(hospital);
                                                });
                                            });

                                            // Initial load
                                            updateChart("all");
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>

                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <table class="table table-borderless datatable align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Hospital / Department</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                <td>Khmer-Soviet Friendship Hospital / General Medicine</td>
                                                <td>$64</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a>
                                                </td>
                                                <td>National Children's Hospital / Pediatrics</td>
                                                <td>$47</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                                                <td>Cambodia-China Friendship Hospital / Surgery</td>
                                                <td>$147</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href="#" class="text-primary">Ut voluptatem id earum et</a></td>
                                                <td>Preah Kosom: Kalmet Hospital / Critical Care</td>
                                                <td>$67</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2645</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                                                <td>National Children's Hospital / Cardiology</td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                        <!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <a href="#"><img src="assets/img/product-6.jpg" alt=""></a>
                                                </th>
                                                <td><a href="#" class="text-primary fw-bold">Im handsome and beautiful
                                                        everyone likes to talk about me</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <a href="#"><img src="assets/img/product-7.jpg" alt=""></a>
                                                </th>
                                                <td><a href="#" class="text-primary fw-bold">sterile latex surgical gloves
                                                        are designed for medical and surgical procedures to provide a
                                                        sterile barrier</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <a href="#"><img src="assets/img/product-8.jpg" alt=""></a>
                                                </th>
                                                <td><a href="#" class="text-primary fw-bold">Paracetamol, also known as
                                                        acetaminophen, is a common over-the-counter pain reliever</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <a href="#"><img src="assets/img/product-9.jpg" alt=""></a>
                                                </th>
                                                <td><a href="#" class="text-primary fw-bold">Doxycycline is a broad-spectrum
                                                        tetracycline antibiotic used to treat a variety of bacterial</a>
                                                </td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <a href="#"><img src="assets/img/product-10.jpg" alt=""></a>
                                                </th>
                                                <td><a href="#" class="text-primary fw-bold">Loratadine (brand name Claritin
                                                        among others) is an over-the-counter, non-drowsy antihistamine used
                                                        to treat</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- End Top Selling -->

                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Hospital Activity <span>| Today</span></h5>

                            <div class="activity">

                                <!-- Dr. Kim Sorn activity from IU -->
                                <div class="activity-item d-flex">
                                    <div class="activite-label">15 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Dr. You Randa from IU International University performed <a href="#"
                                            class="fw-bold text-dark">general check-up</a> at Khmer-Soviet Friendship
                                        Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Dr. Kim Sorn from IU International University performed <a href="#"
                                            class="fw-bold text-dark">general check-up</a> at Khmer-Soviet Friendship
                                        Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        Emergency surgery completed at Preah Kosom: Kalmet Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Vaccination campaign conducted at Khmer-Soviet Friendship Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        Blood donation event organized at Cambodia-China Friendship Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        Staff training session on infection control at National Children's Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Maintenance of medical equipment completed at Khmer-Soviet Friendship Hospital
                                    </div>
                                </div>
                                <!-- End activity item-->

                            </div>

                        </div>
                    </div>


                    <!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Quarter</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Hospital Budget Report <span>| This Month</span></h5>

                            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [
                                                { name: 'Surgery', max: 6500 },
                                                { name: 'Pediatrics', max: 16000 },
                                                { name: 'Internal Medicine', max: 30000 },
                                                { name: 'ICU', max: 38000 },
                                                { name: 'Radiology', max: 52000 },
                                                { name: 'Pharmacy', max: 25000 }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs Spending',
                                            type: 'radar',
                                            data: [
                                                {
                                                    value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                    name: 'Allocated Budget'
                                                },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>

                    <!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Hospital Visits by Source <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: { trigger: 'item' },
                                        legend: { top: '5%', left: 'center' },
                                        series: [{
                                            name: 'Patient Source',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: { show: false, position: 'center' },
                                            emphasis: {
                                                label: { show: true, fontSize: '18', fontWeight: 'bold' }
                                            },
                                            labelLine: { show: false },
                                            data: [
                                                { value: 120, name: 'Walk-in' },
                                                { value: 80, name: 'Referral' },
                                                { value: 60, name: 'Emergency' },
                                                { value: 40, name: 'Online Appointment' },
                                                { value: 20, name: 'Community Outreach' }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div>

                    <!-- End Website Traffic -->

                    <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter by Hospital</h6>
                                </li>
                                <li><a class="dropdown-item filter-item" href="#" data-hospital="all">All Hospitals</a></li>
                                <li><a class="dropdown-item filter-item" href="#"
                                        data-hospital="Khmer-Soviet Friendship Hospital">Khmer-Soviet Friendship
                                        Hospital</a></li>
                                <li><a class="dropdown-item filter-item" href="#"
                                        data-hospital="National Children's Hospital">National Children's Hospital</a></li>
                                <li><a class="dropdown-item filter-item" href="#"
                                        data-hospital="Cambodia-China Friendship Hospital">Cambodia-China Friendship
                                        Hospital</a></li>
                                <li><a class="dropdown-item filter-item" href="#"
                                        data-hospital="Preah Kosom: Kalmet Hospital">Preah Kosom: Kalmet Hospital</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Latest News <span>| <span id="current-hospital">All
                                        Hospitals</span></span></h5>

                            <div class="news">
                                <!-- Khmer-Soviet Friendship Hospital -->
                                <div class="post-item clearfix" data-hospital="Khmer-Soviet Friendship Hospital">
                                    <img src="assets/img/news-6.jpg" alt="">
                                    <h4><a href="#">Khmer-Soviet Friendship Hospital</a></h4>
                                    <p>Specialties: General Medicine, Psychiatry, Rehabilitation Medicine</p>
                                </div>

                                <!-- National Children's Hospital -->
                                <div class="post-item clearfix" data-hospital="National Children's Hospital">
                                    <img src="assets/img/news-7.jpg" alt="">
                                    <h4><a href="#">National Children's Hospital</a></h4>
                                    <p>Specialties: Pediatric Diseases, Pediatric Cardiology, Pediatric Gynecology</p>
                                </div>

                                <!-- Cambodia-China Friendship Hospital -->
                                <div class="post-item clearfix" data-hospital="Cambodia-China Friendship Hospital">
                                    <img src="assets/img/news-8.jpg" alt="">
                                    <h4><a href="#">Cambodia-China Friendship Hospital</a></h4>
                                    <p>Specialties: Surgery, Public Health Management, Dermatology</p>
                                </div>

                                <!-- Preah Kosom: Kalmet Hospital -->
                                <div class="post-item clearfix" data-hospital="Preah Kosom: Kalmet Hospital">
                                    <img src="assets/img/news-9.jpg" alt="">
                                    <h4><a href="#">Preah Kosom: Kalmet Hospital</a></h4>
                                    <p>Specialties: Critical Care, Oncology, Surgery Department</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        const filterItems = document.querySelectorAll('.filter-item');
                        const postItems = document.querySelectorAll('.post-item');
                        const currentHospital = document.getElementById('current-hospital');

                        filterItems.forEach(item => {
                            item.addEventListener('click', function (e) {
                                e.preventDefault();
                                const hospital = this.dataset.hospital;
                                currentHospital.textContent = this.textContent;

                                postItems.forEach(post => {
                                    post.style.display = (hospital === 'all' || post.dataset.hospital === hospital) ? 'block' : 'none';
                                });
                            });
                        });
                    </script>

                    <!-- End News & Updates -->

                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->

@endsection
