
function validateform(){
    
  //  var year=document.reg.year.value;  
    var sid=document.reg.sid.value; 
    var name=document.reg.name.value;
    var mob=document.reg.mob.value; 
    var email=document.reg.email.value;
    var pass=document.reg.pass.value;
    var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    /*if (isNaN(year)){  
    document.getElementById("yvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;  
                   }
    else{  
    document.getElementById("yvalid").innerHTML=" <img src='img/checked.gif'/>";  
     }  */
    
    if(isNaN(sid) || sid.length!=7){
    document.getElementById("sidvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("sidvalid").innerHTML=" <img src='img/checked.gif'/>";  
        } 
    
    if(name==null || name==""){
    document.getElementById("namevalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("namevalid").innerHTML=" <img src='img/checked.gif'/>";  
        } 
    
    if(isNaN(mob) || mob.length!=10){
    document.getElementById("mobvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("mobvalid").innerHTML=" <img src='img/checked.gif'/>";  
        } 
    
    /*if(fname==null || fname==""){
    document.getElementById("fnamevalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("fnamevalid").innerHTML=" <img src='img/checked.gif'/>";  
        } */
    
    /*if(isNaN(fmob) || fmob.length!=10){
    document.getElementById("fmobvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("fmobvalid").innerHTML=" <img src='img/checked.gif'/>";  
        } */

    
    if(email=="" || email==null || mailformat.test(email)!=true){
    document.getElementById("emailvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("emailvalid").innerHTML=" <img src='img/checked.gif'/>";  
        } 

    
    if(pass=="" || pass==null || pass.length<6){
    document.getElementById("passvalid").innerHTML="<img src='img/unchecked.png'/>";  
    return false;
    }
    else{  
    document.getElementById("passvalid").innerHTML=" <img src='img/checked.gif'/>";  
        } 
    return true;

}

 