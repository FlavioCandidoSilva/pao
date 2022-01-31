from zeep import Client

client = Client('http://pao.com')
result = client.service.ConvertSpeed(
    100, 'kilometersPerhour', 'milesPerhour')

assert result == 62.137