<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Universidad Tecnológica de Cancún</title>
    <link rel="shortcut icon" href="..\assets\img\ut_favicon.png"/>
    <link href="../../DashboardLayout/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../DashboardLayout/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../DashboardLayout/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="../../DashboardLayout/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../../DashboardLayout/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../../DashboardLayout/css/animate.css" rel="stylesheet">
    <link href="../../DashboardLayout/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                            </span>
                            <span class="clear"> <span class="block m-t-xs">
                                <strong class="font-bold">admin</strong>
                            </span>
                        </div>
                        <div class="logo-element">
                            UTC
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/home')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li >
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Alumnos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="{{route('students.index')}}">Listado</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Profesores</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="{{route('teachers.index')}}">Listado</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Clases</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="{{route('clases.ClaseCalculo')}}">Calculo integral</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li> -->
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();" >
                                    <i class="fa fa-sign-out"></i> Cerrar sesión
                                </a>
								
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                </nav>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content animated fadeInRight">
                                <div class="row">
                                    @yield('contenido')
                                </div>
                        </div>
                        <div class="footer">
                            <div>
                                <strong>Copyright</strong>UTC &copy; 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar">
                <div class="sidebar-container">

                    <ul class="nav nav-tabs navs-3">

                        <li class="active"><a data-toggle="tab" href="#tab-1">
                            Notes
                        </a></li>
                        <li><a data-toggle="tab" href="#tab-2">
                            Projects
                        </a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3">
                            <i class="fa fa-gear"></i>
                        </a></li>
                    </ul>

                    <div class="tab-content">


                        <div id="tab-1" class="tab-pane active">

                            <div class="sidebar-title">
                                <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                                <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                            </div>

                            <div>

                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">

                                            There are many variations of passages of Lorem Ipsum available.
                                            <br>
                                            <small class="text-muted">Today 4:21 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                        </div>
                                        <div class="media-body">
                                            The point of using Lorem Ipsum is that it has a more-or-less normal.
                                            <br>
                                            <small class="text-muted">Yesterday 2:45 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            <br>
                                            <small class="text-muted">Yesterday 1:10 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                        </div>

                                        <div class="media-body">
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            <br>
                                            <small class="text-muted">Monday 8:37 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a8.jpg">
                                        </div>
                                        <div class="media-body">

                                            All the Lorem Ipsum generators on the Internet tend to repeat.
                                            <br>
                                            <small class="text-muted">Today 4:21 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a7.jpg">
                                        </div>
                                        <div class="media-body">
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            <br>
                                            <small class="text-muted">Yesterday 2:45 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a3.jpg">

                                            <div class="m-t-xs">
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                            <br>
                                            <small class="text-muted">Yesterday 1:10 pm</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="sidebar-message">
                                    <a href="#">
                                        <div class="pull-left text-center">
                                            <img alt="image" class="img-circle message-avatar" src="img/a4.jpg">
                                        </div>
                                        <div class="media-body">
                                            Uncover many web sites still in their infancy. Various versions have.
                                            <br>
                                            <small class="text-muted">Monday 8:37 pm</small>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div id="tab-2" class="tab-pane">

                            <div class="sidebar-title">
                                <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                                <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                            </div>

                            <ul class="sidebar-list">
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Business valuation</h4>
                                        It is a long established fact that a reader will be distracted.

                                        <div class="small">Completion with: 22%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                        <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Contract with Company </h4>
                                        Many desktop publishing packages and web page editors.

                                        <div class="small">Completion with: 48%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Meeting</h4>
                                        By the readable content of a page when looking at its layout.

                                        <div class="small">Completion with: 14%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-primary pull-right">NEW</span>
                                        <h4>The generated</h4>
                                        <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                        There are many variations of passages of Lorem Ipsum available.
                                        <div class="small">Completion with: 22%</div>
                                        <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Business valuation</h4>
                                        It is a long established fact that a reader will be distracted.

                                        <div class="small">Completion with: 22%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                        <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Contract with Company </h4>
                                        Many desktop publishing packages and web page editors.

                                        <div class="small">Completion with: 48%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="small pull-right m-t-xs">9 hours ago</div>
                                        <h4>Meeting</h4>
                                        By the readable content of a page when looking at its layout.

                                        <div class="small">Completion with: 14%</div>
                                        <div class="progress progress-mini">
                                            <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-primary pull-right">NEW</span>
                                        <h4>The generated</h4>
                                        <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                                        There are many variations of passages of Lorem Ipsum available.
                                        <div class="small">Completion with: 22%</div>
                                        <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                                    </a>
                                </li>

                            </ul>

                        </div>

                        <div id="tab-3" class="tab-pane">

                            <div class="sidebar-title">
                                <h3><i class="fa fa-gears"></i> Settings</h3>
                                <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                            </div>

                            <div class="setings-item">
                        <span>
                            Show notifications
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                        <label class="onoffswitch-label" for="example">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Disable Chat
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                                        <label class="onoffswitch-label" for="example2">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Enable history
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                        <label class="onoffswitch-label" for="example3">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Show charts
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                        <label class="onoffswitch-label" for="example4">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Offline users
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                                        <label class="onoffswitch-label" for="example5">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Global search
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                                        <label class="onoffswitch-label" for="example6">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                        <span>
                            Update everyday
                        </span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                        <label class="onoffswitch-label" for="example7">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-content">
                                <h4>Settings</h4>
                                <div class="small">
                                    I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../../DashboardLayout/js/jquery-2.1.1.js"></script>
    <script src="../../DashboardLayout/js/bootstrap.min.js"></script>
    <script src="../../DashboardLayout/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../DashboardLayout/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../DashboardLayout/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="../../DashboardLayout/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Flot -->
    <script src="../../DashboardLayout/js/plugins/flot/jquery.flot.js"></script>
    <script src="../../DashboardLayout/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../DashboardLayout/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../../DashboardLayout/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../DashboardLayout/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="../../DashboardLayout/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../../DashboardLayout/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../DashboardLayout/js/inspinia.js"></script>
    <script src="../../DashboardLayout/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../../DashboardLayout/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../../DashboardLayout/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="../../DashboardLayout/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../../DashboardLayout/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../../DashboardLayout/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="../../DashboardLayout/js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            // setTimeout(function() {
            //     toastr.options = {
            //         closeButton: true,
            //         progressBar: true,
            //         showMethod: 'slideDown',
            //         timeOut: 4000
            //     };
            //     toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            // }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );

        });
        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
</body>
</html>
