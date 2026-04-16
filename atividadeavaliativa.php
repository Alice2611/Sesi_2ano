<?php
$op = "";
$nome = "";
while ($op != 7) {
    print("
    -------MENU------");
    print("\n1- Login ");
    print("\n2- Qual o objetivo do (PSI)?");
    print("\n3- Boas práticas de segurança");
    print("\n4- Responsabilidades");
    print("\n5- Quais Consequências do descumprimento? ");
    print("\n6- Escopo da política");
    print("\n7- Sair\n");


    $op = readline("Digite sua escolha: ");
    switch ($op) {
        case 1:
            $nome = readline("Digite seu nome: ");
            $op = readline("Digite o seu CPF: ");
            echo "---Bem vindo, $nome!---";
            break;
        case 2:

            echo "Objetivos da PSI: O objetivo principal da Política de Segurança da Informação (PSI) é estabelecer diretrizes, regras e responsabilidades para proteger os ativos de informação de uma organização";
            break;
        case 3:

            echo "Boas práticas de segurança:  é um documento fundamental que define regras, diretrizes e responsabilidades para proteger os ativos de dados de uma organização.";
            break;
        case 4:

            echo "Responsabilidades: As responsabilidades são divididas entre a alta administração (aprovação e recursos), gestores (implementação) e todos os colaboradores (cumprimento e conscientização), visando mitigar riscos e garantir a conformidade.";
            break;
        case 5:
            echo "Consequências do descumprimento: O descumprimento da Política de Segurança da Informação (PSI) pode acarretar consequências severas, abrangendo desde sanções administrativas e financeiras para a organização até penalidades disciplinares e judiciais para os colaboradores envolvidos.";
            break;
        case 6:

            echo "Escopo da política: O escopo da política define os limites, abrangência e aplicação de regras, diretrizes ou metas estabelecidas. Ele determina quem (usuários/departamentos), onde (sistemas/unidades) e o que será coberto por uma política, incluindo ações e entregas.";
            break;

        case 7:
            echo "Saindo...";
            break;
        default:
            echo "Opção inválida!";
            break;
    }
}
