<?php

include('conn.php');

// for maintainece mode
$sql1 ="select * from onoff where id=11";
$result1 = mysqli_query($conn, $sql1);
$userDetails1 = mysqli_fetch_assoc($result1);

// for ftext and status
$sql2 ="select * from _ftext where id=1";
$result2 = mysqli_query($conn, $sql2);
$userDetails2 = mysqli_fetch_assoc($result2);
?>

<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-12">
        <?= $this->include('Layout/msgStatus') ?>
    </div>
    
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
<main>
<div class="container p-3 py-4 mb-3" id="content">

<style>

        .hacks {
          position: relative;
          display: inline-block;
          width: 100%;
          height: 20px;
          float: left;
          margin: 5%;
        }
        .switch {
          position: relative;
          display: inline-block;
          width: 40px;
          height: 20px;
          float: right-end;
          align-items: flex-end;
          margin: 5px 5px 5px 5px;
        }
        
        /* Hide default HTML checkbox */
        .switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        /* The slider */
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #36454F;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 12px;
          width: 12px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        input:checked + .slider {
          background-color: #000000;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #FFFFFF;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(20px);
          -ms-transform: translateX(20px);
          transform: translateX(20px);
        }
        
        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }
        
        .slider.round:before {
          border-radius: 50%;
        }
        #centerpoint {
            top: 50%;
            left: 50%;
            position: absolute;
        }

        #dialog {
            position: relative;
            width: 600px;
            margin-left: -300px;
            height: 400px;
            margin-top: -200px;
        }
    </style>
<div class="row">
<div class="col-lg-12">
</div>
<div class="col-lg-6">
<div class="card mb-3">
<?= form_open() ?>
<div class="card-header p3 bg-dark text-center text-white">
Server On/Off
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7"> <input type="hidden" name="Online_form" value="1">
<div class="form-group mb-3">
<label for="status">Current Status : <font color="#a39c9b">On</font></label>
<label for="Online" class="hacks"> SERVER
<div class="switch">
<input type="checkbox" name="Online" id="Online" value="on" checked="checked">
<span class="slider round">
</span></div>
</label>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
 </div></form>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
Offline Massage Change
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Maintenance_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Maintenance" id="Maintenance" class="form-control mt-2" placeholder="" aria-describedby="help-Maintenance" value="Enter Your Offline Massage ">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
Mod Name Change
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="MODNAME_32_form" value="1">
<div class="form-group mb-3">
<input type="text" name="MODNAME_32" id="MODNAME_32" class="form-control mt-2" placeholder="" aria-describedby="help-MODNAME_32" value="Enter Your ModName">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
Mod Status Change
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="MODSTATUS_32_form" value="1">
<div class="form-group mb-3">
<input type="text" name="MODSTATUS_32" id="MODSTATUS_32" class="form-control mt-2" placeholder="" aria-describedby="help-MODSTATUS_32" value="Safe">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
Floting Text Change
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="FLOTINGTEST_32_form" value="1">
<div class="form-group mb-3">
<input type="text" name="FLOTINGTEST_32" id="FLOTINGTEST_32" class="form-control mt-2" placeholder="" aria-describedby="help-FLOTINGTEST_32" value="Enter Your Floting Text ">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
2 HOUR KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Hrs2_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Hrs2" id="Hrs2" class="form-control mt-2" placeholder="" aria-describedby="help-Hrs2" value="10">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
6 HOUR KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Hrs6_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Hrs6" id="Hrs6" class="form-control mt-2" placeholder="" aria-describedby="help-Hrs6" value="30">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
1 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days1_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days1" id="Days1" class="form-control mt-2" placeholder="" aria-describedby="help-Days1" value="100">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
3 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days3_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days3" id="Days3" class="form-control mt-2" placeholder="" aria-describedby="help-Days3" value="250">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
7 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days7_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days7" id="Days7" class="form-control mt-2" placeholder="" aria-describedby="help-Days7" value="450">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
15 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days15_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days15" id="Days15" class="form-control mt-2" placeholder="" aria-describedby="help-Days15" value="800">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
30 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days30_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days30" id="Days30" class="form-control mt-2" placeholder="" aria-describedby="help-Days30" value="1200">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
60 DAY KEY PRICE EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7">
<input type="hidden" name="Days60_form" value="1">
<div class="form-group mb-3">
<input type="text" name="Days60" id="Days60" class="form-control mt-2" placeholder="" aria-describedby="help-Days60" value="2000">
</div>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
</form> </div>
</div>
</div>
<div class="col-lg-6">
<div class="card mb-3">
<div class="card-header p3 bg-dark text-center text-white">
KEY CURRENCY EDIT
</div>
<div class="card-body">
<form action="https://free.attack.software/public/keys_sitting" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="1d2671bc0662887c19a9321feaa81fd7"> <input type="hidden" name="Currency_form" value="1">
<div class="form-group mb-3">
<label for="status">Current Status : <font color="#a39c9b">$</font></label>
<label for="Currency" class="hacks"> SERVER
<div class="switch">
<input type="checkbox" name="Currency" id="Currency" value="on" checked="checked">
<span class="slider round">
</span></div>
</label>
<div class="form-group my-2">
<button type="submit" class="btn btn-outline-dark">Update Account</button>
</div>
 </div></form>
<?= form_close() ?>
</div>
</div>
</div>

</div>
</div></div>
</main>

<?= $this->endSection() ?>