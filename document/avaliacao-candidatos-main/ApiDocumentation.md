<h1 id="api_documentation">API Documentation</h1>

Essa API tem como base os seguintes acessos:

- Recuperação de hoteis
- Recuperação de quartos
- Recuperação de disponibilidades e preços
- Importação de reservas
- Recuperação de reservas
- Edição de reservas.

Tomando como base o JSON, os corpos e respostas serão nessa formatação.

Para todas as rotas é necessário informar nos cabeçalhos (_Headers_) o token no formato Basic.

# Tabela de status

| Código | Resultado  |
| ------ | ---------- |
| 1      | Em análise |
| 2      | Reservado  |
| 3      | Cancelado  |

# Tabela de informações em caso de erro

| Código | Resultado                       |
| ------ | ------------------------------- |
| 1      | Hotel não encontrado            |
| 2      | Quarto não encontrado           |
| 3      | Datas indispníveis              |
| 4      | Não há disponibilidade          |
| 5      | Reserva não pode ser completada |
| 6      | Reserva indisponível            |

# Requisição para pegar todos os hoteis associados

Endpoint: <span>http://code-challenge/api/hotel</span>

Método: <span style="background-color: #00BDFF; padding: 4px; color: black; border-radius: 2px;">GET</span>

Cabeçalho: Authorization: Basic {TOKEN}

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "hotels": [
    {
      "id": 1,
      "name": "Hotel Beach"
    },
    {
      "id": 2,
      "name": "Hotel Prime"
    }
  ]
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 0,
      "message": "Erro inesperado."
    }
  ]
}
```

# Requisição para pegar todos os quartos associados

Endpoint: <span>http://code-challenge/api/room/{hotelCode}</span>

Método: <span style="background-color: #00BDFF; padding: 4px; color: black; border-radius: 2px;">GET</span>

Cabeçalho: Authorization: Basic {TOKEN}

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "rooms": [
    {
      "id": 1,
      "active": 1,
      "name": "Room economic"
    },
    {
      "id": 2,
      "active": 0,
      "name": "Room standard"
    }
  ]
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 0,
      "message": "Erro inesperado."
    }
  ]
}
```

# Requisição para pegar disponibilidade e preços

Endpoint: <span>http://code-challenge/api/rate/{hotelCode}/{roomCode}/{checkIn}/{checkOut}</span>

Método: <span style="background-color: #00BDFF; padding: 4px; color: black; border-radius: 2px;">GET</span>

Cabeçalho: Authorization: Basic {TOKEN}

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "rates": [
    {
      "availability": 10,
      "price": 150,
      "date": "2022-05-27"
    },
    {
      "availability": 10,
      "price": 200,
      "date": "2022-05-28"
    },
    {
      "availability": 10,
      "price": 150,
      "date": "2022-05-29"
    }
  ]
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 0,
      "message": "Erro inesperado."
    }
  ]
}
```

# Requisição para pegar todas as reservas

Endpoint: <span>http://code-challenge/reserve</span>

Método: <span style="background-color: #00BDFF; padding: 4px; color: black; border-radius: 2px;">GET</span>

Cabeçalho: Authorization: Basic {TOKEN}

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "success": true,
  "bookings": {
    "1": [
      {
        "id": 3,
        "reference_id": "123",
        "status": 1,
        "room_code": 1,
        "check_in": "2022-05-27",
        "check_out": "2022-05-29",
        "total": 350,
        "guests": [
          {
            "name": "Fulaninho",
            "last_name": "de Tal",
            "phone": "551995959595"
          }
        ],
        "dailies": [
          {
            "date": "2022-05-27",
            "amount": 150
          },
          {
            "date": "2022-05-28",
            "amount": 200
          }
        ]
      }
    ],
    "5": [
      {
        "id": 4,
        "reference_id": "123123",
        "status": 1,
        "room_code": 5,
        "check_in": "2022-05-27",
        "check_out": "2022-05-28",
        "total": 400,
        "guests": [
          {
            "name": "Fulaninha",
            "last_name": "de Tal",
            "phone": "551995959595"
          }
        ],
        "dailies": [
          {
            "date": "2022-05-27",
            "amount": 400
          }
        ]
      }
    ]
  },
  "error": null
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 2,
      "message": "Hotel 1 not found"
    }
  ]
}
```

# Requisição para pegar apenas uma reserva

Endpoint: <span>http://code-challenge/api/reserve/{bookingId}</span>

Método: <span style="background-color: #00BDFF; padding: 4px; color: black; border-radius: 2px;">GET</span>

Cabeçalho: Authorization: Basic {TOKEN}

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "success": true,
  "booking": {
    "id": 3,
    "reference_id": "123",
    "status": 1,
    "hotel_code": 1,
    "room_code": 1,
    "check_in": "2022-05-27",
    "check_out": "2022-05-29",
    "total": 350,
    "guests": [
      {
        "name": "Fulaninho",
        "last_name": "de Tal",
        "phone": "551995959595"
      }
    ],
    "dailies": [
      {
        "date": "2022-05-27",
        "amount": 150
      },
      {
        "date": "2022-05-28",
        "amount": 200
      }
    ]
  },
  "error": null
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 6,
      "message": "Booking not found"
    }
  ]
}
```

# Requisição para exportar uma venda

Endpoint: <span>http://code-challenge/api/reserve</span>

Método: <span style="background-color: green; padding: 4px; color: white; border-radius: 2px;">POST</span>

Cabeçalho: Authorization: Basic {TOKEN}

Corpo:

```JSON
{
  "bookings": [
    {
      "reference_id": 123,
      "hotel_code": 1,
      "room_code": 1,
      "check_in": "2022-05-27",
      "check_out": "2022-05-29",
      "total": 350.00,
      "guests":[
        {
          "name": "Fulaninho",
          "last_name": "de Tal",
          "phone": "551995959595"
        }
      ],
      "dailes":[
        {
          "date": "2022-05-27",
          "value": 150.00
        },
        {
          "date": "2022-05-28",
          "value": 200.00
        }
      ]
    },
    {
      "reference_id": 123123,
      "hotel_code": 2,
      "room_code": 5,
      "check_in": "2022-05-27",
      "check_out": "2022-05-28",
      "total": 400.00,
      "guests":[
        {
          "name": "Fulaninha",
          "last_name": "de Tal",
          "phone": "551995959595"
        }
      ],
      "dailes":[
        {
          "date": "2022-05-27",
          "value": 400.00
        }
      ]
    }
  ]
}
```

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">201 Created</span>

```JSON
{
  "success": true,
  "erros": null
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 4,
      "message": "Room 1 no has availability"
    }
  ]
}
```

# Requisição para exportar uma modificação

Endpoint: <span>http://code-challenge/reserve</span>

Método: <span style="background-color: orange; color: black; padding: 4px; border-radius: 2px;">PUT</span>

Cabeçalho: Authorization: Basic {TOKEN}

Corpo:

```JSON
{
  "bookings": [
    {
      "id": 1,
      "reference_id": 123,
      "hotel_code": 1,
      "room_code": 1,
      "status": 3,
      "check_in": "2022-05-27",
      "check_out": "2022-05-29",
      "total": 350.00,
      "guests":[
        {
          "name": "Fulaninho",
          "last_name": "de Tal",
          "phone": "551995959595"
        }
      ],
      "dailes":[
        {
          "date": "2022-05-27",
          "value": 150.00
        },
        {
          "date": "2022-05-28",
          "value": 200.00
        }
      ]
    },
    {
      "id": 2,
      "reference_id": 123123,
      "hotel_code": 2,
      "status": 1,
      "room_code": 3,
      "check_in": "2022-05-27",
      "check_out": "2022-05-29",
      "total": 900.00,
      "guests":[
        {
          "name": "Fulaninha",
          "last_name": "de Tal",
          "phone": "551995959595"
        }
      ],
      "dailes":[
        {
          "date": "2022-05-27",
          "value": 400.00
        },
				{
          "date": "2022-05-28",
          "value": 500.00
        }
      ]
    }
  ]
}
```

## Resposta em caso de sucesso

Status HTTP: <span style="background-color: green; padding: 4px;color: white; border-radius: 2px;">200 OK</span>

```JSON
{
  "success": true,
  "erros": null
}
```

## Resposta em caso de erro

Status HTTP: <span style="background-color: red; padding: 4px;color: white; border-radius: 2px;">400 Bad Request</span>

```JSON
{
  "success": false,
  "erros": [
    {
      "code": 4,
      "message": "Room 1 no has availability"
    }
  ]
}
```
