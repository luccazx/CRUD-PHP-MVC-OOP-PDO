<?php
//iniciando sessao   
session_start();
if(isset($_SESSION['mensagem'])){ ?>
    
<script>
    //MENSAGEM
    window.onload = function name() {
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    };
</script>

<?php
}
session_unset(); //finalizando a sessao