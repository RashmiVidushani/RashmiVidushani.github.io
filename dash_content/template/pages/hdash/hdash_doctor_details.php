<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
    include("../hdash/hheader.php")
    ?>
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
          DOCTOR CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
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
        "name": "doctorlist",
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
            "name": "doc_id",
            "type": "int256"
          }
        ],
        "name": "retreive_doc",
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
            "name": "doc_id",
            "type": "int256"
          },
          {
            "internalType": "string",
            "name": "SLMC_no",
            "type": "string"
          },
          {
            "internalType": "string",
            "name": "Name",
            "type": "string"
          },
          {
            "internalType": "string",
            "name": "Specialization",
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
        "name": "store_doc",
        "outputs": [],
        "stateMutability": "nonpayable",
        "type": "function"
      }
    ];
    
    
            
            var contractaddress = '0x6408ed18368ce1925a646BF51b4f397D9B5D61A8';
            /*need more working on*/
            function adddoc() {
                var myContract = new web3.eth.Contract(abi,contractaddress, {from: account,  gas: 1500000, gasPrice: '30000000000'});
                var id = document.getElementById("did").value;
                var SLMC = document.getElementById("slmc").value;
                var dname = document.getElementById("name").value;
                var dspec = document.getElementById("spec").value;
                var demail = document.getElementById("email").value;
                var dphone = document.getElementById("phone").value;
                var daddress = document.getElementById("address").value;
               
               
                 var result = myContract.methods.store_doc(id,SLMC,dname,dspec,demail,dphone,daddress).send(function (err, result) {
                   
                    if (err) {
                      console.log("error");
                       console.log(err); }
                  
                    });
            }
            /*need more working on*/
    
        function getDoc() {
                var myContract = new web3.eth.Contract(abi,contractaddress, {from: account, gas: 1500000, gasPrice: '30000000000'});
                var idd = document.getElementById("get_slmc").value;
                 var result = myContract.methods.retreive_doc(idd).call(function (err, result) {
                   
                    if (err) { console.log(err); }
                    if (result) { 
                        document.getElementById("get_name").innerHTML = result[0];
                        document.getElementById("get_spec").innerHTML = result[1];
                        document.getElementById("get_email").innerHTML = result[2];
                        document.getElementById("get_phone").innerHTML = result[3];
                        document.getElementById("get_address").innerHTML = result[4];
                    }
                   
                    });
            }
    
    
        </script>
    
      <!--
              DOCTOR CONTRACT CONNECTION FOR ADDING AN RETRIEVING DATA!
            -->

    
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
                     
                      <form>
                        <h4 class="card-title">Show Doctor Details</h4>
                        <div class="row">
                          <tr>
                            <td>Enter Doctor ID:</td>
                           <td><input type="text" id="get_slmc" name="get_slmc"></td> 
                           <td> <input type="button" class="btn btn-primary mr-2" onclick="getDoc()" value="show details"></td>
                          </tr>
                         
                        </div>
                        <br>
                        <table style="width:50%">
                          
                          <tr>
                          <td>Doctor Name:</td> 
                          <td><div id="get_name"></div></td>
                          </tr>
                          
                          <tr>
                          <td>Doctor Specification:</td>
                          <td><div id="get_spec"></div></td>
                          </tr>

                          <tr>
                            <td>Doctor Email:</td>
                            <td><div id="get_email"></div></td>
                          </tr>

                          <tr>
                          <td>Doctor Phone Number:</td>
                          <td><div id="get_phone"></div></td>
                          </tr>

                          <tr>
                          <td>Doctor Address:</td>
                          <td><div id="get_address"></div></td>
                          </tr>

                        </table>
                        </form>
                      </div>
                    </div>
                  </div>
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Enter Doctor Details</h4>
                        <form>
                          <table style="width:50%">
                            <tr>
                              <td>Enter Doctor Id:</td>
                              <td><input type="text" id="did" name="did"></td>
                              </tr>
                            <tr>
                            <td>Enter SLMC:</td>
                            <td><input type="text" id="slmc" name="slmc"></td>
                            </tr>

                            <tr>
                            <td> Doctor Name:</td>
                            <td><input type="text" id="name" name="name"></td>
                            <td><div id="name"></div></td>
                            </tr>
                            
                            <tr>
                            <td>Doctor Specification:</td>
                            <td><input type="text" id="spec" name="spec"></td>
                            </tr>
                            <tr>
                              <td>Doctor Email:</td>
                              <td><input type="text" id="email" name="email"></td>
                              </tr>
                            <tr>
                            <td>Doctor Phone Number:</td>
                            <td><input type="text" id="phone" name="phone"></td>
                            </tr>
                            <tr>
                            <td>Doctor Address:</td>
                            <td><input type="text" id="address" name="address"></td>
                            </tr>
                            <div class="row">
                              <tr>
                                <tr><td><input type="button"  class="btn btn-primary mr-2"onclick="adddoc()" value="Enter Details"></td></tr>
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
        DOCTOR FORM FOR ADDING AN RETRIEVING DATA!
      -->


      <?php
           include ("../hdash/hfooter.php");?>   
  </body>
</html>