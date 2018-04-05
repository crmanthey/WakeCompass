<?php
require_once('orm.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = "";
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }

    $email = "";
    if (isset($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    }

    $role = "";
    if (isset($_REQUEST['role'])) {
        $role = $_REQUEST['role'];
    }

    $gradyear = "";
    if (isset($_REQUEST['gradyear'])) {
        $gradyear = $_REQUEST['gradyear'];
    }
    
    $hometown = "";
    if (isset($_REQUEST['hometown'])) {
        $hometown = $_REQUEST['hometown'];
    }

    $homeEnvironment = "";
    if (isset($_REQUEST['homeEnvironment'])) {
        $homeEnvironment = $_REQUEST['homeEnvironment'];
    }
    
    $homeInfluence = "";
    if (isset($_REQUEST['homeInfluence'])) {
        $homeInfluence = $_REQUEST['homeInfluence'];
    }
    
    $degrees = "";
    if (isset($_REQUEST['degrees'])) {
        $degreeArray = $_REQUEST['degrees'];
        $numDegrees = count($degreeArray);
        for($i=0; $i<$numDegrees; $i++){
            $degrees = $degrees . $degreeArray[$i] . ", ";
        }
    }
     
    $school = "";
    if (isset($_REQUEST['school'])) {
        $school = $_REQUEST['school'];
    }
    
    $gradschool = "";
    if (isset($_REQUEST['gradschool'])) {
        $gradschool = $_REQUEST['gradschool'];
    }
    
    $schoolInfluence = "";
    if (isset($_REQUEST['schoolInfluence'])) {
        $schoolInfluence = $_REQUEST['schoolInfluence'];
    }
    
    $major = "";
    if (isset($_REQUEST['major'])) {
        $major = $_REQUEST['major'];
    }
    
    $majorInfluence = "";
    if (isset($_REQUEST['majorInfluence'])) {
        $majorInfluence = $_REQUEST['majorInfluence'];
    }
    
    $activities = "";
    if (isset($_REQUEST['activities'])) {
        $activitiesArray = $_REQUEST['activities'];
        $numActivities = count($activitiesArray);
        for($i=0; $i<$numActivities; $i++){
            $activities = $activities . $activitiesArray[$i] . ", ";
        }
    }
    
    $Activity = "";
    if (isset($_REQUEST['Activity'])) {
        $Activity  = $_REQUEST['Activity'];
    }
    
    $activityInfluence = "";
    if (isset($_REQUEST['activityInfluence'])) {
        $activityInfluence = $_REQUEST['activityInfluence'];
    }
    
    $studentType = "";
    if (isset($_REQUEST['studentType'])) {
        $studentType = $_REQUEST['studentType'];
    }

    $gapyear = "";
    if (isset($_REQUEST['gapyear'])) {
        $gapyear  = $_REQUEST['gapyear'];
    }
    
    $gapyearActivity = "";
    if (isset($_REQUEST['gapyearActivity'])) {
        $gapyearActivity  = $_REQUEST['gapyearActivity'];
    }
    
    $gapyearInfluence = "";
    if (isset($_REQUEST['gapyearInfluence'])) {
        $gapyearInfluence  = $_REQUEST['gapyearInfluence'];
    }
    
    $gender = "";
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    }
    
    $genderInfluence = "";
    if (isset($_REQUEST['genderInfluence'])) {
        $genderInfluence  = $_REQUEST['genderInfluence'];
    }
    
    $race = "";
    if (isset($_REQUEST['race'])) {
        $race  = $_REQUEST['race'];
    }
    
    $raceInfluence = "";
    if (isset($_REQUEST['raceInfluence'])) {
        $raceInfluence = $_REQUEST['raceInfluence'];
    }
    
    $language = "";
    if (isset($_REQUEST['language'])) {
        $languagesArray = $_REQUEST['language'];
        $numLanguages = count($languagesArray);
        for($i=0; $i<$numLanguages; $i++){
            $language = $language . $languagesArray[$i] . ", ";
        }
    }
    
    $religion = "";
    if (isset($_REQUEST['religion'])) {
        $religion = $_REQUEST['religion'];
    }
    
    $religionInfluence = "";
    if (isset($_REQUEST['religionInfluence'])) {
        $religionInfluence = $_REQUEST['religionInfluence'];
    }
    
    $sexualorientation = "";
    if (isset($_REQUEST['sexualorientation'])) {
        $sexualorientation  = $_REQUEST['sexualorientation'];
    }
    
    $sexualorientInfluence = "";
    if (isset($_REQUEST['sexualorientInfluence'])) {
        $sexualorientInfluence  = $_REQUEST['sexualorientInfluence'];
    }
    
    $relationship = "";
    if (isset($_REQUEST['relationship'])) {
        $relationship = $_REQUEST['relationship'];
    }
    
    $relationshipInfluence = "";
    if (isset($_REQUEST['relationshipInfluence'])) {
        $relationshipInfluence = $_REQUEST['relationshipInfluence'];
    }
    
    $children = "";
    if (isset($_REQUEST['children'])) {
        $children = $_REQUEST['children'];
    }
    
    $familyInfluence = "";
    if (isset($_REQUEST['familyInfluence'])) {
        $familyInfluence = $_REQUEST['familyInfluence'];
    }
    
    $specialty = "";
    if (isset($_REQUEST['specialty'])) {
        $specialty = $_REQUEST['specialty'];
    }
    
    $subspecialty = "";
    if (isset($_REQUEST['subspecialty'])) {
        $subspecialty = $_REQUEST['subspecialty'];
    }
    
    $otherspecialties = "";
    if (isset($_REQUEST['otherspecialties'])) {
        $otherspecialties = $_REQUEST['otherspecialties'];
    }
    
    $specialtyInfluence = "";
    if (isset($_REQUEST['specialtyInfluence'])) {
        $specialtyInfluence = $_REQUEST['specialtyInfluence'];
    }
    
    $workenvironment = "";
    if (isset($_REQUEST['workenvironment'])) {
        $workenvironment = $_REQUEST['workenvironment'];
    }
    
    $pastworkenvironment = "";
    if (isset($_REQUEST['pastworkenvironment'])) {
        $pastworkenvironment = $_REQUEST['pastworkenvironment'];
    }
    
    $currentworkenvironment = "";
    if (isset($_REQUEST['currentworkenvironment'])) {
        $currentworkenvironment = $_REQUEST['currentworkenvironment'];
    }
    
    $patienttype = "";
    if (isset($_REQUEST['patienttype'])) {
        $patienttype = $_REQUEST['patienttype'];
    }
    
    $currentpatienttype = "";
    if (isset($_REQUEST['currentpatienttype'])) {
        $patientTypeArray = $_REQUEST['currentpatienttype'];
        $numPatientTypes = count($patientTypeArray);
        for($i=0; $i<$numPatientTypes; $i++){
            $currentpatienttype = $currentpatienttype . $patientTypeArray[$i] . ", ";
        }
    }
    
    $environmentInfluence = "";
    if (isset($_REQUEST['environmentInfluence'])) {
        $environmentInfluence = $_REQUEST['environmentInfluence'];
    }
    
    $medActivity = "";
    if (isset($_REQUEST['medActivity'])) {
        $medActivityArray = $_REQUEST['medActivity'];
        $numMedActivity = count($medActivityArray);
        for($i=0; $i<$numMedActivity; $i++){
            $medActivity = $medActivity . $medActivityArray[$i] . ", ";
        }
    }
    
    $currentMedActivity = "";
    if (isset($_REQUEST['currentMedActivity'])) {
        $currentMedActivityArray = $_REQUEST['currentMedActivity'];
        $numCurrentMedActivity = count($currentMedActivityArray);
        for($i=0; $i<$numCurrentMedActivity; $i++){
            $currentMedActivity= $currentMedActivity . $currentMedActivityArray[$i] . ", ";
        }
    }
    
    $medicalImportant = "";
    if (isset($_REQUEST['medicalImportant'])) {
        $medicalImportant = $_REQUEST['medicalImportant'];
    }
    
    $medActivityInfluence = "";
    if (isset($_REQUEST['medActivityInfluence'])) {
        $medActivityInfluence = $_REQUEST['medActivityInfluence'];
    }
    
    $academicInterest = "";
    if (isset($_REQUEST['academicInterest'])) {
        $academicInterest = $_REQUEST['academicInterest'];
    }
    
    $scholarship = "";
    if (isset($_REQUEST['scholarship'])) {
        $scholarshipArray = $_REQUEST['scholarship'];
        $numScholarship = count($scholarshipArray);
        for($i=0; $i<$numScholarship; $i++){
            $scholarship = $scholarship . $scholarshipArray[$i] . ", ";
        }
    }
    
    $scholarshipInfluence = "";
    if (isset($_REQUEST['scholarshipInfluence'])) {
        $scholarshipInfluence = $_REQUEST['scholarshipInfluence'];
    }
    
    $extracurriculars = "";
    if (isset($_REQUEST['extracurriculars'])) {
        $extracurricularArray = $_REQUEST['extracurriculars'];
        $numExtracurriculars = count($extracurricularArray);
        for($i=0; $i<$numExtracurriculars; $i++){
            $extracurriculars = $extracurriculars . $extracurricularArray[$i] . ", ";
        }
    }
    
    $extracurricularImportant = "";
    if (isset($_REQUEST['extracurricularImportant'])) {
        $extracurricularImportant = $_REQUEST['extracurricularImportant'];
    }
    
    $extracurricularInfluence = "";
    if (isset($_REQUEST['extracurricularInfluence'])) {
        $extracurricularInfluence = $_REQUEST['extracurricularInfluence'];
    }
    
    $clinicskills = "";
    if (isset($_REQUEST['clinicskills'])) {
        $clinicSkillsArray = $_REQUEST['clinicskills'];
        $numClinicSkills = count($clinicSkillsArray);
        for($i=0; $i<$numClinicSkills; $i++){
            $clinicskills = $clinicskills . $clinicSkillsArray[$i] . ", ";
        }
    }
    
    $researchskills = "";
    if (isset($_REQUEST['researchskills'])) {
        $researchSkillsArray = $_REQUEST['researchskills'];
        $numResearchSkills = count($researchSkillsArray);
        for($i=0; $i<$numResearchSkills; $i++){
            $researchskills = $researchskills . $researchSkillsArray[$i] . ", ";
        }
    }
    
    $techskills = "";
    if (isset($_REQUEST['techskills'])) {
        $techSkillsArray = $_REQUEST['techskills'];
        $numTechSkills = count($techSkillsArray);
        for($i=0; $i<$numTechSkills; $i++){
            $techskills = $techskills . $techSkillsArray[$i] . ", ";
        }
    }
    
    $otherskills = "";
    if (isset($_REQUEST['otherskills'])) {
        $otherSkillsArray = $_REQUEST['otherskills'];
        $numOtherSkills = count($otherSkillsArray);
        for($i=0; $i<$numOtherSkills; $i++){
            $otherskills = $otherskills . $otherSkillsArray[$i] . ", ";
        }
    }
    
    $skillsInfluence = "";
    if (isset($_REQUEST['skillsInfluence'])) {
        $skillsInfluence = $_REQUEST['skillsInfluence'];
    }
   


    $new_Profile = Profile::create($name, $email, $role, $gradyear, 
    $hometown, $homeEnvironment, $homeInfluence, $degrees, $school, 
    $gradschool, $schoolInfluence, $major, $majorInfluence,
    $activities, $Activity, $activityInfluence, $studentType,
    $gapyear, $gapyearActivity, $gapyearInfluence, $gender,
    $genderInfluence, $race, $raceInfluence, $language,
    $religion, $religionInfluence, $sexualorientation, 
    $sexualorientInfluence, $relationship, $relationshipInfluence,
    $children, $familyInfluence, $specialty, $subspecialty,
    $otherspecialties, $specialtyInfluence, $workenvironment,
    $pastworkenvironment, $currentworkenvironment, 
    $patienttype, $currentpatienttype, $environmentInfluence,
    $medActivity, $currentMedActivity, $medicalImportant,
    $medActivityInfluence, $academicInterest, $scholarship,
    $scholarshipInfluence, $extracurriculars, 
    $extracurricularImportant, $extracurricularInfluence, 
    $clinicskills, $researchskills, $techskills, 
    $otherskills, $skillsInfluence);

    if ($new_Profile){
        header("Content-type: application/json");
        print($new_Profile->getJSON());
        exit();
    } else {
        header("HTTP/1.0 400 Bad Request");
        print("Did not understand URL");
    }
}

?>