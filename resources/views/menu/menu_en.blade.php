@extends('layoutsss.app')
@section('a1')
class="active"

@endsection('a1')
@section('content')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a class="navbar-brand" href="#">Menu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('/admin') }}">Admin<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link" href="{{ asset('/admin') }}">Menu</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{ route('admin.index') }}" class="btn btn-info mr-2">Uzbek table</a>
                <a href="/admin/menu_en_add" class="btn btn-info">Add</a>
            </form>
        </div>
    </nav>
    <div class="jadval mt-3">
        <table class="table table-striped table-dark jad" style="   width: 98%;
        margin: 0 auto;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Narx</th>
                    <th scope="col">Tarkib</th>
                    <th scope="col">Rasm</th>
                    <th scope="col">Settings</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($m_en as $menu_uz)
                <tr>
                    <td scope="col">{{($m_en->currentpage()-1)*$m_en->perpage()+$loop->index+1 }}</td>
                    <td scope="col">{{ $menu_uz->name }}</td>
                    <td scope="col">{{ $menu_uz->narx }}</td>
                    <td scope="col">{{ $menu_uz->tarkib }}</td>
                    <th scope="col"><img src="{{ asset('/storage/dars14/'.$menu_uz->img) }}" class="img-thumbnail" style="height: 80px; width:150px " alt=""></th>

                    <td scope="col">
                        <a href="/admin/menu_en_edit/{{$menu_uz->id }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="/admin/menu_en_dell/{{$menu_uz->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="div mt-2 ml-3">
            {{ $m_en->links() }}
        </div>



    </div>

@endsection('content')