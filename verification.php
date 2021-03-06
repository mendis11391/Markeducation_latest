<?php include_once 'common/config.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Mark Education Acadamy</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  </head>
  <body style="background: url(./assets/img/bg_1.jpg); background-size:cover;">
    <div class="content verifyDiv">
      <div class="content">
        <div class="container" style="width: 30%;">
          <div class="card" style="margin-top: 25vh;">
            <div class="content">
              <div class="form-group has-feedback">
                <img src="assets/img/logo.png" class="img-responsive" style="margin: 0 auto;"/>
                <img src="assets/img/loading.gif" width="70" class="loader" style="position: fixed; top: 40%; left: 65%; z-index: 1; margin-left: -250px; display:none;"/>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label">Certificate Number</label>
                <input type="text" class="form-control certificateNumberForVerification" placeholder="Certificate Number">
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <a class="btn btn-info btn-block" href="javascript:;" id="verifyStudent">Verify</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="verificationResult">
            <div class="col-md-12 p-5 certiBorder modalResultErrorDiv">
              <div class="col-md-12"><a class="pull-right closeBtn" href="javascript:;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#000;">×</button></a></div>
              <div class="col-md-12">
                <div class="col-md-12">
                  <img src="assets/img/logo.png" class="img-responsive markLogo" width="200" style="margin-top: 0px;">
                  <img src="assets/img/iso.png" class="img-responsive pull-right isoLogo" width="100" style="margin-top: -78px;">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12 textCenter" style="margin: 60px 0;">
                  <span class="col-sm-12 alert alert-danger">Certificate Number does not exist</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 p-5 modalResultDiv">
              <div class="certiBorder col-md-12">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-12 p-l-0">
                    <div class="row">
                      <a class="pull-right closeBtn" href="javascript:;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#000;">×</button></a>
                    </div>
                    <div class="col-md-12">
                      <img src="assets/img/logo.png" class="img-responsive markLogo" width="200" style="margin-top: 0px;">
                      <img src="assets/img/iso.png" class="img-responsive pull-right isoLogo" width="100" style="margin-top: -78px;">
                    </div>
                    <div class="col-md-12 textCenter p-t-30 xs-p-t-40">
                      <img src="" class="img-responsive profilePhoto" width="150" style="margin: 0 auto;">
                      <h3 class="dispStudentName"></h3>
                      <p class="ifGradeIsNotOther">has successfully completed <b><span class="dispCourse"></span></b></p>
                      <p class="ifGradeIsOther">has successfully participated in <b><span class="dispCourse"></span></b></p>
                      <p>from <b>Mark Education Acadamy</b></p>
                    </div>
                  </div>
                  <table style="width:100%;" class="studentDetailTable">
                    <tr class="hideIfOther">
                      <td>Grade</td>
                      <td>: <span class="dispGrade"></span></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Certificate Number</td>
                      <td>: <span class="dispCertificateNum"></span></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Certificate Date</td>
                      <td>: <span class="dispCertificateIssueDate"></span></td>
                      <td class="pull-right instituteName"><b>Mark Education Academy</b></td>
                    </tr>
                  </table>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>


            <!-- Coordinator -->
            <div class="col-md-12 p-5 modalCoordinatorResultDiv">
              <div class="certiBorder col-md-12">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-12 p-l-0">
                    <div class="row">
                      <a class="pull-right closeBtn" href="javascript:;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="color:#000;">×</button></a>
                    </div>
                    <div class="col-md-12">
                      <img src="assets/img/logo.png" class="img-responsive markLogo" width="200" style="margin-top: 0px;">
                      <img src="assets/img/iso.png" class="img-responsive pull-right isoLogo" width="100" style="margin-top: -78px;">
                    </div>
                    <div class="col-md-12 textCenter p-t-30 xs-p-t-40">
                      <p style="font-size: 1.7em; font-style: italic; line-height: 1; margin-bottom: 15px;">This is awarded to</p>
                      <h3 class="dispStudentName" style="font-size: 1.9em; color: #f1ba18;"></h3>
                      <img src="" class="img-responsive profilePhoto" width="150" style="margin: 0 auto;">
                      <p style="font-size: 1.7em; font-style: italic; line-height: 1; margin-bottom: 15px;">as</p>
                      <p class="coordinator" style="font-size: 1.9em;">Best Coordinator</p>
                      <p class="ifGradeIsNotOther" style="font-style: italic; font-size: 1.7em">for <b><span class="dispCourse"></span></b></p>
                      <p class="ifGradeIsOther" style="font-style: italic; font-size: 1.7em">for <b><span class="dispCourse"></span></b></p>
                    </div>
                  </div>
                  <table style="width:100%;" class="studentDetailTable">
                  <tr style="font-size: 25px;">
                      <td>Batch</td>
                      <td>: <span class="dispBatchNum"></span></td>
                      <td></td>
                    </tr>
                    <tr class="hideIfOther" style="font-size: 25px;">
                      <td>Grade</td>
                      <td>: <span class="dispGrade"></span></td>
                      <td></td>
                    </tr>
                    <tr style="font-size: 25px;">
                      <td>Certificate Number</td>
                      <td>: <span class="dispCertificateNum"></span></td>
                      <td></td>
                    </tr>
                    <tr style="font-size: 25px;">
                      <td>College Name</td>
                      <td>: <span class="dispCollegeName"></span></td>
                      <td></td>
                    </tr>
                    <tr style="font-size: 25px;">
                      <td>Certificate Date</td>
                      <td>: <span class="dispCertificateIssueDate"></span></td>
                      <td class="pull-right instituteName"><b>Mark Education Academy</b></td>
                    </tr>
                  </table>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>
            <!--<div class="col-md-12">
              <a class="btn btn-block closeBtn" href="javascript:;">CLOSE</a>
              </div>-->
          </div>
        </div>
      </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/light-bootstrap-dashboard.js"></script>
  <script type="text/javascript" src="assets/js/datatables.min.js"></script>
  <script src="assets/js/knockout-3.1.0.js" type="text/javascript"></script>
  <script src="assets/plugins/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
  <script src="assets/js/bootstrap-notify.js"></script>
  <script src="assets/js/moment.js"></script>
  <script src="assets/js/script.js"></script>
</html>