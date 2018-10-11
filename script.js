function myFunction() {
  
    var x=document.querySelectorAll("input")
    let i=0
    while( i<x.length){
    if(x[i].value =='') { alert('ilny a un champ vide'); break;}
          else{i=i+1}
    }



if(x[3].value.length<8){ alert ('Mot de passe non valide')}

if(x[3].value!=x[4].value){ alert ('Mot de passe non confirmee')}

}
var y=document.querySelector(".mon-bouton");
y.addEventListener("click", verifier);
email=document.querySelector("#email").value;
function verifier(email){
    
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(email)) {alert("email valide")}

        else{ alert ('email non valide')}

}


