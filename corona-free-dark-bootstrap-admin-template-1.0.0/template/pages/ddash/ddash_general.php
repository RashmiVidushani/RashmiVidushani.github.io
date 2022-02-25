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
    <script src="https://cdn.jsdelivr.net/npm/web3@1.2.8/dist/web3.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Wallet Number</h5>
                  <span>Designation</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_stat.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Statistical Data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_general.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">General data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_patient_details.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Patient details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../ddash/ddash_patientrecords.html">
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
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title"> Doctor General details </h3>
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
                        <h4 class="card-title">Doctor Profile</h4>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                      <select class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                      <input class="form-control" placeholder="dd/mm/yyyy" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                        
                          <br>
                          <br>
                          <h4 class="card-title">Account settings</h4>
                          <form class="forms-sample">
                            <div class="form-group row">
                              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="doc_uname" placeholder="Username">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                              <div class="col-sm-9">
                                <input type="email" class="form-control" id="doc_email" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="doc_mobile" placeholder="Mobile number">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                              <div class="col-sm-9">
                                <input type="password" class="form-control" id="doc_pword" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                              <div class="col-sm-9">
                                <input type="password" class="form-control" id="doc_cpword" placeholder="Password">
                              </div>
                            </div>
                          
                          <div class="form-group">
                            <label>Upload SLMC image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Your SLMC Image here">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>  <div class="form-group">
                            <label>Upload NIC image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Your NIC Image here">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>  <div class="form-group">
                            <label>Upload Passport image</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Your Passport Image here">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary mr-2">Save</button>
                          <button class="btn btn-dark">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>


<script>
  var account;
  window.addEventListener('load',async()=>{

    if(typeof window.ethereum!=='undefined'){
      console.log("Metamask Available");
    }
    if(window.ethereum){
      window.web3=new Web3(ethereum);
      ethereum.autoRefreshOnNetworkChange=false;
      const accounts=await ethereum.enable();
      account=accounts[0];
    }
    else if(window.web3){
      window.web3=new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/v3/cbd9dc11b30147e9a2cc974be655ef7c"));
    }
  });
  var abi=[
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"inputs": [
			{
				"internalType": "uint16",
				"name": "doctor_id",
				"type": "uint16"
			}
		],
		"name": "retreive_doctor_details",
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
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
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
				"internalType": "uint16",
				"name": "doctor_id",
				"type": "uint16"
			},
			{
				"internalType": "string",
				"name": "_doctor_name",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_doctor_email",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "_doctor_mobile",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "_doctor_password",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "_doctor_cpassword",
				"type": "string"
			}
		],
		"name": "store_doctor_details",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	}
]
var contractaddress='0xf4e2667733aA71d07621af798d9621159A61f9Ec';
function add_data(){
  var myContract=new web3.eth.Contract(abi,contractaddress,{from: account, gasPrice:'5000000',gas:'500000'});
  var doc1=document.getElementById("doc_uname").value;
  var doc2=document.getElementById("doc_email").value;
  var doc3=document.getElementById("doc_mobile").value;
  var doc4=document.getElementById("doc_pword").value;
  var doc5=document.getElementById("doc_cpword").value;
var result=myContract.methods.store_doc_details(doc1,doc2,doc3,doc4,doc5).send(function(err,result){
  if(err){console.log(err);}
});
}
function show_data(){
  var myContract=new web3.eth.Contract(abi,contractaddress,{from:account,gasPrice:'5000000', gas:'500000'});
  var idd=document.getElementById("did").value;
  var result=myContract.methods.retreive_doctor_details(idd).call(function(err,result){
    if(err){console.log(err);}
    if(result){
      document.getElementById("get_doc_name").innerHTML=result[0];
      document.getElementById("get_doc_email").innerHTML=result[1];
      document.getElementById("get_doc_mobile").innerHTML=result[2];
      document.getElementById("get_doc_pword").innerHTML=result[3];
      document.getElementById("get_doc_cpword").innerHTML=result[4];
    }
  })
}
</script>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
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