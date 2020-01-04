<section class="content">

	<!-- Small boxes (Stat box) -->
    <div class="row"> <!-- Buat baris scr horizontal, agar satu baris -->

      <div class="col-lg-3 col-xs-6"> <!-- Buat kolom ;terbagi jadi 4 -->
        <!-- small box -->
        <div class="small-box bg-green"> <!-- box warna ijo -->
          <div class="inner">
            <center><h3> <i class="fa fa-users"></i> {1} </h3></center>

            <center><b> Pegawai </b></center>
          </div>
          <div class="icon">
            
          </div>
          <a href="gaji" class="small-box-footer">Info lengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
           <center><h3><i class="fa fa-envelope"></i> {1} </h3></center>

            <center><b> Biro </b></center>
          </div>
          <div class="icon">
            
          </div>
          <a href="pekerjaan" class="small-box-footer">Info lengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <center><h3><i class="fa fa-file"></i> {1} </h3></center>

              <center><b>Fakultas</b> </center>
          </div>
          <div class="icon">
            
          </div>
          <a href="pekerjaan" class="small-box-footer">Info lengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <center><h3><i class="fa fa-image"></i> {1} </h3></center> 

            <center> <b>Files</b> </center> 
          </div>
          <div class="icon">
            
          </div>
          <a href="#" class="small-box-footer">Info lengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <!-- ./col -->

    <!-- =================Statistics start ========================-->
    <script src="assets/js/Chart.bundle.js"></script>
    <div class="row"> <!-- 1 baris ada 2 kolom karena col-lg-6 -->
	    <div class="col-lg-6"> <!-- set dibagi menjadi 2 -->
	    	<div class="chartjs-size-monitor">
	    		<div class="chartjs-size-monitor-expand">
	    			<div class=""></div>
	    		</div>
	    		<div class="chartjs-size-monitor-shrink">
	    			<div class=""></div>
	    		</div>
	    	</div>
	        <canvas id="myChart2" width="717" height="358" class="chartjs-render-monitor" style="display: block; width: 717px; height: 358px;"></canvas>
	    </div>
	    <div class="col-lg-6">
	    	<div class="chartjs-size-monitor">
	    		<div class="chartjs-size-monitor-expand">
	    			<div class=""></div>
	    		</div>
	    		<div class="chartjs-size-monitor-shrink">
	    			<div class=""></div>
	    		</div>
	    	</div>
	        <canvas id="myChart" style="display: block; width: 717px; height: 358px;" width="717" height="358" class="chartjs-render-monitor"></canvas> <!-- id yang sangat berguna untuk mereferensikan -->
	    </div>
	</div>

	<div class="row myrow">
	    <div class="col-lg-6">
	      <h2 class="myh2">Holiday</h2>
	      <table class="table table-bordered table-striped">
	      	<thead>
	      		<tr>
	      			<th>SL</th>
	      			<th>Holiday Name</th>
	      			<th>Dated</th>
	      			<th>Description</th>
	      		</tr>
	      	</thead>
	      	<tbody>
	      		<tr>
	      			<td>1</td>
	      			<td>asoraa</td>
	      			<td>2019-09-25</td>
	      			<td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
	      		</tr>
	      	</tbody>
	      </table>
	    </div>
	    <div class="col-lg-6">
	      <h2 class="myh2-1">Notice</h2>
	       <table class="table table-bordered table-striped">
	       	<thead>
	       		<tr>
	       			<th>SL</th>
	       			<th>Title</th>
	       			<th>Description</th>
	       		</tr>
	       	</thead>
	       	<tbody>
	       		<tr>
	       			<td>1</td>
	       			<td>Office Party</td>
	       			<td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
	       		</tr>
	       		<tr>
	       			<td>2</td>
	       			<td>Office Holidays</td>
	       			<td>Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora</td>
	       		</tr>
	       	</tbody>
	       </table>
	    </div>
	</div>

	<script type="text/javascript">
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ['Employees', 'Notices', 'Holidays', 'Files'],
				datasets: [{
					label: 'Evaluation report by pie chart',
					data: [2, 2, 1 , 1 ],
					backgroundColor: [
						'#17B6A4',
						'#2184DA',
						'#c16275',
						'#3C454D',
					],
					borderColor: [
						'#c16275',
						'#2184DA',
						'#17B6A4',
						'#3C454D'
					],
					borderWidth: 0
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>

	<script type="text/javascript">
		var ctx = document.getElementById('myChart2');
		var myChart2 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Employees', 'Notices', 'Holidays', 'Files'],
				datasets: [{
					label: 'Evaluation Report By Bar Chart',
					data: [2, 2, 1 , 1 ],
					backgroundColor: [
						'#17B6A4',
						'#2184DA',
						'#c16275',
						'#3C454D',
						'#8A8F94'
					],
					borderColor: [
						'#c16275',
						'#2184DA',
						'#17B6A4',
						'#3C454D',
						'#8A8F94'
					],
					borderWidth: 0
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</div>

</section>