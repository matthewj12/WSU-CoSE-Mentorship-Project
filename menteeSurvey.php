<?php

    require("includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MIYA Food Ordering App</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ei Myatnoe Aung">
    <meta name="keywords" content="Mentor, Mentee, WSU, science"> 
    <meta name="description" content="Mentor Program Survey website">
    <meta name="viewport" content="width=device-width, initial-scale="1">

<head>
<body>

    <h1>Hello. Welcome from mentee survey</h1>

    <form method = "post" action = "includes/participant.inc.php">

        <!--Student category-->
        <label for="student category">Are you a mentor or a mentee?:</label>
        <select id="student category" name="student_category">
            <option value="">--- Select ONE ---</option>  
            <option value="mentee">Mentee</option>
            <option value="mentor">Mentor</option>
        </select>

        <!--First Name-->
        <label for = "fname"><h3>First Name :</h3></label>
        <input type = "text" name = "fname" required>
        <br>

        <!--Last Name-->
        <label for = "lname"><h3>Last Name :</h3></label>
        <input type = "text" name = "lname" required>
        <br>

        <!--Warrior ID-->
        <label for = "warrior_id"><h3>Warrior_id : </h3></label>
        <input type = "text" name = "warrior_id" required>
        <br>

        <!--Gender ( ONLY ONE CHOICE ALLOWED )-->
        <label for = "gender"><h3>Gender :</h3></label>
        <input type = "radio" name = "gender" value = "male">
        <label for = "gender">Male</label>
        <br>
        <input type = "radio" name = "gender" value = "female">
        <label for = "gender">Female</label>
        <br>
        <input type = "radio" name = "gender" value = "non-binary">
        <label for = "gender">Non-binary</label>
        <br>
        <input type = "radio" name = "gender" value = "others">
        <label for = "gender">Other</label>
        <br>
        <input type = "radio" name = "gender" value = "prefer not to answer">
        <label for = "gender">Prefer not to answer</label>
        <br>

        <!--Primary Major ( ONLY ONE CHOICE ALLOWED )-->
        <label for = "primary_major"><h3>What is your primary major in the College of Science and Engineering?</h3></label>
        <input type = "radio" name = "primary_major" value = "biology (allied health or cell molecular)">
        <label for = "primary_major">Biology (Allied Health or Cell Molecular)</label>
        <br>
        <input type = "radio" name="primary_major" value = "biology (ecology or environmental science)">
        <label for = "primary_major">Biology (Ecology or Environmental Science)</label>
        <br>
        <input type="radio" name="primary_major" value = "biology (medical lab science)">
        <label for="primary_major">Biology—Medical Lab Science </label>
        <br>
        <input type="radio" name="primary_major" value = "biology (radiography)">
        <label for="primary_major">Biology—Radiography</label>
        <br>
        <input type="radio" name="primary_major" value = "chemistry">
        <label for="primary_major">Chemistry</label>
        <br>
        <input type="radio" name="primary_major" value = "composite materials engineering">
        <label for="primary_major">Composite Materials Engineering</label>
        <br>
        <input type="radio" name="primary_major" value = "computer science">
        <label for="primary_major">Computer Science</label>
        <br>
        <input type="radio" name="primary_major" value = "data science">
        <label for="primary_major">Data Science</label>
        <br>
        <input type="radio" name="primary_major" value = "general engineering">
        <label for="primary_major">General Engineering</label>
        <br>
        <input type="radio" name="primary_major" value = "geoscience">
        <label for="primary_major">Geoscience</label>
        <br>
        <input type="radio" name="primary_major" value = "math">
        <label for="primary_major">Math</label>
        <br>
        <input type="radio" name="primary_major" value = "physics">
        <label for="primary_major">Physics</label>
        <br>
        <input type="radio" name="primary_major" value = "statistics">
        <label for="primary_major">Statistics</label>
        <br>
        <input type="radio" name="primary_major" value = "undecided">
        <label for="primary_major">I’m undecided…thinking about a major</label>
        <br>

        <!--professional programs-->
        <label for = "pre_programs"><h3>Are you pursuing any of the following professional programs?(Leave blank if none of these apply.)</h3></label>
        <input type = "radio" name = "pre_programs" value = "dentistry">
        <label for = "pre_programs">Pre-dentistry</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "forensics">
        <label for = "pre_programs">Pre-forensics</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "medicine">
        <label for = "pre_programs">Pre-medicine</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "occupational therapy">
        <label for = "pre_programs">Pre-occupational therapy</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "optometry">
        <label for = "pre_programs">Pre-optometry</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "pharmacy">
        <label for = "pre_programs">Pre-pharmacy </label>
        <br>
        <input type = "radio" name = "pre_programs" value = "physical therapy">
        <label for = "pre_programs">Pre-physical therapy</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "physician assistant" >
        <label for = "pre_programs">Pre-physician assistant</label>
        <br>
        <input type = "radio" name = "pre_programs" value = "other" >
        <label for = "pre_programs">Other</label>
        <input type = "text" name = "pre_programs">
        <br>
        
        <!--Student Category  array versio-->
        <!-- <label for = "category[]"><h3>Please check all that you are comfortable sharing.</h3></label>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">International student</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">Student athlete</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">Speak two or more languages</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">Not born in this country</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">First in my family to attend college</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">LGBTQ+</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">Transferred from another college</label>
        <br>
        <input type = "checkbox" name = "category[]" value = "1">
        <label for = "category[]">Unsure or undecided about my major</label>
        <br> -->

        <!--Student Category individual version-->
        <label for = "category[]"><h3>Please check all that you are comfortable sharing.</h3></label>
        <input type = "checkbox" name = "international_student" value = "1">
        <label for = "category[]">International student</label>
        <br>
        <input type = "checkbox" name = "student_athlete" value = "1">
        <label for = "category[]">Student athlete</label>
        <br>
        <input type = "checkbox" name = "multilingual" value = "1">
        <label for = "category[]">Speak two or more languages</label>
        <br>
        <input type = "checkbox" name = "not_born_in_US" value = "1">
        <label for = "category[]">Not born in this country</label>
        <br>
        <input type = "checkbox" name = "firstgen_student" value = "1">
        <label for = "category[]">First in my family to attend college</label>
        <br>
        <input type = "checkbox" name = "lgbtq+" value = "1">
        <label for = "category[]">LGBTQ+</label>
        <br>
        <input type = "checkbox" name = "transfer_student" value = "1">
        <label for = "category[]">Transferred from another college</label>
        <br>
        <input type = "checkbox" name = "undecided" value = "1">
        <label for = "category[]">Unsure or undecided about my major</label>
        <br>


        
        <!--Associated Departments-->
        <label for = "assoc_dept"><h3>Are you or do you plan to associate with any of the following departments?</h3></label>
        International Office <br>
        Office of Equity and Inclusive Excellence<br>
        TRIO<br>
        <br>
        <input type = "radio" name = "assoc_dept" value = "1">
        <label for = "assoc_dept">Yes</label>
        <input type = "radio" name = "assoc_dept" value = "0">
        <label for = "assoc_dept">No</label>
        <!-- <select name = "diversity interest">
            <option name = "">-------Select ONE-------</option>
            <option name = "yes" value = "1">Yes</option>
            <option name = "no" value = 0></option>
        </select> -->
        <br>
        <!-- <input type = "radio" name = "assoc_dept[]" value = "international Office">
        <label for = "assoc_dept[]">International Office</label>
        <br>
        <input type = "radio" name = "assoc_dept[]" value = "office of equity and inclusive excellence">
        <label for = "assoc_dept[]">Office of Equity and Inclusive Excellence</label>
        <br>
        <input type = "radio" name = "assoc_dept[]" value = "trio">
        <label for = "assoc_dept[]">TRIO</label>
        <br> -->


        <!--Dynamic radio list-->
        <label for = "languages"><h3>Please identify any languages beyond English that you speak.</h3></label>
        <!--dynamic dropdown from important qualities table-->
            <?php
                $stmt = "SELECT * from `second languages`";
                $result = mysqli_query($conn, $stmt);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <input type = "checkbox" name = "languages[]" value="<?php echo $row["second languages"] ?>">
                        <label for = "languages[]"><?php echo $row["second languages"] ?></label>
                        <br>
                        <?php
                        
                    }
                }
            ?>

        <!--Languages--> <!--This is static radio list-->
        <!-- <label for = "languages[]"><h3>Please identify any languages beyond English that you speak.</h3></label>
        <input type = "radio" name = "languages[]" value = "American Sign language">
        <label for = "languages[]">American Sign language</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Arabic">
        <label for = "languages[]">Arabic</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Bangla">
        <label for = "languages[]">Bangla</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Chinese">
        <label for = "languages[]">Chinese</label>
        <br>
        <input type = "radio" name = "languages[]" value = "French">
        <label for = "languages[]">French</label>
        <br>
        <input type = "radio" name = "languages[]" value = "German">
        <label for = "languages[]">German</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Hindi/Urdu">
        <label for = "languages[]">Hindi/Urdu</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Japanese">
        <label for = "languages[]">Japanese</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Korean">
        <label for = "languages[]">Korean</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Russian">
        <label for = "languages[]">Russian</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Somali">
        <label for = "languages[]">Somali</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Spanish">
        <label for = "languages[]">Spanish</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Thai">
        <label for = "languages[]">Thai</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Vietnamese">
        <label for = "languages[]">Vietnamese</label>
        <br>
        <input type = "radio" name = "languages[]" value = "Other">
        <label for = "languages[]">Other</label> -->
        <!-- <br> -->

        <!--Ethnicity/Race-->
        <label for = "ethnicity[]"><h3>What is your ethnicity/race?  (Select multiple ethnicities if applicable.)</h3></label>
        <input type = "checkbox" name = "ethnicity[]" value = "american indian">
        <label for = "ethnicity[]">American Indian or Alaska Native</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "asian">
        <label for = "ethnicity[]">Asian or Asian-American</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "black">
        <label for = "ethnicity[]">Black/African American</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "african">
        <label for = "ethnicity[]">African</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "hispanic">
        <label for = "ethnicity[]">Hispanic/Latino</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "native hawaiian">
        <label for = "ethnicity[]">Native Hawaiian or Pacific Islander</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "white">
        <label for = "ethnicity[]">White</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "prefer not to say">
        <label for = "ethnicity[]">I prefer not to answer</label>
        <br>
        <input type = "checkbox" name = "ethnicity[]" value = "other">
        <label for = "ethnicity[]">Other</label>
        <br>


        <!--Dynamic radio list-->
        <label for = "hobbies[]"><h3>Hobbies/Interests:  Check all items that are important to you:</h3></label>
        <!--dynamic dropdown from important qualities table-->
            <?php
                $stmt = "SELECT * from `hobby`";
                $result = mysqli_query($conn, $stmt);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <input type = "checkbox" name = "hobbies[]" value="<?php echo $row["hobby"] ?>">
                        <label for = "hobbies[]"><?php echo $row["hobby"] ?></label>
                        <br>
                        <?php
                        
                    }
                }
            ?>

        <!--Hobbies--> <!--Static Radio List-->
        <!-- <label for = "hobbies[]"><h3>Hobbies/Interests:  Check all items that are important to you:</h3></label>
        <input type = "checkbox" name = "hobbies[]" value = "Canoeing or kayaking ">
        <label for = "hobbies[]">Canoeing or kayaking</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Curling">
        <label for = "hobbies[]">Curling</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Cycling-road or mountain">
        <label for = "hobbies[]">Cycling-road or mountain</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Faith based events">
        <label for = "hobbies[]">Faith based events</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Curling">
        <label for = "hobbies[]">Curling</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Hiking">
        <label for = "hobbies[]">Hiking</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Hunting/fishing">
        <label for = "hobbies[]">Hunting/fishing</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Movies">
        <label for = "hobbies[]">Movies</label>
        <br>
        <input type = "checkbox" name = "hobbies[]" value = "Music/concerts">
        <label for = "hobbies[]">Music/concerts</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Rock/ice climbing">
        <label for = "hobbies[]">Rock/ice climbing</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Intermural Sports">
        <label for = "hobbies[]">Intermural Sports</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Video games">
        <label for = "hobbies[]">Video games</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Working out/gym">
        <label for = "hobbies[]">Working out/gym</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Yoga">
        <label for = "hobbies[]">Yoga</label>
        <br>
        <input type = "radio" name = "hobbies[]" value = "Other">
        <label for = "hobbies[]">Other</label>
        <br> -->

        <!--Mentor Gender-->
        <label for = "mentor_gender"><h3>I prefer to work with a mentor who is:</h3></label>
        <input type = "radio" name = "mentor_gender" value = "male">
        <label for = "mentor_gender">Male</label>
        <br>
        <input type = "radio" name = "mentor_gender" value = "female">
        <label for = "mentor_gender">Female</label>
        <br>
        <input type = "radio" name = "mentor_gender" value = "on-binary">
        <label for = "mentor_gender">Non-binary</label>
        <br>
        <input type = "radio" name = "mentor_gender" value = "no preference">
        <label for = "mentor_gender">No preference</label>
        <br>
        <input type = "radio" name = "mentor_gender" value = "other">
        <label for = "mentor_gender">Other</label>
        <br>
        <input type = "radio" name = "mentor_gender" value = "prefers not to answer">
        <label for = "mentor_gender">Prefers not to answer</label>
        <br>

        <!--Top three qualities-->
        <label for = "qualities"><h3>As we look for the best mentor match, what is most important to you for qualities in common?  (Rank up to three.)</h3></label>
        <br>
        <!--dynamic dropdown from important qualities table-->
        <label for = ""1"st quality">Choose "1"st quality in common:</label>
        <select name = ""1"st quality">
            <option value="">--- Select ONE---</option>  
            <?php
                $stmt = "SELECT * from `important quality`";
                $result = mysqli_query($conn, $stmt);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <option name = "<?php echo $row["important quality"] ?>" value="major"><?php echo $row["important quality"] ?></option>  
                        <?php
                    }
                }

                //if religion affiliatio is chosen
                    //use javascript to add DOM element and read the religions
            ?>
        </select>
        <br>
        <label for = "2nd quality">Choose 2nd quality in common:</label>
        <select name = "2nd quality">
            <option value="">--- Select ONE---</option>  
            <?php
                $stmt = "SELECT * from `important quality`";
                $result = mysqli_query($conn, $stmt);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <option name = "<?php echo $row["important quality"] ?>" value="major"><?php echo $row["important quality"] ?></option>  
                        <?php
                    }
                }
            ?>
        </select>
        <br>
        <label for = "3rd quality">Choose 3rd quality in common:</label>
        <select name = "3rd quality">
            <option value="">--- Select ONE---</option>  
            <?php
                $stmt = "SELECT * from `important quality`";
                $result = mysqli_query($conn, $stmt);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <option name = "<?php echo $row["important quality"] ?>" value="major"><?php echo $row["important quality"] ?></option>  
                        <?php
                    }
                }

                    //if religion affiliation is selected
                    //use javascript to add DOM element and read the religions
            ?>
        </select>
        <br>




        <!--These are static dropdowns-->
        <!-- <label>"1"st quality</label>
        <select name=""1"st quality">
            <option value="">--- Select ---</option>  
            <option name = "major" value="major">Major</option>
            <option name = "gender" value="gender">Gender</option>
            <option name = ""1"st quality" value="race">race</option>
            <option name = ""1"st quality" value="second language(s)">Second Language(s)</option>
            <option name = ""1"st quality" value="religious affiliation">Religious Affiliation</option>
            <option name = ""1"st quality" value="interested in diversity groups">Interested in Diversity Groups</option>
            <option name = ""1"st quality" value="hobbies"></option>
        </select> -->
        <!--If the religious affiliation is selected, use Javascript to create DOM element to show the religion options-->

        <!-- <br> -->
        <!--dynamic dropdown from important qualities table-->
        <!-- <label>2nd quality</label>
        <select name="2nd quality">
            <option name = "2nd quality" value="major">Major</option>
            <option name = "2nd quality" value="gender">Gender</option>
            <option name = "2nd quality" value="race">race</option>
            <option name = "2nd quality" value="second language(s)">Second Language(s)</option>
            <option name = "2nd quality" value="religious affiliation">Religious Affiliation</option>
            <option name = "2nd quality" value="interested in diversity groups">Interested in Diversity Groups</option>
            <option name = "2nd quality" value="hobbies">Hobbies</option>
        </select> -->
        <!--If the religious affiliation is selected, use Javascript to create DOM element to show the religion options-->

        <!-- <br> -->
        <!--dynamic dropdown from important qualities table-->
        <!-- <label>3rd quality</label>
        <select name="3rd quality">
            <option name = "3rd quality" value="major">Major</option>
            <option name = "3rd quality" value="gender">Gender</option>
            <option name = "3rd quality" value="race">race</option>
            <option name = "3rd quality" value="second language(s)">Second Language(s)</option>
            <option name = "3rd quality" value="religious affiliation">Religious Affiliation</option>
            <option name = "3rd quality" value="interested in diversity groups">Interested in Diversity Groups</option>
            <option name = "3rd quality" value="hobbies">Hobbies</option>
        </select> -->
        <!--If the religious affiliation is selected, use Javascript to create DOM element to show the religion options-->

        <!--Other Comments-->
        <label for = "other_comments"><h3>Is there anything else that we should consider as we prepare to match you with a mentor?</h3></label>
        <textarea name="other_comments" rows= 10 cols=100></textarea>

        <!--Submit the form to the server-->
        <input type="submit" name = "submit_survey" value="Submit Survey">

    </form>



</body>
</html>