<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบลงทะเบียนศิษย์เก่า</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/title-npru.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">

    <link rel="stylesheet" href="style.css">
</head>

<style>
   
</style>
<?php $this->load->view('header'); ?>

<body>



<br>

<div class="events page_section">
<div class="container">
<br><br>
  <div class="row">
    <div class="col">
      <div class="section_title text-center">
        <h1>กิจกรรมประชาสัมพันธ์</h1>
      </div>
    </div>
  </div>
  
  
<br><br><br>
 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

    <script>
        // $(document).ready(function() {
        //     $("#btnSearch").click(function() {
        //         $("#list-default").hide();
        //     });
        // });

        // $(function() {
        //     $("#btnSearch").click(function() {
        //         let u_std = $("#u_std").val();
        //         $.ajax({
        //             url: "<?php base_url() ?>index.php/Alumni/search",
        //             type: "post",
        //             data: {
        //                 u_std: u_std
        //             },
        //             beforeSend: function() {
        //                 $(".loading").show();
        //             },
        //             complete: function() {
        //                 $(".loading").hide();
        //             },
        //             success: function(response) {
        //                 // document.write(response)
        //                 // $("#list-data").html(response);
        //                 var len = response.length;
        //                 $('#suname,#sname,#semail').text('');
        //                 if (len > 0) {
        //                     // Read values
        //                     var uname = response[0].u_std;
        //                     var name = response[0].u_fname;
        //                     var email = response[0].u_email;

        //                     $('#suname').text(uname);
        //                     $('#sname').text(name);
        //                     $('#semail').text(email);

        //                 }
        //             }
        //         });
        //     });
        //     $("#searchform").on("keyup keypress", function(e) {
        //         var code = e.keycode || e.which;
        //         if (code == 13) {
        //             $("#btnSearch").click();
        //             return false;
        //         }
        //     });
        // });
        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>