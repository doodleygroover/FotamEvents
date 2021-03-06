<!-- TODO: Redirect user to login if user is not logged in.
     After logging in, user will be directed to search.php.
 -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!-- TODO: Make this dynamic and write a text resize script to ensure the title isn't too wide. -->
    <title>Palm Trees & Chickens</title>
    <?php include_once("includes/meta.php");?>
    <?php include_once("includes/resources.php"); ?>
</head>
<body>

<!-- TODO: make the background image for this class dynamic. -->
<div class = "mainBackground" style = 'background-image:url("img/elements/white-40.png"), url("http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook");'></div>
<?php include_once("includes/nav.php");?>



<div id = "container">

    <!-- TODO: New header format: Implement on all pages tied to an event (everything but event finder/search results) -->
    <div class="headerTextWrapper">
        <div class = "blurryHeaderWrapper"></div>
        <!-- TODO: Make this pull the event's featured image -->
        <div class = "blurryHeader" style = "background-image:url('http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook');"></div>
        <h1 class = "headerText">Palm Trees & Chickens</h1>
        <div class = "descriptionBox headerDescription">An event dedicated to subjecting developers to my vacation photos. Enter to win absolutely nothing.</div>
    </div>




    <div id =  "wrap" style = "margin:0 1px;">



        <ul class = "dropdownContainer">
            <!-- TODO: These buttons should reflect the current selection (default is shown) with additional selection options shown in the submenu. -->
            <li><button class = "glassy glassyDropdown" onclick = "$(this).next('.glassySubMenu').toggle();">All Photos</button>
                <ul class = "glassy glassySubMenu">
                    <!-- TODO: Clicking this li will refresh the page and display only the user's photos. -->
                    <li>My Photos</li>
                </ul>
            </li>
            <li><button class = "glassy glassyDropdown" onclick = "$(this).next('.glassySubMenu').toggle();">Most Popular</button>
                <ul class = "glassy glassySubMenu">
                    <!-- TODO: Clicking this li will refresh the page and display the photos chronologically. -->
                    <li>Most Recent</li>
                </ul>
            </li>
            <!-- TODO: Only display this for admins or managers of this event. -->
            <li><button class = "glassy glassyDropdown" onclick = "$(this).next('.glassySubMenu').toggle();">Manager Mode</button>
                <ul class = "glassy glassySubMenu">
                    <!-- TODO: Clicking "On" will give all photos the "approved" class and change their card click function to toggle approved/rejected. -->
                    <li>On</li>
                    <li>Off</li>
                </ul>
            </li>
            <!-- TODO: Only display this submit button when Managing Mode is turned on. -->
            <li><button class = "glassy">Submit</button></li>
        </ul>

        <!-- TODO: This whole enitre thing should be clickable and will open the image in the gallery viewer. -->
        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400684?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400688?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400692?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400695?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400740?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3400747?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3401921?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3401037?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3402124?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3402137?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

        <div class = "card glassy">
            <img class = "userProfilePic" src = "img/examples/archie.png" alt = "Firstname Lastname" />
            <img src = "http://flashfotoapi.com/api/get/3406732?partner_username=facebook&partner_apikey=apikey4facebook&resize=crop&height=409&width=344"/>
            <div class = "img-card-meta">
                <p class = "username">DIDDLEYDOODLE</p>
                <p class = "photoDescription photoMetaTimestamp">March 10, 2015 7:03 PM</p>
            </div>
        </div>

    </div>

    <?php include_once "includes/footer.php"; ?>
</div>

<script src = "js/hammerTimeMenu.js"></script>
</body>
</html>