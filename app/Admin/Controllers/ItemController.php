<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item());

        $grid->column('id', __('Id'));
        $grid->column('brand_name', __('Brand name'));
        $grid->column('model_name', __('Model name'));
        $grid->column('price', __('Price'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image('http://www.TestProject.test', 100, 100);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('saleType', __('SaleType'));
        $grid->column('item_unique_id', __('Item unique id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('brand_name', __('Brand name'));
        $show->field('model_name', __('Model name'));
        $show->field('price', __('Price'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('saleType', __('SaleType'));
        $show->field('item_unique_id', __('Item unique id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Item());
        $form->text('brand_name', __('Brand name'));
        $form->text('model_name', __('Model name'));
        $form->decimal('price', __('Price'));
        $form->text('description', __('Description'));
        $form->image('image', __('Image'));
        $form->text('saleType', __('SaleType'));
        $form->text('item_unique_id', __('Item unique id'));

        return $form;
    }

}
