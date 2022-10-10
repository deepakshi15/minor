function showFunction() {
    let num = document.getElementById("Tno").value;
    for (let i = 1; i = num; i++) {
        
        
    }
    const div=document.querySelector("#traveler-details");
    const node=document.querySelector(".T-form-grp");
    const clone=node.cloneNode(true);
    div.appendChild(clone);
    clone.getElementsByTagName("*")[0].innerHTML=`Traveler ${i}`;
    document.querySelector("#submitBtn").style.display = 'block';
    document.querySelector("#pBtn").style.display = 'none';
}
// showFunction();
