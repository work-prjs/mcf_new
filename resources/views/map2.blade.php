@extends('layouts.lte1')

@section('content')


    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Доска
        <small>Версия 0.1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/lte1/#"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Карта</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">


        <div class="col-md-12 connectedSortable">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Карта задач</h3>
              <span>Скачать -> <a target="_blank" href="/map.html_files/map.mm">map.mm</a></span>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/lte1/#">Action</a></li>
                    <li><a href="/lte1/#">Another action</a></li>
                    <li><a href="/lte1/#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="/lte1/#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  
                   <iframe src="/mix-mind/index.html" width="100%" height="600" align="left">
                      
                   </iframe>

                </div>
                <!-- /.col -->


                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>



        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">


          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient collapsed-box">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Календарь</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Новое событие</a></li>
                    <li><a href="#">Очистить</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Просмотр календаря</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->


          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient collapsed-box collapsed-box">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Задачи</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">


              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Дизайн</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Show</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>



            </div>
            <!-- /.box-body -->

            {{-- no-border --}}
            <div class="box-footer ">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-tools pull-left">
                    <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Добавить</button>
                  </div>

                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>

              

              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->


        </section>
        <section class="col-lg-6 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Посетители
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Гости</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Онлайн</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Авторезиваны</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->


          <!-- solid sales graph -->
          <div class="box box-solid collapsed-box">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Почта</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">

              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email кому:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Тема">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Текст..."
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>

            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Отправить
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->




        </section>
        <!-- right col -->
 



      </div>
      <!-- /.row (main row) -->


    </section>
    <!-- /.content -->
    <script>
      $(function () {
        // $('#example1').DataTable()
        // $('#example2').DataTable({
        //   'paging'      : true,
        //   'lengthChange': false,
        //   'searching'   : false,
        //   'ordering'    : true,
        //   'info'        : true,
        //   'autoWidth'   : false
        // })
      })
    </script>

@endsection
