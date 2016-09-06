<?php

Admin::model('App\Event')->title('')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('worker');
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Название'),
		Column::string('place')->label('Место'),
		Column::datetime('whengo')->label('Дата')->format('d.m.Y H:i'),
		Column::string('worker.fio')->label('Сотрудник'),
		Column::string('description')->label('Описание'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Название'),
		FormItem::text('place', 'Место'),
		FormItem::timestamp('whengo', 'Дата')->format('d.m.Y H:i'),//->seconds(true),
		FormItem::select('worker_id', 'Сотрудник')->model('App\Worker')->display('fio'),
		FormItem::ckeditor('description', 'Описание'),
		FormItem::images('photos', 'Фотографии'),
	]);
	return $form;
});