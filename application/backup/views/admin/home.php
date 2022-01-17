<div class="row">
  
  
  <div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>5</h3>

        <h5>Faces Data Registered</h5>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="Dashboard/tabel_wajah" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>50</h3>

        <h5>Users Data Registered</h5>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="Dashboard/tabel_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  
  <!-- ./col -->
</div>


<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">Online Store Visitors</h3>
          <a href="javascript:void(0);">View Report</a>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex">
          <p class="d-flex flex-column">
            <span class="text-bold text-lg">820</span>
            <span>Visitors Over Time</span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
            <span class="text-success">
              <i class="fas fa-arrow-up"></i> 12.5%
            </span>
            <span class="text-muted">Since last week</span>
          </p>
        </div>
        <!-- /.d-flex -->

        <div class="position-relative mb-4">
          <canvas id="visitors-chart" height="200"></canvas>
        </div>

        <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
            <i class="fas fa-square text-primary"></i> This Week
          </span>

          <span>
            <i class="fas fa-square text-gray"></i> Last Week
          </span>
        </div>
      </div>
    </div>
    <!-- /.card -->

    <!-- Calender -->
    <div class="card bg-gradient-secondary">
      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

        <h3 class="card-title">
          <i class="far fa-calendar-alt"></i>
          Calendar
        </h3>
        <!-- tools card -->
        <div class="card-tools">
          <!-- button with a dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-bars"></i></button>
              <div class="dropdown-menu float-right" role="menu">
                <a href="#" class="dropdown-item">Add new event</a>
                <a href="#" class="dropdown-item">Clear events</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">View calendar</a>
              </div>
            </div>
            <button type="button" class="btn btn-outline-warning btn-sm" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-outline-danger btn-sm" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">November 2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="10/27/2019" class="day old weekend">27</td><td data-action="selectDay" data-day="10/28/2019" class="day old">28</td><td data-action="selectDay" data-day="10/29/2019" class="day old">29</td><td data-action="selectDay" data-day="10/30/2019" class="day old">30</td><td data-action="selectDay" data-day="10/31/2019" class="day old">31</td><td data-action="selectDay" data-day="11/01/2019" class="day">1</td><td data-action="selectDay" data-day="11/02/2019" class="day weekend">2</td></tr><tr><td data-action="selectDay" data-day="11/03/2019" class="day weekend">3</td><td data-action="selectDay" data-day="11/04/2019" class="day active today">4</td><td data-action="selectDay" data-day="11/05/2019" class="day">5</td><td data-action="selectDay" data-day="11/06/2019" class="day">6</td><td data-action="selectDay" data-day="11/07/2019" class="day">7</td><td data-action="selectDay" data-day="11/08/2019" class="day">8</td><td data-action="selectDay" data-day="11/09/2019" class="day weekend">9</td></tr><tr><td data-action="selectDay" data-day="11/10/2019" class="day weekend">10</td><td data-action="selectDay" data-day="11/11/2019" class="day">11</td><td data-action="selectDay" data-day="11/12/2019" class="day">12</td><td data-action="selectDay" data-day="11/13/2019" class="day">13</td><td data-action="selectDay" data-day="11/14/2019" class="day">14</td><td data-action="selectDay" data-day="11/15/2019" class="day">15</td><td data-action="selectDay" data-day="11/16/2019" class="day weekend">16</td></tr><tr><td data-action="selectDay" data-day="11/17/2019" class="day weekend">17</td><td data-action="selectDay" data-day="11/18/2019" class="day">18</td><td data-action="selectDay" data-day="11/19/2019" class="day">19</td><td data-action="selectDay" data-day="11/20/2019" class="day">20</td><td data-action="selectDay" data-day="11/21/2019" class="day">21</td><td data-action="selectDay" data-day="11/22/2019" class="day">22</td><td data-action="selectDay" data-day="11/23/2019" class="day weekend">23</td></tr><tr><td data-action="selectDay" data-day="11/24/2019" class="day weekend">24</td><td data-action="selectDay" data-day="11/25/2019" class="day">25</td><td data-action="selectDay" data-day="11/26/2019" class="day">26</td><td data-action="selectDay" data-day="11/27/2019" class="day">27</td><td data-action="selectDay" data-day="11/28/2019" class="day">28</td><td data-action="selectDay" data-day="11/29/2019" class="day">29</td><td data-action="selectDay" data-day="11/30/2019" class="day weekend">30</td></tr><tr><td data-action="selectDay" data-day="12/01/2019" class="day new weekend">1</td><td data-action="selectDay" data-day="12/02/2019" class="day new">2</td><td data-action="selectDay" data-day="12/03/2019" class="day new">3</td><td data-action="selectDay" data-day="12/04/2019" class="day new">4</td><td data-action="selectDay" data-day="12/05/2019" class="day new">5</td><td data-action="selectDay" data-day="12/06/2019" class="day new">6</td><td data-action="selectDay" data-day="12/07/2019" class="day new weekend">7</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month active">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2010-2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2009</span><span data-action="selectYear" class="year">2010</span><span data-action="selectYear" class="year">2011</span><span data-action="selectYear" class="year">2012</span><span data-action="selectYear" class="year">2013</span><span data-action="selectYear" class="year">2014</span><span data-action="selectYear" class="year">2015</span><span data-action="selectYear" class="year">2016</span><span data-action="selectYear" class="year">2017</span><span data-action="selectYear" class="year">2018</span><span data-action="selectYear" class="year active">2019</span><span data-action="selectYear" class="year old">2020</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- End Calender -->

      
      <!-- /.card -->
    </div>
    <!-- /.col-md-6 -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Sales</h3>
            <a href="javascript:void(0);">View Report</a>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex">
            <p class="d-flex flex-column">
              <span class="text-bold text-lg">$18,230.00</span>
              <span>Sales Over Time</span>
            </p>
            <p class="ml-auto d-flex flex-column text-right">
              <span class="text-success">
                <i class="fas fa-arrow-up"></i> 33.1%
              </span>
              <span class="text-muted">Since last month</span>
            </p>
          </div>
          <!-- /.d-flex -->

          <div class="position-relative mb-4">
            <canvas id="sales-chart" height="200"></canvas>
          </div>

          <div class="d-flex flex-row justify-content-end">
            <span class="mr-2">
              <i class="fas fa-square text-primary"></i> This year
            </span>

            <span>
              <i class="fas fa-square text-gray"></i> Last year
            </span>
          </div>
        </div>
      </div>
      <!-- /.card -->

      

    </div>
    <!-- /.col-md-6 -->
  </div>