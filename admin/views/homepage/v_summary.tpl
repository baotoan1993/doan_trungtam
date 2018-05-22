<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Số liệu tổng quan</strong></h2>
            </div>
            <div class="panel-body" id="main_content">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box blue-bg"> <i class="fa fa-cloud-download"></i>
                            <div class="count">6.674</div>
                            <div class="title">Download</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box brown-bg"> <i class="fa fa-shopping-cart"></i>
                            <div class="count">{number_format($tong_so_luong_san_pham_dat_hang)}</div>
                            <div class="title">Mua hàng</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg"> <i class="fa fa-thumbs-o-up"></i>
                            <div class="count">{number_format($tong_don_dat_hang)}</div>
                            <div class="title">Đặt hàng</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box green-bg"> <i class="fa fa-cubes"></i>
                            <div class="count">{number_format($tong_so_luong_san_pham)}</div>
                            <div class="title">Sản phẩm</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2><i class="fa fa-flag-o red"></i><strong>Biểu đồ thống kê</strong></h2>
        </div>
        <div class="panel-body" id="main_content">
            <header class="panel-heading"> Line </header>
            <div class="panel-body text-center">
            	<div class="col-lg-3"></div>
            	<div class="col-lg-6">
                	<canvas id="myChart" width="500vw" height="500vw"></canvas>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
</div>
<script>
	var day = []
	var data = []
	
	{foreach $thong_ke_theo_ngay as $thong_ke}
	day.push("ngay {$thong_ke->Day}")
	data.push({$thong_ke->Price})
	{/foreach}

	var ctx = document.getElementById("myChart").getContext('2d');
	var myLineChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: day,
			datasets: [{
				label: 'Doanh thu: ',
				data: data,	
				backgroundColor: 
					'rgb(51, 133, 255)'
				
			}]
		},
		options: {
			title: {
				text: "Thống kê doanh thu bán hàng theo ngày",
				display: true,
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
		}
	});

</script>