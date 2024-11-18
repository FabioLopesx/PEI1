1. Instale o app XAMPP na sua máquina;
2. Baixe e cole este projeto em c:/xampp/htdocs/(pasta do projeto);
3. Na tela principal do XAMPP dê start nos serviços MySQL e Apache;
4. Pelo PhpMyAdmin, executando o arquivo banco1.sql;
5. Com a base de dados criada e os serviços em funcionamento, vá até seu navegador e digite "localhost/(pasta do projeto)";
6. Abrirá por padrão o arquivo de nome "index.html";

Próximo passo:
1. Fazer download do arquivo "pedidos.csv" no site;
2. Dentro do código python escolher um diretório (" colar caminho") para estar colocando o arquivo.
 passo 4: calcular os indicadores

tabela = pd.read_csv(r"CAMINHO AQUI", sep=";")

3. Só colocar o arquivo "pedidos.csv"  neste diretório e executar o código python. Após isso, será enviado um relatório contendo uma análise crítica do arquivo em csv para o email cadastrado no código.
 
 enviar um email com o relatório

mail.To = 'EMAIL AQUI'
