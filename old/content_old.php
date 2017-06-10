
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
<form>
     <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="u_name" placeholder="Enter your name" required="required">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleSelect1">Country</label>
    <select class="form-control" id="exampleSelect1">
      <option>India</option>
      <option>America</option>
      <option>Nepal</option>
      <option>Bangladesh</option>
      <option>Russia</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleSelect1">Gender</label>
    <select class="form-control" id="exampleSelect1">
      <option>Male</option>
      <option>Femal</option>
      <option>Nor defined</option>
    </select>
  </div>
       <div class="form-group">
    <label for="exampleInputFile">Birthday</label>
    <input type="date" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>


        <form name="form2" method="post" action="">
            Name: <input type="text" name="u_name" placeholder="Enter your name" required="required"><br>
            Password: <input type="password" name="u_pass" placeholder="Enter your Password" required="required"><br>
            Email: <input type="text" name="u_email" placeholder="Enter your email" required="required"><br>
            Country:<select name="u_country">
                <option>India</option>
                <option>America</option>
                <option>Nepal</option>
                <option>South Africa</option>
                <option>Russia</option>
            </select><br>
            Gender:<select name="u_gender" required="required">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select><br>
            Birthday :<input type="date" name="u_birthday"><br>
            <button name="sign_up">Signup</button>
        </form>
        </div></div></div>
 <?php
        include 'user_insert.php';
        ?>