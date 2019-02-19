<?php include('../registration/server.php');

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Profile | Adding PDS
  </title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link rel="stylesheet" href="./assets/css/all.min.css">
  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">

      <div class="logo">
        <a class="simple-text logo-normal">
          <i class="fa fa-users"></i> Teacher
          <a href ="dashboard.php?logout='1'" style="color: red;">Logout </a>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fa fa-chart-line"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="modules.php">
            <i class="fa fa-file"></i>
              <p>Upload Doucments</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="">
            <i class="fa fa-user"></i>
              <p>Add PDS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="vprofile.php">
            <i class="fa fa-eye"></i>
              <p>View Personal Data Sheet</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="dashboard.php">Dashboard</a>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>

            <p>Note: This form will be filled out by the faculty members of a State College/ University</p>
            <p>Instructions: </p>
            <p>1.   Fill out this form accurately and legibly. Refer to the attached notes for details.</p>
            <p>2.   Please upload/submit appropriate supporting documets to substantiate your entries/claims.</p>
      <div class="content">
        <div class="container-fluid">

          <div class="row">

<!--         create a profile        -->
          <div class="container p-2 bg-dark">
                  <h3 class="px-2 text-white"><i class="fa fa-user"></i> Personal Data Sheet</h3>
                  <hr>

                  <form class="p-3">
                       <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <div class="form-group">
                             <label for="Teacher_Name" class="col-sm-2 control-label">Name</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="teacher_name" placeholder="Enter Name" name="Teacher_Name" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Sex" class="col-sm-2 control-label">Gender</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="Sex" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="CStatus" class="col-sm-2 control-label">Civil Status</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="civil_status" placeholder="Enter Single,Married or Widowed/Widower" name="CStatus" required autocomplete="off">
                             </div>
                         </div>
                         <div class="form-group">
                            <label for="DOB" class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-8">
                               <input type="text" class="form-control" id="dob" placeholder="Enter Date of Birth (Year-Month-Date)" name="DOB" required autocomplete="off">
                            </div>
                        </div>
                          <div class="form-group">
                             <label for="Home_Address" class="col-sm-2 control-label">Home Address</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="home_address" placeholder="Enter Home Address" name="Home_Address" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Mailing_Address" class="col-sm-2 control-label">Mailing Address</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="mailing_address" placeholder="Enter Mailing Address" name="Mailing_Address" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Tphone" class="col-sm-2 control-label">Telephone No.</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="tphone" placeholder="Enter Telephone Number" name="Tphone" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Mphone" class="col-sm-2 control-label">Mobile No.</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="mphone" placeholder="Enter Mobile Number" name="Mphone" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="College" class="col-sm-2 control-label">College</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="college" placeholder="Enter College" name="College" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Prank" class="col-sm-2 control-label">Present Rank/ Subrank</label> <br>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="prank" placeholder="Enter Present Rank/Subrank" name="Prank" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Dment" class="col-sm-2 control-label">Department</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="dment" placeholder="Enter Department" name="Dment" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="SAppoint" class="col-sm-2 control-label">Status of Appointment</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="sappoint" placeholder="Enter Status of Appointment" name="SAppoint" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="DLAP" class="col-sm-2 control-label">Date of Last Appointment/ NOSA</label> <br>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="dlap" placeholder="Enter Date of Last Appointment/ NOSA" name="DLAP" required autocomplete="off">
                             </div>
                          </div>
                          <div class="form-group">
                             <label for="Dsubmit" class="col-sm-2 control-label">Date Submitted</label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control" id="dsubmit" placeholder="Enter Submission Date" name="Dsubmit" required autocomplete="off">
                             </div>
                          </div>

                            <br>
                                <center> <p style="color:white;"> <b> 1.0 EDUCATIONAL QUALIFICATIONS </b></p> </center> <br>
                                <p style="color:white;"> 1.1  Highest relevant academic degree or educational attainment and additional
                                  equivalent degree earned related to the present position </p> <br>

                                  <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                      <thead class="text-warning">
                                        <th>Degree Earned</th>
                                        <th>Specialization</th>
                                        <th>Institution</th>
                                        <th>Year Obtained</th>
                                      </thead>

                                  <tbody>
                                    <tr>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                    </tr>
                                    <tr>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                    </tr>
                                    <tr>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                      <td> Fill out </td>
                                    </tr>
                                  </tbody>
                              </div>
                                </table>

                    <br><p style="color:white;"> 1.2  Additional credits earned towards an appropriate higher degree </p> <br>
                    <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Baccalaureate</th>
                          <th>Master's</th>
                          <th>Doctoral</th>
                        </thead>

                    <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                    </tbody>
                </div>
                  </table>
                  <br>

                  <center> <p style="color:white;"> <b> 2.0 EXPERIENCE AND LENGTH OF SERVICE </b></p> </center> <br>
                  <p style="color:white;"> 2.1  Service Record (includes full-time teaching, research, extension service, administrative experience,
                    and industrial experience) </p> <br>

                    <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Inclusive Dates</th>
                          <th>Position Held</th>
                          <th>Institution/ Address</th>
                        </thead>

                    <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                    </tbody>
                </div>
                  </table>
                  <br>
                  <center> <p style="color:white;"> <b> 3.0 PROFESSIONAL DEVELOPMENT, ACHIEVEMENTS, AND HONORS </b></p> </center> <br>

                </div>
              </div>
            </div>

      <div class="content">
        <div class="container-fluid">

          <div class="row">
                  <p style="color:white;"> 3.1  Innovations, patented inventions, inventions with pending patent, publications, and
                  other creative works </p> <br>

                    <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Nature of Innovations/ Inventions</th>
                          <th>Patent Number</th>
                          <th>Year Patented</th>
                        </thead>

                    <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                    </tbody>
                </div>
                  </table>
                  <br>
                  <p style="color:white;"> 3.1.2-3.1.5  Published books, researches, monographs, articles, instructional manuals,
                  workbooks, films, compositions </p> <br>

                    <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Nature (books, articles,
                          films, instructional materials)</th>
                          <th>Complete Title</th>
                          <th>        Role           </th>
                          <th>      Publisher </th>
                          <th>Date of Publication</th>
                        </thead>

                    <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                    </tbody>
                </div>
                  </table>
                  <br>
                  <p style="color:white;"> 3.2  Expert services, training and active participation in professional/ technical activities </p> <br>
                  <p style="color:white;"> 3.2.1  Training courses and seminars (including academic, technical, industrial, agro-industrial,
                    and fishers training) </p> <br>
                    <p style="color:white;"> A. Training </p> <br>
                    <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Title of the training</th>
                          <th>Sponsoring Agency</th>
                          <th>Level (Int'l/ Nat'l/ Reg'l/ Local/ Inst'l)</th>
                          <th>Inclusive Dates </th>

                        </thead>

                    <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                    </tbody>
                </div>
                  </table>
                  <br>
                  <p style="color:white;"> B. Conferences, seminars, etc. </p> <br>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>Title of the Conference/ Seminar</th>
                        <th>Sponsoring Agency</th>
                        <th>Inclusive Dates</th>


                      </thead>

                  <tbody>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>


                    </tr>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>


                    </tr>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>



                    </tr>
                  </tbody>
              </div>
                </table>
                <br>
                <p style="color:white;"> 3.2.2  Expert services
                    <p style="color:white;"> A. Consultancy </p> <br>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>Nature/ Area of the Consultancy</th>
                        <th>Country</th>
                        <th>Sponsoring Agency</th>
                        <th>Inclusive Dates </th>

                      </thead>

                  <tbody>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>

                    </tr>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>


                    </tr>
                    <tr>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>
                      <td> Fill out </td>


                    </tr>
                  </tbody>
              </div>
                </table>
                <br>
                <p style="color:white;"> B. Active participation in trainings, workshops, and conferences as coordinator, lecturer, resource person, or guest speaker </p> <br>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>Title of the Conference/ Seminar/ Workshop</th>
                    <th>Nature of Participation</th>
                    <th>Sponsoring Agency</th>
                    <th>Inclusive Dates </th>

                  </thead>

              <tbody>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>

                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
              </tbody>
          </div>
            </table>
            <br>
            <p style="color:white;"> C. For expert services as adviser in doctoral dissertation, master's and undergraduate thesis </p> <br>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>Title of the Paper</th>
                <th>Nature </th>
                <th>Inclusive Dates </th>

              </thead>

          <tbody>
            <tr>
              <td> Fill out </td>
              <td> Fill out </td>
              <td> Fill out </td>


            </tr>
            <tr>
              <td> Fill out </td>
              <td> Fill out </td>
              <td> Fill out </td>



            </tr>
            <tr>
              <td> Fill out </td>
              <td> Fill out </td>
              <td> Fill out </td>

            </tr>
          </tbody>
      </div>
        </table>
        <br>
        <p style="color:white;"> D. For certified services (includes reviewer/ examiner in PRC or CSC, accreditation work, trade skill certification, services as coach/trainer,
          adviser of student organization) </p> <br>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>Nature/ Area</th>
            <th>Company/ Agency</th>
            <th>Inclusive Dates </th>

          </thead>

      <tbody>
        <tr>
          <td> Fill out </td>
          <td> Fill out </td>
          <td> Fill out </td>


        </tr>
        <tr>
          <td> Fill out </td>
          <td> Fill out </td>
          <td> Fill out </td>


        </tr>
        <tr>
          <td> Fill out </td>
          <td> Fill out </td>
          <td> Fill out </td>


        </tr>
      </tbody>
  </div>
    </table>
              </div>
            </div>
          </div>
    </div>

    <div class="content">
      <div class="container-fluid">

        <div class="row">
    <p style="color:white;"> 3.3  Membership in professional organizations/ honor societies and honors received </p> <br>
              <p style="color:white;"> 3.3.1  Membership in professional organizations/ honor societies </p> <br>
  <div class="card-body table-responsive">
    <table class="table table-hover">
      <thead class="text-warning">
        <th>Name of the Organization/ Honor Society</th>
        <th>Inclusive Dates </th>

      </thead>

  <tbody>
    <tr>
      <td> Fill out </td>
      <td> Fill out </td>


    </tr>
    <tr>
      <td> Fill out </td>
      <td> Fill out </td>

    </tr>
    <tr>
      <td> Fill out </td>
      <td> Fill out </td>


    </tr>
  </tbody>
</div>
</table>
<br>

        <p style="color:white;"> 3.3.2 Academic honors received </p> <br>
        <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>Honors Received</th>
                <th>Degree Obtained</th>
                <th>Institution/ Address</th>

                </thead>

                <tbody>
                  <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


            </tr>
              <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


      </tr>
      </tbody>
          </div>
              </table>
                <br>

                <p style="color:white;"> 3.3.3 Scholarship/ Fellowship</p> <br>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>Title of the Scholarship</th>
                    <th>Nature
                      (Competetive: Int'l/ Nat'l/Reg'l/Local Non-Competetive: Int'l/ Nat'l/Reg'l/Local)</th>
                    <th>Sponsoring Agency</th>
                    <th>Inclusive Dates </th>

                  </thead>

              <tbody>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>

                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
              </tbody>
              </div>
              </table>
              <br>
              <p style="color:white;"> 3.4  Awards of Distinction received in recognition of achievement relevant areas of specialization, profession or assignment </p>
              <br>
                <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>Title of the Award</th>
                  <th>Field of Services</th>
                  <th>Grantor/ Organization</th>
                  <th>Level (Int'l/ Nat'l/ Reg'l/ Local/ Inst'l)</th>

                </thead>

            <tbody>
              <tr>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>

              </tr>
              <tr>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>


              </tr>
              <tr>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>
                <td> Fill out </td>


              </tr>
            </tbody>
        </div>
          </table>
          <br>

          <p style="color:white;"> 3.5  Community Outreach: Servuce - Oriented projects participated in the community </p> <br>
            <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>Title of the Project</th>
              <th>Participation/ Service</th>
              <th>Sponsoring Agency</th>
              <th>Inclusive Dates</th>

            </thead>

        <tbody>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>

          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
          <tr>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>
            <td> Fill out </td>


          </tr>
        </tbody>
    </div>
      </table>
    </div>
  </div>
</div>
</div>

<div class="content">
<div class="container-fluid">

<div class="row">

              <p style="color:white;"> 3.6 Professional Examinations </p> <br>
              <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Title of the Examination</th>
                      <th>Rating</th>
                      <th>Date</th>

                      </thead>

                      <tbody>
                        <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                </tr>
                <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


                  </tr>
                    <tr>
                  <td> Fill out </td>
                  <td> Fill out </td>
                  <td> Fill out </td>


            </tr>
            <tr>
          <td> Fill out </td>
          <td> Fill out </td>
          <td> Fill out </td>


    </tr>
            </tbody>
                </div>
                    </table>


                      <center> <p style="color:white;"> <b>  4.0 RESEARCH </b></p> </center> <br>
                      <p style="color:white;"> 4.1  Research recommendations transformed to public policy benefiting the country and other creative works </p> <br>
                        <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Complete Title of the Research</th>
                          <th>Level (Int'l/ Nat'l/ Reg'l/ Local/ Inst'l)</th>
                          <th>Sponsoring Agency</th>
                          <th>Inclusive Dates</th>

                        </thead>

                      <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>



                      </tr>
                      </tbody>
                      </div>
                      </table>
                      <br>
                      <p style="color:white;"> 4.2  Supervision, tutoring, or coaching of graduate scientists and technology experts </p> <br>
                        <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Nature/ Area of Supervision/ Tutoring</th>
                          <th>Country</th>
                          <th>Sponsoring Agency</th>
                          <th>Level (Int'l/ Nat'l/ Reg'l/ Local/ Inst'l)</th>
                          <th>Inclusive Dates</th>

                        </thead>

                      <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>

                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>



                      </tr>
                      </tbody>
                      </div>
                      </table>
                      <br>
                      <p style="color:white;"> 4.3  Research results applied or utilized in industrial and/or commercial projects or undertaking </p> <br>
                        <div class="card-body table-responsive">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          <th>Complete title of the Research</th>
                          <th>Level (Int'l/ Nat'l/ Reg'l/ Local/ Inst'l)</th>
                          <th>Sponsoring Agency</th>
                          <th>Inclusive Dates</th>

                        </thead>

                      <tbody>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>


                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>



                      </tr>
                      <tr>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>
                        <td> Fill out </td>



                      </tr>
                      </tbody>
                      </div>
                      </table>
                      <br>
                      <center> <p style="color:white;"> <b>  I hereby certify the correctness and accuracy of the above-mentioned statements and facts </b></p> </center> <br>

                      <div class="form-group">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="Ssign" placeholder="Enter Name of the Faculty Member" name="Ssign" required autocomplete="off">
                        </div>
                        <p style="color:red"> Note: Entering and submitting your name will be as good as your electronic signature <p>
                      </div>
                    </form>
                        <center>
                    <button class="btn btn-primary" id="addprof" name="addprof" type="submit"><i class="fa fa-check mr-2"> </i> Add To My Profile </button>
                  </center>




              </div>



<!--              end of creating a profile-->

          </div>
        </div>
      </div>

      <?php
          include('myfunctions.php');
          $Teacher_Name = "";
          $Sex = "";
          $CStatus = "";
          $DOB = "";
          $Home_Address = "";
          $Mailing_Address = "";
          $Tphone = "";
          $Mphone = "";
          $College = "";
          $Prank = "";
          $Dment = "";
          $SAppoint = "";
          $DLAP = "";
          $Dsubmit = "";
          $Ssign = "";

          if (isset($_POST['addprof'])) {
             $Teacher_Name = $_POST['Teacher_Name'];
             $Sex = $_POST['Sex'];
             $CStatus = $_POST['CStatus'];
             $DOB = $_POST['DOB'];
             $Home_Address = $_POST['Home_Address'];
             $Mailing_Address = $_POST['Mailing_Address'];
             $Tphone = $_POST['Tphone'];
             $Mphone = $_POST['Mphone'];
             $College = $_POST['College'];
             $Prank = $_POST['College'];
             $Dment = $_POST['Dment'];
             $SAppoint = $_POST['SAppoint'];
             $DLAP = $_POST['DLAP'];
             $Dsubmit = $_POST['Dsubmit'];
             $Ssign = $_POST['Ssign'];



                mysqli_query($conn, "INSERT INTO usersprof (Teacher_Name, Sex, CStatus, DOB, Home_Address, Mailing_Address, Tphone, Mphone,
                College,Prank, Dment, SAppoint, DLAP, Dsubmit, Ssign  ) VALUES ('$Teacher_Name', '$Sex', '$CStatus', '$DOB',
                   '$Home_Address', '$Mailing_Address', '$Tphone', '$Mphone', '$College', '$Prank',
                    '$Dment', '$SAppoint', '$DLAP', '$Dsubmit', '$Ssign')");
                $_SESSION['message'] = "Your profile has been saved";
                   header('location: tprofile.php');
          }
       ?>


  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>

      </ul>
    </div>
  </div>
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
  <script src="./assets/demo/demo.js"></script>
  <script>

    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
