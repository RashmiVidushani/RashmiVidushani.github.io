<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

 <!--
          CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
        -->
        <script src="https://cdn.jsdelivr.net/npm/web3@1.2.8/dist/web3.js"></script>
        <!--
              CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
            -->

  </head>
  <body>
    <!--
          Patient CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
        -->
        <script>
          var account;
      window.addEventListener('load', async () => {
    
      
        if (typeof window.ethereum !== 'undefined') { 
          console.log("MetaMask is Available :) !"); 
          }
          
        // Modern DApp browsers
        if (window.ethereum) {
          window.web3 = new Web3(ethereum);
          
          // To prevent the page reloading when the MetaMask network changes
          ethereum.autoRefreshOnNetworkChange = false;
          
          // To Capture the account details from MetaMask
          const accounts = await ethereum.enable();
          account = accounts[0];
            
          }
        // Legacy DApp browsers
        else if (window.web3) {
          //window.web3 = new Web3(web3.currentProvider);
          window.web3 = new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/v3/cbd9dc11b30147e9a2cc974be655ef7c")); 
          }
        // Non-DApp browsers
        else {
          console.log('Non-Ethereum browser detected. Please install MetaMask');
          }
          
          });
          
            var abi =[
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "Patientlist",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "int256",
				"name": "patient_id",
				"type": "int256"
			}
		],
		"name": "retreive_pat",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "int256",
				"name": "patient_id",
				"type": "int256"
			},
			{
				"internalType": "string",
				"name": "NIC",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Email",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Phone_no",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "Address",
				"type": "string"
			}
		],
		"name": "store_pat",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	}
];
    
    
            
            var contractaddress = '0x62a3Eb829C16D882Ffdb8fAd9ec288A4285A2169';
            /*need more working on*/
            function addpat() {
                var myContract = new web3.eth.Contract(abi,contractaddress, {from: account,  gas: 1500000, gasPrice: '30000000000'});
                var id = document.getElementById("pid").value;
                var nic = document.getElementById("nic").value;
                var dname = document.getElementById("pname").value;
                var demail = document.getElementById("pemail").value;
                var dphone = document.getElementById("pphone").value;
                var daddress = document.getElementById("paddress").value;
               
               
                 var result = myContract.methods.store_pat(id,nic,dname,demail,dphone,daddress).send(function (err, result) {
                   
                    if (err) {
                      console.log("error");
                       console.log(err); }
                  
                    });
            }
            /*need more working on*/
    
        function getpat() {
                var myContract = new web3.eth.Contract(abi,contractaddress, {from: account, gas: 1500000, gasPrice: '30000000000'});
                var idd = document.getElementById("get_nic").value;
                 var result = myContract.methods.retreive_pat(idd).call(function (err, result) {
                   
                    if (err) { console.log(err); }
                    if (result) { 
                        document.getElementById("get_pname").innerHTML = result[0];
                        document.getElementById("get_pemail").innerHTML = result[1];
                        document.getElementById("get_pphone").innerHTML = result[2];
                        document.getElementById("get_paddress").innerHTML = result[3];
                    }
                   
                    });
            }
    
    
        </script>
    
      <!--
              Patient CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
            -->
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">
            <h5 class="mb-0 font-weight-normal">Dashboard</h5>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_stat.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Statistical Data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_general.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">General data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_patient_details.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Patient details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_patientrecords.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Patient records</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="/logout.php">  Log out</a>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:../../partials/_navbar.html -->
          <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                  <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="/logout.php">  Log out</a>
                    </a>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title"> Patient General details </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                       
                        <form>
                          <h4 class="card-title">Show Patient Details</h4>
                          <div class="row">
                            <tr>
                              <td>Enter Patient NIC:</td>
                             <td><input type="text" id="get_nic" name="get_nic"></td> 
                             <td> <input type="button" class="btn btn-primary mr-2" onclick="getpat()" value="show details"></td>
                            </tr>
                           
                          </div>
                          <br>
                          <table style="width:50%">
                            
                            <tr>
                            <td>Patient Name:</td> 
                            <td><div id="get_pname"></div></td>
                            </tr>
  
                            <tr>
                              <td>Patient Email:</td>
                              <td><div id="get_pemail"></div></td>
                            </tr>
  
                            <tr>
                            <td>Patient Phone Number:</td>
                            <td><div id="get_pphone"></div></td>
                            </tr>
  
                            <tr>
                            <td>Patient Address:</td>
                            <td><div id="get_paddress"></div></td>
                            </tr>
  
                          </table>
                          </form>
                        </div>
                      </div>
                    </div>
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Enter Patient Details</h4>
                          <form>
                            <table style="width:50%">
                              <tr>
                                <td>Enter Patient Id:</td>
                                <td><input type="text" id="pid" name="pid"></td>
                                </tr>
                              <tr>
                              <td>Enter nic:</td>
                              <td><input type="text" id="nic" name="nic"></td>
                              </tr>
  
                              <tr>
                              <td> Patient Name:</td>
                              <td><input type="text" id="pname" name="pname"></td>
                              <td><div id="name"></div></td>
                              </tr>
                             
                                <td>Patient Email:</td>
                                <td><input type="text" id="pemail" name="pemail"></td>
                                </tr>
                              <tr>
                              <td>Patient Phone Number:</td>
                              <td><input type="text" id="pphone" name="pphone"></td>
                              </tr>
                              <tr>
                              <td>Patient Address:</td>
                              <td><input type="text" id="paddress" name="paddress"></td>
                              </tr>
                              <div class="row">
                                <tr>
                                  <tr><td><input type="button"  class="btn btn-primary mr-2"onclick="addpat()" value="Enter Details"></td></tr>
                              </tr>
                              </div>
                             
                            </table>
                                </form>
                                
                              </div>
                            </div>
                          </div>
                           </div>
            </div>
        <!--
          Patient FORM FOR ADDING AN RETRIEVING DATA!
        -->
  
  
           
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
  
              </div>
          <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/chart.js"></script>
    <!-- End custom js for this page -->
    <script src="/logout.php"></script>
  </body>
</html>