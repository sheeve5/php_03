{extends file="../templates/main.tpl"}

{block name=footer}Ta część stopki została wpisana z szablonu kalkulatora{/block}

{block name=content}


	<div class="container">
		<div class="row">
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Podaj parametry</h1>
				</header>
				<form action="{$app_url}/app/calc.php" method="post">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="x" type="text" placeholder="Kwota" name="x" value="{$form['kwota']}">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Lata" name="y" value="{$form['lata']}">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" id="y" type="text" placeholder="Procent" name="z" value="{$form['procent']}">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<input class="btn btn-action" type="submit" value="Oblicz ratę">
							</div>
						</div>
					</form>

			</article>
		</div>
                <div class ="row">
                    <article class="col-sm-4 maincontent">
                        
                        {* wyświeltenie listy błędów, jeśli istnieją *}
			{if isset($messages)}
				{if count($messages) > 0} 
					<h4>Wystąpiły błędy: </h4>
					<ol class="err">
					{foreach  $messages as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
					{/foreach}
					</ol>
				{/if}
			{/if}

			{* wyświeltenie listy informacji, jeśli istnieją *}
			{if isset($infos)}
				{if count($infos) > 0} 
					<h4>Informacje: </h4>
					<ol class="inf">
					{foreach  $infos as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
					{/foreach}
					</ol>
				{/if}
			{/if}

			{if isset($result)}
				<h4>Wynik</h4>
				<p class="res">
				{$result}
				</p>
			{/if}

                    </article>
                </div>
	</div>	<!-- /container -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="./Contact us - Progressus Bootstrap template_files/jquery.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/bootstrap.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/jQuery.headroom.min.js.pobrane"></script>
	<script src="./Contact us - Progressus Bootstrap template_files/template.js.pobrane"></script>
{/block}