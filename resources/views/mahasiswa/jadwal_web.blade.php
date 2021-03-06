<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JPP UNISKA</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="mahasiswa.php">JPP UNISKA</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Muhammad Rofik</div>
                                <div class="profile-data-title">15.63.0184</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" data-toggle="tooltip" title="Edit Data" data-placement="bottom" class="profile-control-left"><span class="fa fa-edit"></span></a>
                                <a href="#" data-toggle="tooltip" title="Detail" data-placement="bottom" class="profile-control-right"><span class="fa fa-list"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menu</li>
                    <li>
                        <a href="mahasiswa.php"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                                                           
                    <li class="active">
                        <a href="materi.php"><span class="fa fa-table"></span> <span class="xn-text">Materi</span></a>
                    </li>
					<li>
                        <a href="#"><span class="fa fa-th"></span> <span class="xn-text">Jadwal Saya</span></a>
                    </li>
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" data-toggle="tooltip" title="Navigation" data-placement="bottom" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" data-toggle="tooltip" title="Log Out" data-placement="left" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="mahasiswa.php">Home</a></li>
					<li><a href="materi.php">Materi</a></li>
					<li class="active"><a href="jadwal.php">Jadwal</a></li>
                </ul>
                <!-- END BREADCRUMB --> 
				
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h1> Praktikum Pemrograman WEB Reg Banjarbaru </h1>
					<button class="btn btn-danger btn-rounded"><i class="fa fa-arrow-circle-left"></i><a href="materi.php"> Kembali </a></button>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Praktikum Pemrograman Web Reg Banjarbaru</h3>                               
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
												<th>Nama Kelas</th>
												<th>Tanggal</th>
												<th>Jam</th>
												<th>Ruangan</th>
												<th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											  <td>1</td>
											  <td>Kelas A Sesi 1</td>
											  <td>DD/MM/YYYY</td>
											  <td>HH:MM</td>
											  <td>Lantai 1 Kelas A</td>
											  <td class="center"><button class="btn btn-success btn-rounded"><i class="fa fa-arrow-circle-o-up"></i> Ambil </button></td>
											</tr>
											<tr>
											  <td>2</td>
											  <td>Kelas A Sesi 2</td>
											  <td>DD/MM/YYYY</td>
											  <td>HH:MM</td>
											  <td>Lantai 1 Kelas A</td>
											  <td class="center"><button class="btn btn-success btn-rounded"><i class="fa fa-arrow-circle-o-up"></i> Ambil </button></td>
											</tr>
											<tr>
											  <td>3</td>
											  <td>Kelas B Sesi 1</td>
											  <td>DD/MM/YYYY</td>
											  <td>HH:MM</td>
											  <td>Lantai 1 Kelas B</td>
											  <td class="center"><button class="btn btn-success btn-rounded"><i class="fa fa-arrow-circle-o-up"></i> Ambil </button></td>
											</tr>
											<tr>
											  <td>4</td>
											  <td>Kelas B Sesi 2</td>
											  <td>DD/MM/YYYY</td>
											  <td>HH:MM</td>
											  <td>Lantai 1 Kelas B</td>
											  <td class="center"><button class="btn btn-success btn-rounded"><i class="fa fa-arrow-circle-o-up"></i> Ambil </button></td>
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-power-off"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Anda Yakin Ingin Keluar?</p>                    
                        <p>Tekan No Untuk Melanjutkan. Tekan Yes Untuk Keluar.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
    </body>
</html>






