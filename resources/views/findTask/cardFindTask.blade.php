<div class="col-md-3 " >

<!-- Profile Image -->
<div class="card secret" style="border-style: solid; border-color: #62AC83"  id = "dashboard_side">
  <div class="card-body box-profile" style=" background:#F2F2F2; border-radius:10px">
  

<div style="display: flex; align-items: center; justify-content: center;">
    <img src="storage/users-avatar/{{ Auth::user()->avatar}}" style="border-radius: 10%;" alt="TaskSwap" height="80">
    </div>

  <div class="info" style="color: white;margin-bottom:2%">
    <a href="#" class="d-block" style="font-family:Fira Sans, sans-serif; ">{{ Auth::user()->username }}</a>
    <div class="stars">
    <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
    </div>
  </div>

<div class="form">
  <div class="input-group" data-widget="sidebar-search">
      <input id = "search-input"class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: #f0f0f0; color: #333;">
      <div class="input-group-append">
          <button  id="search-button" class="btn btn-sidebar" style="background-color:teal; color: #fff;">
              <i class="fas fa-search fa-fw"></i>
          </button> 
      </div>
  </div>
  <div class="sidebar-search-results" id="search-results" style="display: none; height: 100px; overflow-y: auto;z-index: 1000;position: absolute; width:73%">
      <div class="list-group">
          <a href="#" class="list-group-item">
              <div class="search-title">
                  
              </div>
              <div class="search-path"></div>
          </a>
      </div>
  </div>
</div>
<script>
  var selectedCategory = ""; // Initialize selectedCategory variable
</script>
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-divide"></i>
        <p>
          Mathematics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-square-root-alt"></i>
            <p data-category="Algebra">Algebra</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-calculator"></i>
            <p data-category="Calculus">Calculus</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-ruler"></i>
            <p data-category="Geometry">Geometry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-bar"></i>
            <p data-category="Statistics">Statistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-superscript"></i>
            <p data-category="Number Theory">Number Theory</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-flask"></i>
        <p>
          Natural Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
          <i class="fas fa-microscope"></i>
            <p data-category="Biology">Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-atom"></i>
            <p data-category="Chemistry">Chemistry</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-bolt"></i>
            <p data-category="Physics">Physics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p data-category="Environmental Science">Environmental Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-meteor"></i>
            <p data-category="Astronomy">Astronomy</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
      <i class="nav-icon fas fa-globe-americas"></i>
        <p>
          Social Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-brain"></i>
            <p data-category="Psychology">Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-users sociology-icon"></i>
            <p data-category="Sociology">Sociology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-user-friends"></i>
            <p data-category="Anthropology">Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-university"></i>
            <p data-category="Political Science">Political Science</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-money-bill-wave"></i>
            <p data-category="Economics">Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Humanities
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-newspaper"></i>
            <p data-category="Literature">Literature</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-history"></i>
            <p data-category="History">History</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-landmark"></i>
            <p data-category="Philosophy">Philosophy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comment-alt"></i>
            <p data-category="Linguistics">Linguistics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-praying-hands"></i>
            <p data-category="Religious Studies">Religious Studies</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-code"></i>
        <p>
          Computer Science
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fab fa-python"></i>
            <p data-category="Programming">Programming</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-cogs"></i>
            <p data-category="Algorithms">Algorithms</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-robot"></i>
            <p data-category="Artificial Intelligence">Artificial Intelligence</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-project-diagram"></i>
            <p data-category="Data Structures">Data Structures</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-wifi"></i>
            <p data-category="Computer Networks">Computer Networks</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-stethoscope"></i>
        <p>
          Health Sciences
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-pills"></i>
            <p data-category="Medicine">Medicine</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-user-nurse"></i>
            <p data-category="Nursing">Nursing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hospital"></i>
            <p data-category="Public Health">Public Health</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-apple-alt"></i>
            <p data-category="Nutrition">Nutrition</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-prescription-bottle-alt"></i>
            <p data-category="Pharmacology">Pharmacology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>
          Education
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chalkboard-teacher"></i>
            <p data-category="Educational Psychology">Educational Psychology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-school"></i>
            <p data-category="Curriculum Development">Curriculum Development</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-book-reader"></i>
            <p data-category="Teaching Methods">Teaching Methods</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hands-helping"></i>
            <p data-category="Special Education">Special Education</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-laptop"></i>
            <p data-category="Educational Technology">Educational Technology</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>
          Business and Economics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-money-bill"></i>
            <p data-category="Finance">Finance</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-dollar-sign"></i>
            <p data-category="Marketing">Marketing</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-tasks"></i>
            <p data-category="Management">Management</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-pie"></i>
            <p data-category="Microeconomics">Microeconomics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-bar"></i>
            <p data-category="Macroeconomics">Macroeconomics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-paint-brush"></i>
        <p>
          Fine Arts
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="far fa-images"></i>
            <p data-category="Visual Arts">Visual Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-theater-masks"></i>
            <p data-category="Performing Arts">Performing Arts</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-music"></i>
            <p data-category="Music">Music</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-film"></i>
            <p data-category="Film Studies">Film Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-landmark"></i>
            <p data-category="Art History">Art History</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-phone"></i>
        <p>
          Communication
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-newspaper"></i>
            <p data-category="Journalism">Journalism</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-film"></i>
            <p data-category="Media Studies">Media Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-bullhorn"></i>
            <p data-category="Public Relations">Public Relations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comments"></i>
            <p data-category="Communication Theory">Communication Theory</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-satellite-dish"></i>
            <p data-category="Mass Communication">Mass Communication</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-recycle"></i>
        <p>
          Environmental Studies
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-seedling"></i>
            <p data-category="Sustainability">Sustainability</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p data-category="Conservation Biology">Conservation Biology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe "></i>
            <p data-category="Environmental Policy">Environmental Policy</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-cloud-sun"></i>
            <p data-category="Climate Change Studies">Climate Change Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-chart-line"></i>
            <p data-category="Ecological Economics">Ecological Economics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-balance-scale"></i>
        <p>
          Law
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-gavel law-icon"></i>
            <p data-category="Criminal Law">Criminal Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-balance-scale law-icon"></i>
            <p data-category="Constitutional Law" >Constitutional Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe"></i>
            <p data-category="International Law">International Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-building"></i>
            <p data-category="Business Law">Business Law</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-hands-helping"></i>
            <p data-category="uman Rights Law">Human Rights Law</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-language"></i>
        <p>
          Languages and Linguistics
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe-americas"></i>
            <p data-category="Linguistics Anthropology">Linguistics Anthropology</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-code"></i>
            <p data-category="Syntax and Semantics">Syntax and Semantics</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-comments"></i>
            <p data-category="Sociolinguistic">Sociolinguistic</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-globe"></i>
            <p data-category="Translation Studies">Translation Studies</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-laptop-code"></i>
            <p data-category="Computational Linguistics">Computational Linguistics</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item" style="font-family:Fira Sans, sans-serif;  font-size:14px">
      <a href="#" class="nav-link" style="background-color: #FFFFFF; color: #186F65;">
        <i class="nav-icon fas fa-building"></i>
        <p>
          Architecture and Design
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-building"></i>
            <p data-category="Architectural Design">Architectural Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-city"></i>
            <p data-category="Urban Planning">Urban Planning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-couch"></i>
            <p data-category="Interior Design">Interior Design</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-tree"></i>
            <p data-category="Landscape Architecture">Landscape Architecture</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" style="background-color: cornsilk">
            <i class="fas fa-leaf"></i>
            <p data-category="Sustainable Design">Sustainable Design</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>  


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('search-input');
      const searchButton = document.getElementById('search-button');
      const searchResults = document.getElementById('search-results');

      const data = [
          { category: 'Mathematics', items: ['Algebra', 'Calculus', 'Geometry', 'Statistics', 'Number Theory'] },
          { category: 'Natural Sciences', items: ['Biology', 'Chemistry', 'Physics', 'Environmental Science', 'Astronomy'] },
          { category: 'Social Sciences', items: ['Psychology', 'Sociology', 'Anthropology', 'Political Science', 'Economics'] },
          { category: 'Humanities', items: ['Literature', 'History', 'Philosophy', 'Linguistics', 'Religious Studies'] },
          { category: 'Computer Science', items: ['Programming', 'Algorithms', 'Artificial Intelligence', 'Data Structures', 'Computer Networks'] },
          { category: 'Health Sciences', items: ['Medicine', 'Nursing', 'Public Health', 'Nutrition', 'Pharmacology'] },
          { category: 'Education', items: ['Educational Psychology', 'Curriculum Development', 'Teaching Methods', 'Special Education', 'Educational Technology'] },
          { category: 'Business and Economics', items: ['Finance', 'Marketing', 'Management', 'Microeconomics', 'Macroeconomics'] },
          { category: 'Fine Arts', items: ['Visual Arts', 'Performing Arts', 'Music', 'Film Studies', 'Art History'] },
          { category: 'Communication', items: ['Journalism', 'Media Studies', 'Public Relations', 'Communication Theory', 'Mass Communication'] },
          { category: 'Environmental Studies', items: ['Sustainability', 'Conservation Biology', 'Environmental Policy', 'Climate Change Studies', 'Ecological Economics'] },
          { category: 'Law', items: ['Criminal Law', 'Constitutional Law', 'International Law', 'Business Law', 'Human Rights Law'] },
          { category: 'Languages and Linguistics', items: ['...'] }
      ];

      function search(query) {
          const results = [];
          data.forEach(category => {
              category.items.forEach(item => {
                  if (item.toLowerCase().includes(query.toLowerCase())) {
                      results.push({ category: category.category, item: item });
                  }
              });
          });
          return results;
      }

      function displayResults(results) {
          searchResults.querySelector('.list-group').innerHTML = '';
          if (results.length > 0) {
              results.forEach(result => {
                  const item = document.createElement('a');
                  item.href = '#';
                  item.classList.add('list-group-item');
                  item.innerHTML = `<div class="search-title">${result.item}</div><div class="search-path">${result.category}</div>`;
                  searchResults.querySelector('.list-group').appendChild(item);
              });
              searchResults.style.display = 'block';
          } else {
              searchResults.querySelector('.list-group').innerHTML = '<div class="list-group-item"><div class="search-title">No results found!</div></div>';
              searchResults.style.display = 'block';
          }
      }

      function clearResults() {
          searchResults.style.display = 'none';
          searchResults.querySelector('.list-group').innerHTML = '';
      }

      searchButton.addEventListener('click', function () {
          const query = searchInput.value;
          if (query.trim() === '') {
              clearResults();
          } else {
              const results = search(query);
              displayResults(results);
          }
      });

      searchInput.addEventListener('keyup', function (event) {
                const query = searchInput.value.trim();
                if (query.trim() === '') {
                    clearResults();
                } else if (event.key === 'Enter') {
                    const results = search(query);
                    displayResults(results);
                }
            });


      searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim();
          if (query.trim() === '') {
              clearResults();
          }
      });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const categoryLinks = document.querySelectorAll('.nav-treeview p');

  categoryLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      const selectedCategory = event.target.dataset.category;
      window.location.href = `?category=${selectedCategory}`; // Update URL with selected category
    });
  });
});
  </script>

  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</div>

@include('dashboard.RatingsScript')