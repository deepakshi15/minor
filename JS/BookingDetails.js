function showFunction() {
    const div=document.querySelector("#traveler-details");
    const node=document.querySelector(".T-form-grp");
    
    let num = document.getElementById("Tno").value;
    if(num==0){
       alert("make friends and then come");
    }
    else{

        for (let i = 2; i <= num; i++) {
            const clone=node.cloneNode(true);
            div.appendChild(clone);
            clone.getElementsByTagName("*")[0].innerHTML=`Traveler ${i}`;
            
            
        }
        document.querySelector("#submitBtn").style.display = 'block';
        document.querySelector("#pBtn").style.display = 'none';
    }
    }
    // showFunction();
