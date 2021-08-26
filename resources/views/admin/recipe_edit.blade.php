<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('admin.head')

<body>
<div id="wrapper">
    @include('admin.menu')
    </nav>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Редагування даних головної сторінки
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Таблиця для редагування
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal" role="form" action="{{ route('save_recipe') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$dataRecipes->id}}">

                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="fname" >Зображення</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="image" class="form-control" id="fname" value="{{$dataRecipes->image ?? ''}}">
                                                    <input type="hidden" name="image_2" value="{{$dataRecipes->image}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Назва</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" id="email1" value="{{$dataRecipes->name ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Ціна</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="price" class="form-control" id="email1" value="{{$dataRecipes->price ?? ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email1">Активність</label>
                                                <div class="col-sm-9">
                                                    <select name="action">
                                                        <option value="0" @if( isset($dataRecipes->action) && $dataRecipes->action == 0) selected @endif>No</option>
                                                        <option value="1" @if( isset($dataRecipes->action) && $dataRecipes->action == 1) selected @endif>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1">Преорітет</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="priority" value="{{ $dataRecipes->priority ?? '' }}" class="form-control" id="cono1"
                                                           placeholder="Для кого?">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-primary">Відправити</button>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('admin_recipe') }}" >НАЗАД</a>
                                </div>
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



