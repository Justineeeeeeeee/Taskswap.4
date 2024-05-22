    var originalContent = document.getElementById('dashboard_section').innerHTML;
    var originalContent_2 = document.getElementById('dashboard_side').innerHTML;

    var inboxCard = document.getElementById('inboxCard').innerHTML;


   
    function Myportfolio() {
      var card = document.getElementById('dashboard_section');
      card.innerHTML = `
      <div  style="border-style: solid; border-color: #62AC83; border-radius:20px; padding:2%" >

      <div class="blogs-content">
                    <div class="main-title">
                        <h2 style = "color:#62AC83">My <span style= "color:#62AC83">Portfolio</span><span class="bg-text"></span></h2>
                    </div>
                    <div class="blogs">
                        <div class="blog">
                            <img src="assets/images/port6.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    How to Create Your Own Website
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                        <div class="blog">
                            <img src="assets/images/blog1.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    How to Become an Expert in Web Design
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                        <div class="blog">
                            <img src="assets/images/blog2.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    Become a Web Designer in 10 Days
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                        <div class="blog">
                            <img src="assets/images/blog3.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    Debbuging made easy with Web Inspector
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                        <div class="blog">
                            <img src="assets/images/port1.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    Get started with Web Design and UI Design
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                        <div class="blog">
                            <img src="assets/images/port3.jpg" alt="">
                            <div class="blog-text">
                                <h4>
                                    This is what you need to know about Web Design
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Doloribus natus voluptas, eos obcaecati recusandae amet?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
      `
    }



    
    function transactionCard() {
        dashboard_card()
        function dashboard_card(){
            var card = document.getElementById('dashboard_side');
            card.innerHTML = originalContent_2;
        }
            var card = document.getElementById('dashboard_section');
            card.innerHTML = `

            <!-- Main content -->
      <section class="content" style="border-style: solid; border-color: #62AC83; border-radius: 10px " id ="transaction_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1>Transaction History</h1>
        </div>
        <!-- filter -->
        <div class="row">
        <div class="form-group col-md-6">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
          </div>
          <div class="form-group col-md-6">
                  <label>Date range button:</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>


              <!-- /.card-header -->
              <div class="card-body p-0">
              <div class="table-container">
              <table class="table table-hover" id="transactions">
                <thead style="background-color: #62AC83; color:white">
                  <tr>
                    <th>DATE & TIME</th>
                    <th>TRANSFER TO</th>
                    <th>TRANSFER FROM</th>
                    <th width = "20%">REFERENCE NO.</th>
                    <th width = "10%">AMOUNT</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  <tr>
                    <td>12 Mar, 2021<br>21:22</td>
                    <td>GCash<br>0921 151 2369</td>
                    <td>TaskSwap<br>JuanDelaCruz</td>
                    <td>123456789</td>
                    <td>Php 500.00<br>50 Tokens</td>
                  </tr>
                  </tbody>
                </table>
  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
            `;
        }

        function statusCard() {
            var card = document.getElementById('dashboard_section');
            card.innerHTML = originalContent;
            dashboard_card()
            function dashboard_card(){
                var card = document.getElementById('dashboard_side');
                card.innerHTML = originalContent_2;
            }
        }


        function TaskStatus() {
            dashboard_card()
            function dashboard_card(){
                var card = document.getElementById('dashboard_side');
                card.innerHTML = originalContent_2;
            }
            var card = document.getElementById('dashboard_section');
            card.innerHTML = `
         
            `;
        }

        function inbox(){

       TaskStatus();
       inbox_content();
        function TaskStatus() {
            var card = document.getElementById('dashboard_side');
            card.innerHTML = inboxCard;
        }
    


        function inbox_content() {
            var card = document.getElementById('dashboard_section');
            card.innerHTML = `

        `;
        }
    }

    function Find_stask() {
      findtaskSection()
      findtaskSide()


      function findtaskSide(){
        var card = document.getElementById('dashboard_side')
        card.innerHTML = `

<!-- Profile Image -->
<div class="card" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style="border-style: solid; border-color: #62AC83; border-radius: 10px">
  
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  <div class="image">
    <img src="dist/img/ngi.png" class="img-circle elevation-2" alt="User Image">
  </div>
  <div class="info" style="color: white">
    <a href="#" class="d-block">Ako si Natoy</a>
    <div class="stars">
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="star">&#9733;</span>
      <span class="empty-stars">&#9733;</span>
    </div>
  </div>
</div>
<div class="form">
  <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: #f0f0f0; color: #333;">
      <div class="input-group-append">
          <button class="btn btn-sidebar" style="background-color: teal; color: #fff;">
              <i class="fas fa-search fa-fw"></i>
          </button> 
      </div>
  </div>
  <div class="sidebar-search-results">
      <div class="list-group">
          <a href="#" class="list-group-item">
              <div class="search-title">
                  <strong class="text-light"></strong>No<strong class="text-light"></strong> <strong class="text-light"></strong>el<strong class="text-light"></strong>em<strong class="text-light"></strong>en<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong>
              </div>
              <div class="search-path"></div>
          </a>
      </div>
  </div>
</div>
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-divide"></i>
        <p>
          Mathematics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-square-root-alt"></i>
            <p>Algebra</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-calculator"></i>
            <p>Calculus</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-ruler"></i>
            <p>Geometry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-chart-bar"></i>
            <p>Statistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-superscript"></i>
            <p>Number Theory</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-flask"></i>
        <p>
          Natural Science
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
          <i class="fas fa-microscope"></i>
            <p>Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-atom"></i>
            <p>Chemistry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-bolt"></i>
            <p>Physics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-leaf"></i>
            <p>Environmental Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-meteor"></i>
            <p>Astronomy</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-globe-americas"></i>
        <p>
          Social Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-brain"></i>
            <p>Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-users sociology-icon"></i>
            <p>Sociology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-user-friends"></i>
            <p>Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-university"></i>
            <p>Political Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-money-bill-wave"></i>
            <p>Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Humanities
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-newspaper"></i>
            <p>Literature</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-history"></i>
            <p>History</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-landmark"></i>
            <p>Philosophy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-comment-alt"></i>
            <p>Linguistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-praying-hands"></i>
            <p>Religious Studies</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-code"></i>
        <p>
          Computer Science
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fab fa-python"></i>
            <p>Programming</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-cogs"></i>
            <p>Algorithms</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-robot"></i>
            <p>Artificial Intelligence</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-project-diagram"></i>
            <p>Data Structures</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-wifi"></i>
            <p>Computer Networks</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-stethoscope"></i>
        <p>
          Health Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-pills"></i>
            <p>Medicine</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-user-nurse"></i>
            <p>Nursing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-hospital"></i>
            <p>Public Health</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-apple-alt"></i>
            <p>Nutrition</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-prescription-bottle-alt"></i>
            <p>Pharmacology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>
          Education
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Educational Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-school"></i>
            <p>Curriculum Development</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-book-reader"></i>
            <p>Teaching Methods</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-hands-helping"></i>
            <p>Special Education</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-laptop"></i>
            <p>Educational Technology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
          Business and Economics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-money-bill"></i>
            <p>Finance</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-dollar-sign"></i>
            <p>Marketing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-tasks"></i>
            <p>Management</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-chart-pie"></i>
            <p>Microeconomics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-chart-bar"></i>
            <p>Macroeconomics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-paint-brush"></i>
        <p>
          Fine Arts
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="far fa-images"></i>
            <p>Visual Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-theater-masks"></i>
            <p>Performing Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-music"></i>
            <p>Music</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-film"></i>
            <p>Film Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-landmark"></i>
            <p>Art History</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-phone"></i>
        <p>
          Communication
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-newspaper"></i>
            <p>Journalism</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-film"></i>
            <p>Media Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-bullhorn"></i>
            <p>Public Relations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-comments"></i>
            <p>Communication Theory</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-satellite-dish"></i>
            <p>Mass Communication</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-recycle"></i>
        <p>
          Environmental Studies
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-seedling"></i>
            <p>Sustainability</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-leaf"></i>
            <p>Conservation Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-globe "></i>
            <p>Environmental Policy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-cloud-sun"></i>
            <p>Climate Change Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-chart-line"></i>
            <p>Ecological Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-balance-scale"></i>
        <p>
          Law
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-gavel law-icon"></i>
            <p>Criminal Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-balance-scale law-icon"></i>
            <p>Constitutional Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-globe"></i>
            <p>International Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-building"></i>
            <p>Business Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-hands-helping"></i>
            <p>Human Rights Law</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-language"></i>
        <p>
          Languages and Linguistics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-globe-americas"></i>
            <p>Linguistics Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-code"></i>
            <p>Syntax and Semantics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-comments"></i>
            <p>Sociolinguistic</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-globe"></i>
            <p>Translation Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-laptop-code"></i>
            <p>Computational Linguistics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-building"></i>
        <p>
          Architecture and Design
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-building"></i>
            <p>Architectural Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-city"></i>
            <p>Urban Planning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-couch"></i>
            <p>Interior Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-tree"></i>
            <p>Landscape Architecture</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: teal">
            <i class="fas fa-leaf"></i>
            <p>Sustainable Design</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>

  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->`
      }

      function findtaskSection(){
          var card = document.getElementById('dashboard_section');
          card.innerHTML =  `
          <div  style="border-style: solid; border-color: #62AC83; border-radius:20px" >
          <div >
          <!-- Content Header (Page header) -->
          <div class="content-header" >
          <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
              <div class="nav-item dropdown">
                <a class="nav-link bg-teal dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
                <div class="dropdown-menu mt-0">
                  <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
                  <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
                </div>
              </div>
              <a class="nav-link bg-gray" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
              <ul class="navbar-nav overflow-hidden" role="tablist"><li class="nav-item active" role="presentation"><a href="#" class="btn-iframe-close" data-widget="iframe-close" data-type="only-this"><i class="fas fa-times"></i></a><a class="nav-link active" data-toggle="row" id="tab-index3-html" href="#panel-index3-html" role="tab" aria-controls="panel-index3-html" aria-selected="true">C++ Example TAB</a></li></ul>
              <a class="nav-link bg-gray" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
          <!-- Main content -->
          <section class="content" style="margin-left: 4%; margin-right:4%">
            <div class="container-fluid" >
                    <!-- /.col-md-6 -->
                    <div class="col-lg-15">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title m-0" style="font-size:35px">Program in C++ to print the sum of two numbers. </h1>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title" style="font-size:27px">Write a program in C++ to print the sum of two numbers.</h2>
                      <p class="card-text">
                        Sample Output:</p>
                      <p>Print the sum of two numbers :</p>
                      <p>The sum of 29 and 30 is : 59</p>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalRelatedContent">
                        Message Me<i class="far fa-envelope ml-2"></i>
                      </button>  
                    </div>
                  </div>
                  <!-- /.col-md-6 -->
                <div class="col-lg-15">
                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title m-0" style="font-size:35px">Program in C++ to print the sum of two numbers. </h1>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title" style="font-size:27px">Write a program in C++ to print the sum of two numbers.</h2>
                      <p class="card-text">
                        Sample Output:</p>
                      <p>Print the sum of two numbers :</p>
                      <p>The sum of 29 and 30 is : 59</p>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalRelatedContent">
                        Message Me<i class="far fa-envelope ml-2"></i>
                      </button>                               
                    </div>
                  </div>
          </div>
      <!-------------------------------------------- End of Timeline content ------------------------------------------------->
              <div class="tab-loading" style="height: 50px; display: none;">
                <div>
                  <h2 class="display-4">Please Wait<i class="fa fa-sync fa-spin"></i></h2>
                </div>
              </div>  
          </div>
          </div>
      </div>
          </section>
      
          <!--Modal: modalRelatedContent-->
      <div class="modal fade" id="modalRelatedContent" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <!--Content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Compose a Message</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <div class="">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="To" fdprocessedid="qwii1f">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Cc" fdprocessedid="kuvitr">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Bcc" fdprocessedid="4gwbj">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" fdprocessedid="af06oc">
                    </div>
                    <div class="form-group">
                        <div class="summernote" style="display: none;">
                            <h6>Hello Summernote</h6>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p>
                                End of air-mode area
                            </p>
      
                        </div><div class="note-editor note-frame card"><div class="note-dropzone">  <div class="note-dropzone-message"></div></div><div class="note-toolbar card-header" role="toolbar"><div class="note-btn-group btn-group note-style"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button><div class="dropdown-menu dropdown-style" role="list" aria-label="Style"><a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p"><p>Normal</p></a><a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote"><blockquote class="blockquote">Blockquote</blockquote></a><a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre"><pre>Code</pre></a><a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1"><h1>Header 1</h1></a><a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2"><h2>Header 2</h2></a><a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3"><h3>Header 3</h3></a><a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4"><h4>Header 4</h4></a><a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5"><h5>Header 5</h5></a><a class="dropdown-item" href="#" data-value="h6" role="listitem" aria-label="h6"><h6>Header 6</h6></a></div></div></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" role="button" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" role="button" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div><div class="note-btn-group btn-group note-fontname"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family"><span class="note-current-fontname" style="font-family: &quot;Source Sans Pro&quot;;">Source Sans Pro</span></button><div class="dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family"><a class="dropdown-item" href="#" data-value="Arial" role="listitem" aria-label="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a><a class="dropdown-item" href="#" data-value="Arial Black" role="listitem" aria-label="Arial Black"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial Black'">Arial Black</span></a><a class="dropdown-item" href="#" data-value="Comic Sans MS" role="listitem" aria-label="Comic Sans MS"><i class="note-icon-menu-check"></i> <span style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a><a class="dropdown-item" href="#" data-value="Courier New" role="listitem" aria-label="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a><a class="dropdown-item" href="#" data-value="Helvetica" role="listitem" aria-label="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a><a class="dropdown-item" href="#" data-value="Impact" role="listitem" aria-label="Impact"><i class="note-icon-menu-check"></i> <span style="font-family: 'Impact'">Impact</span></a><a class="dropdown-item" href="#" data-value="Tahoma" role="listitem" aria-label="Tahoma"><i class="note-icon-menu-check"></i> <span style="font-family: 'Tahoma'">Tahoma</span></a><a class="dropdown-item" href="#" data-value="Times New Roman" role="listitem" aria-label="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a><a class="dropdown-item" href="#" data-value="Verdana" role="listitem" aria-label="Verdana"><i class="note-icon-menu-check"></i> <span style="font-family: 'Verdana'">Verdana</span></a><a class="dropdown-item checked" href="#" data-value="Source Sans Pro" role="listitem" aria-label="Source Sans Pro"><i class="note-icon-menu-check"></i> <span style="font-family: 'Source Sans Pro'">Source Sans Pro</span></a></div></div></div><div class="note-btn-group btn-group note-color"><div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" role="button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button><div class="dropdown-menu" role="list"><div class="note-palette">  <div class="note-palette-title">Background Color</div>  <div>    <button type="button" class="note-color-reset btn btn-light" data-event="backColor" data-value="inherit">Transparent    </button>  </div>  <div class="note-holder" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div></div></div>  <div>    <button type="button" class="note-color-select btn" data-event="openPalette" data-value="backColorPicker">Select    </button>    <input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette">  </div>  <div class="note-holder-custom" id="backColorPalette" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div></div></div></div><div class="note-palette">  <div class="note-palette-title">Foreground Color</div>  <div>    <button type="button" class="note-color-reset btn btn-light" data-event="removeFormat" data-value="foreColor">Reset to default    </button>  </div>  <div class="note-holder" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div></div></div>  <div>    <button type="button" class="note-color-select btn" data-event="openPalette" data-value="foreColorPicker">Select    </button>    <input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette">  <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div></div></div></div></div></div></div></div><div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button><div class="dropdown-menu" role="list"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div></div></div></div><div class="note-btn-group btn-group note-table"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table"><i class="note-icon-table"></i></button><div class="dropdown-menu note-table" role="list" aria-label="Table"><div class="note-dimension-picker">  <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>  <div class="note-dimension-picker-highlighted"></div>  <div class="note-dimension-picker-unhighlighted"></div></div><div class="note-dimension-display">1 x 1</div></div></div></div><div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Video" data-original-title="Video"><i class="note-icon-video"></i></button></div><div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen" role="button" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-codeview" role="button" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div></div><div class="note-editing-area" data-quillbot-parent="ESLAb7FtqB5l7ZgsNvD55"><div class="note-handle"><div class="note-control-selection" style="display: none;"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable" role="textbox" aria-multiline="true" data-gramm="false" wt-ignore-input="true"></textarea><quillbot-extension-highlights data-element-id="ESLAb7FtqB5l7ZgsNvD55" data-element-type="html" style="display: initial; visibility: initial; opacity: initial; clip-path: initial; position: relative; top: 0px; left: 0px; z-index: 1 !important; pointer-events: none;"></quillbot-extension-highlights><div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" style="height: 158.656px;" data-gramm="false" wt-ignore-input="true" data-quillbot-element="ESLAb7FtqB5l7ZgsNvD55">
                
                            <h6>Hello Summernote</h6>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p>
                                End of air-mode area</p>
      
                        </div></div><output class="note-status-output" aria-live="polite"></output><div class="note-statusbar" role="status">  <output class="note-status-output" aria-live="polite"></output>  <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>  </div></div><div class="modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Link</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group"><label class="note-form-label">Text to display</label><input class="note-link-text form-control note-form-control note-input" type="text"></div><div class="form-group note-form-group"><label class="note-form-label">To what URL should this link go?</label><input class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div><div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"> <input role="checkbox" type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Image</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group note-group-select-from-files"><label class="note-form-label">Select from files</label><input class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group note-group-image-url" style="overflow:auto;"><label class="note-form-label">Image URL</label><input class="note-image-url form-control note-form-control note-input  col-md-12" type="text"></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Video</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group row-fluid"><label class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control note-form-control note-input" type="text"></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Help</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>    <div class="modal-footer"><p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.12</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div>  </div></div></div></div>
                    </div>
                    <div class="text-right mb-3">
                      <button class="btn btn-danger" type="submit">Discard</button> 
                      <button class="btn btn-secondary" type="submit">Draft</button> 
                      <button class="btn btn-primary" type="submit" style="background-color: #62AC83; border-color: #62AC83;">Send</button>
                  </div>                      
                </form>
            </div>
          </div>
          
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>



          `;
      }
    }