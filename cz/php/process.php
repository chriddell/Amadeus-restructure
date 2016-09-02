<?php
  if(isset($_POST["submit"])){

    // find out which form has been submitted based on name values set in form markup
    if(isset($_POST["fnameContact"])){

        $name = $_POST["title"] . " " . $_POST["fnameContact"] . " " . $_POST["lname"];
        $formName = 'CONTACT';

    } else if(isset($_POST["fnameDemo"])) {

        $name = $_POST["title"] . " " . $_POST["fnameDemo"] . " " . $_POST["lname"];
        $formName = 'DEMO';

    }

    // Required vars
    $company = $_POST["agencyname"];
    $job = $_POST["jobtitle"];
    $email = $_POST["email"];
    $country = $_POST["country"];

    // Optional vars
    $amadeusCustomer = isset($_POST["amadeusCustomer"]) ? $_POST["amadeusCustomer"] : '';
    $amadeusOfficeID = isset($_POST["officeID"]) ? $_POST["officeID"] : '';
    $travelAgencyType = isset($_POST["travelAgencyType"]) ? $_POST["travelAgencyType"] : '';
    $comment = isset($_POST["comment"]) ? $_POST["comment"] : '';
    
    // Recipient email address
    $EmailTo = "travelagencies@amadeus.com";
    // Subject
    $Subject = "Amadeus Selling Platform Connect - " . $formName . " request";
    // 'Sender'
    $EmailFrom = "enquiries@amadeus.passion";
    // Set up main text var
    $Body = "";
     
    // prepare email body text
    $Body .= "Form: ";
    $Body .= "Amadeus Selling Platform Connect - " . $formName;
    $Body .= "\n \n";

    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";

    $Body .= "Job Title: ";
    $Body .= $job;
    $Body .= "\n";

    $Body .= "Company: ";
    $Body .= $company;
    $Body .= "\n";

    $Body .= "Country: ";
    $Body .= $country;
    $Body .= "\n";
     
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";

    $Body .= "Amadeus Customer: ";
    $Body .= $amadeusCustomer;
    $Body .= "\n";

    $Body .= "Amadeus Office ID: ";
    $Body .= $amadeusOfficeID;
    $Body .= "\n";
    
    $Body .= "Travel Agency Type: ";
    $Body .= $travelAgencyType;
    $Body .= "\n";
     
    $Body .= "Comments: ";
    $Body .= $comment;
    $Body .= "\n";

    if($name != "" && $company != "" && $email != ""){
      // send email
      @mail($EmailTo, $Subject, $Body, "From:" . $EmailFrom);

      // Different redirects for different forms
      if ( $formName == "CONTACT" ) {
        header( "Location:http://www.amadeus.com/passion/cz/contactus-thankyou.html" );
      } elseif ( $formName == "DEMO" ) {
        header( "Location:http://www.amadeus.com/passion/cz/demos.html" );
      }
    } else {
      echo "Please fill in all fields";
    }
  }
?>