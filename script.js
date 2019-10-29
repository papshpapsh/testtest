function generateRandomId() {
  return Math.floor(Math.random() * 100001);;
} 

function readCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function savingCookies(){

      userId = generateRandomId();
      savedUserId = readCookie("userId");

     if(savedUserId != null){
        userId = savedUserId;
        return;   
     } else {
        document.cookie = "userId="+userId+";";   
     }
     
}

window.addEventListener("load", function(event) {
   savingCookies();
   
});
document.addEventListener("click", function(e){
    e = e || window.event;
    let target = e.target || e.srcElement;
    let targetName = target.getAttribute("name");
   // alert (targetName);
    //alert(userId);
    let request = new XMLHttpRequest();
    request.open("POST", "sending.php", false);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
       // console.log(this.responseText); // echo from php
    }       
    }
    request.send("userId="+ userId+"&targetName=" + targetName);
;
}, false);


