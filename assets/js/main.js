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