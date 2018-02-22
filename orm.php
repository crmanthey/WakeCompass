<?php 
date_default_timezone_set('America/New_York');

class Profile {
    private $name;
    private $email;
    private $role;
    private $gradyear;
    private $hometown;
    private $homeEnvironment;
    private $homeInfluence;
    private $degrees;
    private $school;
    private $gradschool;
    private $schoolInfluence;
    private $major;
    private $majorInfluence;
    private $activities;
    private $Activity;
    private $activityInfluence;
    private $studentType;
    private $gapyear;
    private $gapyearActivity;
    private $gapyearInfluence;
    private $gender;
    private $genderInfluence;
    private $race;
    private $raceInfluence;
    private $language;
    private $religion;
    private $religionInfluence;
    private $sexualorientation;
    private $sexualorientInfluence;
    private $relationship;
    private $relationshipInfluence;
    private $children;
    private $familyInfluence;
    private $specialty;
    private $subspecialty;
    private $otherspecialties;
    private $specialtyInfluence;
    private $workenvironment;
    private $pastworkenvironment;
    private $currentworkenvironment;
    private $patienttype;
    private $currentpatienttype;
    private $environmentInfluence;
    private $medActivity;
    private $currentMedActivity;
    private $medicalImportant;
    private $medActivityInfluence;
    private $academicInterest;
    private $scholarship;
    private $scholarshipInfluence;
    private $extracurriculars;
    private $extracurricularImportant;
    private $extracurricularInfluence;
    private $clinicskills;
    private $researchskills;
    private $techskills;
    private $otherskills;
    private $skillsInfluence;

    

    public static function connect(){
        return new mysqli("localhost","root", "", "wake_compass");
    }

    public static function create(
    $name, $email, $role, $gradyear, $hometown, 
    $homeEnvironment, $homeInfluence, $degrees, $school, 
    $gradschool, $schoolInfluence, $major, $majorInfluence,
    $activities, $Activity, $activityInfluence,$studentType,
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
    $otherskills, $skillsInfluence){
        
        $mysqli = Profile::connect();

        $result = $mysqli->query("INSERT INTO Profiles values (
            '" . $name . "',
            '" . $email . "',
            '" . $role . "',
            '" . $gradyear . "',
            '" . $hometown . "',
            '" . $homeEnvironment . "',
            '" . $homeInfluence . "',
            '" . $degrees . "',
            '" . $school . "',
            '" . $gradschool . "',
            '" . $schoolInfluence . "',
            '" . $major . "',
            '" . $majorInfluence . "',
            '" . $activities . "',
            '" . $Activity . "',
            '" . $activityInfluence . "',
            '" . $studentType . "',
            '" . $gapyear . "',
            '" . $gapyearActivity . "',
            '" . $gapyearInfluence . "',
            '" . $gender . "',
            '" . $genderInfluence . "',
            '" . $race . "',
            '" . $raceInfluence . "',
            '" . $language . "',
            '" . $religion . "',
            '" . $religionInfluence . "',
            '" . $sexualorientation . "',
            '" . $sexualorientInfluence . "',
            '" . $relationship . "',
            '" . $relationshipInfluence . "',
            '" . $children . "',
            '" . $familyInfluence . "',
            '" . $specialty . "',
            '" . $subspecialty . "',
            '" . $otherspecialties . "',
            '" . $specialtyInfluence . "',
            '" . $workenvironment . "',
            '" . $pastworkenvironment . "',
            '" . $currentworkenvironment . "',
            '" . $patienttype . "',
            '" . $currentpatienttype . "',
            '" . $environmentInfluence . "',
            '" . $medActivity . "',
            '" . $currentMedActivity . "',
            '" . $medicalImportant . "',
            '" . $medActivityInfluence . "',
            '" . $academicInterest . "',
            '" . $scholarship . "',
            '" . $scholarshipInfluence . "',
            '" . $extracurriculars . "',
            '" . $extracurricularImportant . "',
            '" . $extracurricularInfluence . "',
            '" . $clinicskills . "',
            '" . $researchskills . "',
            '" . $techskills . "',
            '" . $otherskills . "',
            '" . $skillsInfluence . "');");

        if ($result) {
            return new Profile(
                $name, $email, $role, $gradyear, $hometown, 
                $homeEnvironment, $homeInfluence, $degrees, $school, 
                $gradschool, $schoolInfluence, $major, $majorInfluence,
                $activities, $Activity, $activityInfluence,$studentType,
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
        } else {
            return null;
        }
    }


    public static function findbyUsername($user){
        $mysqli = Profile::connect();

        $resutl = $mysqli->query("SELECT * from Profiles where username =" . $user);
        if($result) {
            if($result->num_rows == 0){
                return null;
            }
        }
    }
    
    private function __construct(
    $name, $email, $role, $gradyear, $hometown, 
    $homeEnvironment,$homeInfluence, $degrees, $school, 
    $gradschool, $schoolInfluence, $major, $majorInfluence,
    $activities, $Activity, $activityInfluence,$studentType,
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
    $otherskills, $skillsInfluence){
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->gradyear = $gradyear;
        $this->hometown = $hometown;
        $this->homeEnvironement = $homeEnvironment;
        $this->homeInfluence = $homeInfluence;
        $this->degrees = $degrees;
        $this->school = $school;
        $this->gradschool = $gradschool;
        $this->schoolInfluence = $schoolInfluence;
        $this->major = $major;
        $this->majorInfluence = $majorInfluence;
        $this->activities = $activities;
        $this->Activity = $Activity;
        $this->activityInfluence = $activityInfluence;
        $this->studentType = $studentType;
        $this->gapyear = $gapyear;
        $this->gapyearActivity = $gapyearActivity;
        $this->gapyearInfluence = $gapyearInfluence;
        $this->gender = $gender;
        $this->genderInfluence = $genderInfluence;
        $this->race = $race;
        $this->raceInfluence = $raceInfluence;
        $this->language = $language;
        $this->religion = $religion;
        $this->religionInfluence = $religionInfluence;
        $this->sexualorientation = $sexualorientation;
        $this->sexualorientInfluence = $sexualorientInfluence;
        $this->relationship = $relationship;
        $this->relationshipInfluence = $relationshipInfluence;
        $this->children = $children;
        $this->familyInfluence = $familyInfluence;
        $this->specialty = $specialty;
        $this->subspecialty = $subspecialty;
        $this->otherspecialties = $otherspecialties;
        $this->specialtyInfluence = $specialtyInfluence;
        $this->workenvironment = $workenvironment;
        $this->pastworkenvironment = $pastworkenvironment;
        $this->currentworkenvironment = $currentworkenvironment;
        $this->patienttype = $patienttype;
        $this->currentpatienttype = $currentpatienttype;
        $this->environmentInfluence = $environmentInfluence;
        $this->medActivity = $medActivity;
        $this->currentMedActivity = $currentMedActivity;
        $this->medicalImportant = $medicalImportant;
        $this->medActivityInfluence = $medActivityInfluence;
        $this->academicInterest = $academicInterest;
        $this->scholarship = $scholarship;
        $this->scholarshipInfluence = $scholarshipInfluence;
        $this->extracurriculars = $extracurriculars;
        $this->extracurricularImportant = $extracurricularImportant;
        $this->extracurricularInfluence = $extracurricularInfluence;
        $this->clinicskills = $clinicskills;
        $this->researchskills = $researchskills;
        $this->techskills = $techskills;
        $this->otherskills = $otherskills;
        $this->skillsInfluence = $skillsInfluence;
      }

      public function getJSON() {
          $json_obj = array(
                    'name' => $this->name,
                    'email' => $this->email,
                    'role' => $this->role,
                    'gradyear' => $this->gradyear,
                    'hometown' => $this->hometown,
                    'homeEnvironement' => $this->homeEnvironement,
                    'homeInfluence' => $this->homeInfluence,
                    'degrees' => $this->degrees,
                    'school' => $this->school,
                    'gradschool' => $this->gradschool,
                    'schoolInfluence' => $this->schoolInfluence,
                    'major' => $this->major,
                    'majorInfluence' => $this->majorInfluence,
                    'activities' => $this->activities,
                    'Activity' => $this->Activity,
                    'activityInfluence' => $this->activityInfluence,
                    'studentTypename' => $this->studentType,
                    'gapyear' => $this->gapyear,
                    'gapyearActivity' => $this->gapyearActivity,
                    'gapyearInfluence' => $this->gapyearInfluence,
                    'gender' => $this->gender,
                    'genderInfluence' => $this->genderInfluence,
                    'race' => $this->race,
                    'raceInfluence' => $this->raceInfluence,
                    'language' => $this->language,
                    'religion' => $this->religion,
                    'religionInfluence' => $this->religionInfluence,
                    'sexualorientation' => $this->sexualorientation,
                    'sexualorientInfluence' => $this->sexualorientInfluence,
                    'relationship' => $this->relationship,
                    'relationshipInfluence' => $this->relationshipInfluence ,
                    'children' => $this->children,
                    'familyInfluence' => $this->familyInfluence,
                    'specialty' => $this->specialty,
                    'subspecialty' => $this->subspecialty,
                    'otherspecialties' => $this->otherspecialties,
                    'specialtyInfluence' => $this->specialtyInfluence,
                    'workenvironment' => $this->workenvironment,
                    'pastworkenvironment' => $this->pastworkenvironment,
                    'currentworkenvironment' => $this->currentworkenvironment,
                    'patienttype' => $this->patienttype,
                    'currentpatienttype' => $this->currentpatienttype,
                    'environmentInfluencee' => $this->environmentInfluence,
                    'medActivity' => $this->medActivity,
                    'currentMedActivity' => $this->currentMedActivity,
                    'medicalImportant' => $this->medicalImportant,
                    'medActivityInfluence' => $this->medActivityInfluence,
                    'academicInterest' => $this->academicInterest,
                    'scholarship' => $this->scholarship,
                    'scholarshipInfluence' => $this->scholarshipInfluence,
                    'extracurriculars' => $this->extracurriculars,
                    'extracurricularImportant' => $this->extracurricularImportant,
                    'extracurricularInfluencee' => $this->extracurricularInfluence,
                    'clinicskills' => $this->clinicskills,
                    'researchskills' => $this->researchskills,
                    'techskills' => $this->techskills,
                    'otherskills' => $this->otherskills,
                    'skillsInfluence' => $this->skillsInfluence);
        return json_encode($json_obj);
      }
}


    

?>