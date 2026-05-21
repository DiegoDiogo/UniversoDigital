<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Para o campo de senha
        document.getElementById('toggleSenha').addEventListener('click', function() {
            const senhaField = document.getElementById('senha');
            const icon = document.getElementById('senhaIcon');
            if (senhaField.type === 'password') {
                senhaField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash'); 
            } else {
                senhaField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye'); 
            }
        });
    });
</script>

<script>
    
    function toggleSenhaField() {
        var situacao = document.getElementById('situacao');
        var perfilSelect = document.getElementById('id_perfil');
        var senhaField = document.getElementById('senhaField');
        var imageField = document.getElementById('imageField');
        var senhaEditField = document.getElementById('senhaEditField');


        if (situacao.value === 'cadastro') {
            if (perfilSelect.value === '4' || perfilSelect.value === '0') {
                senhaField.style.display = 'none';
                imageField.style.display = 'none';
                //senhaEditField.style.display = 'none';
            } else {
                senhaField.style.display = 'block';
                imageField.style.display = 'block';
                //senhaEditField.style.display = 'block';
            }
        } else {
            senhaField.style.display = 'none';
        }
    }

    
    window.onload = function() {
        toggleSenhaField();
    };
</script>

<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>


<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>