<?php
require ('../dbFiles/PushDataIntoDB.php');
require ('../dbFiles/StudentOrRefugeeAccountObject.php');
require ('../dbFiles/SchoolAccountObject.php');
require ('../dbFiles/RefugeeOrganizationAccountObject.php');
$sessionCook = session_set_cookie_params(0, "../CookieInfo");
session_start();

if(!isset($_SESSION["Username"]) || !isset($_SESSION["AccountObject"])){
    header("Location: sign_in.php");
}

if($_SESSION["AccountObject"] instanceof StudentOrRefugeeAccountObject){
    header("Location: accounts_page_-_refugee_edit.php");
}elseif ($_SESSION["AccountObject"] instanceof SchoolAccountObject){
    header("Location: accounts_page_-_school_admin.php");
}

$accountObject = $_SESSION["AccountObject"];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Accounts page - Refugee Edit</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/accounts_page_-_refugee_edit/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/accounts_page_-_refugee_edit/data.js"></script>
    <script type="text/javascript">
        $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
        $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
        $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
</head>
<body>
<div id="base" class="">

    <!-- Unnamed (Rectangle) -->
    <div id="u693" class="ax_default heading_2">
        <div id="u693_div" class=""></div>
        <div id="u693_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u694" class="ax_default heading_1">
        <div id="u694_div" class=""></div>
        <div id="u694_text" class="text ">
            <p><span>My Account</span></p>
        </div>
    </div>

    <!-- Navigation Bar (Group) -->
    <div id="u695" class="ax_default" data-label="Navigation Bar" data-left="0" data-top="0" data-width="1500" data-height="152">

        <!-- Menu Bar (Rectangle) -->
        <div id="u696" class="ax_default shape" data-label="Menu Bar">
            <div id="u696_div" class=""></div>
            <div id="u696_text" class="text " style="display:none; visibility: hidden">
                <p></p>
            </div>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u697" class="ax_default">
        <div id="u697_div" class=""></div>
        <div id="u697_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u698" class="ax_default icon">
        <img id="u698_img" class="img " src="images/sign_up_-_student_created/u40.svg"/>
        <div id="u698_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u699" class="ax_default icon">
        <img id="u699_img" class="img " src="images/sign_up_-_student_created/u41.svg"/>
        <div id="u699_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u700" class="ax_default icon">
        <img id="u700_img" class="img " src="images/sign_up_-_student_created/u42.svg"/>
        <div id="u700_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u701" class="ax_default icon">
        <img id="u701_img" class="img " src="images/sign_up_-_student_created/u43.svg"/>
        <div id="u701_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u702" class="ax_default heading_3">
        <div id="u702_div" class=""></div>
        <div id="u702_text" class="text ">
            <p><span>© [Company Name] 2022, All Rights Reserved</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u703" class="ax_default heading_3">
        <div id="u703_div" class=""></div>
        <div id="u703_text" class="text ">
            <p><span>Terms Of Service</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u704" class="ax_default heading_3">
        <div id="u704_div" class=""></div>
        <div id="u704_text" class="text ">
            <p><span>Privacy Policy</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u705" class="ax_default heading_3">
        <div id="u705_div" class=""></div>
        <div id="u705_text" class="text ">
            <p><span>Volunteer</span></p>
        </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u706" class="ax_default" data-left="131" data-top="343" data-width="1224" data-height="1736">

        <!-- Unnamed (Image) -->
        <div id="u707" class="ax_default image">
            <img id="u707_img" class="img " src="images/refugee_list_page/p0.jpg"/>
            <div id="u707_text" class="text " style="display:none; visibility: hidden">
                <p></p>
            </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u708" class="ax_default primary_button">
            <img id="u708_img" class="img " src="images/accounts_page_-_refugee_edit/u708.svg"/>
            <div id="u708_text" class="text ">
                <p><span>Return</span></p>
            </div>
        </div>

    </div>

    <!-- Unnamed (Header) -->

    <!-- Unnamed (Rectangle) -->
    <div id="u712" class="ax_default heading_1">
        <div id="u712_div" class=""></div>
        <div id="u712_text" class="text ">
            <p><span><a href="home.php">REDU</a></span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u713" class="ax_default link_button">
        <div id="u713_div" class=""></div>
        <div id="u713_text" class="text ">
            <p><span><a href="sign_up_-_selection_between_refugee_and_student.php">SIGN UP</a></span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u714" class="ax_default link_button">
        <div id="u714_div" class=""></div>
        <div id="u714_text" class="text ">
            <p><span><a href="about_us.php">ABOUT</a></span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u715" class="ax_default link_button">
        <div id="u715_div" class=""></div>
        <div id="u715_text" class="text ">
            <p><span><a href="contact_us.php">CONTACT US</a></span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u716" class="ax_default link_button">
        <div id="u716_div" class=""></div>
        <div id="u716_text" class="text ">
            <p><span><a href="sign_in.php">LOG IN</a></span></p>
        </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u717" class="ax_default icon">
        <img id="u717_img" class="img " src="images/home/u27.svg"/>
        <div id="u717_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u718" class="ax_default link_button">
        <div id="u718_div" class=""></div>
        <div id="u718_text" class="text ">
            <p><span>CONNECT</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u719" class="ax_default image">
        <a href="home.php"></a>
        <img id="u719_img" class="img " src="images/home/u29.png"/>
        </a>
        <div id="u719_text" class="text " style="display:none; visibility: hidden">
            <p></p>
        </div>
    </div>
    <div id="u711" style="display:none; visibility:hidden;"></div>

    <div class="mx-auto" style="width: 200px;">
        <a href="accounts_page_-_refugee.php" type="button" id="return" class="btn btn-secondary" >Return</a>
    </div>

    <form method="post">
        <fieldset disabled>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" name="Password" id="disabledInput" value=<?php echo $accountObject->getUsername()?> >
            </div>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input class="form-control" name="FirstName" value=<?php echo $accountObject->getAdminFirstName();?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input class="form-control" name="LastName" value=<?php echo $accountObject->getAdminLastName();?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Organization or School</label>
                <input class="form-control" name="Organization" value=<?php echo $accountObject->getSchool();?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <input class="form-control" name="Gender" value=<?php echo $accountObject->getAddress();?> >
            </div>
        </fieldset>
    </form>
</div>
<script src="resources/scripts/axure/ios.js"></script>
</body>
</html>