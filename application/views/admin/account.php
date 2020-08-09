<body style="margin-left: auto!important;">
  <div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
      <div class="container">
        <a class="navbar-brand" href="#">AD Setting Demo<br></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group">
          <button type="button" class="btn btn-secondary rounded" data-toggle="dropdown" >
            <?php echo $this->session->userdata('username'); ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button">Profile</button>
            <button class="dropdown-item" type="button"><a href="<?php echo base_url() ?>User_controller/logout">Logout</a></button>
          </div>
        </div>
      </div>
    </nav>
  </div><div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="0">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
        <div class="carousel-item col-md-3 active">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 1">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 2">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 3">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 4">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 5">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 6">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 7">
        </div>
        <div class="carousel-item col-md-3">
          <img class="img-fluid mx-auto d-block" src="http://placehold.it/250x250" alt="slide 7">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg text-muted"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg text-muted"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div id="wrapper">
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"> <a href="#">Home </a></li>
        <li> <a href="<?php base_url() ?>account">Account </a></li>
        <li> <a href="<?php base_url() ?>campaign">Campaign </a></li>
        <li> <a href="<?php base_url() ?>advertiser">Line item list </a></li>
      </ul>
    </div>
    <div class="page-content-wrapper" style="margin-left: 120px;padding: 20px;">
      <div class="container-fluid">
        <form action="" method="post">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputStatus">Status</label>
              <select name="status" id="inputState" class="form-control" style="width: 60%">
                <option selected></option>
                <option>Active</option>
                <option>Disable</option>
                <option></option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <select name="searchiInput" class="form-control search" style="width: auto;border:0px; background-color: #fafafa" id="myselect">
                <option selected>Free search</option>
                <option >ID</option>
                <option >Company Name</option>
                <option >Account Name</option>
              </select>
              <input type="text" class="form-control" id="inputSearch" onkeyup="myFunction()" style="width: auto">
            </div>
            <div class="col-4 d-flex align-items-center">
              <button class="btn btn-primary " type="button" style="width: 106px;">Search</button>
            </div>
          </div>
        </form>
      </div>
      <div class="container-fluid">
        <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
          <table class="table table-hover myTable" id="myTable">
            <caption>List of users</caption>
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Company Name</th>
                <th scope="col">Account Name</th>
                <th scope="col">Mail Address</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Approvel Date</th>
                <th scope="col">Number of Advertisers</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data_controller as $key => $value): ?>
                <tr>
                  <th scope="row" id="id" ><?php echo $value['id'] ?></th>
                  <td><?php echo $value['company_name'] ?></td>
                  <td><?php echo $value['user_name'] ?></td>
                  <td><?php echo $value['mail'] ?></td>
                  <td><?php echo $value['role_name'] ?></td>
                  <td><?php echo $value['status'] ?></td>
                  <td><?php echo $value['approval_date'] ?></td>
                  <td><?php echo $value['num_of_ad'] ?></td>
                  <td>
                    <small>
                      <a class="btn" href="<?php echo base_url() ?>Admin_Controller/active/<?php echo $value['id'] ?>" id="active">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/></svg>
                     </a>
                   </small>

                   <small>
                     <a class="btn" href="<?php echo base_url() ?>Admin_Controller/delete/<?php echo $value['id'] ?>" id="delete"  onclick="deleteRow(this)" type="submit" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                      </a>
                    </small>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    // function deleteRow(r) {
    //   var i = r.parentNode.parentNode.rowIndex;
    //   document.getElementById("myTable").deleteRow(i);
    // }


    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      var mySelect = $('#myselect').find(":selected").text();
      input = document.getElementById("inputSearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {

         // Hide the row initially.
         tr[i].style.display = "none";

         td = tr[i].getElementsByTagName("td");
         for (var j = 0; j < td.length; j++) {
          cell = tr[i].getElementsByTagName("td")[j];
          if (cell) {
            if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              break;
            } 
          }
        }      
      }
    }
  </script>
</body>
