<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Charts</a></li>
                            <li class="active">Float Chart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Real Chart</h4>
                                    <div class="flot-container">
                                        <div id="cpu-load" class="cpu-load"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Line Chart</h4>
                                    <div class="flot-container">
                                        <div id="flot-line" class="flot-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div><!-- /# row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Pie Chart</h4>
                                    <div class="flot-container">
                                        <div id="flot-pie" class="flot-pie-container"></div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Line Chart</h4>
                                    <div class="flot-container">
                                        <div id="chart1" style="width:100%;height:275px;"></div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Bar Chart</h4>
                                    <div class="flot-container">
                                        <div id="flotBar" style="width:100%;height:275px;"></div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Bar Chart</h4>
                                    <div class="flot-container">
                                        <div id="flotCurve" style="width:100%;height:275px;"></div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->



            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <!--  flot-chart js -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/excanvas.min..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.pie..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.time..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.stack..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.resize..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.crosshair..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/curvedLines..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min..js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/flot-chart/flot-chart-init..js') ?>"></script>

</body>
</html>
