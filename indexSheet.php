          <?php
          session_start();
          include_once ("studentadd.php");
          $allData=new studentadd();
          $allStudent=$allData->setData($_GET)->viewStudent();
          ?>
          <?php include_once ('partials/header.php');?>
          <body>
          <div class="container" style="align-items: center>
         <div class="row">
          <div class="main-panel" >
            <div class="content-wrapper">
              <div class="card"">
              <div class="card-header"><h3>Add student marks</h3></div>
               <?php if ( isset( $_SESSION['massage'] ) ) { ?>
                        <div class="alert alert-success">
                            <strong> Success! </strong> <?php echo $_SESSION['massage']; ?>.
                        </div>
						<?php
						unset( $_SESSION['massage'] );
					} ?>
              <div class="card-body">
                <form action="result_store.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="exampleInputEmail1"><strong>Students Roll :</strong></label>
                        <select class="form-control" name="sroll">
                          <option value="">Usual select box</option>
                            <?php foreach ($allStudent as $key=>$value){?>
                              <option value="<?php echo $value['rollno'];?>"><?php echo $value['rollno'];?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputEmail1"><strong>Subject :</strong></label>
                        <select class="form-control" name="subject">
                          <option value="opt1">Usual select box</option>
                          <option value="Programming in java">Programming in java</option>
                          <option value="Sequential logic system">Sequential logic system</option>
                          <option value="Surveillance security system">Surveillance security system</option>
                          <option value="Accounting and theory">Accounting and theory</option>
                          <option value="Web development project">Web development project</option>
                          <option value="PCB calcite making">PCB calcite making</option>
                          <option value="Operating system">Operating system</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="exampleInputEmail1"><strong>Sub.Code :</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="code" placeholder="Enter title">
                      </div>
                      <div class="col-md-6">
                        <label for="exampleInputEmail1"><strong>Enter Marks :</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="mark" placeholder="Enter title">
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="exampleInputEmail1"><strong>T :</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="T" placeholder="Enter title">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputEmail1"><strong>P :</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="P" placeholder="Enter title">
                      </div>
                      <div class="col-md-4">
                        <label for="exampleInputEmail1"><strong>C :</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="C" placeholder="Enter title">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-outline-primary float-right">Add Result</button>
                </form>
              </div>
            </div>
          </div
          </body>
          </html>
		  <script>
					window.setTimeout(function() {
						$(".alert").fadeTo(3000, 0).slideUp(1000, function(){
							$(this).remove();
						});
					}, 2000);
			</script>