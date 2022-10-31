let head = document.getElementById('title');
head.style["display"] = "flex";
head.style["justify-content"]="center";

let count=0;
function change(){
    count++;
    let f = document.getElementById('para');
    f.innerHTML = count;
    f.style.fontSize = `${count}em`;
}