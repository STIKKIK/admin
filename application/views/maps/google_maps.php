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
                            <li><a href="#">Map</a></li>
                            <li class="active">Gmap</li>
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
                                <div class="card-header">
                                    <h4>Basic Map</h4>
                                </div>
                                <div class="gmap_unix card-body">
                                    <div class="map" id="basic-map"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Fusion Tables layers</h4>
                                </div>
                                <div class="card-body">
                                    <div id="map-2" class="map"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Geometry overlays</h4>
                                </div>
                                <div class="card-body">
                                    <div class="map" id="map-3"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Elevation locations</h4>
                                </div>
                                <div class="card-body">
                                    <div id="map-4" class="map"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Geolocation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="map" id="map-5"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>KML layers</h4>
                                </div>
                                <div class="card-body">
                                    <div id="map-6" class="map"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Layers</h4>
                                </div>
                                <div class="card-body">
                                    <div class="map" id="map-7"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Map events</h4>
                                </div>
                                <div class="card-body">
                                    <div class="map" id="map-8"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->




            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>

    <!-- Gmaps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/gmap/gmaps.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/lib/gmap/gmap.init.js') ?>"></script>

</body>
</html>