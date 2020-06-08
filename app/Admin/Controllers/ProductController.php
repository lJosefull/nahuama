<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Category;
use App\Sub_Category;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        
        $grid->Category()->name();
        $grid->Sub_Category()->name();
       
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('discount', __('Discount'));
        $grid->column('description', __('Description'));
        $grid->column('details', __('Details'));
        $grid->column('stock', __('Stock'));
        $grid->column('new', __('New'));
        $grid->column('count_shop', __('Count shop'));
        $grid->column('img', __('Img'));
        $grid->column('like', __('Like'));
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('sub_category_id', __('Sub category id'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('discount', __('Discount'));
        $show->field('description', __('Description'));
        $show->field('details', __('Details'));
        $show->field('stock', __('Stock'));
        $show->field('new', __('New'));
        $show->field('count_shop', __('Count shop'));
        $show->field('img', __('Img'));
        $show->field('like', __('Like'));
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
        $form = new Form(new Product());

        $sCat = 


        $form->select('category_id', __('Category id'))->options(
            Category::all()->mapWithKeys(function ($item) {
                return [$item['id'] => $item['name']];
            })
        );
        $form->select('sub_category_id', __('Sub category id'))->options(
            Sub_Category::all()->mapWithKeys(function ($item) {
                return [$item['id'] => $item['name']];
            })
        );
       
        //aqui quiero hacer el select para agregar las categoria y sub_categorias

        $form->text('name', __('Name'));
        $form->number('price', __('Price'));
        $form->number('discount', __('Discount'));
        $form->text('description', __('Description'));
        $form->textarea('details', __('Details'));
        $form->number('stock', __('Stock'))->default(1);
        $form->text('new', __('New'))->default('si');
        $form->number('count_shop', __('Count shop'));
        $form->image('img', __('Img'));
        $form->number('like', __('Like'));

        return $form;
    }
}
