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
                        Головна сторінка про нас
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця про нас <a href="{{ route('about_form') }}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Зображення</th>
                                        <th>Титулка</th>
                                        <th>Назва</th>
                                        <th>Опис</th>
                                        <th>Активність</th>
                                        <th>Преорітет</th>
                                    </tr>
                                    </thead>
                                    @foreach($dataAbouts as $dataAbout)
                                        <tr>
                                            <th scope="row">{{$dataAbout->id}}</th>
                                            <td>{{$dataAbout->image}}</td>
                                            <td>{{$dataAbout->title}}</td>
                                            <td>{{$dataAbout->name}}</td>
                                            <td>{{$dataAbout->description}}</td>
                                            <td>{{$dataAbout->action}}</td>
                                            <td>{{$dataAbout->priority}}</td>
                                            <td>
                                                <a href="{{ route('edit_about', ['id' => $dataAbout->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_about', ['id' => $dataAbout->id]) }}">
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

