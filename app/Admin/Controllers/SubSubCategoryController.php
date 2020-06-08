<?php

namespace App\Admin\Controllers;

use App\Sub_SubCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Sub_Category;
class SubSubCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sub_SubCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sub_SubCategory());

        $grid->column('id', __('Id'));
        $grid->Sub_Category()->name();
        $grid->column('name', __('Name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Sub_SubCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sub_category_id', __('Sub category id'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Sub_SubCategory());

        $form->select('sub_category_id', __('Sub category id'))->options(
            Sub_Category::all()->mapWithKeys(function ($item) {
                
              
                return [ $item['id'] => $item['name']];
            })
        );
        $form->text('name', __('Name'));

        return $form;
    }
}
