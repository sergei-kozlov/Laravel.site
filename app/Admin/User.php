<?php
use App\User;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(User::class, function (ModelConfiguration $model) {
    $model->setTitle('Users');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Name')->setWidth('200px'),
            AdminColumn::text('email')->setLabel('Email')->setHtmlAttribute('class', 'text-muted')
        ]);
        $display->paginate(15);
        return $display;
    });

    // Create And Edit
    $model->onCreateAndEdit(function () {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Name')->required()->unique(),
            AdminFormElement::text('email', 'Email')

        );
        return $form;
    });
})
    ->addMenuPage(User::class, 0)
    ->setIcon('fa fa-bank');