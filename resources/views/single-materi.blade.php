@extends('master')
@section('konten')
ini materi
<h2> Judul Materi {{$materi->nama}} </h2>
<p>
	Deskripsi : {{$materi->desc}}
</p>
<p>
	Di Insert :{{$materi->created_at}}
</p>
<p>
	Di Update :{{$materi->updated_at}}
</p>
@stop