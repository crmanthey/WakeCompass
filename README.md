# WakeCompass
Wake Med School Project


Documentation:
    There are several different page flows that were caused by changes in the development of the platform. They are as follows:

    1) login.php -> login_script.php -> profile_page.php (eventually replaced by platform_design.html)
        This defines a login flow for an existing user. 
    
    2) login.php -> login_script.php -> wakcompass_questionnaire.html -> login.php
        This defines the flow for a user attempting to signup. they will be directed to the questionnaire to signup and then returned to the login page once that is completed. They would then move into flow 1.

File Descriptions:
    -login.php (login_script.php)
        Simple login page and script that should check the existence of and the correctness of login credentials provided by user. The login_script.php file would redirect back to login.php if incorrect information is provided.
    -orm.php
        Incomplete orm page that would function with the profileAPI page to store data back end. This would have models for each SQL table defined back end (detailed below)
    -platform_design.html
        Eventual replacement of profile_page.php. Instead of fetching values using php, would use profileAPI.php to fetch json encoded user data to load into the page. Has a more complete look and is better functioning than profile_page.php. Still needs much more security, I attempted security on profile_page.php
    -platformFunction.js
        Defines page functions for platform_design.html
    -profile_page.php
        Original platform profile page. Included some security in session and user checking. This would ideally allow for two types of users to view the page. Type 0 is the owner of the profile and can view edit buttons and customization functionality. Type 1 is another user, but not the owner of the profile. They would be allowed to just view the information of the page. Everyone else gets redirected to login page. The more complete look of this page exists at platform_design.html
    -profileAPI.php
        API page that would allow for the storage and retreival of all profile data. Called by wakecompass-questionnaire.html currently. Would eventually be called by platform_design.html as well.
    -profilePageStylesheet.css
        Used by both platform_design.html and profile_page.php
    -questionnaire.js
        Provides the functionality and API call for wakecompass-questionnaire.html
    -questionnaireStylesheet.css
        Used by wakecompass-questionnaire.html
    -signupStylesheet
        Used by login.php
    -wakecompass-questionnaire.html
        Page used to collect all relevant user data and then makes an API call to store that data back end. Not totally complete cosmetically or functionally.


Database Schema (SQL on local PC but all files currently assume this structure):
-Users: used to keep track of all platform users/login info
    -ID (userID primary key)
    -Username
    -Password
    -SessionID (user session)
-Degrees: gives a uniform way of storing all the degrees that users have, accessed using their userID
    -userID (foreign key referencing Users)
    -degreeType (bachelors, post-bac, doctorate, etc.)
    -yearReceived
    -school
    -concentration (optional)
-Experiences: stores all relevant experiences of users, accessed through userID
    -userID (foreign key referencing Users)
    -xpName 
    -xpDescription
-Interests: stores all user interests, accessed through UserID
    -userID (foreign key referencing Users)
    -interestType (academic, clinical, extracurricular/non-academic)
    -interestName
    -interestDescription
-ProfileData
    -userID (foreign key referencing Users)
    -nameUser
    -age
    -gender
    -race
    -languages
    -origin
    -skills (might need to organized into its own table)
    -role (faculty/staff/student)
-Profiles
    -stores all data from questionnaire by question in one table. Was going to be used for project lead to see all data for analytics. 
    


    
