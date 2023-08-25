# curso-wordpress-tema-customizado
Curso wordpress para criar um tema customizado

# Instruções
- Devem ser criadas as páginas com os seguintes slugs: about, blog, contact, home;
- Criar os menus para essas páginas;
- Selecionar na criação das páginas contact e about o template criado chamado general-template

# Internacionalização Instalação
- Baixar e instalar o aplicativo Poedit: https://poedit.net/download 
Obs:Instalar via Snp deu erro de permissão para abrir o diretório de instalação. 
Então fiz a instalação via apt
- Acessar o repositório: https://github.com/fxbenard/Blank-WordPress-Pot
- Baixar os arquivos Blank-WordPress.pot e How-to-use-a-pot-file.txt para o diretório languages na raíz do tema;
- Renomear o arquivo blank com o text domain do tema
- Abrir o arquivo pot com o Poedit;
- Dentro do Poedit Catalog(Traduções) > Properties e colocar os dados do Tema
- Clicar em update catalog(Atualizar código) e salvar;
- Clicar em file > new File POT/PO > Selecionar o arquivo de modelo POT dentro do tema > Selecionar a linguagem
- Para traduzir clicar na palavra da lista e inserir a tradução na caixa "Translation"
- Após traduzir os temas clicar em validar e depois salvar
- Para testar alterar o idioma do wordpress para a linguagem que quer em settings > General > site language