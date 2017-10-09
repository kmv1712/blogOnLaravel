<?php

use Illuminate\Database\Seeder;

class AddQuestionInTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

    	$dateCreateQuestion = date("Y-m-d H:i:s");
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Выключатели', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
       DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Выключатели', 
      	'userQuestion' => 'Каким напряжением испытываеться масляный выключатель 10кВ в эксплуатации?',
        'adminAnswer' => 'Переменным напряжением 37,8кВ частоты 50 Гц',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
        DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Трансформаторы', 
      	'userQuestion' => 'Зачем нужен ПБВ трансфрматору 10кВ?',
        'adminAnswer' => 'Для изменения наряжения на выходе трансформатора, путем изменения количества витков',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      	 DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Трансформаторы', 
      	'userQuestion' => 'В чем разница ТМГ и ТМ ?',
        'adminAnswer' => 'У ТМГ нет расширителя',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Разъединители', 
      	'userQuestion' => 'Для чего нужен раз?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Разъединители', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'ОПН', 
      	'userQuestion' => 'Для чего нужен ОПН?',
        'adminAnswer' => 'Для ограничения перенапряжений',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'ОПН', 
      	'userQuestion' => 'Как ОПН ограничевает напряжение?',
        'adminAnswer' => 'За счет ВАХ варистора ОПН, ОПН при достижение определенного напряжение открываеться на землю и не дает вырасти напряжению выше номинального',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'РВС', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'РВС', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Молниеотводы', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Молниеотводы', 
      	'userQuestion' => 'Какие типы высоковольтных выключателей сущестуют?',
        'adminAnswer' => 'Элегазовые, Воздушные, Масляные, Электромагнитные, Ваккумные',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Кабель', 
      	'userQuestion' => 'Каким напряжением испытывают кабель 10кВ из сшитого полиэтилена?',
        'adminAnswer' => '18кВ напряжением СНЧ 0,1 Гц, в течение часа',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'Кабель', 
      	'userQuestion' => 'Каким напряжение испытываеться бумажно-масляный кабель 10кВ?',
        'adminAnswer' => '60кВ постоянного напряжения',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'СИЗ', 
      	'userQuestion' => 'Длина диэлектрических перчаток?',
        'adminAnswer' => '35 см',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
      DB::table('questions')->insert(['userName' => 'Михаил', 
      	'userMail' => 'kmv1712@gmail.com',
      	'categorie' => 'СИЗ', 
      	'userQuestion' => 'Каким напряжением испытываются диэлектрические боты?',
        'adminAnswer' => '15 кВ переменным напряжением частоты 50 Гц',
        'status' => 1,
        'dateCreateQuestion' => "$dateCreateQuestion"
      	]);
    	// DB::table('questions')->insert(['questions' => 'Трансформаторы']);
    	// DB::table('questions')->insert(['questions' => 'Разъединители']);
    	// DB::table('questions')->insert(['questions' => 'ОПН']);
    	// DB::table('questions')->insert(['questions' => 'РВС']);
    	// DB::table('questions')->insert(['questions' => 'Молниеотводы']);
    	// DB::table('questions')->insert(['questions' => 'Кабель']);
    	// DB::table('questions')->insert(['questions' => 'СИЗ']);
    }
}
