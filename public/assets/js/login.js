var userAdmin = "admin";
var userAdminPwd = "admin";
var userMonitor = "user";
var userMonitorPwd = "user";

function doLogin(){
    var username = $("#username").val();
    var password = $("#password").val();

    if(username == userAdmin && password == userAdminPwd){
        window.location.replace("index.html");
     }else if (username ==  userMonitor && password == userMonitorPwd){
        window.location.replace("dashboard-user.html");
    }else{
        $("#alert-login").addClass("visible").removeClass("invisible");
    }
}