<?php

Admin::model('App\Schedular')->title('')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('worker');
	$display->filters([

	]);
	$display->columns([
		Column::string('worker.fio')->label('Сотрудник'),
		Column::string('group_num')->label('Номер группы'),
		Column::datetime('start')->label('Начало')->format('H:i'),
		Column::datetime('end')->label('Конец')->format('H:i'),
		Column::string('day_of_week')->label('День недели'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::select('worker_id', 'Сотрудник')->model('App\Worker')->display('fio'),
		FormItem::timestamp('start', 'Начало')->format('H:i'),//->seconds(true),
		FormItem::timestamp('end', 'Конец')->format('H:i'),//->seconds(true),
		FormItem::text('group_num', 'Номер группы'),
		FormItem::select('day_of_week', 'День недели')->enum(['1', '2', '3', '4', '5', '6', '7']),
	]);
	return $form;
});