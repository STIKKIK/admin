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
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Sweet Alert</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Sweet Alert Normal</strong>
                        </div>
                        <div class="card-body">
                            <div class="col-md-2">
                                <label class="form-control-label">Type</label>
                                <select id="type-normal" class="custom-select">
                                <option value="success">success</option>
                                    <option value="warning">warning</option>
                                    <option value="error">error</option>
                                    <option value="info" selected>info</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-primary" id='click'>Click Me</button>
                        </div>
                    </div><!-- /# card -->       
                </div> <!-- .12 -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Sweet Alert Custom</strong>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <label class="form-control-label">Title</label>
                                <input type="text" id="title" value="Title" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="form-control-label">Message</label>
                                <input type="text" id="Message" value="Message" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-control-label">Type</label>
                                <select id="type-custom" class="custom-select">
                                    <option value="success">success</option>
                                    <option value="warning">warning</option>
                                    <option value="error">error</option>
                                    <option value="info" selected>info</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-primary" id="butsimple">Simple alert</button>
                            <button type="button" class="btn btn-outline-warning" id="butalert">Alert with title</button>
                            <button type="button" class="btn btn-outline-success" id="buttime">With timer</button>
                            <button type="button" class="btn btn-outline-danger" id="butmessage">Message box with Type</button>
                            <button type="button" class="btn btn-outline-secondary" id="butimage">Show image</button>
                        </div>
                        
                    </div><!-- /# card -->       
                </div> <!-- .12 -->

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- Right Panel -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js') ?>"></script>
    

    <script type="text/javascript">
        $(document).ready(function(){

            $("#click").click(function(){
                var type = $("#type-normal").val();
                swal({
                    title: "Title",
                    text: "Your message",
                    type: type,
                    icon: type
                });
            });


            // Message
            $("#butsimple").click(function(){
                var message = $("#message").val();
                if(message == ""){
                message  = message;
                }
                swal(message);
            });

            // With message and title
            $("#butalert").click(function(){
                var message = $("#message").val();
                var title = $("#title").val();
                if(message == ""){
                message  = "Your message";
                }
                if(title == ""){
                title = "Your title";
                }
                swal(title,message);
            });

            // Timer
            $("#buttime").click(function(){
                var title = $("#title").val();
                message += "(close after 2 seconds)";
                swal({
                    title: title,
                    text: message,
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        
            // type
            $("#butmessage").click(function(){
                var message = $("#message").val();
                var title = $("#title").val();
                if(message == ""){
                    message  = "Your message";
                }
                if(title == ""){
                    title = "Your message";
                }

                var type = $("#type-custom").val();
                swal({
                    title: title,
                    text: message,
                    type: type,
                    icon: type
                });
            });

            // Show image
            $("#butimage").click(function(){
                var message = $("#message").val();
                alert(message);
                var title = $("#title").val();
                if(message == ""){
                    message  = "Your message";
                }
                if(title == ""){
                    title = "Your message";
                }
                swal({
                    title: title,
                    text: message,
                    imageUrl: "<?php echo base_url('images/image-sweet.png') ?>"
                });
            });
        });
    </script>

</body>
</html>
