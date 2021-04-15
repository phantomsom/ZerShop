<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Controllers\Dashboard;

class ZerShopSecretPageController extends Controller
{
    public function index(Content $content)
    {
       $content
                ->title('Zer Shop, best clothing in town')
                ->description('Kappa')
                ->row(Dashboard::title())
                ->row(function (Row $row) {
                
                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::environment());
                    });
                
                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::extensions());
                    });
                
                    $row->column(4, function (Column $column) {
                        $column->append(Dashboard::dependencies());
                    });
                })

                // optional
                ->header('page header')
                // optional
                ->description('page description')

                 // add breadcrumb since v1.5.7
                ->breadcrumb(
                ['text' => 'Dashboard', 'url' => '/admin'],
                ['text' => 'User management', 'url' => '/admin/users'],
                ['text' => 'Edit user']
                )

                // Fill the page body part, you can put any renderable objects here
                ->body('hello world')

                // Add another contents into body
                ->body('foo bar')

                // method `row` is alias for `body`
                ->row('hello world')

                 // Direct rendering view, Since v1.6.12
                ->view('dashboard', ['data' => 'foo'])
                
                /*
                ---------------------------------
                |hello                          |
                |                               |
                |                               |
                |                               |
                |                               |
                |                               |
                ---------------------------------
                */
                ->row('hello')

                /*
                ----------------------------------
                |foo       |bar       |baz       |
                |          |          |          |
                |          |          |          |
                |          |          |          |
                |          |          |          |
                |          |          |          |
                ----------------------------------
                */

                ->row(function(Row $row) {
                    $row->column(4, 'foo');
                    $row->column(4, 'bar');
                    $row->column(4, 'baz');
                })

               /*
                ----------------------------------
                |foo       |bar                  |
                |          |                     |
                |          |                     |
                |          |                     |
                |          |                     |
                |          |                     |
                ----------------------------------
                */
                ->row(function(Row $row) {
                    $row->column(4, 'foo');
                    $row->column(8, 'bar');
                })


                /*
                ----------------------------------
                |xxx       |111                  |
                |          |---------------------|
                |          |222                  |
                |          |---------------------|
                |          |444      |555        |
                |          |         |           |
                ----------------------------------
                */

                 ->row(function (Row $row) {

                    $row->column(4, 'xxx');
                    $row->column(8, function (Column $column) {
                        $column->row('111');
                        $column->row('222');
                        $column->row(function(Row $row) {
                            $row->column(6, '444');
                            $row->column(6, '555');
                        });
                    });
                });
                
                return $content;
    }
}
