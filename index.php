<?php
require_once "inc/conn.inc.php";

//$filter = " where title like '%:title%' ";

$stmt = $conn->prepare("SELECT id_admin, login, senha, nome, email, cpf, celular, data FROM tb_admin limit 10");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once "inc/header.php";
?>
<div class="wrapper">
    <?php
    require_once "inc/navbar.php";
    require_once "inc/sidebar.php";
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php require_once("inc/page-header.php"); ?>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Crianças Cadastrados</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">



                                <table id="example1" class="table table-borderedm table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Login</th>
                                            <th>Senha</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>CPF</th>
                                            <th>Celular</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!$results) {
                                            echo "<tr><td colspan='5'>Nenhum registro encontrado!</td></tr></tdoby></tbody></table>";
                                            exit();
                                        }
                                        ?>

                                        <?php

                                        foreach ($results as $row) {
                                            echo "<tr>";
                                            foreach ($row as $key => $value) {
                                                if ($key != "id") {
                                                    echo "<td>" . $value . "</td>";
                                                }
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php require_once("inc/footer.php") ?>