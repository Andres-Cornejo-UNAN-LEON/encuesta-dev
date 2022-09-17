var mostrar_contra = document.querySelector("#check-contra");
var input_contra = document.querySelector("#input-contra");
var input_new_contra = document.querySelector("#input-new-contra");

mostrar_contra.addEventListener('change', () => {
    if(mostrar_contra.checked){
        input_contra.removeAttribute('type');
        input_contra.setAttribute('type', 'text');
        if(input_new_contra!=null){
            input_new_contra.removeAttribute('type');
            input_new_contra.setAttribute('type', 'text');
        }
    }else{
        input_contra.removeAttribute('type');
        input_contra.setAttribute('type', 'password');
        if(input_new_contra!=null){
            input_new_contra.removeAttribute('type');
            input_new_contra.setAttribute('type', 'password');
        }
    }
});