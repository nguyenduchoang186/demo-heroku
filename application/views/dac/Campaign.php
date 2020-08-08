

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
          <button type="button" class="btn btn-secondary rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <li> <a href="#">Account </a></li>
        <li> <a class="active" href="#">Campaign </a></li>
        <li> <a href="#">Line item list </a></li>
      </ul>
    </div>
    <div class="page-content-wrapper" style="margin-left: 120px;padding: 20px;">
      <div class="container-fluid">
        <form>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control" ">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputState">Start Date</label>
              <input type="Date" class="form-control" id ="inputDate" >
            </div>
            <div class="form-group col-md-2">
              <label for="inputState">End Date</label>
              <input type="Date" class="form-control" id ="inputDate" >
            </div>
            <div class="form-group col-md-3">
              <select name="searchiInput" class="form-control" style="border:0px; background-color: #fafafa">
                <option selected>Free search</option>
              </select>
              <input type="text" class="form-control" id="inputSearch" >
            </div>
            <div class="col-2 d-flex align-items-center">
              <button class="btn btn-primary " type="button" style="width: 106px;">Search</button>
            </div>
          </div>
        </form>
      </div>
      <div class="container-fluid">
        <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
          <table class="table table-hover">
            <caption>List of users</caption>
            <thead class="thead-dark|thead-light">
              <tr>
                <th scope="col">Campaign Name</th>
                <th scope="col-1"><i class="fas fa-info-circle"></i></th>
                <th scope="col">Overall Budget</th>
                <th scope="col">Curently used budget</th>
                <th scope="col">Curently used rate</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
