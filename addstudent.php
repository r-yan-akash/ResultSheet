<?php include_once ('partials/header.php');?>
<body>
<div class="container" style="align-items: center>
  <div class="row">
    <div class="main-panel" >
      <div class="content-wrapper">
        <div class="card"">
          <div class="card-header"><h3>Add student info</h3></div>
          <div class="card-body">
            <form action="storeStudent.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="sname" placeholder="Enter title">
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1"><strong>Broad Roll</strong></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="sroll" placeholder="Enter title">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1"><strong>Registration</strong></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="sreg" placeholder="Enter title">
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1"><strong>Session</strong></label>
                    <select class="form-control" name="ssession">
                      <option value="">Select Session</option>
                      <option value="2008-2009">2008-2009</option>
                      <option value="2009-2010">2009-2010</option>
                      <option value="2016-2017">2016-2017</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-outline-primary float-right">Add Info</button>
            </form>
          </div>
        </div>
      </div>
</body>
</html>