<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Antrian Virtual Job Market Fair BLK Jember</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/" ?>style.css">
</head>
<body class="py-5">
<style>
body{
    background : #fff;
}
table td{
    font-weight : bold;
}
</style>
<div class="container" style="min-height:100vh">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="card mt-4">
                <article class="card-body py-0 px-0" style="background:#f2f2f2">
                <img src="<?= base_url()."assets/img/common/frame.png" ?>" width="100%" alt="" srcset="" style="transform:rotate(180deg);-moz-transform:rotate(180deg);-o-transform:rotate(180deg);-webkittransform:rotate(180deg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-6" width="50%">
                                <img src="<?php echo base_url()."assets/img/common/Logo-Jatim.png" ?>" class="img-fluid" alt="" srcset="">
                            </div>
                            <div class="col-6" width="50%">
                                <img src="<?php echo base_url()."assets/img/common/logo.png" ?>" class="img-fluid" alt="" srcset="">
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3 align-items-center">
                            <div class="col-2">
                                <img src="<?php echo base_url()."assets/img/qr_code/".$antrian->qr_code ?>.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-9">
                            <table cellpadding="5">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $antrian->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?= $antrian->email ?></td>
                                </tr>
                                <tr>
                                    <td>Perusahaan</td>
                                    <td>:</td>
                                    <td>
                                        <?php 
                                            $perusahaan = explode(',',$antrian->perusahaan);
                                            foreach ($perusahaan as $key => $value) {
                                                $get = $this->db->get_where('perusahaan',['id_perusahaan' => $value])->row();
                                                echo $get->nama.',';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col text-center ">
                                <h1 class="mt-3 font-weight-bold color-yellow">NO ANTRIAN ANDA ADALAH</h1>
                            </div>
                        </div>
                    </div>
                    <div class="bg-yellow p-3">
                        <div class="row">
                            <div class="col text-center">
                                <h1 class="color-white font-weight-bold text-center mb-0 nomor"><?= sprintf("%04s",$antrian->no_antrian) ?></h1>
                                <h6 class="color-white">SILAHKAN DATANG SESUAI JADWAL NOMOR ANTIAN ANDA
                                <br>
DI KANTOR BLK JEMBER, DENGAN MENUNJUKAN KE PETUGAS
                                <br>
POS SATPAM DAN LANGSUNG MENUJU HRD PERUSAHAAN MASING2</h6>

                            </div>             
                        </div>
                    </div>
                    <div class="row px-5 py-4">
                        <div class="col">
                        MOHON PERHATIAN:
<br>
- Antrian 1 - 100 datang menyerahkan berkas pukul 08.00 - 09.00 WIB
<br>
- Antrian 101 - 300 datang menyerahkan berkas pukul 09.00 - 10.00 WIB
<br>
- Antrian 301 - 600 datang menyerahkan berkas pukul 10.00 - 11.00 WIB
<br>
- Antrian 601 - 900 datang menyerahkan berkas pukul 11.00 - 12.00 WIB
<br>
- Antrian 901 - 1200 datang menyerahkan berkas pukul 12.00 - 13.00 WIB
<br>
- Antrian 1201 - Selesai datang menyerahkan berkas pukul 13.00 WIB - Sore                        
                        <center>
                        <h1 class="mt-3 font-weight-bold color-yellow d-inline-block px-3" style="border : 3px solid #cacaca;border-radius : 50px">SEMOGA SUKSES !!</h1>
                        </center>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-5 pr-0">
                        <div class="pl-3">
                            <b>UPT BALAI LATIHAN KERJA JEMBER</b>
                            <br>
                            <span>Jl. Basuki Rahmad 203 Jember</span>
                        </div>
                        </div>
                        <div class="col-7 pl-0">
                            <div class="px-3 py-1 color-white bg-green">
                                <span class="fab fa-whatsapp"></span> 085259097376 (Wa Only)
                                <br>
                                <span class="fab fa-instagram"></span> blkjember &nbsp;
                                <span class="fab fa-facebook"></span> UPT Balai Latihan Kerja
                            </div>
                        </div>
                    </div>
                    <img src="<?= base_url()."assets/img/common/frame.png" ?>" width="100%" alt="" srcset="">
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