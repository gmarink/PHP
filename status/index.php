<!--
 * 
 * @copyright (c) 2016, Geraldo Geraldo de S. Marink Filho
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="refresh" content="60">
        <link href="js/bootstrap.min.js" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Painel Status Clientes</title>
    </head>
    <body>
        <?php
        require 'class/Status.class.php';

        $consulta = new Status();
     
        ?>       

        <table class="table table-hover">
            <thead> 
                <tr>
                    <th>CLIENTE</th>
                    <th>TRANSPARENCIA</th>
                    <th>SERVIÇOS WEB</th>
                    <th>SIP WEB</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Campo Novo de Rondônia </th>
                    <td><?php echo @$consulta->getStatus('186.219.242.38', 5659); ?></td>
                    <td><?php echo @$consulta->getStatus('186.219.242.38', 5660); ?></td>
                    <td><?php echo @$consulta->getStatus('186.219.242.38', 5660); ?></td>
                </tr>

                <tr>
                    <th>Jí-Paraná </th>
                    <td><?php echo @$consulta->getStatus('201.3.59.82', 5659); ?></td>
                    <td><?php echo @$consulta->getStatus('201.3.59.82', 5660); ?></td>
                    <td><?php echo @$consulta->getStatus('201.3.59.82', 5660); ?></td>
                </tr>
                <tr>
                    <th>Ouro Preto </th>
                    <td><?php echo @$consulta->getStatus('191.37.222.194', 5659); ?></td>
                    <td><?php echo @$consulta->getStatus('191.37.222.194', 5660); ?></td>
                    <td><?php echo @$consulta->getStatus('191.37.222.194', 5660); ?></td>
                </tr>
                <tr>
                    <th>Jarú </th>
                    <td><?php echo @$consulta->getStatus('201.16.129.175', 5659); ?></td>
                    <td><?php echo @$consulta->getStatus('201.16.129.176', 5660); ?></td>
                    <td><?php echo @$consulta->getStatus('201.16.129.175', 5660); ?></td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
