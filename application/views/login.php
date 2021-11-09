<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Virtual Job Market Fair BLK Jember</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/" ?>style.css">
</head>
<body class="pb-5">
<div class="container" style="min-height:100vh">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">
        <center>
            <img class="mt-5" src="<?= base_url()."assets/img/common/logo.png" ?>" width="200px" alt="">
        </center>
            <div class="card mt-4">
                <article class="card-body">
                <?php if(!empty($this->session->flashdata('failed'))){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?= $this->session->flashdata('failed');?>
                    </div>
                    <?php }?>                
                <?php if(!empty($this->session->flashdata('success'))){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?= $this->session->flashdata('success');?>
                    </div>
                    <?php }?>                
                    <a href="daftar" class="float-right btn btn-outline-success">Daftar</a>
                    <h4 class="card-title mt-1">Login</h4>
                    <small class="color-green">Login untuk masuk dan melihat nomor antrian.</small>
                    <hr>
                    <form action='auth/login' method='post'>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" placeholder="Email" type="email" required>
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name='password' class="form-control" placeholder="******" type="password" required>
                        </div> <!-- form-group// --> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning btn-block"> Login  </button>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </article>
            </div>         
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>