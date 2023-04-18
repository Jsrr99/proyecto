document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault(); 
    var name = document.getElementById('nombre').value;
    var phone = document.getElementById('telefono').value;
    var email = document.getElementById('correo').value;
    var comment = document.getElementById('comentario').value;


    alert('Formulario enviado con éxito!');
});






