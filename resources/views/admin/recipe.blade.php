<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('admin.head')

<body>
<div id="wrapper">
    @include('admin.menu')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Головна сторінка рецептів
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця рецептів <a href="{{ route('recipe_form') }}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Зображення</th>
                                        <th>Назва</th>
                                        <th>Ціна</th>
                                        <th>Активність</th>
                                        <th>Преорітет</th>
                                    </tr>
                                    </thead>
                                    @foreach($dataRecipes as $dataRecipe)
                                        <tr>
                                            <th scope="row">{{$dataRecipe->id}}</th>
                                            <td>{{$dataRecipe->image}}</td>
                                            <td>{{$dataRecipe->name}}</td>
                                            <td>{{$dataRecipe->price}}</td>
                                            <td>{{$dataRecipe->action}}</td>
                                            <td>{{$dataRecipe->priority}}</td>
                                            <td>
                                                <a href="{{ route('edit_recipe', ['id' => $dataRecipe->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_recipe', ['id' => $dataRecipe->id]) }}">
                                                    delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.scripts')
</body>

</html>

