function changePage(){
    window.location.href="login.php";
}

function expand(){
    var project = document.getElementsByClassName("ProjectName");
    var parent = $(project).parent().css('height', "300px");
}

function openPage(event, pageName){
    var i, tabcontent, tablink;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablink = document.getElementsByClassName("tablink");
    for (i = 0; i < tablink.length; i++) {
        tablink[i].className = tablink[i].className.replace("active", "tablink");
    }
    document.getElementById(pageName).style.display = "block";
    event.currentTarget.className = "active";
}