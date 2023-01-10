const cTemp = prompt('Введите температуру в градусах Цельсия: ');
const fTemp = ('Фаренгейт: ');
const message = (fTemp + (cTemp * 9 / 5 + 32).toFixed(2));
alert(message);
