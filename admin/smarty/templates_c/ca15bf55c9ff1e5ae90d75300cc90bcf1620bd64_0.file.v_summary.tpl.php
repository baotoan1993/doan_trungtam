<?php
/* Smarty version 3.1.30, created on 2018-05-22 22:53:13
  from "C:\wamp64\www\doan_trungtam\admin\views\homepage\v_summary.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b043ce9edf931_42842660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca15bf55c9ff1e5ae90d75300cc90bcf1620bd64' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\admin\\views\\homepage\\v_summary.tpl',
      1 => 1526981534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b043ce9edf931_42842660 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                            <div class="count"><?php echo number_format($_smarty_tpl->tpl_vars['tong_so_luong_san_pham_dat_hang']->value);?>
</div>
                            <div class="title">Mua hàng</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg"> <i class="fa fa-thumbs-o-up"></i>
                            <div class="count"><?php echo number_format($_smarty_tpl->tpl_vars['tong_don_dat_hang']->value);?>
</div>
                            <div class="title">Đặt hàng</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box green-bg"> <i class="fa fa-cubes"></i>
                            <div class="count"><?php echo number_format($_smarty_tpl->tpl_vars['tong_so_luong_san_pham']->value);?>
</div>
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
                <div class="panel-body text-center">
                    <div class="col-lg-11">
                        <canvas id="myChartDay" width="800" height="450"></canvas>
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
                <div class="panel-body text-center">
                    <div class="col-lg-11">
                        <canvas id="myChartMonth" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
Thong_ke_theo_ngay()
Thong_ke_theo_thang()

function Thong_ke_theo_ngay(){
	var day = []
	var data = []
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thong_ke_theo_ngay']->value, 'thong_ke');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_ke']->value) {
?>
	day.push("Ngày <?php echo $_smarty_tpl->tpl_vars['thong_ke']->value->Day;?>
")
	data.push(<?php echo $_smarty_tpl->tpl_vars['thong_ke']->value->Price;?>
)
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
	var ctx = document.getElementById("myChartDay").getContext('2d');
	var now = new Date()
	
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
				text: "Thống kê theo ngày (tháng " + (now.getMonth()+ 1) + ")",
				display: true,
			},
			axisY:{
              valueFormatString: "#,###,#", //try properties here
            },
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true,
						callback: function(value) {
                        	return value.toLocaleString('vi-VN') + ' đ'
                    	}
					}
				}]
			},
			
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';
	
						if (label) {
							label += ' ';
						}
						label += tooltipItem.yLabel.toLocaleString('vi-VN') + 'đ'
						return label;
					}
				}
			}
		}
	});
}

function Thong_ke_theo_thang(){
	var day = []
	var data = []
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thong_ke_theo_thang']->value, 'thong_ke');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_ke']->value) {
?>
	day.push("Tháng <?php echo $_smarty_tpl->tpl_vars['thong_ke']->value->Month;?>
")
	data.push(<?php echo $_smarty_tpl->tpl_vars['thong_ke']->value->Price;?>
)
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
	var ctx = document.getElementById("myChartMonth").getContext('2d');
	var now = new Date()
	
	var myLineChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: day,
			datasets: [{
				label: 'Doanh thu: ',
				data: data,	
				borderColor: 
					'rgb(0, 191, 255)'
				
			}]
		},
		options: {
			title: {
				text: "Thống kê theo tháng (năm " + (now.getYear() + 1900) + ")",
				display: true,
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true,
						callback: function(value) {
                        	return value.toLocaleString('vi-VN') + ' đ'
                    	}
					}
				}]
			},
			
			tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';
	
						if (label) {
							label += ' ';
						}
						label += tooltipItem.yLabel.toLocaleString('vi-VN') + 'đ'
						return label;
					}
				}
			}
		}
	});
}

<?php echo '</script'; ?>
><?php }
}
