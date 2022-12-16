<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Template | Leave Request</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.9.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- Import jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"crossorigin="anonymous"></script>
  <style>
    .email-form{
      /* box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2); */
      border:solid;
      border-color: #e43c5c;
      border-radius: 10px;
    }

    .template{
      box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    }

    .butt{
      background-color:#e43c5c   ;
      color:whitesmoke;
    }
    .butt:hover{
      background-color:none   ;
      color:#900C3F;
      border-color: #900C3F;
    }

    .modal-dialog {
    
    padding:50px;
    max-width: 80%;
    
    }

    .purple-border textarea {
    /* border: 1px solid #ba68c8; */
    box-shadow: 10px 10px 22px -1px rgba(228,60,92,0.34);
    }

    textarea{
      height: 400px;
      
    }

    textarea::-webkit-scrollbar{
        /* display: none; */
    } 
    

    .textarea-form{
        height: 100px;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">Mailer</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
          <li><a class="nav-link scrollto " href="../index.php#portfolio">Templates</a></li>
          <li><a class="nav-link scrollto" href="../index.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="../index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li>Template  Details</li>
        </ol>
        <h2>Leave Request</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider ">
              <div class=" align-items-center">
                  <img src="assets/img/temp2.png" class="template" alt="">
              </div>
            </div>
          </div>

          <div class="col-lg-4 ">
            <div class="portfolio-info ">
              <h3>Fill the required data</h3>
              

              <input type="text" class="form-control" id="leave_type"  placeholder="Type of Leave">
              <br>
              <input type="text" class="form-control" id='your_name' placeholder="Your Name" >
              <br>
              <input type="text" class="form-control" id='employer_name' placeholder="Employer's Name" >
              <br>
              <input type="text" class="form-control" id='number_of_days' placeholder="Number of days or weeks">
              <br>
              <label>Start Date :</label>
              <input type="date" class="form-control" id='Start_date' placeholder="Start Date">
              <br>
              <label>End Date :</label>
              <input type="date" class="form-control" id='End_date' placeholder="End Date" >
              <br>
              <textarea type="text" class="form-control textarea-form" id='reason' placeholder="Provide reason/s"></textarea>
              <br>
              <input type="text" class="form-control" id='colleague' placeholder="Name of Colleague" >
              <br>
              <input type="text" class="form-control" id='full_name' placeholder="Your Full Name" >
              <br>
              <input type="text" class="form-control" id='phone' placeholder="Phone Number" >
              <br>
              <input type="email" class="form-control" id='email' placeholder="Email Id" >
              <br>
              
              <!-- Button to invoke the modal -->
              <button type="button" class="btn  butt"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                    id="submit">
                    Check Template
                  </button>              

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title model-head" id="exampleModalLongTitle"><button class="btn butt" id="CopyBtn"> <i class="bi bi-clipboard"> Copy</i> </button></h5>

                      <button type="button" class="btn butt" data-dismiss="modal" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span> -->
                        Close
                      </button>
                      
                    </div>

                    <div class="modal-body container purple-border " style="white-space:pre;">
                        <textarea class="form-control" id="modal_body" readonly ><h5 id="myInput"></h5></textarea>
                        
                    </div>
                   
                    <div class="modal-footer">
                      <button type="button" class="btn butt" onClick="Javascript: window.open('https://outlook.live.com/mail');">Redirect to Outlook</button>
                      <button type="button" class="btn butt" onClick="Javascript: window.open('https://mail.google.com/mail/u/0/#inbox?compose=new');" >Redirect to G-Mail</button>
                    </div>

                  </div>
                </div>
              </div>
            
            </div>
        </div>

      </div>
      
    </section><!-- End Portfolio Details Section -->
    
    
    <section>
      
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
      <?php

      include("footer.php");
      ?>
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script type="text/javascript">
            
    var str;     
    
    let model_body = document.getElementById("modal_body");
    let CopyBtn = document.getElementById("CopyBtn");

    CopyBtn.onclick = function(){
    model_body.select();
    document.execCommand("copy");
    CopyBtn.innerText = "Copied to Clipboard";
    }
    
    $("#submit").click(function () {
    
    var leave_type = $("#leave_type").val();
    var your_name = $("#your_name").val();
    var employer_name = $("#employer_name").val();
    var number_of_days = $("#number_of_days").val();
    var Start_date = $("#Start_date").val();
    var End_date = $("#End_date").val();
    var reason = $("#reason").val();
    var colleague = $("#colleague").val();
    var full_name = $("#full_name").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    

    str ="Subject : "+leave_type+" request - "+your_name+".\n"+
    "\nDear "+employer_name+" ,\n"+
    " \n"+
    "\nI would like to request "+number_of_days+" leave, days that start from "+Start_date+" and end on "+End_date+".\n"+
    "\nThis request is due to "+ reason +" .\n"+
    "\nLet me know if you need more information about this.\n"+
    "\nI just want to reassure you that I can finish my projects on time and can complete extra work before the \nleave date.\n"+
    "\nIf you need help with preparations for my departure, then I'll be happy to join you.\n"+
    "\n"+colleague+" said they will take on my responsibilities while I'm away and update me regularly with upcoming\nprojects.\n"+
    "\nI've also notified other team members of my absence.\n"+
    "\nI appreciate your time and consideration when reading this "+ leave_type +" request.\n"+
    "\nThank you so much in advance.\n\n"+
    "\nBest regards,\n"+
    "\n"+full_name+"\n"+
    "\n"+phone+"\n"+
    "\n"+email
    ;
    $("#modal_body").html(str);
    });
</script>
