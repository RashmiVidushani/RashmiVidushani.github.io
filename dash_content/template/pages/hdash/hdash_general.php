
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include("../hdash/hheader.php");
    $username=["username"];
    ?>

  </head>
    <body>
    
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                
                <h3 class="page-title"> Hospital General details </h3>
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
                     
                        <h4 class="card-title">Hospital Profile</h4>
                        <form class="forms-sample" method ="post">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="col-sm-3 col-form-label">Registration number</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" id="re_no" />
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="email"/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="mobile" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="username" <?php echo $DB_ROW["username"]; ?>/>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="form-group">
                                <label>Upload Registration image</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Your SLMC Image here">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                  </span>
                                </div>
                              </div> 
                               
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary mr-2" onclick="updatehos_data()">Update</button>
                                    <button class="btn btn-dark" onclick="gethos_data()">Refresh</button>
                                    <button class="btn btn-dark">Cancel</button>
                                   
                                  </div>
                                </div>
                              </div>
                             
                          </div>
                              </form>

                          <br>
                          <br>
                          
                      </div>
                    </div>
                  </div>
              </div>
            </div>
           <?php
           include ("../hdash/hfooter.php");?>
  </body>
</html>