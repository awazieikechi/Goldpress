<?php include ('header.php');  ?>

<header id="header">
  <div class= "container">
    <div class="row">
        <div class= "col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small> </h1>
        </div>
        <div class="col-md-2">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Create Content
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Add Post</a></li>
              <li><a href="#">Add Page</a></li>
              <li><a href="#">Add User</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active"> Dashboard</li>
    </ol>

  </div>

</section>

<section id="main">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
            <div class="list-group ">
              <a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  Dashboard
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">50</span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">300</span></a>
              </div>

            <div class ="well">
              <h4> Disk Space Used</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  60%
                </div>
              </div>
              <h4> Bandwidth Used</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                  70%
                </div>
              </div>

            </div>
          </div>
          <div class ="col-md-9">

            <!-- Website Overview -->

              <div class="panel panel-default ">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title ">Website Overview</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                  <div class ="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203 </h2>
                    <h4> Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                <div class ="well dash-box">
                  <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12 </h2>
                  <h4> Pages</h4>
                </div>
              </div>
              <div class="col-md-3">
              <div class ="well dash-box">
                <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 50 </h2>
                <h4> Posts</h4>
              </div>
            </div>
            <div class="col-md-3">
            <div class ="well dash-box">
              <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 203 </h2>
              <h4> Visitors</h4>
            </div>
          </div>
                </div>
                </div>

          <!-- Latest Users-->

          <div class="panel panel-default">
             <div class="panel-heading main-color-bg">
             <h3 class="panel-title">Latest Users</h3>
               </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                  </tr>
                  <tr>
                    <th>Jasper</th>
                    <th>jas@gmail.com</th>
                    <th>January 12, 2017</th>
                  </tr>
                  <tr>
                    <th>Tunde</th>
                    <th>dash4@gmail.com</th>
                    <th>January 14, 2017</th>
                  </tr>
                  <tr>
                    <th>Wtill</th>
                    <th>will@gmail.com</th>
                    <th>January 16, 2017</th>
                  </tr>
                  <tr>
                    <th>Sussy</th>
                    <th>sazz@gmail.com</th>
                    <th>January 18, 2017</th>
                  </tr>
                  <tr>
                    <th>Malcome</th>
                    <th>asnjs@gmail.com</th>
                    <th>January 20, 2017</th>
                  </tr>
                  <tr>
                    <th>Jane</th>
                    <th>jassse@gmail.com</th>
                    <th>January 22, 2017</th>
                  </tr>

                </table>
               </div>
          </div>
          </div>
      </div>

   </div>
</section>

<?php include('footer.php');  ?>
