@extends('admin.index')
@section('admin')
    <!-- sherah Dashboard -->
    <section class="sherah-adashboard sherah-show">
        <div class="container">
            <div class="row">
                <div class="col-12 sherah-main__column">
                    <div class="sherah-body">
                        <!-- Dashboard Inner -->
                        <div class="sherah-dsinner">
                            <div class="sherah-page-inner sherah-default-bg mg-top-30">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Charts Three -->
                                        <div class="charts-main sherah-offset-bg">

                                            <div class="sherah-chart__dropdown--revenue mg-btm-30">
                                                <!-- Top Heading -->
                                                <h3 class="sherah-heading__title">Earning Update</h3>

                                                <ul class="sherah-progress-list sherah-progress-list__inline">
                                                    <li>
                                                        <span class="sherah-progress-list__color sherah-color1__bg"></span>
                                                        <p>Organic Visitors</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="charts-main__three">
                                                <div class="sherah-chart__inside sherah-chart__revenue">
                                                    <canvas id="myChart_Visitor"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Charts Three -->
                                    </div>
                                </div>


                                <div class="row sherah-gap-30">

                                    <div class="col-lg-6 col-12">
                                        <!-- Charts Two -->
                                        <div class="charts-main sherah-offset-bg mg-top-30">
                                            <div class="charts-main__heading  mg-btm-20 charts-main__heading--v2">
                                                <h3 class="sherah-heading__title">Daily Visitor</h3>
                                            </div>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="sherah_tab1" role="tabpanel"
                                                    aria-labelledby="sherah_tab1">
                                                    <div class="sherah-chart__inside sherah-chart__daily-vistior-v2">
                                                        <canvas id="myChart_Total_Daily_visitor"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Charts Two -->
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <!-- Charts One -->
                                        <div class="charts-main sherah-offset-bg  mg-top-30">
                                            <div class="row sherah-flex-between">
                                                <div class="col-lg-6 col-12">
                                                    <!-- Top Heading -->
                                                    <div class="charts-main__heading  mg-btm-20">
                                                        <h3 class="sherah-heading__title">Earning Update</h3>
                                                    </div>
                                                    <div class="mg-top-30">
                                                        <p>Earnings This month</p>
                                                        <h4>$6.340.42</h4>
                                                    </div>
                                                    <div class="sherah-flex-between mg-top-30 mg-btm-30">
                                                        <div class="charts-main__middle m-0">
                                                            <ul class="sherah-progress-list sherah-progress-list__bg ">
                                                                <li>
                                                                    <span
                                                                        class="sherah-progress-list__color sherah-color4__bg"></span>
                                                                    <p>50% Marketing</p>
                                                                </li>
                                                                <li>
                                                                    <span
                                                                        class="sherah-progress-list__color sherah-color1__bg"></span>
                                                                    <p>30% Payment </p>
                                                                </li>
                                                                <li>
                                                                    <span
                                                                        class="sherah-progress-list__color sherah-color3__bg"></span>
                                                                    <p>25% Bills</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="sherah-grap-chart">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="244.049"
                                                            height="207.741" viewBox="0 0 244.049 207.741">
                                                            <defs>
                                                                <linearGradient id="linear-gradient" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#7d97f9" />
                                                                    <stop offset="1" stop-color="#6176fe" />
                                                                </linearGradient>
                                                                <linearGradient id="linear-gradient-2" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#6176fe" />
                                                                    <stop offset="1" stop-color="#7d97f9" />
                                                                </linearGradient>
                                                                <linearGradient id="linear-gradient-4" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#ff6767" />
                                                                    <stop offset="1" stop-color="#e53c3c" />
                                                                </linearGradient>
                                                                <linearGradient id="linear-gradient-5" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#ff6767" />
                                                                    <stop offset="1" stop-color="#ff6767" />
                                                                </linearGradient>
                                                                <linearGradient id="linear-gradient-6" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#ffd96e" />
                                                                    <stop offset="1" stop-color="#f9c200" />
                                                                </linearGradient>
                                                                <linearGradient id="linear-gradient-7" y1="0.5"
                                                                    x2="1" y2="0.5"
                                                                    gradientUnits="objectBoundingBox">
                                                                    <stop offset="0" stop-color="#f9c200" />
                                                                    <stop offset="1" stop-color="#ffd96e" />
                                                                </linearGradient>
                                                            </defs>
                                                            <g id="Grap" transform="translate(-713.891 -350.213)">
                                                                <path id="Path_178" data-name="Path 178"
                                                                    d="M718.725,320.883a167.206,167.206,0,0,1,43.1,2.323,147.833,147.833,0,0,1,38.108,12.47,107.121,107.121,0,0,1,29.661,21.069c8.088,8.348,14.035,17.883,17.1,28.286L734.609,394.1Z"
                                                                    transform="translate(111.25 29.803)"
                                                                    fill="url(#linear-gradient)" />
                                                                <g id="Group_13" data-name="Group 13"
                                                                    transform="translate(844.663 414.836)">
                                                                    <path id="Path_179" data-name="Path 179"
                                                                        d="M837.482,344.523l-3.388,33.026-109.888,9.162,1.2-33.127Z"
                                                                        transform="translate(-724.206 -344.523)"
                                                                        fill="url(#linear-gradient-2)" />
                                                                </g>
                                                                <g id="Group_14" data-name="Group 14"
                                                                    transform="translate(829.138 350.688)">
                                                                    <path id="Path_180" data-name="Path 180"
                                                                        d="M735.134,393.8l-1.2,33.127-15.526-73.438.839-32.9Z"
                                                                        transform="translate(-718.412 -320.586)"
                                                                        fill="url(#linear-gradient)" />
                                                                </g>
                                                                <path id="Path_181" data-name="Path 181"
                                                                    d="M824.084,360.279q-.121.924-.276,1.844t-.338,1.838c-.123.611-.255,1.219-.4,1.825-.249,1.059-.531,2.106-.841,3.152s-.654,2.085-1.026,3.117-.777,2.061-1.211,3.079-.9,2.034-1.388,3.042q-1.081,2.207-2.353,4.363t-2.723,4.256q-1.459,2.1-3.093,4.141t-3.446,4.009a86.262,86.262,0,0,1-7.115,6.879,97.8,97.8,0,0,1-8.206,6.341q-4.37,3.027-9.235,5.724t-10.205,5.03q-2.838,1.242-5.8,2.369t-6.043,2.141q-3.083,1.009-6.279,1.9t-6.5,1.648q-2.271.523-4.594.984t-4.687.852q-2.368.394-4.776.723t-4.867.587l-.71.075-.713.07c-.238.024-.477.046-.716.067s-.477.046-.715.067l-1.3,33.218.7-.064.7-.07.7-.07c.233-.027.466-.051.7-.075q2.4-.261,4.762-.592t4.679-.724q2.315-.4,4.588-.858t4.5-.984q3.232-.76,6.365-1.651t6.148-1.905q3.019-1.009,5.923-2.141t5.681-2.374q5.218-2.328,10-5.038a106.039,106.039,0,0,0,9.053-5.73,96.464,96.464,0,0,0,8.045-6.346,85.781,85.781,0,0,0,6.984-6.89q1.777-1.97,3.385-4.012t3.034-4.146q1.427-2.1,2.677-4.264t2.313-4.368q.727-1.507,1.366-3.044t1.193-3.085c.367-1.032.7-2.074,1.013-3.119s.584-2.1.831-3.154c.142-.611.273-1.219.4-1.833s.233-1.222.335-1.838.193-1.23.273-1.846.153-1.238.212-1.857l3.219-33.11C824.237,359.043,824.164,359.662,824.084,360.279Z"
                                                                    transform="translate(121.004 93.67)"
                                                                    fill="url(#linear-gradient-4)" />
                                                                <path id="Path_182" data-name="Path 182"
                                                                    d="M824.3,358.426q-1.608,16.558-3.219,33.113a60.011,60.011,0,0,1-8.683,25.411A81.308,81.308,0,0,1,792.333,438.9,113.866,113.866,0,0,1,762.4,455.2a147.016,147.016,0,0,1-37.87,8.418l1.3-33.217A152.863,152.863,0,0,0,764.5,422a116.813,116.813,0,0,0,30.543-16.283A81.649,81.649,0,0,0,815.49,383.8,58.932,58.932,0,0,0,824.3,358.426Z"
                                                                    transform="translate(121.004 93.668)"
                                                                    fill="none" />
                                                                <path id="Path_183" data-name="Path 183"
                                                                    d="M832.226,350.757a55.126,55.126,0,0,1-.346,31.618c-3.17,10.253-9.288,19.885-17.886,28.367a106.037,106.037,0,0,1-33.116,21.565,149.5,149.5,0,0,1-45.231,10.977l-16.961-83.211Z"
                                                                    transform="translate(111.185 80.785)"
                                                                    fill="url(#linear-gradient-5)" />
                                                                <g id="Group_15" data-name="Group 15"
                                                                    transform="translate(828.983 440.858)">
                                                                    <path id="Path_184" data-name="Path 184"
                                                                        d="M736.2,437.443l-1.3,33.218-16.552-83.256.89-33.172Z"
                                                                        transform="translate(-718.355 -354.233)"
                                                                        fill="#540441" />
                                                                </g>
                                                                <path id="Path_185" data-name="Path 185"
                                                                    d="M776.127,326.29l15.262,74.885,16.961,83.211a166.777,166.777,0,0,1-48.367-2.742A142.636,142.636,0,0,1,718.6,466.393c-12-6.81-22.037-15.2-29.412-24.72-7.284-9.406-11.944-19.888-13.346-31.017a55.893,55.893,0,0,1,5.132-31.234c4.529-9.578,11.671-18.336,20.844-25.864a114.461,114.461,0,0,1,32.746-18.382A152.807,152.807,0,0,1,776.127,326.29Z"
                                                                    transform="translate(38.482 39.683)"
                                                                    fill="url(#linear-gradient-6)" />
                                                                <path id="Path_186" data-name="Path 186"
                                                                    d="M677.487,379.422c4.529-9.578,11.671-18.336,20.844-25.864a114.461,114.461,0,0,1,32.746-18.382,152.811,152.811,0,0,1,41.557-8.887"
                                                                    transform="translate(41.974 39.683)" fill="none"
                                                                    stroke="#fff" stroke-miterlimit="10"
                                                                    stroke-width="0.25" opacity="0.37" />
                                                                <path id="Path_187" data-name="Path 187"
                                                                    d="M804.669,434.65q-1.821.121-3.637.2t-3.623.123q-1.809.044-3.61.048-2.115,0-4.218-.046t-4.191-.147q-2.086-.1-4.162-.252t-4.127-.351q-2.191-.213-4.36-.485t-4.315-.6q-2.143-.326-4.264-.7t-4.207-.812q-2.545-.527-5.041-1.131t-4.945-1.278q-2.448-.679-4.843-1.428t-4.735-1.57a132.074,132.074,0,0,1-24.784-11.585,102.656,102.656,0,0,1-19.727-15.345A76.225,76.225,0,0,1,682.3,381.022a60.062,60.062,0,0,1-6.488-20.383c-.048-.383-.091-.766-.131-1.15s-.078-.764-.11-1.147-.059-.761-.083-1.142-.046-.759-.062-1.136l1.442,33.26c.016.378.037.758.062,1.139s.051.761.083,1.144.067.764.107,1.147.083.766.131,1.152a61.078,61.078,0,0,0,6.375,20.4,76.189,76.189,0,0,0,13.311,18.274,100.826,100.826,0,0,0,19.325,15.334,128.12,128.12,0,0,0,24.267,11.569q2.287.82,4.634,1.568t4.741,1.423q2.4.675,4.843,1.276t4.931,1.126q2.046.43,4.122.809t4.173.7q2.1.326,4.223.595t4.267.482q2.014.2,4.041.348c1.353.1,2.709.182,4.073.249s2.731.115,4.1.145,2.747.046,4.127.043q1.765-.008,3.535-.051t3.548-.126q1.777-.08,3.559-.206t3.57-.284l1.3-33.217Q806.491,434.529,804.669,434.65Z"
                                                                    transform="translate(38.516 89.7)"
                                                                    fill="url(#linear-gradient-7)" />
                                                                <path id="Path_188" data-name="Path 188"
                                                                    d="M676.87,389.324l-1.442-33.26c.016.378.035.758.062,1.136s.051.761.083,1.144.07.761.11,1.144.083.766.131,1.15c1.4,11.13,6.062,21.611,13.346,31.017,7.375,9.522,17.411,17.91,29.412,24.719a142.636,142.636,0,0,0,41.378,15.251,166.779,166.779,0,0,0,48.367,2.742l-1.3,33.217a159.99,159.99,0,0,1-47.346-2.707,137.754,137.754,0,0,1-40.507-15.224c-11.754-6.8-21.587-15.184-28.814-24.706a64.38,64.38,0,0,1-13.1-31.044c-.048-.383-.091-.766-.131-1.15s-.075-.766-.107-1.147-.059-.764-.083-1.144S676.886,389.7,676.87,389.324Z"
                                                                    transform="translate(38.516 89.7)" fill="none" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Charts One -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mg-top-30">
                                            <div class="sherah-table__heading">
                                                <h3 class="sherah-heading__title mb-0">Product History</h3>
                                            </div>
                                            <div class="sherah-product-table sherah-table p-0">
                                                <!-- sherah Table -->
                                                <table id="sherah-table__main"
                                                    class="sherah-table__main sherah-table__main-v1">
                                                    <!-- sherah Table Head -->
                                                    <thead class="sherah-table__head">
                                                        <tr>
                                                            <th class="sherah-table__column-1 sherah-table__h1">List</th>
                                                            <th class="sherah-table__column-2 sherah-table__h2">Project
                                                                Name</th>
                                                            <th class="sherah-table__column-3 sherah-table__h3">Start Date
                                                            </th>
                                                            <th class="sherah-table__column-4 sherah-table__h4">End Date
                                                            </th>
                                                            <th class="sherah-table__column-5 sherah-table__h5">Status</th>
                                                            <th class="sherah-table__column-7 sherah-table__h7">Publish
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <!-- sherah Table Body -->
                                                    <tbody class="sherah-table__body">
                                                        <tr>
                                                            <td class="sherah-table__column-1 sherah-table__data-1">
                                                                <div class="sherah-table__product--id">
                                                                    <p class="crany-table__product--number"><a
                                                                            href="#">01</a></p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-2 sherah-table__data-2">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">Polka Dots Woman
                                                                        Dress</p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-3 sherah-table__data-3">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">11 / 03 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-4 sherah-table__data-4">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">20 / 03 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-5 sherah-table__data-5">
                                                                <div
                                                                    class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">
                                                                    Done</div>
                                                            </td>
                                                            <td class="sherah-table__column-7 sherah-table__data-7">
                                                                <p class="sherah-table__product-desc">2 hours ago</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sherah-table__column-1 sherah-table__data-1">
                                                                <div class="sherah-table__product--id">
                                                                    <p class="crany-table__product--number"><a
                                                                            href="#">02</a></p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-2 sherah-table__data-2">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">Sweater For Women
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-3 sherah-table__data-3">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">18 / 03 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-4 sherah-table__data-4">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">25 / 03 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-5 sherah-table__data-5">
                                                                <div
                                                                    class="sherah-table__status sherah-color3 sherah-color3__bg--opactity">
                                                                    Review</div>
                                                            </td>
                                                            <td class="sherah-table__column-7 sherah-table__data-7">
                                                                <p class="sherah-table__product-desc">Un publish</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sherah-table__column-1 sherah-table__data-1">
                                                                <div class="sherah-table__product--id">
                                                                    <p class="crany-table__product--number"><a
                                                                            href="#">03</a></p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-2 sherah-table__data-2">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">Convert for man
                                                                        shoe</p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-3 sherah-table__data-3">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">20 / 02 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-4 sherah-table__data-4">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">28 / 02 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-5 sherah-table__data-5">
                                                                <div
                                                                    class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">
                                                                    Done</div>
                                                            </td>
                                                            <td class="sherah-table__column-7 sherah-table__data-7">
                                                                <p class="sherah-table__product-desc">2 Days ago</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sherah-table__column-1 sherah-table__data-1">
                                                                <div class="sherah-table__product--id">
                                                                    <p class="crany-table__product--number"><a
                                                                            href="#">04</a></p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-2 sherah-table__data-2">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">Luxury T-shirt
                                                                        For men</p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-3 sherah-table__data-3">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">28 / 03 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-4 sherah-table__data-4">
                                                                <div class="sherah-table__product-content">
                                                                    <p class="sherah-table__product-desc">15 / 04 / 2022
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td class="sherah-table__column-5 sherah-table__data-5">
                                                                <div
                                                                    class="sherah-table__status sherah-color1 sherah-color1__bg--opactity">
                                                                    Coming Soon</div>
                                                            </td>
                                                            <td class="sherah-table__column-7 sherah-table__data-7">
                                                                <p class="sherah-table__product-desc">Un publish</p>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                    <!-- End sherah Table Body -->
                                                </table>
                                                <!-- End sherah Table -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End sherah Dashboard -->
@endsection
