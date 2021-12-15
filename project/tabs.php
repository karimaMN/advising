<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Advising</title>
    <style>
        .logo-bar
        {
           background: rgb(152, 30, 50);
;
        }
        .footerlink 
        {
            list-style-type: none;
            padding-left: 0px;
        }
        .footerlink li a{
            text-decoration: none;
            color: #fff;
        }
        .show-hide
        {
            display:none;
        }
    </style>
  </head>
  <body> 
  <header class="logo-bar p-4">

    <img src="./img/logo-header.png" class="img-fluid w-25"/>


  </header>
  <header>
    <div class="bg-dark p-1 clearfix">

    
      <span><h3 class="text-white mb-0">   MS Computer Science: Program Advising Tool   <span class="float-xl-end h6 mt-2">Technical Issue?  <button class="btn btn-sm btn-primary" >Contact Site Admin</button></span> </h3></span>  
        
           
      
                                   
       </div>
  </header>

  <section>
  
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">



                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Instructions</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Restricted Courses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Complete Transferred Courses </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Waived" type="button" role="tab" aria-controls="Waived" aria-selected="false">Waived Courses 
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Cer-tab1" data-bs-toggle="tab" data-bs-target="#Cer" type="button" role="tab" aria-controls="Cer" aria-selected="false">Certificate
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Required-Course" data-bs-toggle="tab" data-bs-target="#Course-tab" type="button" role="tab" aria-controls="Course-tab" aria-selected="false">6000 Level Required Course
                        </button>
                      </li>
                  </ul>
				  <form action="Degree-Planning.php" method="POST">
                  <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active p-4 border mb-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3>Instructions for Course Declarations</h3>
                        <p style="margin-bottom: 20px;">
                            Before we begin planning courses, we must first determine which courses you've already taken for graduate credit.  We must also find out if there are any other special considerations, such as waived or restricted courses that apply to you.  
                        </p>
        
                        <p style="margin-bottom: 20px;">
                            This page is divided into tabbed sections, each tab focusing on a particular consideration.  If the title of the section is not clear, please take time to read the text below the title for more clarification.  If you are still unclear about how to proceed, please contact your faculty advisor.
                        </p>
        
                        <p style="margin-bottom: 20px;">
                            Contact the <a href="mailto:sjrf8c@mail.umsl.edu?Subject=UMSL:CS Program Advising Tool Issue">site administrator</a> for any technical issues or recommendations.
                        </p>
        
                        <div class="row">
                            <div class="col-xl-12 text-center">
                            <button class="btn btn-lg btn-success" >Continue</button>
                          
                   
                        </div>
                        </div>



                    </div>

                    <div class="tab-pane fade border" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class="card border-0">
                        <div class="card-body">
                        <h3>Restricted Courses</h3>
                        <p>
                            Restricted courses are those that cover <b>undergraduate level
                                computer science and mathematics skills</b> required in order to
                            proceed with graduate study. These course will be <b>stated in
                                the admission letter</b> from the Graduate Office upon successful
                            admission to the Graduate School. Students receiving their CS
                            Bachelors degree from UMSL will have these requirements fulfilled.
                        </p>
                        <div class="bg-warning card">
                            <div class="card-body">
                            <b>Note:</b> These restricted courses should be fulfilled in the first few
                            semesters (optimally in the first semester). <br>
                            <b>Note:</b> Credit hours in these courses will not count toward
                            the 30 graduate hour requirement.
                        </div>
                        </div>
        
                        <h4 class="mt-3 mb-3">Please select any restricted courses:</h4>
        
                        <div class="row">
                            <div class="col-sm-6">
                                <u>COMPUTER SCIENCE</u>
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_0" value="1250 - Introduction to Computing" name="restricted_course[]" >
                                        <label for="cmpSciRestriction_0">
                                        1250 - Introduction to Computing</label> 
                                    </div>
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_1" value="2250 - Programming and Data Structures" name="restricted_course[]" >
                                        <label for="cmpSciRestriction_1">
                                        2250 - Programming and Data Structures</label> 
                                    </div>
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_2" value="2261 - Object-Oriented Programming" name="restricted_course[]">
                                        <label for="cmpSciRestriction_2">
                                        2261 - Object-Oriented Programming</label> 
                                    </div>
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_3" value="2700 - Computer Architecture and Organization" name="restricted_course[]">
                                        <label for="cmpSciRestriction_3">
                                        2700 - Computer Architecture and Organization</label> 
                                    </div>
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_4" value="2750 - System Programming and Tools" name="restricted_course[]">
                                        <label for="cmpSciRestriction_4">
                                        2750 - System Programming and Tools</label> 
                                     
                                    </div>
                                 
                                
                                    <div>
                                        <input type="checkbox" id="cmpSciRestriction_6" value="3130 - Design and Analysis of Algorithms" name="restricted_course[]">
                                        <label for="cmpSciRestriction_6">
                                        3130 - Design and Analysis of Algorithms</label>
                                      
                                    </div>
                                
                            </div>
                            <div class="col-sm-6" style="padding: 5px 20px 20px 20px;">
                                <u>MATHEMATICS</u>
                                
                                    <div>
                                        <input type="checkbox" id="mathRestriction_0" value="1320 - Applied Statistics I" name="restricted_course[]" >
                                        <label for="mathRestriction_0">
                                        1320 - Applied Statistics I</label>
                                    </div>
                                
                                    <div>
                                        <input type="checkbox" id="mathRestriction_1" value="1800 - Analytic Geometry and Calculus I" name="restricted_course[]">
                                        <label for="mathRestriction_1">
                                        1800 - Analytic Geometry and Calculus I</label> 
                                       
                                    </div>
                                
                                      
                                
                                    <div>
                                        <input type="checkbox" id="mathRestriction_4" value="3000 - Discrete Structures" name="restricted_course[]" >
                                        <label for="mathRestriction_4">
                                        3000 - Discrete Structures</label> 
                                    </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                            <button type="button" class="btn btn-lg btn-primary" id="pre_contact-tab1">Previous</button>
                            <button type="button" class="btn btn-lg btn-primary" id="contact-tab1">Next</button>
                        </div>
                        </div>
                    </div>


                   </div>





                    </div>

<div class="tab-pane fade border" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<div class="card">

    <div class="card-body">






                        <h3>Transfer Hours:</h3>
						<p>
						
						UMSL welcomes transfer students, defined as a student transferring from another college or university. Here, the class may not have an equivalent course taught at UMSL, but the student will receive an equal number of “elective” hours to count towards the total 120 required for graduation.
						Enter the number of transferred hours.
						
						</p>
						<p>
						<input type="button" value="-" id="transfer_course_minus" class="btn btn-primary">
						<span style="padding: 7px;" id="span_transfer_course_number">0</span>
						<input type="hidden" id="transfer_course_number" name="transfer_course_number" class="form-control" value="0">
						<input type="button" value="+"  id="transfer_course_plus" class="btn btn-primary">
						</p>
						
						<hr>
                        <h3>Completed Courses : </h3>
                        <p style="margin-bottom: 20px;">
                            This section is where you indicate coursework that you've already
                            completed for graduate credit that counts toward your degree.  These can be courses completed at UMSL or courses transferred from another institution (<i>ask your faculty advisor for transfer forms</i>).
                            <br>
                            <a href="http://www.umsl.edu/services/dars/transfer.html" target="_blank">View course equivalency database for
                                transferring courses.</a>
                        </p>
        
                        <div class="bg-warning card" >
                            <div class="card-body">
                            <b>Note:</b>
                            4000 level courses must have been completed at UMSL with a B-<br>
                            <b>Note:</b>
                            Up to three graduate courses may be transferred with a B or better (must have been taken for graduate credit).
                        </div>
                        </div>
        
                        <h4 class="mb-2 mt-2">Please select any courses that have been completed at UMSL or transferred:</h4>
        
                        <div class="row">
                            <div class="col-sm-6" style="padding: 5px 20px 20px 20px;">
                                <u>4000 LEVEL COURSES (B- or better)</u>
                                
                                    <div id="courseDiv_4010">
                                        <input id="course_4010" type="checkbox" value="4010 - Advanced Web Development with Java" name="Completed_Transferred[]" >
                                        <label for="course_4010">
                                        4010 - Advanced Web Development with Java</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4012">
                                        <input id="course_4012" type="checkbox" value="4012 - Introduction to Enterprise Web Development" name="Completed_Transferred[]">
                                        <label for="course_4012">
                                        4012 - Introduction to Enterprise Web Development</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4020">
                                        <input id="course_4020" type="checkbox" value="4020 - Introduction to Android Apps: Android Fundamentals" name="Completed_Transferred[]" >
                                        <label for="course_4020">
                                        4020 - Introduction to Android Apps: Android Fundamentals</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4030">
                                        <input id="course_4030" type="checkbox" value="4030 - Introduction to Intelligent Web" name="Completed_Transferred[]" >
                                        <label for="course_4030">
                                        4030 - Introduction to Intelligent Web</label> 
                                        
                                      
                                    </div>
                                
                                    <div id="courseDiv_4040">
                                        <input id="course_4040" type="checkbox" value="4040 - Electronic Commerce Protocols" name="Completed_Transferred[]" >
                                        <label for="course_4040">
                                        4040 - Electronic Commerce Protocols</label>
                                       
                                    </div>
                                
                                    <div id="courseDiv_4050">
                                        <input id="course_4050" type="checkbox" value="4050 - User Interface Development" name="Completed_Transferred[]">
                                        <label for="course_4050">
                                        4050 - User Interface Development</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4140">
                                        <input id="course_4140" type="checkbox" value="4140 - Theory of Computation" name="Completed_Transferred[]">
                                        <label for="course_4140">
                                        4140 - Theory of Computation</label>
                                       
                                    </div>
                                
                                    <div id="courseDiv_4220">
                                        <input id="course_4220" type="checkbox" value="4220 - Introduction to iOS Programming and Apps" name="Completed_Transferred[]">
                                        <label for="course_4220">
                                        4220 - Introduction to iOS Programming and Apps</label>
                                       
                                    </div>
                                
                                    <div id="courseDiv_4222">
                                        <input id="course_4222" type="checkbox" value="4222 - iOS Apps" name="Completed_Transferred[]">
                                        <label for="course_4222">
                                        4222 - iOS Apps</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4250">
                                        <input id="course_4250" type="checkbox" value="4250 - Programming Languages" name="Completed_Transferred[]" >
                                        <label for="course_4250">
                                        4250 - Programming Languages</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4280">
                                        <input id="course_4280" type="checkbox" value="4280 - Program Translation"  name="Completed_Transferred[]">
                                        <label for="course_4280">
                                        4280 - Program Translation</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4300">
                                        <input id="course_4300" type="checkbox" value="4300 - Introduction to Artificial Intelligence" name="Completed_Transferred[]" >
                                        <label for="course_4300">
                                        4300 - Introduction to Artificial Intelligence</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4340">
                                        <input id="course_4340" type="checkbox" value="4340 - Introduction to Machine Learning" name="Completed_Transferred[]">
                                        <label for="course_4340">
                                        4340 - Introduction to Machine Learning</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4342">
                                        <input id="course_4342" type="checkbox" value="4342 - Data Mining" name="Completed_Transferred[]">
                                        <label for="course_4342">
                                        4342 - Data Mining</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4410">
                                        <input id="course_4410" type="checkbox" value="4410 - Introduction to Computer Graphics" name="Completed_Transferred[]" >
                                        <label for="course_4410">
                                        4410 - Introduction to Computer Graphics</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4420">
                                        <input id="course_4420" type="checkbox" value="4420 - Introduction to Digital Image Processing" name="Completed_Transferred[]">
                                        <label for="course_4420">
                                        4420 - Introduction to Digital Image Processing</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_4500">
                                        <input id="course_4500" type="checkbox" value="4500 - Introduction to Software Engineering" name="Completed_Transferred[]" >
                                        <label for="course_4500">
                                        4500 - Introduction to Software Engineering</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4520">
                                        <input id="course_4520" type="checkbox" value="4520 - Introduction to Object-Oriented Analysis and Design" name="Completed_Transferred[]" >
                                        <label for="course_4520">
                                        4520 - Introduction to Object-Oriented Analysis and Design</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4610">
                                        <input id="course_4610" type="checkbox" value="4610 - Database Management Systems" name="Completed_Transferred[]" >
                                        <label for="course_4610">
                                        4610 - Database Management Systems</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4700">
                                        <input id="course_4700" type="checkbox" value="4700 - Computer Forensics"  name="Completed_Transferred[]">
                                        <label for="course_4700">
                                        4700 - Computer Forensics</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4710">
                                        <input id="course_4710" type="checkbox" value="4710 - Mobile And Ubiquitous Computing" name="Completed_Transferred[]">
                                        <label for="course_4710">
                                        4710 - Mobile And Ubiquitous Computing</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4730">
                                        <input id="course_4730" type="checkbox" value="4730 - Computer Networks and Communications" name="Completed_Transferred[]" >
                                        <label for="course_4730">
                                        4730 - Computer Networks and Communications</label>
                                       
                                    </div>
                                
                                    <div id="courseDiv_4740">
                                        <input id="course_4740" type="checkbox" value="4740 - Introduction to High Performance Computing" name="Completed_Transferred[]" >
                                        <label for="course_4740">
                                        4740 - Introduction to High Performance Computing</label> 
                                        
                                    </div>
                                
                                    <div id="courseDiv_4750">
                                        <input id="course_4750" type="checkbox" value="4750 - Introduction to Cloud Computing"  name="Completed_Transferred[]">
                                        <label for="course_4750">
                                        4750 - Introduction to Cloud Computing</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4760">
                                        <input id="course_4760" type="checkbox" value="4760 - Operating Systems" name="Completed_Transferred[]" >
                                        <label for="course_4760">
                                        4760 - Operating Systems</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4780">
                                        <input id="course_4780" type="checkbox" value="4780 - Computer and Network Security"  name="Completed_Transferred[]">
                                        <label for="course_4780">
                                        4780 - Computer and Network Security</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_4782">
                                        <input id="course_4782" type="checkbox" value="4782 - Information Security" name="Completed_Transferred[]" >
                                        <label for="course_4782">
                                        4782 - Information Security</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_4890">
                                        <input id="course_4890" type="checkbox" value="4890 - Topics in Computer Science" name="Completed_Transferred[]" >
                                        <label for="course_4890">
                                        4890 - Topics in Computer Science</label> 
                                       
                                    </div>
                                
                            </div>
                            <div class="col-sm-6" style="padding: 5px 20px 20px 20px;">
                                <u>5000 LEVEL COURSES</u>
                                
                                    <div id="courseDiv_5012">
                                        <input id="course_5012" type="checkbox"  name="Completed_Transferred[]" value="5012 - Enterprise Web Development" >
                                        <label for="course_5012">
                                        5012 - Enterprise Web Development</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_5020">
                                        <input id="course_5020" type="checkbox"  name="Completed_Transferred[]" value="5020 - Android Apps: Android Fundamentals">
                                        <label for="course_5020">
                                        5020 - Android Apps: Android Fundamentals</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_5030">
                                        <input id="course_5030" type="checkbox"  name="Completed_Transferred[]" value="5030 - Intelligent Web">
                                        <label for="course_5030">
                                        5030 - Intelligent Web</label> 
                                        
                                    </div>
                                
                                    <div id="courseDiv_5130">
                                        <input id="course_5130" type="checkbox"  name="Completed_Transferred[]" value="5130 - Advanced Data Structures and Algorithms" >
                                        <label for="course_5130">
                                        5130 - Advanced Data Structures and Algorithms</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_5222">
                                        <input id="course_5222" type="checkbox"  name="Completed_Transferred[]" value="5222 - Advanced iOS Apps">
                                        <label for="course_5222">
                                        5222 - Advanced iOS Apps</label>
                                         
                                    </div>
                                
                                    <div id="courseDiv_5300">
                                        <input id="course_5300" type="checkbox"  name="Completed_Transferred[]" value="5300 - Artificial Intelligence">
                                        <label for="course_5300">
                                        5300 - Artificial Intelligence</label>
                                      
                                    </div>
                                
                                    <div id="courseDiv_5320">
                                        <input id="course_5320" type="checkbox"  name="Completed_Transferred[]" value="5320 - Introduction to Evolutionary Computation">
                                        <label for="course_5320">
                                        5320 - Introduction to Evolutionary Computation</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_5340">
                                        <input id="course_5340" type="checkbox"  name="Completed_Transferred[]" value="5340 - Machine Learning" >
                                        <label for="course_5340">
                                        5340 - Machine Learning</label>
                                     
                                    </div>
                                
                                    <div id="courseDiv_5342">
                                        <input id="course_5342" type="checkbox"  name="Completed_Transferred[]" value="5342 - Data Mining">
                                        <label for="course_5342">
                                        5342 - Data Mining</label>
                                     
                                    </div>
                                
                                    <div id="courseDiv_5410">
                                        <input id="course_5410" type="checkbox"  name="Completed_Transferred[]" value="5410 - Computer Graphics">
                                        <label for="course_5410">
                                        5410 - Computer Graphics</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_5420">
                                        <input id="course_5420" type="checkbox"  name="Completed_Transferred[]" value="5420 - Digital Image Processing">
                                        <label for="course_5420">
                                        5420 - Digital Image Processing</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_5500">
                                        <input id="course_5500" type="checkbox"  name="Completed_Transferred[]" value="5500 - Software Engineering">
                                        <label for="course_5500">
                                        5500 - Software Engineering</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_5520">
                                        <input id="course_5520" type="checkbox"  name="Completed_Transferred[]" value="5520 - Object Oriented Analysis and Design">
                                        <label for="course_5520">
                                        5520 - Object Oriented Analysis and Design</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_5700">
                                        <input id="course_5700" type="checkbox"   name="Completed_Transferred[]" value="5700 - Computer Systems">
                                        <label for="course_5700">
                                        5700 - Computer Systems</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_5740">
                                        <input id="course_5740" type="checkbox"  name="Completed_Transferred[]" value="5740 - High Performance Computing" >
                                        <label for="course_5740">
                                        5740 - High Performance Computing</label> 
                                    </div>
                                
                                    <div id="courseDiv_5750">
                                        <input id="course_5750" type="checkbox"  name="Completed_Transferred[]" value="5750 - Cloud Computing">
                                        <label for="course_5750">
                                        5750 - Cloud Computing</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_5782">
                                        <input id="course_5782" type="checkbox"  name="Completed_Transferred[]" value="5782 - Advanced Information Security">
                                        <label for="course_5782">
                                        5782 - Advanced Information Security</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_5880">
                                        <input id="course_5880" type="checkbox"  name="Completed_Transferred[]" value="5880 - Computer Science Independent Project">
                                        <label for="course_5880">
                                        5880 - Computer Science Independent Project</label> 
                                      
                                    </div>
                                
                                    <div id="courseDiv_5890">
                                        <input id="course_5890" type="checkbox"  name="Completed_Transferred[]" value="5890 - Topics in Computer Science">
                                        <label for="course_5890">
                                        5890 - Topics in Computer Science</label>
                                       
                                    </div>
                                
        
                                <div style="margin-top: 20px; text-decoration: underline;">6000
                                    LEVEL COURSES</div>
                                
                                    <div id="courseDiv_6320">
                                        <input id="course_6320" type="checkbox"  name="Completed_Transferred[]" value="6320 - Advances in Evolutionary Computation">
                                        <label for="course_6320">
                                        6320 - Advances in Evolutionary Computation</label>
                                        
                                    </div>
                                
                                    <div id="courseDiv_6340">
                                        <input id="course_6340" type="checkbox"  name="Completed_Transferred[]" value="6340 - Genetic Programming">
                                        <label for="course_6340">
                                        6340 - Genetic Programming</label>
                                         
                                    </div>
                                
                                    <div id="courseDiv_6410">
                                        <input id="course_6410" type="checkbox"  name="Completed_Transferred[]" value="6410 - Topics in Computer Graphics" >
                                        <label for="course_6410">
                                        6410 - Topics in Computer Graphics</label>
                                       
                                    </div>
                                
                                    <div id="courseDiv_6420">
                                        <input id="course_6420" type="checkbox"  name="Completed_Transferred[]" value="6420 - Topics in Image Processing and Multimedia" >
                                        <label for="course_6420">
                                        6420 - Topics in Image Processing and Multimedia</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_6740">
                                        <input id="course_6740" type="checkbox"  name="Completed_Transferred[]" value="6740 - High Performance Computing">
                                        <label for="course_6740">
                                        6740 - High Performance Computing</label> 
                                       
                                    </div>
                                
                                    <div id="courseDiv_6900">
                                        <input id="course_6900" type="checkbox"  name="Completed_Transferred[]" value=" 6900 - Thesis">
                                        <label for="course_6900">
                                        6900 - Thesis</label> 
                                      
                                    </div>
                                
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-xl-12 text-center">
                            <button class="btn btn-lg btn-success">Continue</button>
                        </div>
                        </div>
                    </div>
                </div>


                    </div>

 <div class="tab-pane fade border" id="Waived" role="tabpanel" aria-labelledby="Waived-tab">
<div class="card border-0">
 <div class="card-body">
       <h3>Waived Courses</h3>
        <p style="margin-bottom: 20px;">
                            Core course requirements may be waived on the basis of prior coursework completed with a B or better or relevant experience. Waived courses do not reduce the total hours required for the degree. Pre-requisite courses may be waived with the instructor's approval.
                        </p>
        
                        <h4>Please select any core courses to be waived:</h4>
        
                        <div class="row">
                            <div class="col-sm-12" style="padding: 5px 20px 20px 20px;">
                                <u>CORE COURSES</u>
                                
                                    <div id="waivedDiv_4250">
                                        <input id="waived_4250" type="checkbox" name="waived_courses[]" value="4250 - Programming Languages" >
                                        <label for="waived_4250">
                                        4250 - Programming Languages</label>
                                         
                                    </div>
                                
                                    <div id="waivedDiv_4760">
                                        <input id="waived_4760" type="checkbox" name="waived_courses[]" value="4760 - Operating Systems">
                                        <label for="waived_4760">
                                        4760 - Operating Systems</label>
                                       
                                    </div>
                                
                                    <div id="waivedDiv_5130">
                                        <input id="waived_5130" type="checkbox" name="waived_courses[]" value="5130 - Advanced Data Structures and Algorithms">
                                        <label for="waived_5130">
                                        5130 - Advanced Data Structures and Algorithms</label>
                                       
                                    </div>
                                
                                    <div id="waivedDiv_5500">
                                        <input id="waived_5500" type="checkbox"  name="waived_courses[]" value="5500 - Software Engineering">
                                        <label for="waived_5500">
                                        5500 - Software Engineering</label>
                                       
                                    </div>
                                
                                    <div id="waivedDiv_5700">
                                        <input id="waived_5700" type="checkbox" name="waived_courses[]" value="5700 - Computer Systems">
                                        <label for="waived_5700">
                                        5700 - Computer Systems</label> 
                                       
                                    </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 text-center">
                            <button class="btn btn-lg btn-success">Continue</button>
                        </div>
                        </div>

                    </div>
                </div>
                    </div>
<!-- cer -->

<div class="tab-pane fade border" id="Cer" role="tabpanel" aria-labelledby="Cer-tab1">
<div class="card border-0">
 <div class="card-body">
       <!--h3>Waived Coursesewew</h3-->

        
                      
        
                        <div class="row">
                            <div class="col-sm-12">
                         
                                <!-- data -->


                                <div>
   
									<div > The M.S. in Computer Science has three different options to choose from, offering a wide range of
									 career opportunities. All graduates will have a broad computing background and will be exposed to a
									 wide range of technologies. </div>
									<div>
									<div>
										<span>Required core courses for all three options</span>
									<ul> 
									<li>4250 - Programming Languages</li>
									<li>5130 - Advanced Data Structure and Agorithms</li>
									<li>5500 - Software engeneering</li>
								   </ul>
									</div>
									<div class="row">
									<div class="col-md-6">
									<div class="form-check">
									<input class="form-check-input checkboxshowhide" type="checkbox" value="traditional" data-idno="1" name="waviedcourse_option[]" id="waviedcourse_option1"  onchange="valueChanged()" >
									<label>
									<strong>Traditional Option </strong>
									</label>
									</div>

									 <div>
										 <div class="show-hide" id="show-hide1">
									<div class="form-check ms-4" >
									<input class="form-check-input " type="checkbox" checked value="4760 - Operating Systems"  name="traditional[]" id="flexRadioDefault33" />
									<span class="form-check-label" for="flexRadioDefault3"  >
										4760 - Operating Systems
									</span>
									</div>
									
									<div class="form-check ms-4">
									<input class="form-check-input" type="checkbox" value="5700 - Computer Systems"   checked name="traditional[]" id="flexRadioDefault34"  />
									<span class="form-check-label"  for="flexRadioDefault37"  >
										5700 - Computer Systems
									</span>
									</div>
								 </div>
							</div>

								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" name="waviedcourse_option[]"  id="waviedcourse_option7"   />
									<label  >
									<strong>  Professional Option </strong>
									</label>
									</div>

						<h6 class="font-weight-bold mt-3 mb-3">Graduate Certificates</h6> 

									<div class="form-check">
									<input class="form-check-input checkboxshowhide" type="checkbox" value="artificial"  data-idno="2" name="waviedcourse_option[]"  id="waviedcourse_option2" onchange="valueChanged()"  />
									<label >
									<strong> Artificial Intelligence  </strong>  
									</label>
									</div>
							 
									<div class = "show-hide" id="show-hide2"> 
									<div class="form-check ms-3"  >
									<input class="form-check-input" type="checkbox" value="5130 - Advanced Data Structures and Algorithms"  name="artificial[]" checked id="flexRadioDefault1"/>
									<label class="form-check-label"  for="flexRadioDefault1" >
										5130 - Advanced Data Structures and Algorithms 
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox" value="5300 - Artificial Intelligence" name="artificial[]" checked id="flexRadioDefault2" />
									<label class="form-check-label"  for="flexRadioDefault2">
										5300 - Artificial Intelligence
									</label>
									</div>
								 </div>

									<div class="form-check"  >
									<input class="form-check-input checkboxshowhide" type="checkbox" value="cyber" data-idno="3"  name="waviedcourse_option[]"  id="waviedcourse_option3" onchange="valueChanged()"/>
									<label >
									<strong>       Cyber Security  </strong>  
									</label>
									</div>
						  
									<div class = "show-hide"  id="show-hide3"> 
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"  value="4730 - Computer Networks" checked name="cyber[]" id="flexRadioDefault21"  />
									<label class="form-check-label" for="flexRadioDefault21">
										4730 - Computer Networks
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"   value="5702 - Cyber Threads and Defense" checked name="cyber[]" id="flexRadioDefault22"  />
									<label class="form-check-label"  for="flexRadioDefault22" >
										5702 - Cyber Threads and Defense 
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"   value="5782 - Advanced Information Security" checked name="cyber[]" id="flexRadioDefault23" />
									<label class="form-check-label"  for="flexRadioDefault23" >
										5782 - Advanced Information Security 
									</label>
									</div>
									</div>

									<div class="form-check">
									<input class="form-check-input checkboxshowhide" type="checkbox" value="data_science" data-idno="4"  name="waviedcourse_option[]" id="waviedcourse_option4" onchange="valueChanged()"/>
									<label>
								   <strong>     Data Science </strong>
									</label>
									</div>
								 
									<div class = "show-hide"  id="show-hide4"> 
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"   value="4200 - Python for Scientific Programming and data Science" checked  name="data_science[]" id="flexRadioDefault24"  />
									<label class="form-check-label" for="flexRadioDefault24">
										4200 - Python for Scientific Programming and data Science
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"   value="5340 - Machine Learning" checked name="data_science[]" id="flexRadioDefault25"  />
									<label class="form-check-label" for="flexRadioDefault25"  >
										5340 - Machine Learning
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"  value="5342 - Data Mining" name="data_science[]" checked id="flexRadioDefault26"   />
									<label class="form-check-label"   for="flexRadioDefault26">
										5342 - Data Mining
									</label>
									</div>
									</div>

									<div class="form-check">
									<input class="form-check-input checkboxshowhide " type="checkbox" value="internet_web" data-idno="5"  name="waviedcourse_option[]"  id="waviedcourse_option5" onchange="valueChanged()"/>
									<label>
									<strong>    Internet and Web </strong>
									</label>
									</div>
								
									<div class = "show-hide" id="show-hide5"> 
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"  value="4010 - Advanced Web Development with Java"  name="internet_web[]" checked id="flexRadioDefault267"  />
									<label class="form-check-label"  for="flexRadioDefault267" >
										4010 - Advanced Web Development with Java
									</label>
									</div>
									<div class="form-check ms-3">
									<input class="form-check-input" type="checkbox" value="4011 - Web Development with Advanced JavaScript" name="internet_web[]" checked id="flexRadioDefault27" />
									<label class="form-check-label" for="flexRadioDefault27"  >
										4011 - Web Development with Advanced JavaScript
									</label>
									</div>
									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox" value="5012 - Enterprise Web Development" name="internet_web[]"  checked id="flexRadioDefault28"/>
									<label class="form-check-label" for="flexRadioDefault28"  >
										5012 - Enterprise Web Development
									</label>
									</div>
									</div>
							 
									<div class="form-check">
									<input class="form-check-input checkboxshowhide"  type="checkbox" value="mobile" data-idno="6" name="waviedcourse_option[]" id="waviedcourse_option6" onchange="valueChanged()"/>
									<label>
									  <strong> Mobile Apps and Computing </strong>
									</label>
									</div>
								  
									<div class = "show-hide" id="show-hide6"> 

									<div class="form-check ms-3">
									<input class="form-check-input " type="checkbox"  value="5020 - Android Apps: Android Fundamentals"  checked  name="mobile[]" id="flexRadioDefault29" />
									<label class="form-check-label"   for="flexRadioDefault29">
										5020 - Android Apps: Android Fundamentals
									</label>
									</div>

									<div class="form-check ms-3" >
									<input class="form-check-input" type="checkbox"   value="4220 - Introduction to iOS Programming and Apps" checked  name="mobile[]" id="flexRadioDefault30" />
									<label class="form-check-label"   for="flexRadioDefault30">
										4220 - Introduction to iOS Programming and Apps
									</label>
									</div>
									<div class="form-check ms-3">
									<input class="form-check-input" type="checkbox"   value="5792 - mobile Computing, Networking and Security"  checked  name="mobile[]" id="flexRadioDefault31" />
									<label class="form-check-label"   for="flexRadioDefault31">
										5792 - mobile Computing, Networking and Security
									</label>
									</div>

									</div>



						</div>
						<div class="col-xl-6">
								<div class="show-hide" id="letter_head2" style="display: none;">
									<div class="form-check ms-3">
									<h4>Required to Choose any 2 Electives for AI from below</h4>
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5320 - Evolutionary Computation">
											5320 - Evolutionary Computation
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5340 - Machine Learning">
											5340 - Machine Learning
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5342 - Data Mining">
											5342 - Data Mining
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5370 - Biological Data Science">
											5370 - Biological Data Science
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5390 - Deep Learning">
											5390 - Deep Learning
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5420 - Digital Image Processing and Computer Vision">
											5420 - Digital Image Processing and Computer Vision
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6320 - Advances in Evolutionary Computation">
											6320 - Advances in Evolutionary Computation
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6340 - Genetic Programming">
											6340 - Genetic Programming
										</label>
									</div>
								</div>
								<div class="show-hide" id="letter_head3" style="display: none;">
									<div class="form-check ms-3">
									<h4>Required to Choose any 1 Elective for Cyber Security from below</h4>
										<label class="form-check-label"   for="flexRadioDefault_l1" value="4700 - Computer Forensics">
											4700 - Computer Forensics
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5020 - Android Apps: Android Fundamentals">
											5020 - Android Apps: Android Fundamentals
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5222 - Advanced iOS Apps">
											5222 - Advanced iOS Apps
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5732 - Cryptography for Computer Security">
											5732 - Cryptography for Computer Security
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5750 - Cloud Computing">
											5750 - Cloud Computing
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5792 - Mobile Computing, Networking and Security">
											5792 - Mobile Computing, Networking and Security
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5794 - Security of IoT Systems">
											5794 - Security of IoT Systems
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6830 - Data Programming for Business Intelligence">
											6830 - Data Programming for Business Intelligence
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6862 - Artificial Intelligence App for Business and Cybersecurity">
											6862 - Artificial Intelligence App for Business and Cybersecurity 
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6864 - Applied Cryptography for Business Applications">
											6864 - Applied Cryptography for Business Applications
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6868 - Software Assurance">
											6868 - Software Assurance
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="6878 - Management of Information Security">
											6878 - Management of Information Security
										</label>
									</div>
								</div>
								<div class="show-hide" id="letter_head4" style="display: none;">
									<div class="form-check ms-3">
									<h4>Required to Choose any 1 Elective for Data Science from below</h4>
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5320 - Evolutionary Computation">
											5320 - Evolutionary Computation
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5370 - Biological Data Science ">
											5370 - Biological Data Science 
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5390 - Deep Learning">
											5390 - Deep Learning
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="4005 - Exploratory Data Analysis with R">
											4005 - Exploratory Data Analysis with R
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="4200 - Mathematical Statistics I">
											4200 - Mathematical Statistics I
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="4210 - Mathematical Statistics II">
											4210 - Mathematical Statistics II
										</label>
									</div>
								</div>
								<div class="show-hide" id="letter_head5" style="display: none;">
									<div class="form-check ms-3">
									<h4>Required to Choose any 1 Elective for Internet and Web from below</h4>
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5320 - Android Apps: Android Fund">
											5320 - Android Apps: Android Fund
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5030 - Intelligent Web">
											5030 - Intelligent Web
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5792 - Mobile Computing, Networking, and Security">
											5792 - Mobile Computing, Networking, and Security
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5750 - Cloud Computing">
											5750 - Cloud Computing
										</label>
									</div>
								</div>
								<div class="show-hide" id="letter_head6" style="display: none;">
									<div class="form-check ms-3">
									<h4>Required to Choose any 1 Elective for Mobile Apps and Computing from below</h4>
										<label class="form-check-label"   for="flexRadioDefault_l1" value="4610 - Database Management Systems">
											4610 - Database Management Systems
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5222 - Advanced iOS Apps">
											5222 - Advanced iOS Apps
										</label>
									</div>
									<div class="form-check ms-3">
										<label class="form-check-label"   for="flexRadioDefault_l1" value="5750 - Cloud Computing">
											5750 - Cloud Computing
										</label>
									</div>
								</div>
                            </div>
						</div>
						</div>
									

								</div>


                                <!-- data -->
                               
                                
                                    
                                
                            </div>
							
                        </div>

                        <div class="row">
                            <div class="col-xl-12 text-center">
                            <button class="btn btn-lg btn-success">Continue</button>
                        </div>
                        </div>

                    </div>
                </div>
                    </div>

                    <!-- cerficate -->
                    
<div class="tab-pane fade border" id="Course-tab" role="tabpanel" aria-labelledby="Required-Course">
 <div class="card border-0">                     
<div class="card-body">
<h3>6000 Level Required Course</h3>
<p style="margin-bottom: 20px;">One 6000 level course is
	required for degree completion. This course typically has a
	prerequisite that must be considered when planning. Essentially,
		these courses become the cornerstone of your degree.  The course you choose will automatically be planned in the next phase (if possible) with the 
		option to change.  You may also choose more than one 6000 course.</p>
				<div class="row mt-2">
								
				
						<div class="col-sm-6">
								<h5>Prerequisite</h5>
							</div>
							<div class="col-sm-6">
								<h5>6000 Level courses</h5>
								
					</div>			
				
				</div>

                <div class="row mt-2">
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body p-1 text-start">
                        <div class="btn-group btn-group-toggle w-100 " data-toggle="buttons">
                            <label class="btn btn-secondary active w-100 text-start">
                              <input type="checkbox" name="level6[]" value="5320 - Introduction to Evolutionary Computation" autocomplete="off" class="left_level_6" id="left_level_6_1" data-id-no = "1"> 
                              
                              <span class=""> 5320- Introduction to Evolutionary Computation 
                                   </span> 
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body p-0">
                        <div class="btn-group btn-group-toggle h-100" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" name="level6[]" value="6320 - Advances in Evolutionary Computation" class="right_level_6" id="right_level_6_1" data-id-no = "1"  autocomplete="off"> 
                               <span class=""> 6320-Advances in Evolutionary Computation </span> 
                             
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary text-start">
                              <input type="checkbox" name="level6[]" value = "5320 - Introduction to Evolutionary Computation" autocomplete="off" class="left_level_6" id="left_level_6_2" data-id-no = "2"> 
																		
                              5320 - Introduction to Evolutionary Computation 
                              
                                
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" name="level6[]" value="6340 - Genetic Programming" class="right_level_6" id="right_level_6_2" data-id-no = "2" autocomplete="off"> 
                              6340
                             - Genetic Programming
                             
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary text-start">
                              <input type="checkbox" name="level6[]" value="4410 - Introduction to Computer Graphics" autocomplete="off" class="left_level_6" id="left_level_6_3" data-id-no = "3"> 
																		
                              4410 - Introduction to Computer Graphics  
                                
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" name="level6[]" value="6410 - Topics in Computer Graphics"  class="right_level_6" id="right_level_6_3" data-id-no = "3" autocomplete="off"> 
                              6410 - Topics in Computer Graphics
                             
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary text-start">
                              <input type="checkbox" name="level6[]" value="5420 - Digital Image Processing" autocomplete="off" class="left_level_6" id="left_level_6_4" data-id-no = "4"> 
																		
                              5420 - Digital Image Processing  
                                
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" name="level6[]" value="6420 - Topics in Image Processing and Multimedia" class="right_level_6" id="right_level_6_4" data-id-no = "4" autocomplete="off"> 
                              6420 - Topics in Image Processing and Multimedia
                             
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary text-start">
                              <input type="checkbox" name="level6[]" value="6900 - Thesis"  class="left_level_6" id="left_level_6_6" data-id-no = "6" autocomplete="off"> 
																		
                              6900 - Thesis &nbsp; hours combined with CS 5880
                                
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                    <div class="col-xl-6">


                        <div class="card bg-light h-100">
                       <div class="card-body">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" name="level6[]" value="6900 - Thesis"  class="right_level_6" id="right_level_6_6" data-id-no = "6" autocomplete="off"> 
                              6900 - Thesis &nbsp; hours combined with CS 5880
                             
                            </label>
                       
                          </div>
                       </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-12 text-center">
                    <button class="btn btn-lg btn-success">Continue
						to Course Selection</button>
                </div>

                </div>
			
</div>
  </div>
                        
                    </div>

                  </div>
				  </form>


            </div>
        </div>
    </div>
  </section>

  <footer style="background:#333;">
    <div class="container-fluid text-white text-decoration-none">

        <div class="container pt-3 pb-3">
<div class="row">

<div class="col-xl-4">
    <h3 class="text-white">
		UMSL Links
	</h3>

    <ul class="footerlink">
        <li>

            <a href="http://www.umsl.edu/" target="_blank">
				UMSL Home Page
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
    </ul>
</div>
<div class="col-xl-4">
    <h3>
		UMSL Links
	</h3>

    <ul class="footerlink">
        <li>

            <a href="http://www.umsl.edu/" target="_blank">
				UMSL Home Page
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
    </ul>
</div>
<div class="col-xl-4">
    <h3>
		UMSL Links
	</h3>

    <ul class="footerlink">
        <li>

            <a href="http://www.umsl.edu/" target="_blank">
				UMSL Home Page
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
        <li>

            <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp" target="_blank">
				MyGateway
			</a>
        </li>
    </ul>
</div>
</div>
</div>

      </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
   $(".checkboxshowhide").change(function (){
    
    var thiidno = $(this).data('idno');
        if($(this).is(":checked")) {  
              
                    $("#show-hide"+thiidno).show();
                    $("#letter_head"+thiidno).show();
        }
        else
        {
            $("#show-hide"+thiidno).hide();
            $("#letter_head"+thiidno).hide();
         
        }
    });
</script>
<script>
	$("#transfer_course_plus").click(function (){
		var thisval = $("#transfer_course_number").val();
		var newval = parseInt(thisval)+1;
		$("#transfer_course_number").val(newval);
		$("#span_transfer_course_number").text(newval);
	});
	$("#transfer_course_minus").click(function (){
		var thisval = $("#transfer_course_number").val();
		// var newval = thisval-1;
		if(thisval > 0){
			var newval = parseInt(thisval)-1;
		}else{
			var newval = 0;
		}
		$("#transfer_course_number").val(newval);
		$("#span_transfer_course_number").text(newval);
	});
	$("#contact-tab1").click(function (){
		$("#contact-tab").addClass("active");
		$("#contact").addClass("active");
		$("#contact").addClass("show");
		$("#contact-tab").attr("aria-selected","true");
		
		$("#profile-tab").removeClass("active");
		$("#profile").removeClass("active");
		$("#profile").removeClass("show");
		$("#profile-tab").attr("aria-selected","false");
	});
	/*$("#pre_contact-tab1").click(function (){
		$("#contact-tab").addClass("active");
		$("#contact").addClass("active");
		$("#contact").addClass("show");
		$("#contact-tab").attr("aria-selected","true");
		
		$("#profile-tab").removeClass("active");
		$("#profile").removeClass("active");
		$("#profile").removeClass("show");
		$("#profile-tab").attr("aria-selected","false");
	});*/
	// $(".right_level_6").change(function(){
	$(".left_level_6").change(function(){
		var thissno = $(this).data("id-no");
		// alert(thissno);
		if($(this).is(":checked") == true){
			$("#right_level_6_"+thissno).attr("checked",true);
		}else{
			$("#right_level_6_"+thissno).removeAttr("checked");
		}
	});
	$(".right_level_6").change(function(){
		var thissno = $(this).data("id-no");
		// alert(thissno);
		if($(this).is(":checked") == true){
			// $("#left_level_6_"+thissno).attr("checked",true);
		}else{
			$("#left_level_6_"+thissno).removeAttr("checked");
		}
	});
</script>
  </body>
</html>