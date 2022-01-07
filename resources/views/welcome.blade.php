<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parabéns!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div>
        <h1>Bem vindo!</h1>
        <p>Por favor, realize seu cadastro para que possamos enviar seu presente de aniversário.</p>
    </div>

    <form action="/enviar" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required> 
            </div>
        </fieldset>

        <div>
            <label for="">E-mail</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="">Informe a data do seu nascimento</label>
            <input type="date" name="niver" id="niver" required>
        </div>

        <div>
            <label>Informe o período em que estará disponível para receber o presente </label>
            <label for="">
                <input type="radio" name="periodo" value="manha" checked>Manhã
            </label>
            <label for="">
                <input type="radio" name="periodo" id="" value="tarde">Tarde
            </label>
            <label for="">
                <input type="radio" name="periodo" id="" value="noite">Noite
            </label>
        </div>

        <fieldset>
            <label>Informe seu endereço</label>
            <div>
                <label>Endereço</label>
                <input type="text" name="rua" id="rua" required>
            </div>

            <div>
                <label>Cidade</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>

            <div>
                <label>Estado</label>
                <select name="estado" id="estado"> 
                    <option value="estado">Selecione o Estado</option> 
                    <option value="AC">Acre</option> 
                    <option value="AL">Alagoas</option> 
                    <option value="AM">Amazonas</option> 
                    <option value="AP">Amapá</option> 
                    <option value="BA">Bahia</option> 
                    <option value="CE">Ceará</option> 
                    <option value="DF">Distrito Federal</option> 
                    <option value="ES">Espírito Santo</option> 
                    <option value="GO">Goiás</option> 
                    <option value="MA">Maranhão</option> 
                    <option value="MT">Mato Grosso</option> 
                    <option value="MS">Mato Grosso do Sul</option> 
                    <option value="MG">Minas Gerais</option> 
                    <option value="PA">Pará</option> 
                    <option value="PB">Paraíba</option> 
                    <option value="PR">Paraná</option> 
                    <option value="PE">Pernambuco</option> 
                    <option value="PI">Piauí</option> 
                    <option value="RJ">Rio de Janeiro</option> 
                    <option value="RN">Rio Grande do Norte</option> 
                    <option value="RO">Rondônia</option> 
                    <option value="RS">Rio Grande do Sul</option> 
                    <option value="RR">Roraima</option> 
                    <option value="SC">Santa Catarina</option> 
                    <option value="SE">Sergipe</option> 
                    <option value="SP">São Paulo</option> 
                    <option value="TO">Tocantins</option> 
                </select>
            </div>    
        </fieldset>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <img src="https://images.vexels.com/media/users/3/75637/raw/a813faf64fad5a04e4dd21ca7d09f86f-feliz-aniversario-colorido-bolo.jpg" class="img-circle" alt="Responsive image" width="30%">
</body>
</html> 