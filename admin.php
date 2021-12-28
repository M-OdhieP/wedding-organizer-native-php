<?php
session_start();
 include("lib/koneksi.php");
 include("lib/fungsi_tglindonesia.php"); 
 define("INDEX",true);
 if($_SESSION['id']=='')
{
	echo "<meta http-equiv='refresh'
	content='0; url=konten/noakses.php'>";
}
?>
<!DOCTYPE html>

<html>
	<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<script src="plugin/validate/jquery.validate.js"></script>
	
	<script>
       $(document).ready(function(){
           $("#odhie").validate();
        });
	</script>


<style type="text/css">
       label.error {
           color: red; padding-left: .5em;
       }            
</style>



</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
			 <img src="images/logo.png" width="200px" height="200px" style="display: block; margin: auto;">
                <h3>Odhie Wedding Organizer</h3>
            </div>

            <ul class="list-unstyled components">
                

                <li>
                    <a class="nav-link" href="?tampil=homepage">Homepage</a>

                </li>
				<li>
                    <a class="nav-link" href="?tampil=userpage">Userpage</a>

                </li>
                <li>
                   
					
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Acara</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                      
                        <li>
                            <a href="?tampil=event">Daftar Acara</a>
                        </li>

                        <li>
                            <a href="?tampil=tamu">Data Tamu</a>
                        </li>
                        <li>
                            <a href="?tampil=tamuhadir">Tamu Hadir</a>
                        </li>						
					
                    </ul>
					
                </li>

                        <li>
                            <a href="?tampil=gambar">Gambar</a>
                        </li>



                <li>
                    <a href="./scanner">Scan QRcode</a>
                </li>
                <li>
                    <a onclick="return confirm('apakah anda yakin ingin keluar ?')" href="logoutadmin.php">Logout</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

       
                </div>
            </nav>
            
          

<?php include("konten.php"); ?>	








		  
			
</div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

	<div class="card-footer bg-primary text-white">
		<center><h5>Copyright &copy; Odhie-2020</h5></center>
	</div>
	
</body>

</html>





