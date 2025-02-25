
@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size:1rem;">文房具変更画面</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/bunbougus') }}">戻る</a>
        </div>
    </div>
</div>

<div style="text-align:right;">
<div class="row">
        <div class="col-12 mb-2 mt-2">
            <div class="form-group" style="text-align:left">
                {{ $bunbougu->name }}
            </div>
        </div>
        <div class="col-12 mb-2 mt-2">
            <div class="form-group" style="text-align:left">
                {{ $bunbougu->kakaku }}
            </div>
        </div>
        <div class="col-12 mb-2 mt-2">
            <div class="form-group" style="text-align:left">
                @foreach ($bunruis as $bunrui)
                    @if($bunrui->id==$bunbougu->bunrui) {{ $bunrui->str }}@endif
                @endforeach
            </div>
        </div>
        <div class="col-12 mb-2 mt-2">
            <div class="form-group" style="text-align:left">
                {{ $bunbougu->shosai }}
            </div>
        </div>
    </div>
</form>
</div>
@endsection