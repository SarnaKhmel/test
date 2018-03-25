<?php

namespace App\Http\Sections;

use AdminDisplay;
use AdminColumn;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;


/**
 * Class Events
 *
 * @property \App\Events $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Events extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    public function Initialize()
    {
        $this->addToNavigation($priority = 500, function()
        {
            return \App\Events::count();
        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumn::text('id', 'ID'),
                AdminColumn::text('name', 'Name'),
                AdminColumn::text('subscribe', 'Subscribe'),
                AdminColumn::datetime('date', 'Date')
            )->paginate(15);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Key')->required(),
            AdminFormElement::text('subscribe', 'subscribe')->required(),
            AdminFormElement::datetime('date', 'Date')->required()
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
    public function getCreateTitle()
    {
        return 'Add new event';
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {

    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
