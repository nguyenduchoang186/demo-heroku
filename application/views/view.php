<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Danh sach nhan vien</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jquery upload -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">          
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous">         
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload.js"></script>

    
</script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
          <a class="navbar-brand" href="#">My App</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item ">
                      <a class="nav-link" href="<?=base_url() ?>index.php/nhansu_controller">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
    <div class="container">
        <div class="text-xs-center">
            <h2 class="display-3">Danh sach nhan su</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
              
                <?php foreach ($dulieucontroller as $key => $value) { ?>
                <div class="col-sm-4">
                  <div class="card"> <!-- start card-->
                    <img class="card-img-top" src="<?php echo $value['avatar'] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $value['ten'] ?></h4>
                        <p class="card-text">Tuoi : <span class="badge badge-info"><?php echo $value['tuoi'] ?></span></p>
                        <p class="card-text">SDT  : <?php echo $value['sdt'] ?></p>
                        <p class="card-text">So don hang  : <?php echo $value['sodonhang'] ?></p>
                        <p class="card-text"><small><a href="<?php echo $value['linkfb'] ?>" class="btn btn-primary">FaceBook <i class="fa fa-chevron-down" aria-hidden="true"></i></a></small></p>
                        <p class="card-text">
                          <small><a href="<?= base_url()?>index.php/nhansu_controller/nhansu_edit_controller/<?php echo $value['id'] ?>" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></a></small>
                          <small><a href="<?= base_url()?>index.php/nhansu_controller/nhansu_delete_controller/<?php echo $value['id'] ?>" class="btn btn-danger">Delete <i class="fa fa-remove"></i></a></small>
                        </p>
                    </div>
                  </div>
                </div > <!-- end card-->
                <?php } ?>
               
            <!-- end cardcolums-->
        </div>
    </div>
    <div class="container">
        <div class="text-xs-center">
            <h2 class="display-3">Them moi nhan su</h2>
        </div>
    </div>
    <div class="container">
        <!-- <form action="index.php/nhansu_controller/nhansu_add_controller" class="col-sm-6" method="post" enctype="multipart/form-data"> -->
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="files[]" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Ho va ten</label>
                <input type="text" name="ten" id="ten" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Tuoi</label>
                <input type="number" name="tuoi" id="tuoi" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">SDT</label>
                <input type="text" name="sdt" id="sdt" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">LinkFB</label>
                <input type="text" name="linkfb" id="linkfb" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">So don hang da hoan thanh</label>
                <input type="number" name="sodonhang" id="sodonhang" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="button" class="btn btn-primary nutxuly">Submit(ajax)</button>
            <button type="reset" class="btn btn-primary">Clear</button>
        <!-- </form> -->
    </div>
    
    <script>
      duongdan = '<?php echo base_url() ?>';
      $('#avatar').fileupload({
        dataType:'json',
        url: duongdan + 'index.php/nhansu_controller/uploadfile/',
        
        done: function(e, data){
          $.each(data.result.files, function(index, file){
            filename = file.url;
          });
        }
      })

      $('.nutxuly').click(function(event) {
       $.ajax({
         url: 'nhansu_controller/ajax_add',
         type: 'POST',
         dataType: 'json',
         data: {
          ten: $('#ten').val(),
          tuoi: $('#tuoi').val(),
          avatar: filename,
          sdt: $('#sdt').val(),
          linkfb: $('#linkfb').val(),
          sodonhang: $('#sodonhang').val()
        },
       })
       .done(function() {
         console.log("success");
        
         

       })
       .fail(function() {
         console.log("error");
       })
       .always(function() {
         console.log("complete");
         noidung ='<div class="col-sm-4">';
         noidung+='<div class="card">';
         noidung+='<img class="card-img-top" src="'+filename+'" alt="">';
         noidung+='<div class="card-body">';
         noidung+='<h4 class="card-title"> '+ $('#ten').val() + '</h4>';
         noidung+='<p class="card-text">Tuoi : <span class="badge badge-info">'+$('#tuoi').val()+'</span></p>';
         noidung+='<p class="card-text">SDT  : '+$('#sdt').val()+'</p>';
         noidung+='<p class="card-text">So don hang  : '+$('#sodonhang').val()+'</p>';
         noidung+='<p class="card-text"><small><a href="'+$('#sodonhang').val()+'" class="btn btn-primary">FaceBook <i class="fa fa-chevron-down" aria-hidden="true"></i></a></small></p>';
         noidung+='<p class="card-text">';
         noidung+='<small><a href="<?= base_url()?>index.php/nhansu_controller/nhansu_edit_controller/<?php echo $value['id'] ?>" class="btn btn-warning">Edit <i class="fa fa-pencil"></i></a></small>';
         noidung+='<small><a href="<?= base_url()?>index.php/nhansu_controller/nhansu_delete_controller/<?php echo $value['id'] ?>" class="btn btn-danger">Delete <i class="fa fa-remove"></i></a></small>';
         noidung+='</p>';
         noidung+='</div>';
         noidung+='</div >';
         noidung+='</div >';
      
        //them noi dung bang ham append

         $('.row').append(noidung);
         $('#ten').val(''),
         $('#tuoi').val(''),
         $('#sdt').val(''),
         $('#linkfb').val(''),
         $('#sodonhang').val('')
       });
       
      });
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>