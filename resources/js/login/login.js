var mostrar_contra = document.querySelector("#check-contra");
var input_contra = document.querySelector("#input-contra");

mostrar_contra.addEventListener('change', () => {
    if(mostrar_contra.checked){
        input_contra.removeAttribute('type');
        input_contra.setAttribute('type', 'text');
    }else{
        input_contra.removeAttribute('type');
        input_contra.setAttribute('type', 'password');
    }
});