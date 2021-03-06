<div id="header">
	<div>
		<h1>Seu Spaghetti* acabou de sair do forno!</h1>
		<p>
			Mas essa provavelmente não é a tela que você havia planejado para sua aplicação.<br />
			A boa notícia é que a parte divertida começa agora! Siga os passos abaixo para começar a se divertir com produtividade.
		</p>
	</div>
</div>

	<hr />

<div id="welcome">

	<div id="content">
		<h2>Como come&ccedil;ar</h2>
		<p>Caso voc&ecirc; ainda n&atilde;o saiba como o Spaghetti* funciona, recomendamos que voc&ecirc; leia os <a href="http://spaghettiphp.org/tutorials">tutoriais</a> dispon&iacute;veis,
		a <a href="http://spaghettiphp.org/docs">documenta&ccedil;&atilde;o</a> e os <a href="http://spaghettiphp.org/screencasts">screencasts</a> que gravamos para tornar a sua aprendizagem ainda mais f&aacute;cil e r&aacute;pida.</p>
		<p>Se voc&ecirc; j&aacute; conhece o Spaghetti* ou j&aacute; entende o funcionamento de <i>frameworks</i> <acronym title="Model, View, Controller">MVC</acronym>, eis o que voc&ecirc; precisa fazer para come&ccedil;ar a se divertir:</p>
		
		<ol>
		<li>
			<strong>Configure uma conex&atilde;o com o banco de dados</strong>
			<p>Essa &eacute; uma das poucas configura&ccedil;&otilde;es que voc&ecirc; precisa fazer, e por enquanto s&oacute; trabalhamos com MySQL. Especifique os dados de acesso ao seu banco no arquivo <em class="mono">/app/config/database.php</em>.</p>
		</li>
		<li>
			<strong>Crie um <em>model</em></strong>
			<p>Crie seus modelos de dados dentro da pasta <em class="mono">app/models/</em>. Se, por exemplo, seu modelo se chamar <em>Post</em>, crie um arquivo <em class="mono">post.php</em> nesta pasta, e neste arquivo a classe <em class="mono">Post</em> que estende <em class="mono">AppModel</em>.</p>
		</li>
		<li>
			<strong>Crie um <em>controller</em></strong>
			<p>Se o seu <em>controller</em> se chamar <em class="mono">Posts</em>, crie um arquivo <em class="mono">posts_controller.php</em> na pasta <em class="mono">/app/controllers/</em>, e neste arquivo a classe <em class="mono">PostsController</em> que extende <em class="mono">AppController</em>.</p>
		</li>
		<li>
			<strong>Crie uma <em>action</em> em seu <em>controller</em></strong>
			<p>Para criar uma <em>action</em> em seu <em>controller</em>, crie um m&eacute;todo com o nome da <em class="mono">action</em> dentro da classe do <em>controller</em> correspondente. A <em>action</em> padr&atilde;o do <em>controller</em> deve ser o m&eacute;todo <em class="mono">index()</em>.</p>
		</li>
		<li>
			<strong>Crie uma <em>view</em> para sua <em>action</em></strong>
			<p>Para criar uma <em>view</em> em sua <em>action</em>, crie um arquivo na pasta <em class="mono">/app/views/nome_do_controller/nome_da_action.phtm</em>. Se voc&ecirc; quiser criar uma <em>view</em> para a <em>action shop</em> do <em>controller Products</em>, por exemplo, o arquivo da <em>view</em> ficar&aacute; <em class="mono">/app/views/products/shop.phtm</em>.</p>
		</li>
		<li>
			<strong>Crie um <em>layout</em> para sua aplica&ccedil;&atilde;o</strong>
			<p>O <em>layout</em> padr&atilde;o &eacute; o arquivo <em class="mono">/app/layouts/default.phtm</em>. Consulte a documenta&ccedil;&atilde;o para informa&ccedil;&otilde;es sobre a cria&ccedil;&atilde;o de m&uacute;ltiplos <em>layouts</em>.</p>
		</li>
		</ol>
		
	</div>
	
	<div id="sidebar">
		<h2>Obter ajuda</h2>
			<form action="http://www.google.com/cse" id="cse-search-box">
			  <fieldset>
				<legend>Pesquisar</legend>
				<input type="hidden" name="cx" value="007024067038056169021:34yi_ggaqdg" />
				<input type="hidden" name="ie" value="UTF-8" />
				<input type="text" id="query" name="q" size="31" />
				<button type="submit" name="sa">Pesquisar</button>
			  </fieldset>
			</form>
			<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=pt"></script>
		<ul>
			<li><a href="http://spaghettiphp.org/docs">Documenta&ccedil;&atilde;o</a></li>
			<li><a href="http://spaghettiphp.org/tutorials">Tutoriais</a></li>
			<li><a href="http://spaghettiphp.org/screencasts">Screencasts</a></li>
			<li><a href="http://spaghettiphp.org/components">Componentes</a></li>
			<li><a href="http://trac.spaghettiphp.org/">Reposit&oacute;rio de Vers&otilde;es</a></li>
		</ul>

		<h2>Estenda sua aplica&ccedil;&atilde;o</h2>
		<p>Em nossa p&aacute;gina de <a href="http://spaghettiphp.org/components">componentes</a> voc&ecirc; pode estender as funcionalidades do Spaghetti*, sem que voc&ecirc; precise reinventar a roda.</p>
	</div>
	
	<hr />

	<div id="footer">
		<div class="left">
			<strong>Spaghetti Web Development Framework</strong>
			<ul>
				<li><a href="http://trac.spaghettiphp.org/">Trac</a></li>
				<li><a href="http://spaghettiphp.org/docss">Documenta&ccedil;&atilde;o</a></li>
				<li><a href="http://spaghettiphp.org/tutorials">Tutoriais</a></li>
				<li class="last"><a href="http://spaghettiphp.org/screencasts">Screencasts</a></li>
			</ul>
		</div>
		<div class="right">
			<?php echo $html->image("spaghetti.gif", "Spaghetti"); ?> vers&atilde;o 0.1
		</div>
	</div>

</div>