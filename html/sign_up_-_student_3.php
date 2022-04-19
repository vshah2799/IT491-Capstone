<?php
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();
if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"])){
    header("Location: sign_up_-_student_1.php");
}

$verificationNumbeFromForm = intval($_POST["VerificationCode"]);

if($verificationNumbeFromForm != $_SESSION["VerificationNumber"]){
    header("Location: sign_up_-_refugee_2.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up - Student 3</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/sign_up_-_student_3/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/sign_up_-_student_3/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u206" class="ax_default box_1">
        <div id="u206_div" class=""></div>
        <div id="u206_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u207" class="ax_default box_1">
        <div id="u207_div" class=""></div>
        <div id="u207_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Text Field & Labels (Outlined) (Group) -->
      <div id="u208" class="ax_default" data-label="Text Field &amp; Labels (Outlined)" data-left="551" data-top="330" data-width="399" data-height="319">

        <!-- Unnamed (Rectangle) -->
        <div id="u209" class="ax_default heading_1">
          <div id="u209_div" class=""></div>
          <div id="u209_text" class="text ">
            <p><span>&nbsp; Student Sign Up</span></p>
          </div>
        </div>

      </div>

      <form action="sign_up_-_student_created.php" method="post">

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
            <label class="form-label">School</label>
            <input class="form-control" name="School" required >
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
      <div id="u234" class="ax_default heading_3">
        <div id="u234_div" class=""></div>
        <div id="u234_text" class="text ">
          <p><span>* Required</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u237" class="ax_default">
        <div id="u237_div" class=""></div>
        <div id="u237_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u238" class="ax_default icon">
        <img id="u238_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u41.svg"/>
        <div id="u238_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u239" class="ax_default icon">
        <img id="u239_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u42.svg"/>
        <div id="u239_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u240" class="ax_default icon">
        <img id="u240_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u43.svg"/>
        <div id="u240_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u241" class="ax_default icon">
        <img id="u241_img" class="img " src="images/sign_up_-_selection_between_refugee_and_student/u44.svg"/>
        <div id="u241_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u242" class="ax_default heading_3">
        <div id="u242_div" class=""></div>
        <div id="u242_text" class="text ">
          <p><span>© [Company Name] 2022, All Rights Reserved</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u243" class="ax_default heading_3">
        <div id="u243_div" class=""></div>
        <div id="u243_text" class="text ">
          <p><span>Terms Of Service</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u244" class="ax_default heading_3">
        <div id="u244_div" class=""></div>
        <div id="u244_text" class="text ">
          <p><span>Privacy Policy</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u245" class="ax_default heading_3">
        <div id="u245_div" class=""></div>
        <div id="u245_text" class="text ">
          <p><span>Volunteer</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u246" class="ax_default heading_2">
        <div id="u246_div" class=""></div>
        <div id="u246_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u247" class="ax_default heading_1">
        <div id="u247_div" class=""></div>
        <div id="u247_text" class="text ">
          <p><span>Refugees need your help!</span></p>
        </div>
      </div>

      <!-- Navigation Bar (Group) -->
      <div id="u248" class="ax_default" data-label="Navigation Bar" data-left="0" data-top="-12" data-width="1500" data-height="164">

        <!-- Menu Bar (Rectangle) -->
        <div id="u249" class="ax_default shape" data-label="Menu Bar">
          <div id="u249_div" class=""></div>
          <div id="u249_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>

        <!-- Unnamed (Header) -->

        <!-- Unnamed (Rectangle) -->
        <div id="u251" class="ax_default heading_1">
          <div id="u251_div" class=""></div>
          <div id="u251_text" class="text ">
            <p><span><a href="home.php">REDU</a></span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u252" class="ax_default link_button">
          <div id="u252_div" class=""></div>
          <div id="u252_text" class="text ">
            <p><span><a href="sign_up_-_selection_between_refugee_and_student.php">SIGN UP</a></span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u253" class="ax_default link_button">
          <div id="u253_div" class=""></div>
          <div id="u253_text" class="text ">
            <p><span><a href="about_us.php">ABOUT</a></span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u254" class="ax_default link_button">
          <div id="u254_div" class=""></div>
          <div id="u254_text" class="text ">
            <p><span><a href="contact_us.php">CONTACT US</a></span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u255" class="ax_default link_button">
          <div id="u255_div" class=""></div>
          <div id="u255_text" class="text ">
            <p><span><a href="sign_in.php">LOG IN</a></span></p>
          </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u256" class="ax_default icon">
          <img id="u256_img" class="img " src="images/home/u27.svg"/>
          <div id="u256_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u257" class="ax_default link_button">
          <div id="u257_div" class=""></div>
          <div id="u257_text" class="text ">
            <p><span>CONNECT</span></p>
          </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u258" class="ax_default image">
        <a href="home.php">
          <img id="u258_img" class="img " src="images/home/u29.png"/>
        </a>
          <div id="u258_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>
        <div id="u250" style="display:none; visibility:hidden;"></div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
<?php
