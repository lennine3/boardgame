@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block">
    <!--market updates updates-->
    <div class="market-updates">
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-8 market-update-left">
                    <h3>{{ $staffCount }}</h3>
                    <h4>Employees</h4>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-file-text-o"> </i>
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-8 market-update-left">
                    <h3>{{ $customerCount }}</h3>
                    <h4>Members</h4>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fad fa-users"></i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-8 market-update-left">
                    @php
                    $incomeYear=0;
                    foreach ($invoiceYearCount as $item)
                    $incomeYear+=$item->total_price
                    @endphp
                    <h3>{{ $incomeYear }} $</h3>
                    <h4>Earnings (Year)</h4>
                </div>
                <div class="col-md-4 market-update-right">
                    <i class="fad fa-dollar-sign"></i>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--market updates end here-->
    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    Recent Followers
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project</th>
                                <th>Manager</th>

                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Face book</td>
                                <td>Malorum</td>

                                <td><span class="label label-danger">in progress</span></td>
                                <td><span class="badge badge-info">50%</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Twitter</td>
                                <td>Evan</td>

                                <td><span class="label label-success">completed</span></td>
                                <td><span class="badge badge-success">100%</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Google</td>
                                <td>John</td>

                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-warning">75%</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>LinkedIn</td>
                                <td>Danial</td>

                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-info">65%</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Tumblr</td>
                                <td>David</td>

                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-danger">95%</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tesla</td>
                                <td>Mickey</td>

                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-success">95%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--main page chit chating end here-->
    <div class="main-page-charts">
        <div class="main-page-chart-layer1">
            <div class="col-md-6 chart-layer1-left">
                <div class="glocy-chart">
                    <div class="span-2c">
                        <h3 class="tlt">Sales Analytics</h3>
                        <canvas id="myChart" class="chart-style"></canvas>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--main page chart start here-->
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Monthly Earn',
                data: {!!json_encode($datas) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
