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
                        Головна сторінка блогу
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця блогу <a href="{{ route('blog_form') }}"><i class="fa fa-edit"></i> Додати нові дані </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Титулка</th>
                                        <th>Зображення</th>
                                        <th>Дата</th>
                                        <th>Назва</th>
                                        <th>Опис</th>
                                        <th>Активність</th>
                                        <th>Преорітет</th>
                                    </tr>
                                    </thead>
                                    @foreach($dataBlogs as $dataBlog)
                                        <tr>
                                            <th scope="row">{{$dataBlog->id}}</th>
                                            <td>{{$dataBlog->date}}</td>
                                            <td>{{$dataBlog->image}}</td>
                                            <td>{{$dataBlog->title}}</td>
                                            <td>{{$dataBlog->name}}</td>
                                            <td>{{$dataBlog->description}}</td>
                                            <td>{{$dataBlog->action}}</td>
                                            <td>{{$dataBlog->priority}}</td>
                                            <td>
                                                <a href="{{ route('edit_blog', ['id' => $dataBlog->id]) }}">
                                                    edit
                                                </a>
                                                /
                                                <a href="{{ route('delete_blog', ['id' => $dataBlog->id]) }}">
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

