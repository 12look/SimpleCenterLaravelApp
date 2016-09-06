<?php

Admin::model('App\Worker')->title('')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('fio')->label('ФИО'),
		Column::string('phone')->label('Номер телефона'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('fio', 'ФИО'),
		FormItem::text('phone', 'Номер телефона'),
	]);
	return $form;
});