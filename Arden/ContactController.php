<?php

namespace Arden;

class ContactController extends BaseController
{
    public function __construct()
    {
        $model = new ContactsModel();
        $this->modelData = $model->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }
}