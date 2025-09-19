function roll(){
    fetch("roll.php").then(res=>res.json()
    ).then (data=>{
        document.getElementById("diceRESULT").innerText="you rolled="+data.dice;
        document.getElementById("animalRESULT").innerText="the animalyou got is "+data.animal ;
        document.getElementById("animalIMAGE").src=data.image;
        document.getElementById("animalIMAGE").style.display = "block";

    });
}
/*function hideROLES(){
    document.getElementById("hideRULES").style.display="none";
    
}*/
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("hideRULES").addEventListener("click", () => {
        document.getElementById("rules").style.display = "none";
    });
});