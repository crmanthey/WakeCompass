$(document).ready(function(){
    $('#ProfileForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax("Profile.php",
            {type: "POST", 
            dataType: "json",
            data: $(this).serialize(),
            success: function(profile_json){
                alert(profile_json);
                var message = "YOU DID IT";
                alert(message);
            },
            error: function(jqXHR, status, error){
                alert(jqXHR.responseText);
            }});
    });
})