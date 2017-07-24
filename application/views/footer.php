                    </div>
                </div>
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- load footer dari halaman -->
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/";?>js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/";?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/";?>js/extras.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(function() {
        $(".tanggal-keluar").datepicker();
    });
    </script>

</body>

</html>
