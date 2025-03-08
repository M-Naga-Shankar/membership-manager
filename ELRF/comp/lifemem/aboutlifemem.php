<style>
    .fa-ul,.form-group {
  text-align: left !important;

}

</style>
<section id="intros" style="background: linear-gradient(135deg, #061058, #1a237e, #512da8);">
    <div class="intro-container wow fadeIn">

    <div class="container">

<div class="section-header " style="padding-top:100px; padding-top:100px;" >
  <h2 style="color:white;"> Life Membership</h2>
  <p style="color:white;">Eklayva Literacy Research Fundation.</p>
</div>
<?php
if($_GET['status']==1){
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Application submitted <strong>Successfully.</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php

}
?>
<?php
if($_GET['status']==2){
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error </strong>Something went Worng
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php

}
?>
<div class="row">
  <div class="col-12 col-lg-8">
    <div class="card mb-5 mb-lg-0">
      <div class="card-body">
        <h5 class="card-title text-muted text-uppercase text-center"><span style="font-weight: bold;">Life Membership </span></h5>
        <h6 class='text-center'>The applicants should submit the form by Clicking on Register Now</h6>
        <hr>
        <div class="text-start">
        <ul class="fa-ul">
          <li class="text-wrap" ><span class="fa-li"><i class="fa fa-check"></i></span><span >All membership holders will be given the electronic membership letter with photograph and members’ details will be added in our website.</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Members will have privilege in the services offered by ELRF.</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span><span style="font-weight: bold;">Registration fees </span>: 15% concession will be given to the Life members and 10 % concession to the Annual members on all programs organised by ELRF. (Conferences/Seminars/FDP's/Workshops etc)</li>
          <li ><span class="fa-li"><i class="fa fa-check"></i></span><span style="font-weight: bold;">Book publication:</span> Subsidized rates are applicable to members who publish ISBN books with ELRF.</li>
          <li ><span class="fa-li"><i class="fa fa-check"></i></span>Best literary awards will give to life Members<span style="font-weight: bold;"> (Annually)</span>.<span style="color:blue"> (Terms & Conditions apply)</span></li>
          <li ><span class="fa-li"><i class="fa fa-check"></i></span><span style="font-weight: bold;">Fellow Membership Fees</span>: Rs. 10,000. We will issue a certificate as a Fellow of ELRF. These details will be provided on the website.</li>
          
        </ul>
        <hr>
        <div class="text-center">
          <button type="button" style="background-color:#f82249; color:white;" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Register Now</button>
          
        </div>
</div>
       
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-4">
    <div class="card mb-5 mb-lg-0">
      <div class="card-body">
        <h5 class="card-title text-muted text-uppercase text-center"><span style="font-weight: bold;">Payment Details</span></h5>
    <h6 class="text-center"><s>&#8377;649</s> &nbsp; &#8377;399 <br><span id="offer">[ Offer upto 23-04-2025 ] </span> </h6>
   <hr>
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Bank Name: State Bank of India</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Branch: Piler</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>A/C No: 30279456665</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>IFSC Code: SBIN0001491</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>Account Type: Saving Account</li>
          <li><span class="fa-li"><i class="fa fa-check"></i></span>UPI ID: khanenglish999-1@oksbi</li>
    
    </ul>
    <center> <img src="img/payment/life.jpeg" style="height: 150px; width: 150px;" alt="no"></img></center>
             <hr>
             <div class="text-center">
          
       <a href="upi://pay?pa=khanenglish999-1@oksbi&pn=Dr.%20Basheer%20Khan%20Patan&am=399.00&cu=INR&aid=uGICAgIC56c7NIQ">  <button type="button" style="background-color:#f82249; color:white;" class="btn" >Pay Now</button></a>
     
      </div>
      </div>
    </div>
  </div>
</div>
<div style="height:40px;">
</div>


 <!-- Register Modal -->
 <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Life Membership Form</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                      <center>      <p class="text-center" style="color:black; font-size:15px;">Please complete the payment first.</p> </center>
                      <form method="POST" action="Admin/inlife.php" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-control" name="utr" placeholder="Enter Transaction UTR Number" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="designation" placeholder="Your Designation" required>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="affiliation" placeholder="Affiliation">

    </div>
    <div class="form-group">
        <label>Highest Qualification</label>
        <select name="hq" class="form-control" required>
            <option value="phd">Ph.D</option>
            <option value="pg">P.G</option>
            <option value="ug">U.G</option>
        </select>
    </div>
    <div class="form-group">
        <label>Upload Passport Size Photo</label>
        <input class="form-control" type="file" name="file">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>       
                        </div>
                    </div>
                </div>
            </div>

  </section>
  