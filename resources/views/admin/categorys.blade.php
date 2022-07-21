@extends('layouts.admin')

@section('title', 'Ne Ararsan.com - Kategoriler')

@section('author', 'Kerem Çelik')


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Babasayfa</a></li>
                            <li class="breadcrumb-item active">Kategoriler</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategori Listesi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Parent ID</th>
                            <th>Kategori Adı</th>
                            <th>Durum</th>
                            <th>Güncelle</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($values as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->parent_id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->status}}</td>
                            <td ><a href="#" class="btn btn-primary">Güncelle</a></td>
                            <td ><a href="#" class="btn btn-danger">Sil</a></td>


                        </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <!--
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                            -->
                        </tr>
                        </tfoot>
                    </table>
                    <a href="#" class="btn btn-success">Yeni Kategori Ekle</a>
                </div>
                <!-- /.card-body -->
            </div>


        </section>
    </div>
@endsection

