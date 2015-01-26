<!-- FORMULARIO DE CADASTRO --> 


	<form action="create">
		<fieldset>
			<legend>Dados Pessoais</legend>
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" required>
			<label for="data_nascimento">Data de Nascimento</label>
			<input type="date" name="data_nasc" id="data_nasc" required>
		</fieldset>
		<fieldset>

			<legend>Dados de localização</legend>
			<label for="Rua">Endereço:</label>
			<input type="text" name="endereço" id="rua" placeholder="Rua, Av, etc." required>
			<label for="Numero">Numero do imóvel:</label>
			<input type="text" name="numero do imóvel" id="numero" placeholder="Numero" required>
			<p><label for="Numero">CEP:</label>
			<input type="text" name="cep" id="numero" required>
			<label for="cidade">Cidade:</label>
			<select name="cidade" id="cidade" required>
				<option value="">Selecione uma cidade:</option>
				<option value="pr">Andradina</option>
				<option value="pr">Araçatuba</option>
				<option value="pr">Itapetininga</option>
				<option value="sp">São Paulo</option>
				<option value="pr">Tatuí</option></p>
			</select>
			<label for="estado">Estado:</label>
			<select name="estado" id="estado" required>
				<option value="">Selecione um estado</option>
				<option value="sp">São Paulo</option>
				<option value="pr">Paraná</option>
			</select>
		</fieldset>
		<fieldset>

			<legend>Informações para contato</legend>
			<label for="telefone">Telefone:</label>
			<input type="tel" name="telefone" id="telefone">
			<p><label for="celular">Celular:</label>
			<input type="cel" name="celular" id="celular"></p>
			<p><label for="email">E-mail:</label>
			<input type="email" name="email" id="email">
		</fieldset>
		<fieldset></p>
			<label for="informacoes">
				<input type="checkbox" name="informacoes" id="informacoes"> Desejo receber informações....
			</label>
			<label for="info_diariamente">
				<input type="radio" name="info_frequencia" id="info_diariamente"> Diariamente
			</label>
			<label for="info_semanalmente">
				<input type="radio" name="info_frequencia" id="info_semanalmente"> Semanalmente
			</label>
		</fieldset>
		<input type="hidden" name="acao" value="cadastrar">
		<button>Enviar</button>
	</form>
</label></p>