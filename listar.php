<?php
    include 'pedaco.php';
?>


    <section id="billboard section-listar">

		<div class="container section-listar">
			<div class="row">
				<div class="col-md-12">

					<table class="table">
                        <thead>
                            <tr>
                                <th scope="col celula">Código</th>
                                <th scope="col celula">Nome</th>
                                <th scope="col celula">Preço</th>
                                <th scope="col celula">Quantidade</th>
                                <th scope="col celula">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require 'conexao.php';

                                $sql = "SELECT * FROM produtos";
                                $stmt = $pdo->query($sql);
                            
                                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>";
                                    echo "<td>" . $produto['id'] . "</td>";
                                    echo "<td>" . $produto['nome'] . "</td>";
                                    echo "<td>" . $produto['preco'] . "</td>";
                                    echo "<td>" . $produto['quantidade'] . "</td>";
                                    echo "<td>";
                                    echo "
                                        <div class='btn-group' role='group'>
                                            <a href='form-atualiza.php?id=" . $produto['id'] . "' type='button' class='btn btn-warning'>Editar</a>
                                            <a href='deletar.php?id=" . $produto['id'] . "' type='button' class='btn btn-danger'>Excluir</a>
                                        </div>
                                    ";
                                    echo "</td>";
                                    echo "</tr>";            
                                
                                }
                            ?>
                        </tbody>
                    </table>
                    <div>
                        <a href="form-cadastra.php" class="btn btn-outline-accent btn-accent-arrow">
                            Cadastrar Produto<i class="icon icon-ns-arrow-right"></i>
                        </a>
                    </div>

				</div>
			</div>
		</div>

	</section>


	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="images/BeStockLogo.png" alt="logo" class="footer-logo">
							<p>
                                Tenha o melhor gerenciador de estoque na palma da sua mão e não
                                perca mais tempo! Gerencie seus recursos de qualquer lugar, a qualquer momento
                                com nosso sistema online. Venha para BeStock!
                            </p>
						</div>
					</div>

				</div>

				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								<p>© 2025 Todos os direitos reservados. Site desinvolvido por: <a
										href="https://github.com/EstevaoLocks" target="_blank">Estevão Oliveira Locks</a></p>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>

</body>

</html>