<!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Attendance Statement</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <!-- Notification Box -->
        <div class="col-md-12">
                  </div>
        <!-- /.Notification Box -->
        <div class="col-md-12">


          <form class="form-horizontal" action="http://localhost/amazing-hrm-payroll/hrm/attendance/details/report/all" method="get">

            <input type="hidden" name="_token" value="YPsEYDuCOIGn2Ks1309XDo8khM0w6t3uH3HTmgRZ">



            <div class="form-group">
              <label for="user_id" class="col-sm-3 control-label">Employee Name </label>
              <div class="col-sm-3">
                <select name="emp_id" id="user_id" class="form-control">
                  <option value="0">Select One</option>
                                    <option value="13"><strong>Biplob</option>
                                      <option value="11"><strong>Wali</option>
                                      </select>
                                  </div>
              </div>


               <!-- /.end group -->
              <div class="form-group">
                <label for="salary_month" class="col-sm-3 control-label">Select Month</label>
                <div class="col-sm-3">

                    <input type="text" name="daterange" class="form-control" id="reservation">

                </div>
              </div>

             
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right"></i> View Attendence Statement</button>
                </div>
              </div>
              <!-- /.end group -->
            </form>
            <!-- /. end form -->
          </div>
          <!-- /. end col -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix"></div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->