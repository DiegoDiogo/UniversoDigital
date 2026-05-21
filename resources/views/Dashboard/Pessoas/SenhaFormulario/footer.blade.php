<!-- Adiciona o JavaScript necessário para alternar a visibilidade -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Para o campo de senha
        document.getElementById('toggleSenha').addEventListener('click', function() {
            const senhaField = document.getElementById('senha');
            const icon = document.getElementById('senhaIcon');
            if (senhaField.type === 'password') {
                senhaField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash'); // Troca para o ícone de "olho fechado"
            } else {
                senhaField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye'); // Troca para o ícone de "olho aberto"
            }
        });

        // Para o campo de confirmação de senha
        document.getElementById('toggleConfSenha').addEventListener('click', function() {
            const confSenhaField = document.getElementById('senha_confirmation');
            const icon = document.getElementById('confSenhaIcon');
            if (confSenhaField.type === 'password') {
                confSenhaField.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash'); // Troca para o ícone de "olho fechado"
            } else {
                confSenhaField.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye'); // Troca para o ícone de "olho aberto"
            }
        });
    });
</script>
<!-- Bootstrap core JavaScript-->
<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>