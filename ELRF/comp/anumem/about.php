<style>
    .fa-ul, .form-group {
        text-align: left !important;
    }
</style>

<section id="intros" style="background: linear-gradient(135deg, #061058, #1a237e, #512da8);">
    <div class="intro-container wow fadeIn">
        <div class="container">
            <div class="section-header" style="padding-top:100px;">
                <h2 style="color:white;">Annual Membership</h2>
                <p style="color:white;">Eklayva Literacy Research Foundation.</p>
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
                <!-- Membership Benefits -->
                <div class="col-12 col-lg-8">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">
                                <span style="font-weight: bold;">Annual Membership</span>
                            </h5>
                            <h6 class="text-center">Applicants should submit the form by clicking on Register Now.</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Membership holders will receive an electronic membership letter with their photograph.</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Members will have privileges in services offered by ELRF.</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Registration fees:</b> 10% discount for Life Members on ELRF programs.</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Book publication:</b> Members receive subsidized rates for ISBN book publishing.</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Fellow Membership Fee:</b> Rs. 10,000 (includes a certificate and website listing).</li>
                            </ul>
                            <hr>
                            <div class="text-center">
                                <button type="button" class="btn m-2" style="background-color:#f82249; color:white;" data-toggle="modal" data-target="#buy-ticket-modal">Register Now</button>
                                <button type="button" class="btn m-2" style="background-color:#f82249; color:white;" data-toggle="modal" data-target="#renew">Renewal Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Details -->
                <div class="col-12 col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><b>Payment Details</b></h5>
                            <h6 class="text-center">
                                <s>&#8377;150</s> &nbsp; &#8377;99 <br>
                                <span id="offer">[ Offer valid until 23-04-2025 ]</span>
                            </h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Bank Name:</b> State Bank of India</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Branch:</b> Piler</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>A/C No:</b> 30279456665</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>IFSC Code:</b> SBIN0001491</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Account Type:</b> Saving Account</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span><b>UPI ID:</b> khanenglish999-1@oksbi</li>
                            </ul>
                            <center>   <img src="img/payment/anu.jpeg" style="height: 150px; width: 150px;" alt="Payment QR"> <center>     <hr>
                            <div class="text-center">
                              <a href="upi://pay?pa=khanenglish999-1@oksbi&pn=Dr.%20Basheer%20Khan%20Patan&am=99.00&cu=INR&aid=uGICAgIC56c7NIQ">
                                <button type="button" class="btn" style="background-color:#f82249; color:white;">Pay Now</button>
                                </a>
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
                            <h4 class="modal-title">Annual Membership Form</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <center>      <p class="text-center" style="color:black; font-size:15px;">Please complete the payment first.</p> </center>
                        <form method="POST" action="Admin/inanu.php" enctype="multipart/form-data">
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

            <!-- Renewal Modal -->
            <div id="renew" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Annual Membership Renewal</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p style="color:black; font-size:15px;">Please complete the payment first.</p>
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="renew-name" placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="renew-email" placeholder="Your Email">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Renew Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap Scripts -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
        </div>
    </div>
</section>
