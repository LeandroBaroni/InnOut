<?php

session_start();
requireValidSession(true);

$exception = null;
if(isset($_GET['delete'])){
    try{
        User::deleteById($_GET['delete']);
        addSuccessMsg('Usuário excluído com sucesso.');
    }catch(Exception $e){
        if(stripos($e->getMessage(), 'FOREIGN KEY')){
            addSuccessMsg('Não é possível excluir usuários com registros de ponto.');
        }
        $exception = $e;
    }
}

$users = User::get();
foreach ($users as $user) {
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if($user->end_date){
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
    }
}

//para fazer uma tela de confirmação da exclusão de dados é importante passar os dados da exclusão (id) para esta pagina e verificar se existe parametro se sim chame uma tela, senao prossiga com o loadTempateView('users')



loadTemplateView('users', [
    'users' => $users,
    'exception' => $exception
]);