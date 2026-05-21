<!-- Bootstrap core JavaScript-->
<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script src="//cdn.datatables.net/plug-ins/2.1.8/i18n/pt-BR.json"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    new DataTable('#pessoasBuscar', {
        processing: true,
        responsive: true,
        scrollX: true,
        ajax: {
            url: '{{ route("produtosData") }}',
            dataSrc: 'data'
        },
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/pt-BR.json'
        },
        columns: [{
                data: 'nome'
            },
            {
                data: 'descricao'
            },
            {
                data: 'nome_empresa'
            },
            {
                data: 'data_criacao_formatada'
            },
            {
                data: 'id',
                render: function(data, type, row) {
                    return `
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton${row.id}" data-toggle="dropdown" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton${row.id}">
                        <a class="dropdown-item" href="${row.produtosEdit}">Editar - ${row.nome}</a>
                        <a class="dropdown-item delete-btn" href="#" data-url="${row.produtosExclud}" data-id="${row.id}">Deletar - ${row.nome}</a>
                    </div>
                </div>
                `;
                },
                orderable: false,
                searchable: false
            }
        ],
        order: [],
    });

    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault(); // Impede o comportamento padrão do link

        var url = $(this).data('url'); // Pega a URL de exclusão
        var nome = $(this).data('id'); // Pega o ID da pessoa (se necessário)

        // SweetAlert de confirmação
        Swal.fire({
            title: 'Você tem certeza?',
            text: 'Esta ação não pode ser desfeita!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar',
            backdrop: true, // Impede o fechamento ao clicar fora
            allowEscapeKey: false, // Não permite fechar com ESC
            allowOutsideClick: false // Não permite fechar ao clicar fora
        }).then((result) => {
            if (result.isConfirmed) {
                // Adiciona o loading aqui, após o usuário confirmar
                Swal.fire({
                    title: 'Excluindo...',
                    text: 'Por favor, aguarde.',
                    icon: 'info',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading(); // Mostra o loading enquanto o AJAX está rodando
                    },
                    backdrop: true, // Impede o fechamento ao clicar fora
                    allowEscapeKey: false, // Não permite fechar com ESC
                    allowOutsideClick: false // Não permite fechar ao clicar fora
                });

                // Enviar a requisição AJAX para excluir a pessoa
                $.ajax({
                    url: url,
                    type: 'DELETE', // Método HTTP DELETE
                    data: {
                        _token: '{{ csrf_token() }}' // Token CSRF para garantir segurança
                    },
                    success: function(response) {
                        // Se a exclusão for bem-sucedida, exibe uma mensagem de sucesso
                        Swal.fire({
                            title: 'Deletado!',
                            text: 'A pessoa foi excluída com sucesso.',
                            icon: 'success',
                            backdrop: true, // Impede o fechamento ao clicar fora
                            allowEscapeKey: false, // Não permite fechar com ESC
                            allowOutsideClick: false // Não permite fechar ao clicar fora
                        }).then(() => {
                            location.reload(); // Recarrega a página ou atualiza a DataTable
                        });
                    },
                    error: function(xhr, status, error) {
                        // Se ocorrer um erro, exibe uma mensagem de erro
                        Swal.fire({
                            title: 'Erro!',
                            text: 'Houve um erro ao tentar excluir a pessoa. Tente novamente mais tarde.',
                            icon: 'error',
                            backdrop: true, // Impede o fechamento ao clicar fora
                            allowEscapeKey: false, // Não permite fechar com ESC
                            allowOutsideClick: false // Não permite fechar ao clicar fora
                        });
                    }
                });
            }
        });
    });
</script>


</body>

</html>