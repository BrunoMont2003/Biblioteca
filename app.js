// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()


let formulario = document.getElementById('formulario');

formulario.addEventListener('submit', (e)=>{
    let bandera = true;
    e.preventDefault();
    let datos = new FormData(formulario);
    datos.forEach((dato)=>{
        if (dato === '') {
            bandera = false;
        }
    })
    if(bandera){
        console.log("correcto");
        fetch('post.php', { 
            method: 'POST',
            body: datos
        });
    }
});