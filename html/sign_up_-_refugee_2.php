<?php
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
$usernameFromForm = $_POST["Username"];
$passwordFromForm = $_POST["Password"];
if(empty($usernameFromForm) || empty($passwordFromForm)){
    header("Location: sign_up_-_refugee_1.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up - Refugee 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/sign_up_-_refugee_2/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/sign_up_-_refugee_2/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u91" class="ax_default box_1">
        <div id="u91_div" class=""></div>
        <div id="u91_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u92" class="ax_default box_1">
        <div id="u92_div" class=""></div>
        <div id="u92_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u93" class="ax_default heading_1">
        <div id="u93_div" class=""></div>
        <div id="u93_text" class="text ">
          <p><span>Refugee Sign Up</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u119" class="ax_default heading_3">
        <div id="u119_div" class=""></div>
        <div id="u119_text" class="text ">
          <p><span>* Required</span></p>
        </div>
      </div>

      <form action="sign_up___refugee_created.php" method="post">

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input class="form-control" name="FirstName" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input class="form-control" name="LastName" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input class="form-control" name="Age" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Organization</label>
            <input class="form-control" name="Organization" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <input class="form-control" name="Gender" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Ethnicity</label>
            <input class="form-control" name="Ethnicity" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Languages</label>
            <input class="form-control" name="Languages" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Grade</label>
            <input class="form-control" name="Grade" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Interests and Hobbies</label>
            <input class="form-control" name="InterestsAndHobbies" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Subjects</label>
            <input class="form-control" name="Subjects" required >
        </div>

          Select image to upload:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">

    
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>

      <!-- Unnamed (Rectangle) -->
      <div id="u125" class="ax_default heading_1">
        <div id="u125_div" class=""></div>
        <div id="u125_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Navigation Bar (Group) -->
      <div id="u126" class="ax_default" data-label="Navigation Bar" data-left="0" data-top="0" data-width="1500" data-height="152">

        <!-- Menu Bar (Rectangle) -->
        <div id="u127" class="ax_default shape" data-label="Menu Bar">
          <div id="u127_div" class=""></div>
          <div id="u127_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u128" class="ax_default">
        <div id="u128_div" class=""></div>
        <div id="u128_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u129" class="ax_default icon">
        <img id="u129_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u41.svg"/>
        <div id="u129_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u130" class="ax_default icon">
        <img id="u130_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u42.svg"/>
        <div id="u130_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u131" class="ax_default icon">
        <img id="u131_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u43.svg"/>
        <div id="u131_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u132" class="ax_default icon">
        <img id="u132_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u44.svg"/>
        <div id="u132_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u133" class="ax_default heading_3">
        <div id="u133_div" class=""></div>
        <div id="u133_text" class="text ">
          <p><span>© [Company Name] 2022, All Rights Reserved</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u134" class="ax_default heading_3">
        <div id="u134_div" class=""></div>
        <div id="u134_text" class="text ">
          <p><span>Terms Of Service</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u135" class="ax_default heading_3">
        <div id="u135_div" class=""></div>
        <div id="u135_text" class="text ">
          <p><span>Privacy Policy</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u136" class="ax_default heading_3">
        <div id="u136_div" class=""></div>
        <div id="u136_text" class="text ">
          <p><span>Volunteer</span></p>
        </div>
      </div>

      <!-- Unnamed (Header) -->

      <!-- Unnamed (Rectangle) -->
      <div id="u138" class="ax_default heading_1">
        <div id="u138_div" class=""></div>
        <div id="u138_text" class="text ">
          <p><span><a href="home.php">REDU</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u139" class="ax_default link_button">
        <div id="u139_div" class=""></div>
        <div id="u139_text" class="text ">
          <p><span><a href="sign_up_-_selection_between_refugee_and_student.php">SIGN UP</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u140" class="ax_default link_button">
        <div id="u140_div" class=""></div>
        <div id="u140_text" class="text ">
          <p><span><a href="about_us.php">ABOUT</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u141" class="ax_default link_button">
        <div id="u141_div" class=""></div>
        <div id="u141_text" class="text ">
          <p><span><a href="contact_us.php">CONTACT US</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u142" class="ax_default link_button">
        <div id="u142_div" class=""></div>
        <div id="u142_text" class="text ">
          <p><span><a href="sign_in.php">LOG IN</a></span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u143" class="ax_default icon">
        <img id="u143_img" class="img " src="images/home/u27.svg"/>
        <div id="u143_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u144" class="ax_default link_button">
        <div id="u144_div" class=""></div>
        <div id="u144_text" class="text ">
          <p><span>CONNECT</span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u145" class="ax_default image">
      <a href="home.php">
        <img id="u145_img" class="img " src="images/home/u29.png"/>
      </a>
        <div id="u145_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
      <div id="u137" style="display:none; visibility:hidden;"></div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>

<?php
require ('../dbFiles/PushDataIntoDB.php');

if(getAccountObject($usernameFromForm, "Refugee") != FALSE){
    header("Location: SignUpErrorPage.php");
}else{
    $_SESSION["Username"] = $usernameFromForm;
    $_SESSION["Password"] = $passwordFromForm;
}