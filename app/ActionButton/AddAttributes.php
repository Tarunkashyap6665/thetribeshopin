<?php
namespace App\ActionButton;

use TCG\Voyager\Actions\AbstractAction;

class AddAttributes extends AbstractAction{
    public function getTitle()
    {
        // Action title which display in button based on current status
        return 'Add Attributes';
    }

    public function getIcon()
    {
        // Action icon which display in left of button based on current status
        return '';
    }

    public function getAttributes()
    {
        // Action button class
        return [
            'class' => 'btn btn-sm btn-primary pull-left',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        // show or hide the action button, in this case will show for posts model
        return $this->dataType->slug == 'products';
    }

    public function getDefaultRoute()
    {
        // URL for action button when click
        return route('voyager.product-attributes.create', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}