let article = document.querySelectorAll(".article") ;

function Ellipsif (str) {
    if (str.length > 30) {
        return (str.substring(0, 30) + "...");
    }
    else {
        return str;
    }
}
for(let i = 0 ; i < article.length ; i++){
    article[i].innerText = Ellipsif(article[i].innerHTML);
}

function SendId(id){
    document.getElementById('id').setAttribute('value', id);
}

function addArticle(){
    const form = document.getElementById('allForms');
    
    const inputs = document.getElementById('inputs');
    
    const inputsCopy = inputs.cloneNode(true);

    var newBtn = document.createElement("a");
    newBtn.className = "btn btn-secondary";
    newBtn.innerHTML = "Remove";
    newBtn.addEventListener("click",function remove(){
        inputsCopy.remove();
    });

    inputsCopy.appendChild(newBtn);

    x=0;
    for(children of inputsCopy.children){
        children.children[1].value = ''
        x++;
        if(x==3){
            break;
        }
    }


    form.appendChild(inputsCopy);

}

const alertBtn = document.querySelector(".btn-close");

document.addEventListener("DOMContentLoaded", function() {
    alertBtn.addEventListener("click", function close(){
        this.parentElement.remove();
    });

    setTimeout(function() {
        alertBtn.parentElement.remove();
    }, 5000);
});

