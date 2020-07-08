# Desafio Desenvolvedor Gesuas

### Cenário

  O **NIS** (Número de Identificação Social) é um identificador único atribuído pela Caixa Econômica Federal aos cidadãos. Composto por 11 dígitos, é utilizado para realizar o pagamento de benefícios sociais, como chave de identificação nas Políticas Públicas, emissão de documentos, dentre outras utilidades.
  
### Desafio

  O desafio proposto foi criar uma aplicação contendo um formulário para o cadastro e consulta de cidadãos, por nome e NIS (Número de Identificação Social).
  
## A Aplicação
  
  Como solução a esse desafio foi usada a linguagem PHP, para o gerenciamento do backend, MySQL, para o banco de dados, e HTML e CSS para o frontend da aplicação.
  
  ### Funcionalidades
  
  O sistema consiste em apenas uma tela, contendo 2 campos de texto. O primeiro deve receber o nome do cidadão que se deseja cadastrar. Já o segundo campo receberá um NIS que deseja pesquisar na base de dados.
  
  ![](https://user-images.githubusercontent.com/36817095/86967239-c24b3d80-c140-11ea-9530-b95e2103df47.png)
  
  Na parte de cadastro de cidadãos, um nome será informado, gerando um NIS único para esse novo cidadão. Esse NIS poderá ser pesquisado no segundo campo de texto, o de consulta. Caso o NIS pesquisado esteja na base de dados, o sistema derá apresentar o nome e o NIS do cidadão referenciado, caso o NIS não esteja presente nos registros, o sistema enviará um alerta: "Cadastro não encontrado!".
  
## Como executar a aplicação

#### 1. Instalação do XAMPP

  Primeiramente deverá baixar o XAMPP( [clique aqui](https://www.apachefriends.org/pt_br/download.html) ) correspondente ao seu sistema operacional. Após realizar o download, execute o arquivo baixado e o instale de maneira padrão. 
  O programa criará uma pasta 'htdocs' no caminho de instalação padrão, no meu caso 'C:\xampp\htdocs'. Nessa pasta (C:\xampp\htdocs) exclua o arquivo 'index.php'. Após isso clone/baixe o projeto para dentro dessa pasta.
  
#### 2. Geração do Banco de Dados
  O proximo passo será criar o banco de dados da aplicação. Para isso, baixe o arquivo 'cidadao.sql' presente no repositório. Após isso, abra o XAMPP, anteriormente instalado, dê start em 'Apache' e 'MySQL' e depois em 'Admin' referente ao 'MySQL', ao fim desse processo o seu XAMPP deverá estar parecido com o da imagem:
  ![](https://user-images.githubusercontent.com/36817095/86969441-2cb1ad00-c144-11ea-96cd-8d2b594ab42e.png)
  
  Assim, uma janela no seu navegador deve abrir no site 'http://localhost/phpmyadmin/'. 
  Nessa site, na parte superior esquerda, clique em 'New', para criar um novo banco de dados. 
   
  ![](https://user-images.githubusercontent.com/36817095/86969854-ced19500-c144-11ea-8a6f-1fdbea0398cb.png)
   
  Você será redirecionado para uma nova tela onde deverá preencher os campos de 'Database name' e 'Collation' com 'bddesafio' e 'uft8_swedish_ci', respectivamente, conforme a imagem. Após preencher corretamente, clique em 'Go' no canto inferior direito da página.
  
  ![](https://user-images.githubusercontent.com/36817095/86970211-6800ab80-c145-11ea-8e92-31e3364a86c3.png)

  Após esse procedimento, você será redirecionado a uma nova tela, em que deverá clicar em 'Import'/'Importar' no topo do site. Como mostra a imagem:
  
  ![](https://user-images.githubusercontent.com/36817095/86970441-c75ebb80-c145-11ea-95c9-b97a5a42fe4b.png)
  
  Na tela seguinte clique em 'Choose File' (como mostra a imagem abaixo) e selecione o arquivo 'cidadao.sql' anteriormente baixado e depois clique em 'Go', no canto inferior direito da página.
  
  ![](https://user-images.githubusercontent.com/36817095/86970545-ee1cf200-c145-11ea-8ce0-d700a579bc19.png)
  
  Após isso, o banco de dados será gerado com algumas entradas padrões.
  
#### 3. Abrindo o sistema

  Chegamos ao processo final. Agora que você já possui o códido no local correto e o banco de dados criado e executando, basta entrar no seu navegador no endereço 'http://localhost/', abrir a pasta onde clonou/baixou o código.
  
  Abra a pasta 'frontend'. 
  
  Assim o sistema será inicializado e estará pronto para uso.
 
