<?php
include ("top.php");
include ("header.php");
include ("nav.php");


if ($_POST["submit"]) {
    $recipient = "lbrown20@uvm.edu";
    $subject = "Form to email message";
    $sender = $_POST["txtFirstName"];
    $senderEmail = $_POST["txtEmail"];
    $message = $_POST["lstExperience"];
    /*
      $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

      mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
     */
    $thankYou = "<p>Thank you! Your message has been sent.</p>";
}
?>

<article id="main">


    <h2>CONTACT US</h2>
    <form action="contact.php"
          method="post"
          id="frmRegister">

        <fieldset class="wrapper">
            <!-- <legend>Your Information</legend> -->
            <h5>Tell us a little about yourself and what you think of our site.<span 
                    class="required"> </span></h5>

            <fieldset class="wrapperTwo">
                <legend>PLEASE TELL US A LITTLE ABOUT YOURSELF</legend>

                <fieldset class="contact">
                    <legend>CONTACT INFORMATION</legend>
                    <label for="txtFirstName" class="required">First Name
                        <input type="text" id="txtFirstName" name="txtFirstName"
                               value=""
                               tabindex="100" maxlength="45" placeholder="Enter your first name"
                               onfocus="this.select()"
                               autofocus>
                    </label>
                    <label for="txtLasttName" class="required">Last Name
                        <input type="text" id="txtLastName" name="txtLastName"
                               value=""
                               tabindex="100" maxlength="45" placeholder="Enter your last name"
                               onfocus="this.select()"
                               autofocus>
                    </label>
                    <label for="txtPhoneNumber" class="required">Phone Number
                        <input type="text" id="txtPhoneNumber" name="txtPhoneNumber"
                               value=""
                               tabindex="100" maxlength="45" placeholder="Enter your phone number"
                               onfocus="this.select()"
                               autofocus>
                    </label>

                    <label for="txtEmail" class="required">Email
                        <input type="text" id="txtEmail" name="txtEmail"
                               value=""
                               tabindex="120" maxlength="45" placeholder="Enter a valid email address"
                               onfocus="this.select()" 
                               >
                    </label>



                </fieldset>
            </fieldset> <!-- ends contact -->



            <!-- WEBSITE -->
            <fieldset  class="listbox">	
                <label for="lstExperience">How experienced are you in playing League of Legends?</label>
                <p> 
                    <select id="lstExperience" 
                            name="lstExperience" 
                            tabindex="520" >
                        <option  selected                                 
                                 value="Beginner" >Beginner</option>

                        <option                                 
                            value="Intermediate">Intermediate</option>

                        <option                                 
                            value="Advanced">Advanced</option>

                        <option                                 
                            value="Expert">Expert</option>


                    </select>
                </p>
            </fieldset>

            <fieldset class="radio">
                <legend>PLEASE TELL US WHAT YOU THOUGHT OF OUR SITE</legend>
                <label for="radStrategy">Did our site change your strategic approach to playing League of Legends?</label>
                <label><input type="radio" 
                              id="radStrategyYes" 
                              name="radStrategy" 
                              value="Yes"
                              checked                                  
                              tabindex="330">Yes</label>
                <label><input type="radio" 
                              id="radStrategyNo" 
                              name="radStrategy" 
                              value="No"

                              tabindex="340">No</label>
            </fieldset>
            <fieldset class="radio">
                <legend>HOW HELPFUL WAS OUR SITE?</legend>
                <label for="radHelpful">(1-LEAST HELPFUL, 5-MOST HELPFUL)</label>
                <label><input type="radio" 
                              id="radHelpful1" 
                              name="radHelpful" 
                              value="1"

                              tabindex="330">1</label>
                <label><input type="radio" 
                              id="radHelpful2" 
                              name="radHelpful" 
                              value="2"

                              tabindex="330">2</label>
                <label><input type="radio" 
                              id="radHelpful3" 
                              name="radHelpful" 
                              value="3"

                              tabindex="330">3</label>
                <label><input type="radio" 
                              id="radHelpful4" 
                              name="radHelpful" 
                              value="4"

                              tabindex="330">4</label>
                <label><input type="radio" 
                              id="radHelpful5" 
                              name="radHelpful" 
                              value="5"
                              checked                       
                              tabindex="330">5</label>
            </fieldset>

            <fieldset class="checkbox">
                <legend>HOW DID YOU HEAR ABOUT US?</legend>
                <label><input type="checkbox" 
                              id="chkFriend" 
                              name="chkFriend" 
                              value="Friend"                                  
                              tabindex="420">Friend</label>

                <label><input type="checkbox" 
                              id="chkSocialMedia" 
                              name="chkSocialMedia" 
                              value="SocialMedia"
                              tabindex="430">Social Media</label>

                <label><input type="checkbox" 
                              id="chkCSFair" 
                              name="chkCSFair" 
                              value="CSFair"
                              tabindex="430">CS Fair</label>

                <label><input type="checkbox" 
                              id="chkAdvertisement" 
                              name="chkAdvertisement" 
                              value="Advertisement"
                              tabindex="430">Advertisement</label>

                <label><input type="checkbox" 
                              id="chkOther" 
                              name="chkOther" 
                              value="Other"
                              tabindex="430">Other</label>
            </fieldset>


            <fieldset  class="textarea">
                <legend>ADDITIONAL COMMENTS</legend>
                <label for="txtAdditionalComments" class="required">Additional 
                    Comments:</label>
                <textarea id="txtAdditionalComments" 
                          name="txtAdditionalComments" 
                          tabindex="200"
                          onfocus="this.select()" 
                          style="width: 43em; height: 4em;" ></textarea>
            </fieldset>


        </fieldset> <!-- ends wrapper Two -->

        <fieldset class="buttons">
            <legend></legend>
            <input type="submit" id="btnSubmit" name="submit" value="Submit" tabindex="900" class="button">
        </fieldset> <!-- ends buttons -->

        <!-- Ends Wrapper -->
    </form>


</article>


<?php include ("footer.php"); ?>

</body>
</html>