<!-- <?php
$insert = false;
if(isset($_POST['first_name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect( $server, $username, $password);
    
    if(!$con)  {
        die("connetion to this database fail" .mysqli_connect_error());
    }
    // else{
    //     echo"succes conneting to the database";
    // };
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $coments = $_POST['coments'];
 
    $sql = "INSERT INTO `stel_info`.`slection_info` (`first_name`, `last_name`,
     `email`, `coments`, `date`) VALUES ('$first_name', '$last_name', '$email', 
     '$coments', current_timestamp())";
    //  echo $sql;

    if($con->query($sql) == true){
        // echo "<div id='liveAlertPlaceholder'>Form sumited succesfully</div>
        // ";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con -> error";
    };
    $con-> close() ;
}   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Info for selection</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <span class="text"> Forms for students selection: </span>
      </div>
    </nav>
    <?php
    if($insert == true){
   echo" <div id='liveAlertPlaceholder'>Form sumited succesfully</div>";
    };
    ?>
    <div class="container">
      <form action="index.php" method="POST">
        <div class="row">
          <div class="col">
            <input
              type="text"
              name="first_name"
              class="form-control"
              placeholder="First name"
              aria-label="First name"
            />
          </div>
          <div class="col">
            <input
              type="text"
              name="last_name"
              class="form-control"
              placeholder="Last name"
              aria-label="Last name"
            />
          </div>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input
            type="email"
            name="email"
            class="form-control"
            id="inputEmail4"
            placeholder="example123@example.com"
          />
        </div>
        <div class="form-floating my-2">
          <textarea
            class="form-control"
            name="coments"
            placeholder="Leave extra info here"
            id="floatingTextarea"
          ></textarea>
          <label for="floatingTextarea">Leave extra info here:</label>
        </div>

        <div class="col-12 my-2">
          <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
      </form>
      <a href="http://localhost/forms" type="button" class="btn btn-primary">Add more/clear</a>
      <span>*if form submited already then click to add more</span>
    </div>
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=stel_info&table=slection_info" type="button" class="btn btn-primary my-3">check database</a>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    >
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}
</script>
  </body>
</html>
 -->
