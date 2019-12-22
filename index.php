<?php
 
$data = file_get_contents('php://input');
$data = json_decode($data, true);
 
if (empty($data['message']['chat']['id'])) {
	exit();
}
 
define('TOKEN', '885468194:AAFKQVziurN5ug-7v3b7Z8YiaaKn-fu3VxU');
 
function sendTelegram($method, $response)
{
	$ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/' . $method);  
	curl_setopt($ch, CURLOPT_POST, 1);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$res = curl_exec($ch);
	curl_close($ch);
 
	return $res;
}
 
// Ответ на текстовые сообщения.
if (!empty($data['message']['text'])) {
	$text = $data['message']['text'];
 
	if ($text == '/start') {
		$keyboard = array(array("Москва"),array("Санкт-Петербург"),array("Казань"),array("Сочи"),array("Екатеринбург"),array("Калининград"),array("Нижний Новгород"),array("Новосибирск"),array("Краснодар"),array("Ярославль"),array("Петрозаводск"),array("Владивосток"),array("Ростов-на-Дону"),array("Анапа"),array("Суздаль"),array("Самара"),array("Красноярск"),array("Уфа"),array("Пермь"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Добро пожаловать! Выбери свой город из списка ниже.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Москва') {
		$keyboard = array(array("Арбат"),array("Басманный"),array("Бирюлёво"),array("Замоскворечье"),array("Мещанский"),array("Пресненский"),array("Москва-Сити"),array("Таганский"),array("Тверской"),array("Хамовники"),array("Якиманка"),array("ЗАО"),array("САО"),array("ЮАО"),array("Измайлово"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Санкт-Петербург') {
		$keyboard = array(array("Адмиралтейский"),array("Василеостровский"),array("Выборгский"),array("Калининский"),array("Красногвардейский"),array("Красносельский"),array("Курортный"),array("Московский"),array("Невский"),array("Петроградский"),array("Петродворцовый"),array("Приморский"),array("Пушкинский"),array("Фрунзенский"),array("Центральный"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Казань') {
		$keyboard = array(array("Авиастроительный"),array("Вахитовский"),array("Кировский"),array("Московский"),array("Ново-Савиновский"),array("Приволжский"),array("Советский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Сочи') {
		$keyboard = array(array("Центральный"),array("Адлерский"),array("Хостинский"),array("Лазаревский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Екатеринбург') {
		$keyboard = array(array("Верх-Исетский"),array("Железнодорожный"),array("Кировский"),array("Ленинский"),array("Октябрьский"),array("Орджоникидзевский"),array("Чкаловский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Калининград') {
		$keyboard = array(array("Ленинградский"),array("Московский"),array("Центральный"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Нижний Новгород') {
		$keyboard = array(array("Нижегородский"),array("Советский"),array("Приокский"),array("Автозаводский"),array("Ленинский"),array("Канавинский"),array("Московский"),array("Сормовский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Новосибирск') {
		$keyboard = array(array("Дзержинский"),array("Железнодорожный"),array("Заельцовский"),array("Калининский"),array("Кировский"),array("Ленинский"),array("Октябрьский"),array("Первомайский"),array("Советский"),array("Центральный"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Краснодар') {
		$keyboard = array(array("Центральный"),array("Западный"),array("Прикубанский"),array("Карасунский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Ярославль') {
		$keyboard = array(array("Дзержинский"),array("Заволжский"),array("Кировский"),array("Красноперекопский"),array("Ленинский"),array("Фрунзенский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Петрозаводск') {
		$keyboard = array(array("Бараний Берег"),array("Голиковка"),array("Древлянка"),array("Дровяной"),array("Железнодорожный"),array("Зарека"),array("Зимник"),array("Ивановские Острова"),array("Каменный Бор"),array("Ключевая"),array("Кукковка"),array("микро Петушки"),array("Неглин"),array("Немецкий Наволок"),array("Октябрьский"),array("Первомайский"),array("Пески"),array("Птицефабрика"),array("Сайнаволок"),array("Северная промзона"),array("Соломенное"),array("Сулажгора"),array("Тепличный"),array("Центр"),array("Южная промзона"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Владивосток') {
		$keyboard = array(array("Ленинский"),array("Первомайский"),array("Первореченский"),array("Советский"),array("Фрунзенский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Ростов-на-Дону') {
		$keyboard = array(array("Ворошиловский"),array("Железнодорожный"),array("Кировский"),array("Ленинский"),array("Октябрьский"),array("Первомайский"),array("Пролетарский"),array("Советский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Анапа') {
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'В Анапе мы не делимся на районы. Товар может быть доставлен в любую точку города. Отправьте любое сообщение для продолжения.'
			)
		);
 
		exit();	
	} elseif ($text == 'Суздаль') {
		$keyboard = array(array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""),array(""));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'В Суздале мы не делимся на районы. Товар может быть доставлен в любую точку города. Отправьте любое сообщение для продолжения.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Самара') {
		$keyboard = array(array("Железнодорожный"),array("Кировский"),array("Красноглинский"),array("Куйбышевский"),array("Ленинский"),array("Октябрьский"),array("Промышленный"),array("Самарский"),array("Советский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Красноярск') {
		$keyboard = array(array("Железнодорожный"),array("Кировский"),array("Ленинский"),array("Октябрьский"),array("Свердловский"),array("Советский"),array("Центральный"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Уфа') {
		$keyboard = array(array("Дёмский"),array("Калининский"),array("Кировский"),array("Ленинский"),array("Октябрьский"),array("Орджоникидзевский"),array("Советский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Пермь') {
		$keyboard = array(array("Дзержинский"),array("Индустриальный"),array("Кировский"),array("Ленинский"),array("Мотовилихинский"),array("Орджоникидзевский"),array("Свердловский"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Теперь выбери наиболее близкий к тебе.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Corvus Brutal') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Corvus Brutal. Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Slim Ice amaretto') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Slim Ice amaretto. Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Lyft Mint ( без табака )') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Lyft Mint ( без табака ). Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Kurwa Purple Grape') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Kurwa Purple Grape. Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Nictech Trotyl') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Corvus Brutal. Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'Lyft Ice cool') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Вы выбрали товар Lyft Ice cool. Наш магазин принимает оплату только на QIWI кошельки в автоматическом режиме.
				
				Цена товара - 120р (СКИДКА)
				Счёт для оплаты товара - +79777777777
				
				Переведите на номер выше полную стоимость товара с комментарием ' . mt_rand(100,999) . ' (с телефона этот комментарий можно скопировать долгим тапом по нему)
				
				Когда вы завершите оплату, нажмите кнопку ОПЛАТИЛ!',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} elseif ($text == 'ОПЛАТИЛ') {
		$keyboard = array(array("ОПЛАТИЛ"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Оплата  не найдена! Переведите средства.',
				'reply_markup' => $reply
			)
		);
 
		exit();	
	} else {
		$keyboard = array(array("Corvus Brutal"),array("Slim Ice amaretto"),array("Corvus Joker"),array("Lyft Mint ( без табака )"),array("Kurwa Purple Grape"),array("Nictech Trotyl"),array("Lyft Ice cool"));
		$reply = json_encode(array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true));
		sendTelegram(
			'sendMessage', 
			array(
				'chat_id' => $data['message']['chat']['id'],
				'text' => 'Выберите товар из списка:',
				'reply_markup' => $reply
			)
		);
	}

}
