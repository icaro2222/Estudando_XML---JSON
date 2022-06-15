<br>
<br>
<br>
<br>
<p align="center" id="focomultimidia"><img src="https://focomultimidia.com/imgs/logo-foco.png" width="150px"></p>
<center><a href="https://focomultimidia.com">Focomultimídia</a></center>
<br>
<br>
<br>
<br>

<h1 id="summary">Sumário</h1>

<ul>
  <li><a href="#definition">Definição</a></li>
  <li><a href="#introduction">Introdução</a></li>
  <li><a href="#objective">Objetivo</a></li>
  <li><a href="#links">Links uteis</a></li>
  <li><a href="#reference">Referência</a></li>
</ul>

<h1 id="definition">Definições</h1>

- Check-in: Data de entrada no hotel
- Check-out: Data de saida no hotel
- Daily: Diárias do hotel, há valores por dia.

<h1 id="introduction">Introdução</h1>

Muitos de produtos que fazem o uso de API/Webservice, utilizam mecanimos de comunicação que viabilizam a troca de dados entre produtos e/ou serviçoes diferentes. Por exemplo, há possibilidade de desenvolver um serviço de comunicação com um gateway de pagamentos para a utilização em um _e-commerce_ e por sua vez efetuar uma compra de cartão de crédito.

Alguns desses produtos utilizam em sua <a href="#api">API</a> (_Application Program Interface_) formatos de transferencias de dados como <a href="#json">JSON</a> (_JavaScript Object Notation_) e <a href="#xml">XML</a> (_eXtensible Markup Language_) para troca de dados. Essas formatações facilitam a interpretação pelas linguagens de programação a manipular os dados de melhor forma para a persistência no banco de dados.

Abaixo estão listados dois exemplos de formatações de retorno de uma API ficticia que retorna os hoteis cadastrados em sua base de dados. Sendo o primeiro exemplo em XML e o segundo em JSON.

```XML
<?xml version="1.0" encoding="UTF-8"?>
<hotels>
  <hotel id="1" name="Focomultimidia Hotel">
</hotels>
```

```JSON
{
  "hotels":[
    {
      "id": 1,
      "name": "Focomultimitia Hotel"
    }
  ]
}
```

<h1 id="objective">Objetivo</h1>

O objetivo está definido em 3 situações.

- A primeira delas é realizar a modelagem do banco de dados utilizando como base os XMLs informados na pasta [_database_](database).
- A segunda situação é definida pela realização da importação do XML. Cujo objetivo é fazer a recuperação dos dados do XML e persistir no banco conforme a modelagem e dados.
- A terceira situação se designa a realização de uma das partes de CRUD. Na qual o objetivo é a criação de uma página que realiza a exibição dos reservas persistidas em que pode ser aplicado filtros para buscas avançadas.

As _milestones_ ou marcos a serem cumpridos estão listados abaixo.

- [ ] Modelar banco a partir dos xml dentro da pasta [database](database)
- [ ] Fazer um script para persistir os dados dos xml no banco
- [ ] Fazer uma pagina para listar as reservas com possibilidade de filtros:
  - [ ] Check-in
  - [ ] Check-out
  - [ ] Nome do hóspede
  - [ ] Hotel
  - [ ] Quarto

<h1 id="links">Links uteis</h1>

- https://www.php.net/manual/pt_BR/index.php

<h1 id="reference">Referência</h1>

<ol>
  <li id="api">REDHAT. O que é uma API? 2021. Disponível em: https://www.redhat.com/pt-br/topics/api/what-are-application-programming-interfaces.</li>
  <li id="json">JSON. introdução ao JSON. 2021. Disponível em: http://www.json.org/json-pt.html.</li>
  <li id="xml">ALMEIDA, M. B. Uma introdução ao xml, sua utilização na internet e alguns conceitos complementares. Ciência da informação, SciELO Brasil, v. 31, p. 5–13, 2002.</li>
</ol>
