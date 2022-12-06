let cTemp = prompt('Введите температуру в градусах Цельсия: ');
let fTemp = ('Фаренгейт: ');
let message = (fTemp + (cTemp * 9 / 5 + 32).toFixed(2));
alert(message);
